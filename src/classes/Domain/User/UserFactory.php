<?php
namespace PHPBestPractices1OOP\Domain\User;

class UserFactory
{
    /**
     * create an instance of User class
     *
     * @return User
     */
    public static function createUser()
    {
        return new User();
    }
}
