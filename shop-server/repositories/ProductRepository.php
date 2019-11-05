<?php
require_once 'IRepository.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'Database/DatabaseConnection.php';

class ProductRepository implements IRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getAll()
    {
        $data = [];
        $state = $this->connection->getConnection()->prepare('SELECT product.id as product_id, product.name as product_name, product.model, product.description, product.price, product.image, category.id as category_id, category.name as category_name, product.quantity FROM products as product, categories as category WHERE product.category_id = category.id');
        $state->execute();
        for ($i = 0; $i < $state->rowCount(); $i++){
            $row = $state->fetch();
            array_push($data, new Product($row['product_id'], $row['product_name'], $row['model'], $row['description'], $row['price'], $row['image'],new Category($row['category_id'], $row['category_name']), $row['quantity']));
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