<?php
namespace PHPBestPractices1OOP\Domain\FoodsTransactions;

class FoodsTransactions
{
    /**
     * @var array
     */
    private $foods;

    /**
     * UsersTransactions constructor.
     * @param $foods
     */
    public function __construct($foods)
    {
        $this->foods = $foods;
    }

    /**
     * get food row for food id
     *
     * @param int $foodId
     * @return array
     */
    public function getFoodById($foodId)
    {
        // vars
        $return["success"] = false;

        // search food by id
        $foodRowIndex = array_search($foodId, array_column($this->foods, "id"));

        // success in getting food from array
        if ($foodRowIndex !== false) {
            $return["success"] = true;
            $return["foodRow"] = $this->foods[$foodRowIndex];
        }

        return $return;
    }
}
