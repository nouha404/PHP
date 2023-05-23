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
               
            </tr>
            
        </thead>
        <tbody>
            <?php foreach($arrayCategorie as $categ): ?>
                <tr>
                    <td><?= $categ->getId()?> </td>
                    <td><?= $categ->getLibelle()?> </td>
                </tr>
            <?php endforeach ?>



        </tbody>
            
        
    </table>
</body>
</html>