<?php
    include_once './includes/person.inc.php';
?>
<!DOCTYPE html>
<Html lang="eng" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "DA=";
            $person1 = new Persons("mack", "blue", 23);
            echo $person1->getDA();
        ?>
    </body>

</Html>