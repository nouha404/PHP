<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border:1px solid black;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libelle</th>
                <th>Type</th>
                <th>Prix Achat</th>
                <th>Qte Stock</th>
                <th>Fourniseur</th>
                <th>Date de Production</th>
            </tr>
            
        </thead>
        <tbody>
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



        </tbody>
            
        
    </table>
</body>
</html>