<?php

include 'config.php';
try{
if($_POST['user'] != "" or isset($_POST['user'])){
    if(strlen($_POST['input']) > 0){
        $name = $_POST['user'];
        $text = $_POST['input'];
        try{
        $SQL = $db->prepare("INSERT INTO chats (user,text) VALUES(:name,:text)");
        
        $SQL->bindParam(':name', $name);
        $SQL->bindParam(':text', $text);
        
        $SQL->execute();
        $db = null;
        header('Location: index.php');
        }
        catch(PDOException $e){
            $error = $e->getMessage();
            $url = 'index.php?err='.url_encode(serialize($error));
            header("Location: $url");
        }
    }
    
}
}
catch(PDOException $e){
    $error = $e->getMessage();
    $url = 'index.php?err='.url_encode(serialize($error));
    header("Location: $url");
}



?>