<?php
namespace FlexTest\Crypt;

use Flex\Crypt\BlowfishCrypt;

/**
 * Class BlowfishCryptTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class BlowfishCryptTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Exception
     * @expectedExceptionMessage wrong key for encryption, use 64 chars, hex
     */
    public function testCryptWrongSecret()
    {
        new BlowfishCrypt('WrongSecret');
    }

    /**
     * @test
     */
    public function testCrypt()
    {
        $crypt = new BlowfishCrypt('e7b376817273f9403ce68bec818628b92094960fb1857475d92cce6fbd2cb565');
        $plain = md5(uniqid());
        $encrypted = $crypt->encrypt($plain);

        $this->assertEquals($plain, $crypt->decrypt($encrypted));
    }
}
