<?php
session_start();
function dbConnect()
{
    $host = 'localhost';
    $db = 'elevation';
    $user = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";


    try {
        $conn = new PDO($dsn, $user, $password);

        if ($conn) {
            //  echo "Connected to the  $db database successfully!";
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } else{
            echo "Not Connected to the $db database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

$conn = dbConnect();
?>
