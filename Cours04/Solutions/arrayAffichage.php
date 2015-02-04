<?php
$valeurs = array(
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "age" => $_POST["age"],
    "autresInfo" => $_POST["autresInfo"]
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array - Affichage</title>

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
                    <h1>Array - Affichage</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form action="arrayAffichage.php" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <span class="form-control-static"><?= $valeurs["nom"] ?></span>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <span class="form-control-static"><?= $valeurs["prenom"] ?></span>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <span class="form-control-static"><?= $valeurs["age"] ?></span>
                        </div>
                        <div class="form-group">
                            <label for="autresInfo">Autres informations</label>
                            <span class="form-control-static" style="white-space: pre;"><?= $valeurs["autresInfo"] ?></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="arraySource.php">Retourner au formulaire</a>
                </div>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>