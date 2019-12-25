<?php
    include_once("./includes/person.inc.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <?php
            $person1 = new Person("Mack", "Blue", 28);
            echo $person1->name;
        ?>
    </body>
</html>