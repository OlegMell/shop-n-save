<?php
require_once 'IRepository.php';
require_once 'models/Category.php';
require_once 'Database/DatabaseConnection.php';

class CategoryRepository implements IRepository
{
    private $connection;    //database connection handler

    public function __construct()
    {
        // create database connection instance
        $this->connection = new DatabaseConnection();
    }

    function getAll()
    {
        $data = [];
        $state = $this->connection->getConnection()->prepare('SELECT * FROM categories');
        $state->execute();
        for ($i = 0; $i < $state->rowCount(); $i++){
            $row = $state->fetch();
            array_push($data, new Category($row['id'], $row['name']));
        }
        return $data;
    }

    function get($id)
    {
        // TODO: Implement get() method.
    }

    function save($object)
    {
        // TODO: Implement save() method.
    }

    function update($object)
    {
        // TODO: Implement update() method.
    }

    function remove($id)
    {
        // TODO: Implement remove() method.
    }


}