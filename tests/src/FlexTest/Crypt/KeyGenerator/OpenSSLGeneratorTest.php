<?php
namespace FlexTest\Crypt\KeyGenerator;

use Flex\Crypt\KeyGenerator\OpenSSLGenerator;

/**
 * Class OpenSSLGeneratorTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class OpenSSLGeneratorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function generate() {
        $key = new OpenSSLGenerator();
        $key = $key->generate(1024);

        $this->assertEquals(1024, strlen($key));
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function generateWithException() {
        $key = new OpenSSLGenerator();
        $key = $key->generate(53);
    }
}