<?php
namespace elnebuloso\Flex\Crypt;

use Exception;

/**
 * Class AbstractCrypt
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
abstract class AbstractCrypt implements CryptInteface
{
    /**
     * @var string
     */
    protected $cypher;

    /**
     * @var string
     */
    protected $mode;

    /**
     * @var int
     */
    protected $keyLength;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $size;

    /**
     * @param string $key
     * @throws Exception
     */
    public function __construct($key)
    {
        if (!preg_match("/^[a-f0-9]{" . $this->keyLength . "}$/", $key)) {
            throw new Exception('wrong key for encryption, use 64 chars, hex');
        }

        $this->key = pack('H*', $key);
        $this->size = mcrypt_get_iv_size($this->cypher, $this->mode);
    }

    /**
     * @param string $plaintext
     * @return string
     */
    public function encrypt($plaintext)
    {
        $iv = mcrypt_create_iv($this->size, MCRYPT_RAND);
        $encryptedText = mcrypt_encrypt($this->cypher, $this->key, $plaintext, $this->mode, $iv);

        return base64_encode($iv . $encryptedText);
    }

    /**
     * @param string $encryptedText
     * @return string
     */
    public function decrypt($encryptedText)
    {
        $encryptedTextDecoded = base64_decode($encryptedText);
        $ivDecoded = substr($encryptedTextDecoded, 0, $this->size);
        $encryptedTextDecoded = substr($encryptedTextDecoded, $this->size);

        return trim(mcrypt_decrypt($this->cypher, $this->key, $encryptedTextDecoded, $this->mode, $ivDecoded));
    }
}
