<?php
    // include_once './classes/persons1.class.php';
    // include_once './classes/house.class.php';
    include_once './include/autoload.inc.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $person1 = new persons1\Persons1("Mack", "28");
            
            echo $person1->getPersons1();

            echo '<br>';

            $house1 = new House("Sydny", "12");
            echo $house1->getAddress();
        ?>
    </body>
</html>