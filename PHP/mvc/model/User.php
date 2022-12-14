<?php

class User extends Model
{
    public function addUser(array $userData)
    {
        $bdd = $this->connect();

        $query = $bdd->prepare('INSERT INTO `users` 
            (`firstname`, `name`, `email`, `password`)
            VALUES (:firstname, :name, :email, :password)
        ');

        return $query->execute($userData);
    }
}
