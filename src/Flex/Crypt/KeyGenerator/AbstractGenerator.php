<?php
namespace Flex\Crypt\KeyGenerator;

use Exception;

/**
 * Class AbstractGenerator
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
abstract class AbstractGenerator implements KeyGeneratorInterface
{

    /**
     * @param int $bytes
     * @return int
     * @throws Exception
     */
    public function validateBytes($bytes)
    {
        if ($bytes % 2 != 0) {
            throw new Exception("bytes must be divisible by 2, given {$bytes}");
        }

        return $bytes / 2;
    }
}
