<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            function sayHi(){
                echo "Hello User <br>";
            }

            function sayHiWithName($name){
                echo "Hello $name <br>";
            }

            sayHi();
            sayHiWithName("Tom");
            sayHiWithName("Dave");
            sayHiWithName("Oscar");
        ?>

    </body>
</html>