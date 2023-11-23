<?php

namespace app\database\models;

use app\database\activerecord\Activerecord;

class User extends Activerecord
{
    protected $table = "users";
}
