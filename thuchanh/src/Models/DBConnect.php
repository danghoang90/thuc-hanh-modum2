<?php

namespace App\Models;
use PDO;
use PDOException;


class DBConnect
{
    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = "mysql:host=127.0.0.1;dbname=thuchanh;charset=utf8";
        $this->user = "root";
        $this->pass = "123456789@";
    }


    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
