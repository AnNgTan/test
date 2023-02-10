<?php
include "./MySQLDb.php";
abstract class AbstractModel
{
    public $conn;
    public function __construct($user, $password, $dbName)
    {
        $connection = new MySQLDb;
        $this->conn = $connection->connect($user, $password, $dbName);
    }

    abstract function getById($id);
}
