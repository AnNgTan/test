<?php
class MySQLDb
{
    public function connect($user, $pass, $dbName)
    {
        $dbUrl = "mysql:host=localhost;dbname=" . $dbName . ";charset=utf8";
        $conn = new PDO($dbUrl, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
