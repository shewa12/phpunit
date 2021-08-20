<?php
/**
 * Test absract class
 */
namespace Test;

use PHPUnit\Framework\TestCase;
use App\ExtendsAbstract;

class AbstractTest extends TestCase
{
    /**
     * @covers Abstract
     */

    function testAbstractMethod() 
    {
        $obj = new ExtendsAbstract;

        $this->assertSame('done', $obj->doSomething());
    }
}