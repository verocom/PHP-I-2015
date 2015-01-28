<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercice While - Boucle slide 13</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Exercice WHILE - Boucle slide 13</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Item</th>
                            <th>Prix</th>
                        </tr>
                        <?php
                        $index = 0;
                        while (++$index <= 10) {
                            ?>
                            <tr>
                                <td><?= $index ?></td>
                                <td><?= $index * 50 ?>.00 $</td>
                            </tr>
                            <?php
                            
                        }
                        ?>
                    </table>
                    
                </div>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>