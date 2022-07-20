<?php
    error_reporting(E_ALL);

    $db_driver="mysql";
    $host = "localhost";
    $database = "film library";
    $dsn = "$db_driver:host=$host;dbname=$database";
    $user = 'root';
    $pass = "";
    try
    {
      $dbh = new PDO($dsn, $user, $pass);
    }
    catch (PDOException $ex)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        exit();
    }
?>