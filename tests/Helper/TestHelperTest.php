<?php

namespace App\Tests\Helper;

use App\Helper\TestHelper;
use PHPUnit\Framework\TestCase;

class TestHelperTest extends TestCase
{
    public function testToUpperCase()
    {
        $helper = new TestHelper();
        $input = 'hello world';
        $expected = 'HELLO WORLD';

        $result = $helper->toUpperCase($input);

        $this->assertSame($expected, $result);
    }
}
