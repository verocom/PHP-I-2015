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
        
        $y = 2;
        echo '<p>'.(++$y * 3).' (9)</p>'; // $y += 1;
        echo '<p>'.($y++ * 3).' (12)</p>'; // $y = $y + 1;
        echo '<p>'. $y .' (4)</p>';
        
        
        $z = 0;
        $z++;
        ++$z;
        $z += 1;
        $z = $z + 1;
        echo '<p>' . $z . '</p>';
        
        
        
        
        ?>
    </body>
</html>
