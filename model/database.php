<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=rjc37';
    $username = 'rjc37';
    $password = 'cosette2';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
