<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
           class Movie{
               public $title;
               private $rating;

               function __construct($title, $rating){
                    $this->title = $title;
                    $this->setRating($rating);
               }

               function getRating(){
                   return $this->rating;
               }

               function setRating($rating){
                   if($rating == "G" || $rating=="PG" || $rating=="PG-13" || $rating=="R" || $rating=="NR"){
                       $this->rating = $rating;
                   }else{
                       $this->rating = "NR";
                   }
               }
           } 

           $avengers = new Movie("Avengers", "PG-13");
           echo $avengers->getRating();
        ?>

    </body>
</html>