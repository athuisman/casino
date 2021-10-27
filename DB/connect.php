<?php

session_start();

    /* Database gegevens */ 
    $servername = "localhost";
    $sqlusername = "root";
    $dbpass = "root"; // Dit DB wachtwoord staat als root iun verband met mamp.
    $databasename = "local";

    /* DB connenctie aanmaken */ 
    $conn = new mysqli($servername, $sqlusername, $dbpass, $databasename);

    /* Checken connectie */
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>