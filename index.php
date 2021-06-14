<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 5 </title>
</head>
<body>
    <h1># Exercice 5</h1>
<p>Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.
</p>
<?php
for($n=200; $n>=0; $n-=12){
    ?>
    <p><?= 'Ceci est le nombre : '.$n ?></p>
    <?php
}
?>
</body>
</html>