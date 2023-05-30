<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            class Book {
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle)
                {
                    echo "New Book Created <br>";
                    $this->title = $aTitle;
                }

                function hasHonors(){
                    if($this->title=="Har"){
                        return true;
                    }
                    return false;
                }
            }

            $book1 = new Book("Harry");
            $book1->title = "Harry Potter";

            $book2 = new Book("Harry");
            $book2->title = "Harry Potter 2";
            
            $some = $book2->hasHonors();

            echo $book1->title;
            echo $book2->title;
        ?>


        <?php
            class Movie {
                public $title;
                public $rating;

                function someFunc(){
                    echo "Hello";
                }
            }

            class moreMovie extends Movie {
                
            }

            $movie = new Movie;
            $movie->someFunc();
        ?>
    </body>
</html>