<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function sayHi($name){
                echo "Hello $name <br>";
            }
            sayHi("Tom");
        ?>

        <?php
            function cube($num){
                return $num*$num*$num;
            }
            echo cube(4);
        ?>

        <?php
            $isMale = true;
            $isTall = false;
            if ($isMale){
                echo "You are male";
            } elseif ($isMale && $isTall) {
                echo "You are short";
            } else{
                echo "You are female";
            }
        ?>
    </body>
</html>