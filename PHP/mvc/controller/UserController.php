<?php

class UserController extends MainController {
    public function signUp() 
    {
        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }

    public function signUpPost() {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $userModel = new User();

        $result = $userModel->addUser($_POST);
        $result = false;

        $categories = $this -> getCategories();

        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }
}