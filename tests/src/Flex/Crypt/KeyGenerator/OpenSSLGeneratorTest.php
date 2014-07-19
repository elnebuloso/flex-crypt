<?php
namespace FlexTest\Crypt\KeyGenerator;

use Flex\Crypt\KeyGenerator\OpenSSLGenerator;

/**
 * Class OpenSSLGeneratorTest
 *
 * @package FlexTest\Crypt\KeyGenerator
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class OpenSSLGeneratorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_generate() {
        $key = new OpenSSLGenerator();
        $key = $key->generate(1024);

        $this->assertEquals(1024, strlen($key));
    }

    /**
     * @return void
     * @expectedException \Exception
     */
    public function test_generateWithException() {
        $key = new OpenSSLGenerator();
        $key = $key->generate(53);
    }
}