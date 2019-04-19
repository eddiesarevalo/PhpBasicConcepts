<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
           class Book{
               var $title;
               var $author;
               var $pages;

               function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aTitle;
                    $this->pages = $aPages;
               }
           } 

           $book1 = new Book("Harry Potter", "JK Rowling", 400);
           $book2 = new Book("Lord of the Rings", "Tolkien", 700);

           echo $book1->title;
        ?>

    </body>
</html>