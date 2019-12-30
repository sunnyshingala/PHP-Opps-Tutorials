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
            $testObj = new Test();
            $testObj->getUsersStmt("Sunny", "Shingala");
        ?>
    </body>
</html>