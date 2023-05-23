<?php
require_once "../controllers/StockController.php";
// creation de l'objet de type controller

$controller = new StockController();

if($_GET['page'] == 'article'){
    $controller->listerArticles();
}else if($_GET['page'] == 'category'){
    $controller->listerCategory();
}