<?php

function connect()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "gestiondecoureurs_bq";

    $mysqli = new mysqli($host, $user, $password, $database);


    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }

    return $mysqli;
}