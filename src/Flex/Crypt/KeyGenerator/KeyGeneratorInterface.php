<?php
namespace Flex\Crypt\KeyGenerator;

/**
 * Class KeyGeneratorInterface
 *
 * @package Flex\Crypt\KeyGenerator
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
interface KeyGeneratorInterface {

    /**
     * @param int $bytes
     * @return string
     */
    public function generate($bytes);
}