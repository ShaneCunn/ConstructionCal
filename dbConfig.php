<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 17/10/2018
 * Time: 18:30
 */

function db()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = 'constructioncal';
    global $conn;
    // $link = mysqli_connect(“localhost”, “root”, “”, “todolist”) or     die(“couldn’t connect to database”);


    try {
        $conn = new PDO("mysql:host=$servername;dbname=" . $database, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
