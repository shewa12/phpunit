<?php
/**
 * This class will demonstrate Depencies 
 * 
 * @depends annotation is used to for dependent method
 * 
 */

namespace Test;

use PHPUnit\Framework\TestCase;

/**
 * @covers Dependencies
 */
class DependenciesTest extends TestCase
{

    public $first_name = 'Shaikh';

    public $last_name  = 'Ahmed';

    public function testFirstName(): string
    {
        $this->assertNotEmpty($this->first_name);
        return $this->first_name;
    }

    public function testLastName(): string
    {
        $this->assertNotEmpty($this->last_name);
        return $this->last_name;
    }

    /**
     * @depends testFirstName
     * 
     * @depends testLastName
     */
    public function testFullName(string $first_name, string $last_name): string
    {
        $this->assertNotEmpty($first_name);
        $this->assertNotEmpty($last_name);
        return $first_name.' '.$last_name;
    }
}