<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP11 ND</title>
    </head>

    <body>


        <form action="<?php $_PHP_SELF_ ?>" method="POST">
            <fieldset>
                <legend>Ploto skaičiavimas:</legend>
                <input type=text; name="pirmas_skaicius" placeholder="Pirmas skaičius">
                <input type=text; name="antras_skaicius" placeholder="Antras skaičius">
                <button type="submit">Skaičiuoti</button>
            </fieldset>
        </form>


        <?php
            function skaiciuotiStaciakampioPlota (int $a, int $b):int
            {
                $result = $a * $b;
                return $result;
            }

            if (isset($_POST['pirmas_skaicius']) && isset($_POST['antras_skaicius']))
            {
                echo '<br>Atsakymas: ' . skaiciuotiStaciakampioPlota($_POST['pirmas_skaicius'], $_POST['antras_skaicius']);
            }

        ?>

    </body>
</html>
