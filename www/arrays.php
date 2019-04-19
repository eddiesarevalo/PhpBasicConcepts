<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            echo $friends;
            echo "<br>";
            echo $friends[1];
            $friends[2] = "Bill";
            echo $friends[2];
            
            $friends[4] = "Angela";
            echo $freinds[4];

            echo count($friends);
            
        ?>

    </body>
</html>