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
        $arr = ["valeur 1", "valeur 2", "valeur 3", "valeur 4"];
        echo '<pre>';
        print_r($arr);
        
        unset($arr[2]);
        print_r($arr);
        
        echo '</pre>';
        
        if (isset($arr[2])){
            echo '<p>'.$arr[2].'</p>';
        } else {
            echo '<p>$arr pos. 2 invalid!</p>';
        }
        
        
        
        unset($arr);
        print_r($arr);
        
        
        phpinfo();
        ?>
    </body>
</html>
