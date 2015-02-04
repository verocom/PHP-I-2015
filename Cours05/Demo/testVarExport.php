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
        $toto = 'asdf!';
        $tata = 12;
        $boolean = false;
        $valeurs = array(
            "nom" => "Toto",
            "prenom" => "Bob",
            "age" => 22,
            "autresInfo" => "Aucune"
        );
        $x = ["1", "2", "3"];
        var_export($tata);
        $resultat = var_export($toto, true);
        echo $resultat;
        
        var_export($valeurs);
        var_export($x);
        
        var_export($boolean);
        
        echo '<hr>';
        
        var_dump($tata);
        var_dump($toto);
        var_dump($valeurs);
        var_dump($x);
        var_dump($boolean);
        ?>
    </body>
</html>
