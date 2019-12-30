<?php
 include './includes/classautoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title> 
    </head>
    <body>
        <?php 
            $userObj = new UsersView();
            $userObj->showUser("Sunny");

            $userObj2 = new UsersContr();
            $userObj2->createUser("Narendra", "Modi", "1955-09-17");
        ?>
    </body>
</html>