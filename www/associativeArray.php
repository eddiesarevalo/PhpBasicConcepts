<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="associativeArray.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>

        <?php 
            $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
            echo $grades[$_POST["student"]];
            
            /*
            echo "<br>";
            
            $grades["Jim"] = "F";
            echo $grades["Jim"];
            */
        ?>

    </body>
</html>