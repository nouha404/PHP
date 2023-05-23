<?php
require_once "../models/CategorieModel.php";
require_once "../models/ArticleModel.php";
require_once "../models/ArticleConfectionModel.php";
require_once "../models/ArticleVenteModel.php";

class StockController {

    public function listerCategory(){
        //recois une request
        //realise une fonctionnalité

        $arrayCategorie = [];
        for($i=1;$i<=5;$i++){
            $category = new CategorieModel();

            $category->setId($i)
                    ->setLibelle("cate".$i);
            
            $arrayCategorie[] = $category;
        }
        // produit une response => html
        require_once "../views/categories/categorie.html.php";
    }

    public function listerArticles(){
        $arrayArticle = [];

        for($i=1;$i<=10;$i++){
            // creer des articles en alternance
            if($i%2 == 0){
                $article = new ArticleConfectionModel();
                $article->setId($i)
                        ->setLibelle("article confection ".$i)
                        ->setPrixAchat($i+105)
                        ->setQteStock($i*50);
                $article->setFourniseur("Fournisseur".$i);
            } else {
                $article = new ArticleVenteModel();
                $article->setId($i)
                ->setLibelle("article Vente ".$i)
                ->setPrixAchat($i+90)
                ->setQteStock($i+45);
                $article->setDateProduction("1".$i."-06-2023");
                
            }
            
            $arrayArticle[] = $article;
        }
        
        require_once "../views/articles/article.html.php";
    }
}