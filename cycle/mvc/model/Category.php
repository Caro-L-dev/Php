<?php

class category extends Model {
    public function getCategories() 
    {
        $bdd = $this->connect();

        $query = $bdd->query("SELECT * FROM categories");

        $listData = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $listData[] = $data;
        }

        return $listData;
    }
}