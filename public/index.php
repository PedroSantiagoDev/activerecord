<?php

use app\database\activerecord\FindAll;
use app\database\models\User;

require "../vendor/autoload.php";

$user = new User;


echo $user->execute(new FindAll(where: ["id" => 2]));
