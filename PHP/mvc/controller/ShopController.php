<?php

class ShopController {
    public function display() {
        $productModel = new Product();

        $products = $productModel->getProducts();

        include '../' . VIEW_DIRECTORY . '/index.php';
    }

    public function displayCategory() {
        $idCategory = $_GET['id'];

        $productModel = new Product();

        $products = $productModel->getProductsByCategory($idCategory);

        include '../' . VIEW_DIRECTORY . '/category.php';
    }
}