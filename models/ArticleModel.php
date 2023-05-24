<?php

abstract class ArticleModel extends Model{
    //quand on mets abstract on ne peut pas l'hydrater ; la veut creer soit des artcile de vente ou des article de confection du coup donc dans ce cas la classe article est une classe abstract (qui ne produit pas d'objet)
    protected int $id;
    protected string $libelle;
    protected float $prixAchat;
    protected int $qteStock;
    protected string $type;
    protected int $categorie_id;

    public function __construct(){
        parent::__construct();
        $this->databaseTable="Article";
    }

    // on va y revenir
    public function insert():int {
        $sql = "INSERT INTO $this->databaseTable  VALUES (NULL, :libelle, :prixAchat, :qteStock, :type`, :dateProduction:, :fournisseur, :categorie_id) ";
        $stm = $this->pdo->prepare($sql); 
        $stm->execute(["libelle"=>$this->libelle,
                    "prixAchat"=>$this->prixAchat,
                    "qteStock"=>$this->qteStock,
                    "type"=>$this->type,
                    "dateProduction"=>NULL,
                    "fournisseur"=>NULL,
                    "categorie_id"=>$this->categorie_id //prochaine fois on gere ca 
                    ]);
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

    /**
     * Get the value of prixAchat
     */ 
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set the value of prixAchat
     *
     * @return  self
     */ 
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get the value of qteStock
     */ 
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * Set the value of qteStock
     *
     * @return  self
     */ 
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    public function __toString(){
        return "ID ".$this->id." Libelle ".$this->libelle." Prix Achat ".$this->prixAchat." Quanttite Stock".$this->qteStock;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */ 
    public function getCategorie_id()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     *
     * @return  self
     */ 
    public function setCategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }
}