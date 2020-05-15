<?php

   header("refresh:3; url=shop.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page under construction</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="../assets/css/global.css" rel="stylesheet">

    <style>
        .under-construction__message{
            margin-top: 2em;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .spinner-animation {
            border: 10px solid rgb(115, 115, 115);
            border-top: 10px solid rgb(200, 200, 200);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: rotation 2s linear infinite;
        }

            @keyframes rotation {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    </head>


    <body>
        <div class="under-construction__message">
            <p>:( Sorry this function is not working at the moment...</p>
            <p>You are being redirected</p>
            <div class="spinner-animation"></div>
        </div>

    </body>
</html>
