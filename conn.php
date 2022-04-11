<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'latask';

    $conn = mysqli_connect($host, $user, $passwd, $db);
    if (!$conn) {
        echo"</br>";
        echo 'No connection established';
    }
?>