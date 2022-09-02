<?php

class ProductController extends Controller {
    public function addProduct() 
    {
        $categories = $this->getCategories('categories');

        include '../' . VIEW_DIRECTORY . '/add_product.php';
    }

    public function addProductPost() 
    {
        $categories = $this->getCategories('categories');

        $targetDir = 'images/';
        $targetFile = basename($_FILES['image']['name']);
        $targetPath = $targetDir . '/' . $targetFile;
        $uploadOk = true;

        // Ckeck file extension.
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg' && $imageFileType !== 'webp') {
            $uploadOk = false;
        }

        if(file_exists($targetPath)) {
            $uploadOk = false;
        }

        // Check size of uploaded file.
        if($_FILES['image']['size'] > 500000) {
            $uploadOk = false;
        }
    }
}