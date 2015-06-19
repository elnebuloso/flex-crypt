<?php
namespace Flex\Crypt\KeyGenerator;

/**
 * Class OpenSSLGenerator
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class OpenSSLGenerator extends AbstractGenerator implements KeyGeneratorInterface
{

    /**
     * @param int $bytes
     * @return string
     */
    public function generate($bytes)
    {
        $bytes = parent::validateBytes($bytes);

        $bin = openssl_random_pseudo_bytes($bytes, $cstrong);
        $hex = bin2hex($bin);

        return $hex;
    }
}
