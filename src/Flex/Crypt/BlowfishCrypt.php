<?php
namespace Flex\Crypt;

/**
 * Class BlowfishCrypt
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class BlowfishCrypt extends AbstractCrypt implements CryptInteface {

    /**
     * @var string
     */
    protected $cypher = MCRYPT_BLOWFISH;

    /**
     * @var string
     */
    protected $mode = MCRYPT_MODE_CBC;

    /**
     * @var int
     */
    protected $keyLength = 64;
}