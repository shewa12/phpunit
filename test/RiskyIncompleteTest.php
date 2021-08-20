<?php
/**
 * This test is for checking risky, incomplete or useless test
 */
namespace Test;

use PHPUnit\Framework\TestCase;

class RiskyIncompleteTest extends TestCase 
{
    /**
     * A test that doest not make any assertion is called risky test
     */
    function testRisky() 
    {
        return true;
    }

    /**
     * If a test not use covers annotation this test will be marked as risky
     * 
     * Though we can change settings from XML config file
     * 
     * beStrictAboutCoversAnnotation="true"
     */
    function testSum()
    {
        $expected   = 4;
        $result     = 2+2;

        $this->assertSame($expected, $result);
    }
}