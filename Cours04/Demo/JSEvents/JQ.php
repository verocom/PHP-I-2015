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
        <h1>Contact!</h1>
        <a href="http://www.google.com" class="aClickMe">Click me!</a>
        <a href="http://www.yahoo.com" class="aClickMe">Click me (nommé)!</a>
        
        <a href="http://www.bing.com/" id="aBing">e-man test!</a>
        
        <script src="jquery-2.1.3.js" type="text/javascript"></script>
        <script>
            jQuery("a").addClass("toto");
            $("a").addClass("toto");
            
            $(".aClickMe").click(function(e){
                console.info(this);
                var $this = $(this);
                console.info($this);
                var href = $this.attr("href");
                console.info(href);
                e.preventDefault();
            });
        </script>
    </body>
</html>
