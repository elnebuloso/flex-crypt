<?php
namespace Flex\Crypt;

/**
 * Class Rijandel256
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Rijandel256Crypt extends AbstractCrypt implements CryptInteface
{
    /**
     * @var string
     */
    protected $cypher = MCRYPT_RIJNDAEL_256;

    /**
     * @var string
     */
    protected $mode = MCRYPT_MODE_CBC;

    /**
     * @var int
     */
    protected $keyLength = 64;
}
