<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
           class Student{
               var $name;
               var $major;
               var $gpa;

               function __construct($name, $major, $gpa){
                    $this->name = $name;
                    $this->author = $major;
                    $this->pages = $gpa;
               }

               function hasHonors(){
                   if($this->gpa >= 3.5){
                        return "true";
                   }
                   return "false";
               }
           } 

           $student1 = new Student("Jim", "Business", 2.8);
           $student2 = new Student("Pam", "Art", 3.6);

           echo $student2->hasHonors();
        ?>

    </body>
</html>