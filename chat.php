<?php
include 'config.php';

$SQL = "SELECT * FROM (SELECT * FROM chats ORDER BY id DESC LIMIT 50) AS tbl ORDER BY tbl.id ASC";

foreach($db->query($SQL) as $row){
    echo "<span class='user'>".$row['user']."</span> : ".$row['text']." <br />";
    
}
    $db = null;




?>