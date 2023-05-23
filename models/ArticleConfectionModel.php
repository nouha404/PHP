<?php

class ArticleConfectionModel extends ArticleModel {
    private string $fourniseur;

    public function __construct(){
        // a chaque fois qu'on a un constructeur de l'enfant , il doit faire appel a la classe parent
        parent::__construct();
        $this->type = "ArticleConfection";
    }

    /**
     * Get the value of fourniseur
     */ 
    public function getFourniseur()
    {
        return $this->fourniseur;
    }

    /**
     * Set the value of fourniseur
     *
     * @return  self
     */ 
    public function setFourniseur($fourniseur)
    {
        $this->fourniseur = $fourniseur;

        return $this;
    }

    public function __toString(){
        return parent::__toString()." Fournisseur".$this->fourniseur;
    }
}       