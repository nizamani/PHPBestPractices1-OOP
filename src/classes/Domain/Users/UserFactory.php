<?php
namespace PHPBestPractices1OOP\Domain\Users;

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