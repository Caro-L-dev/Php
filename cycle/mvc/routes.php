<?php

$routes = [
    "/cycles" => "ShopController@display",

    "/categorie/{id}" => "ShopController@displayCategory",

    "/inscription" => "UserController@signUp",
    "/inscription/post" => "UserController@signUpPost",
        
    "/connexion" => "UserController@login",
    "/connexion/post" => "UserController@loginPost",
    "/deconnexion" => "UserController@logout",

    "/produit/ajouter" => "ProductController@addProduct",
    "/produit/ajouter/post" => "ProductController@addProductPost",
];