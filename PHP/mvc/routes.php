<?php

$routes = [
    "/boutiques" => "ShopController@display",
    "/categorie/{id}" => "ShopController@displayCategory",
    "/inscription" => "UserController@signUp",
    "/inscription/post" => "UserController@signUpPost",
];