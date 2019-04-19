<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            $title = "My First Post";
            $author = "Mike";
            $wordCount = 400;
            include "article-header.php";

            echo "<br>";

            include "useful-tools.php";
            sayHi("mike");

            echo "<br>";
            
            echo $feetInMile;
        ?>

    </body>
</html>