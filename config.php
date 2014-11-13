<?php
try{
    $error =[];
    $dbname ="c9";
    $host = "127.0.0.1";
    $db = new PDO("mysql:dbname=$dbname;host=$host","tourn171","");
}
catch(PDOException $e){
    $error[] = $e->getMessage();
}




?>