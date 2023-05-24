<?php

abstract class Model {
    protected \PDO $pdo;
    protected string $databaseTable = 'Categorie';

    public function __construct(){
        try {
            $this->pdo = new \PDO("mysql:host=localhost:3306,dbname=ism_php_2023",
            "root",
            "");

        } catch(\Throwable $th){
            die("Could not connect to");
        }

        
    }

    public function findAll():array {
        $sql = "SELECT * FROM $this->databaseTable";
        $stm = $this->pdo->query($sql);
        return $stm->fetchAll(\PDO::FETCH_CLASS,get_called_class());
    }

    public function findById(int $id):self {
        $sql = "SELECT * FROM $this->databaseTable WHERE id=:x";
        $stm = $this->pdo->prepare($sql); 
        $stm->execute(["x"=>$id]);
        $stm->setFetchMode(\PDO::FETCH_CLASS,get_called_class()); 
        return $stm->fetch();
    }

    public function remove(int $id):int {
        $sql = "DELETE FROM $this->databaseTable WHERE id=:x";
        $stm = $this->pdo->prepare($sql); 
        $stm->execute(["x"=>$id]);
        return $stm->rowCount(); // return number de ligne quand on veut surpprimer ajouter ou modifier
        
          
    }

    public abstract function insert();


}