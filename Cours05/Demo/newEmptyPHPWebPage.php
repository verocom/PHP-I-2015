<?php
$placeholderNom = 'Entrer votre nom';

if (isset($_POST["nom"])){
    $nom = $_POST["nom"];
    echo 'Mon nom est ' . $nom;
} else {
    $nom = "";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form method="post">
            <input type="text" name="nom" value="<?= $nom ?>" placeholder="<?= $placeholderNom ?>">
            <input type="submit" value="GO!">
        </form>
    </body>
</html>
