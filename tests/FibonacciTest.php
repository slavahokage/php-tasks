<?php

require_once ('../vendor/autoload.php');

use function PHPTasks\FibonacciTask\fibRecursion;

use function PHPTasks\FibonacciTask\fibNotRecursion;

class FibonacciTest extends \PHPUnit\Framework\TestCase
{
    public function testOnTwoRecursion()
    {
        $this->assertEquals(2, fibRecursion(3));
    }

    public function testOnFiveRecursion()
    {
        $this->assertEquals(5, fibRecursion(5));
    }

    public function testOnTenRecursion()
    {
        $this->assertEquals(55, fibRecursion(10));
    }


    public function testOnTwoNotRecursion()
    {
        $this->assertEquals(2, fibNotRecursion(3));
    }

    public function testOnFiveNotRecursion()
    {
        $this->assertEquals(5, fibNotRecursion(5));
    }

    public function testOnTenNotRecursion()
    {
        $this->assertEquals(55, fibNotRecursion(10));
    }
}