<?php

class DataBadeManager{
    private $connexion;

    public function __construct(DataBase $connexion) {
        $this->connexion = $connexion;
    }

}
?>