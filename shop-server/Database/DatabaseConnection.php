<?php
require_once 'connect_helper.php';

class DatabaseConnection
{
    private $pdo;
    private $dsn = "mysql:host=".HOST.";dbname=".DB_NAME.";charset=".CHARSET;
    private $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

    function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, USER, PASSWORD, $this->options);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}