<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $person1 = new Persons1;
            
            try {
                $person1->setName("Mack");
                echo $person1->getName();
            } catch (\Throwable $th) {
                //throw $th;
                echo "error!: " . $th->getMessage();
            }
        ?>
    </body>
</html>