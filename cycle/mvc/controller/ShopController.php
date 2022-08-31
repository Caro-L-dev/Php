<?php

class ShopController {
    public function display() {
        $productModel = new Product();

        $products = $productModel->getProducts();

        include '../' . VIEW_DIRECTORY . '/index.php';
    }
}