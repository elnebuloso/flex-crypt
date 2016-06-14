<?php
namespace elnebuloso\FlexTest\Crypt;

use elnebuloso\Flex\Crypt\Rijandel256Crypt;

/**
 * Class Rijandel256CryptTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Rijandel256CryptTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Exception
     * @expectedExceptionMessage wrong key for encryption, use 64 chars, hex
     */
    public function testCryptWrongSecret()
    {
        new Rijandel256Crypt('WrongSecret');
    }

    /**
     * @test
     */
    public function testCrypt()
    {
        $crypt = new Rijandel256Crypt('e7b376817273f9403ce68bec818628b92094960fb1857475d92cce6fbd2cb565');
        $plain = md5(uniqid());
        $encrypted = $crypt->encrypt($plain);

        $this->assertEquals($plain, $crypt->decrypt($encrypted));
    }
}
