<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        

        <form action="calc.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <br>
            <input type="submit">
        </form>

        <?php 
            echo $_GET["num1"] + $_GET["num2"];
        ?>

    </body>
</html>