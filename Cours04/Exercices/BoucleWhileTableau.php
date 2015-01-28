<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - Boucles</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Index</th>
                <th>Index mod 2</th>
                <th>Ligne Pair ?</th>
            </tr>
            <?php
            $index = 0;
            while ($index < 20) {
                ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $index % 2 ?></td>
                    <td align="center">
                        <?php
                        if ($index % 2 == 0) {
                            echo("Oui");
                        } else {
                            echo("Non");
                        }
                        ?>
                    </td>
                </tr>
                        <?php
                        $index = $index + 1;
                    }
                    ?>
        </table>
    </body>
</html>

