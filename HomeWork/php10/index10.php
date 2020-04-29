<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP10 ND</title>
    </head>

    <body>


        <?php
            function skaiciuotiStaciakampioPlota (int $a, int $b):int
            {
                $result = $a * $b;
                return $result;
            }

            echo skaiciuotiStaciakampioPlota(5, 5);


        ?>

    </body>
</html>
