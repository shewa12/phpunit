<?php
/**
 * This class will demonstrate Data provider annotation testing 
 * 
 * Data provider in phpunit is for providing args
 * 
 * A method may require some args in this case @dataProvider annotation is for resque
 */

namespace Test;

use PHPUnit\Framework\TestCase;
/**
 * @covers DataProvider
 */
class DataProviderTest extends TestCase
{
    /**
     * @dataProvider emailsProvider
     */
    function testValidEmails($emails)
    {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', $emails);
    }

    function emailsProvider()
    {
        return [
            ['shewa@gmail.com'],
            ['sunipa@gmail.com'],
            ['abc@hotmail.com']
        ];
    }
}