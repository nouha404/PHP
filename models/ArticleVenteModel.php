<?php

class ArticleVenteModel extends ArticleModel {
    private string $dateProduction;

    /**
     * Get the value of dateProduction
     */ 

     public function __construct(){
        parent::__construct();
        $this->type="ArticleVente";
     }
    public function getDateProduction()
    {
        return $this->dateProduction;
    }

    /**
     * Set the value of dateProduction
     *
     * @return  self
     */ 
    public function setDateProduction($dateProduction)
    {
        $this->dateProduction = $dateProduction;

        return $this;
    }

    public function __toString(){
        return parent::__toString()." Date Production".$this->dateProduction;
    }
}