<?php
namespace Flex\Crypt;

/**
 * Class CryptInteface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
interface CryptInteface
{
    /**
     * @param string $plaintext
     */
    public function encrypt($plaintext);

    /**
     * @param string $cryptText
     */
    public function decrypt($cryptText);
}
