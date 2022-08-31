<?php

class Product extends Model 
{
    public function getProducts(): array {
        $bdd = $this-> connect();

        $query = $bdd->query("SELECT * FROM products");

        $listData = [];

        while($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $listData[] = $data;
        }
        //var_dump($listData);

      //  $listData = $query ->fetchAll(PDO::FETCH_ASSOC);
       // var_dump($listData);

        return $listData;
    }

    public function getProductsByCategory($id)
    {
        $bdd = $this->connect();

        $query = $bdd->prepare('SELECT * FROM products WHERE category_id = ?');

        $query->execute([$id]);

        $listData = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $listData[] = $data;
        }

        return $listData;
    }
}