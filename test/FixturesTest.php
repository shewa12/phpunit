<?php
/**
 * Fixture set some initial states there are methods from phpunit that help to do
 * 
 * protected setUp(): void method will be called before each test
 * 
 * protected tearDown(): void method will be called after each test
 * 
 * public static setUpBeforeClass(): void will be called before any test for one time
 * 
 * pubic static setUpAfterClass(): void will be called after all test for one time
 */
namespace Test;

use PHPUnit\Framework\TestCase;

/**
 * @covers FixturesTest
 */
class FixturesTest extends TestCase
{
    private $number = null;

    protected function setUp(): void
    {
        $this->number = 2;
    }

    function testEven()
    {
        $this->assertEquals(0, $this->number % 2);
    }

    function testOdd()
    {
        $this->number++;
        $this->assertNotEquals(0, $this->number % 2);
    }

    protected function tearDown(): void
    {
        $this->number = null;
    }
}