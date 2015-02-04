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
        $valeurs = array(
            "nom" => "Toto",
            "prenom" => "Bob",
            "age" => 22,
            "autresInfo" => "Aucune"
        );
        foreach($valeurs as $k => $val){
            echo '<p><b>' . $k . ' : </b>' . $val . '</p>';
        }
        
        echo '<pre>'; 
        print_r($valeurs); 
        echo '</pre>';
        ?>
    </body>
</html>
