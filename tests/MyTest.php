<?php
/**
 * Created by PhpStorm.
 * User: Practice
 * Date: 9/4/2015
 * Time: 4:29 PM
 */

class MyTest extends PHPUnit_Framework_TestCase {
    public function testCalculate()
    {
        $this->assertEquals(2, 1+1);
    }
    public function testCalculate2()
    {
        $this->assertSame(2, "2");
    }
}
 