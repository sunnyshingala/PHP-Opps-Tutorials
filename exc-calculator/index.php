<?PHP
    declare(strict_types = 1);
    include 'include/class-autoload.inc.php';

?>
<!DOCTYPE html>
<HTMl lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="include/cals.inc.php" method="post">
        <p>My Own Calculator!</p>
        <input type="number" name="num1" placeholder="Enter First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Enter Second Number">
        <button type="submit" name="submit">Calculation</button>
        </form>
    </body>
</HTMl>