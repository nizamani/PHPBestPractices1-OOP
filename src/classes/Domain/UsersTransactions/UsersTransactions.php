<?php
namespace PHPBestPractices1OOP\Domain\UsersTransactions;

class UsersTransactions
{
    /**
     * @var array
     */
    private $users;

    /**
     * UsersTransactions constructor.
     * @param array $users
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * get a user's row
     *
     * @param int $userId
     * @return array
     */
    public function getUserById($userId)
    {
        // vars
        $return["success"] = false;

        // search user by id
        $userRowNumber = array_search($userId, array_column($this->users, "id"));

        // success in getting user from array
        if ($userRowNumber !== false) {
            $return["success"] = true;
            $return["userRow"] = $this->users[$userRowNumber];
        }

        return $return;
    }
}
