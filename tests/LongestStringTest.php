<?php

require '../vendor/autoload.php';

use function PHPTasks\LongestStringTask\longestLength;

class LongestStringTest extends \PHPUnit\Framework\TestCase
{
    public function testOnSimpleString()
    {
        $this->assertEquals(3, longestLength('qweqw'));
    }

    public function testOnEmptyString()
    {
        $this->assertEquals(0, longestLength(''));
    }

    public function testOnStringWithoutRepeating()
    {
        $this->assertEquals(10, longestLength('qwertyuiop'));
    }

    public function testOnLongString()
    {
        $this->assertEquals(26, longestLength('qwertyuiopasdfghjklzxcvbnmqwerty'));
    }

    public function testOnOneLetterString()
    {
        $this->assertEquals(1, longestLength('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'));
    }

    public function testOnStringWithDifferentLetterCases()
    {
        $this->assertEquals(4, longestLength('aAaBbbbbb'));
    }
}