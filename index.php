<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <div class="chatbody">
            <?php
            if(isset($_GET['err'])){
                $err = url_decode(unserialize($_GET['err']));
                $err = var_dump($err);
                echo "$err";
            }
            if(empty($error)){
                include 'chat.php'; 

            }
            else{
                echo"<ul>";
                foreach($error as $e){
                    echo "<li>$e</li>";
                }
                echo"</ul>";
                include 'chat.php';
            }
            ?>
        </div>
        <form class="formbox" method="post" action="submit.php">
            <input type="text" name="user" placeholder="name"/>
            <textarea name="input"></textarea>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>