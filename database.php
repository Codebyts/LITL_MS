<?php
    $host = 'localhost';
    $user = 'root';
    $paswoord = '';
    $database = 'litl_ms_db';

    $conn = mysqli_connect($host, $user, $paswoord, $database);

    if (mysqli_connect_error()) {
        echo 'Failed to connect to the database';
    }


?>