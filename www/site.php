<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        

        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Age:  <input type="number" name="age">
            <input type="submit">
        </form>

        <br>

        <?php 
            $name = $_GET["name"];
            $age = $_GET["age"];
            echo "$name is now $age years old";
        ?>

    </body>
</html>