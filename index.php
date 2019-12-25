<?php
include_once ("./includes/person.inc.php");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $person1 = new Person();
            $person1->setName("Sunny ");    
            echo $person1->name;

            $person2 = new Person();
            $person2->setName("Roy");
            echo $person2->name;
        ?>
    </body>
</html>