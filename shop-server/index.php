<?php
    require_once 'repositories/ProductRepository.php';
    require_once 'repositories/CategoryRepository.php';
    if(isset($_GET['prod'])) {
        $product = new ProductRepository();
        $data = $product->getAll();
        echo json_encode($data);
    }

    if (isset($_GET['categories'])){
        $categories = new CategoryRepository();
        $data = $categories->getAll();
        echo json_encode($data);
    }