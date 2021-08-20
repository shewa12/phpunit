<?php
/**
 * This test is for testing private or protected class properties
 * 
 * as private or protected properties can not be access able from out side of class or child class
 * 
 * that is why I will use here closure / lambda function
 */
namespace Test;

use PHPUnit\Framework\TestCase;
use App\PrivateProperty;

class PrivatePropertyTest extends TestCase
{
    /**
     * @covers PrivateProperty
     */
    function testPrivateProps()
    {
        $expected = 'Shaikh';
        $obj = new PrivateProperty('shaikh', 'ahmed');
        $phpUnit = $this;
        
        $closure = function() use($expected, $phpUnit) {
            $result = $this->first_name;
            $phpUnit->assertSame($expected, $result);
        };
        //2 ways for call or bind closure
        //as bindTo will bind as func that why I need to call it ()
        //call is called a data member
        //$closure->bindTo($obj, get_class($obj))()
        $closure->call($obj);
    }
}