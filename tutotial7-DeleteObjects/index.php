<?php
    include './includes/newClass.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $object = new NewClass;
            unset($object);
            echo $object->getProperty();
        ?>
    </body>
</html>