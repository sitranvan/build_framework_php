<?php

namespace App\Model;

use App\Core\Model;

class Users extends Model
{
    private $table = 'users';

    public function getUser($condition = '')
    {
        return $this->get($this->table, "WHERE $condition");
    }
    public function getAllUser()
    {
        return $this->getAll($this->table);
    }
}
