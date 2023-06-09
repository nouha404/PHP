<?php

class CategorieModel extends Model{
    private int $id;
    private string $libelle;

    public function __construct(){
        parent::__construct();
        $this->databaseTable="Categorie";
    }

    public function insert():int {
        $sql = "INSERT INTO $this->databaseTable `(`id`,`libelle`) VALUES (id=NULL, :libelle) ";
        $stm = $this->pdo->prepare($sql); 
        $stm->execute(["libelle"=>$this->libelle]);
        return $stm->rowCount();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function __toString(){
        return "ID ".$this->id." Libelle".$this->libelle;
    }
}