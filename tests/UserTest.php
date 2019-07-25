<?php

require_once('../vendor/autoload.php');

use App\UserTask\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testUser()
    {
        $user = new User();
        $user->setFirstName('John')
            ->setLastName('Doe')
            ->setEmail('john.doe@example.com');
        $this->assertEquals('John', $user->getFirstName());
        $this->assertEquals('Doe', $user->getLastName());
        $this->assertEquals('john.doe@example.com', $user->getEmail());
    }
}