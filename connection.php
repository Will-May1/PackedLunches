<?php
$servername="localhost";
$username="root";
$password="AlmostCondition14$";
$dbname="lunches";
try{   
    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Connected successfully<br>");
}
catch(PDOExeption $e){
    echo("Connection failed: " . $e->getMessage());
}
?>