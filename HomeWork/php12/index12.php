<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP12 ND</title>
    </head>

    <body>


        <?php

            $style = '';
            function welcomeMessageToUser ($vardas, $pavarde)
            {
                $result = "Sveiki, $vardas $pavarde!";
                return $result;
            }

            if(isset($_COOKIE['fname']))
            {
                $style = "style='display:none;'";
                echo "Sveiki, {$_COOKIE['fname']}, <br>Gero laiko naršant!";

            } elseif(isset($_POST['vartotojo_vardas']) && isset($_POST['vartotojo_pavarde']))
                {
                    if(preg_match("/[^A-Za-z'-]/", $_POST['vartotojo_vardas']))
                    //check how to add  "&& preg_match("/[^A-Za-z'-]/", $_POST['vartotojo_pavarde'])"
                    {
                        echo 'Įvedėte negalimus simbolius.';
                        exit();
                    }

                    setcookie('fname', $_POST['vartotojo_vardas'], time()+3600, '/', '', 0);
                    setcookie('lname', $_POST['vartotojo_pavarde'], time()+3600, '/', '', 0);
                    echo welcomeMessageToUser($_POST['vartotojo_vardas'], $_POST['vartotojo_pavarde']);
                    $style = "style='display:none;'";
                }

        ?>

        <div <?php echo $style;?>>
            <form action="<?php $_PHP_SELF_ ?>" method="POST">
                <fieldset>
                    <legend>Vartotojo duomenys:</legend>
                    <input type=text; name="vartotojo_vardas" placeholder="Jūsų vardas" required>
                    <input type=text; name="vartotojo_pavarde" placeholder="Jūsų pavardė" required>
                    <button type="submit">Toliau</button>
                </fieldset>
            </form>
        </div>

    </body>
</html>
