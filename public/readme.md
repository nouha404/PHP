### Test
```php

// correction du proff

$arrayCategorie=[]

foreach($i=1; $i<5;i++) {
    $category = new Categorie();
    $category->setId($key)
             ->setLibelle("$value".$i);

    arrayCategorie[] = $category;
}

```

## A chaque fois qu'on a un constructeur de l'enfant , il doit faire appel a la classe parent
`code :
    public function __construct(){
        // a chaque fois qu'on a un constructeur de l'enfant , il doit faire appel a la classe parent
        parent::__construct();
        $this->type = "ArticleConfection";
    }
`
#### quand on mets abstract on ne peut pas l'hydrater ; la veut creer soit des artcile de vente ou des article de confection du coup donc dans ce cas la classe article est une classe abstract (qui ne produit pas d'objet)

###### O.ternaire :  <td><?= $article->getType()=="ArticleConfection"?$article->getFourniseur():"-"?> </td>

```php
            <?php foreach($arrayArticle as $article): ?>
                <tr>
                    <td><?= $article->getId()?> </td>
                    <td><?= $article->getLibelle()?> </td>
                    <td><?= $article->getType()?> </td>
                    <td><?= $article->getPrixAchat()?> </td>
                    <td><?= $article->getQteStock()?> </td>
                    <td><?= $article->getType()=="ArticleConfection"?$article->getFourniseur():"-"?> </td>
                    <td><?= $article->getType()=="ArticleVente"?$article->getDateProduction():"-"?> </td>
                </tr>
            <?php endforeach ?>
```

### Role de Index
Index doit seulement savoir qui il doit appeler mais pas de faire le traitement ( les services ) de lister etc
