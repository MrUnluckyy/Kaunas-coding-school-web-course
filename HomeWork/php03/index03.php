<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HW1 </title>
    </head>

    <body>
        <?php
            $x = 10;
            $y = 7;

        ?>

        <div>
            <?php echo "$x + $y = " . $z=$x+$y ?>
        </div>

        <script>
            console.log(<?php echo $z ?>);
        </script>

        <div>
            <?php echo "$x - $y = " . $z=$x-$y ?>
        </div>

        <script>
            console.log(<?php echo $z ?>);
        </script>

        <div>
            <?php echo "$x * $y = " . $z=$x*$y ?>
        </div>

        <script>
            console.log(<?php echo $z ?>);
        </script>

        <div>
            <?php echo "$x / $y = " . round($z=$x/$y,2) ?>
        </div>

        <script>
            console.log(<?php echo $z ?>);
        </script>

        <div>
            <?php echo "$x % $y = " . $z=$x%$y ?>
        </div>

        <script>
            console.log(<?php echo $z ?>);
        </script>


    </body>
</html>



