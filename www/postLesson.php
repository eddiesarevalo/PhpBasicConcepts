<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        

        <form action="postLesson.php" method="post">
            Password: <input type="password" name="password">
            <br>
            <input type="submit">
        </form>

        <br>

        <?php 
            echo $_POST["password"];
        ?>

    </body>
</html>