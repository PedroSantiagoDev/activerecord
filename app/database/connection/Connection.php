<?php

namespace app\database\connection;


use PDO;
use PDOException;
use function app\helpers\formatException;

class Connection
{
    private static $pdo = null;

    public static function connect()
    {
        try {
            if (!static::$pdo) {
                static::$pdo = new PDO("mysql:host=localhost;dbname=info", "root", "root", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }

            return static::$pdo;
        } catch (PDOException $e) {
            formatException($e);
        }
    }
}
