<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'armandos_contact_form');

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    if ($mysqli->connect_error) {
        echo " :( </br> Sorry, we have an error <br>
        Error: {$mysqli->connect_error}";
    }

    mysqli_query($mysqli, "INSERT INTO contacts (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')" );
