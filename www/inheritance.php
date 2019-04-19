<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            class Chef {
                function makeChicken(){
                    echo "The chef makes chicken <br>";
                }
                function makeSalad(){
                    echo "The chef makes salad <br>";
                }
                function makeSpecialDish(){
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class italianChef extends Chef{
                function makePasta(){
                    echo "the chef makes pasta";
                }
            }

            $chef = new Chef();
            $chef->makeChicken();

            $italianChef = new ItalianChef();
            $italianChef->makeChicken();
           
        ?>

    </body>
</html>