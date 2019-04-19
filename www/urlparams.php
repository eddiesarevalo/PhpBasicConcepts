<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        

        <form action="urlparams.php" method="get">
            Name: <input type="text" name="name">
            <br>
            <input type="submit">
        </form>

        <br>

        <?php 
            echo $_GET["age"];
        ?>

    </body>
</html>