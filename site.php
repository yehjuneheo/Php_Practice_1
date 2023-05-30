<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo("<h1>Hello World</h1>");
            echo("<hr>");
            echo("<p>This is my site</p>");

            $characterName = "John";
            $characterAge = 35;
            echo("There was $characterName aged $characterAge");
            echo("<hr>");
        ?>

        <?php
            $phrase = "To be or not to be";
            $age = 30;
            $isMale = false;
            echo $phrase;
            echo("<hr>");
        ?>

        <?php
            $phrase = "To be or not to be";
            echo strtoupper($phrase);
            echo strlen($phrase);
            echo str_replace("not","yes",$phrase);
            echo substr($phrase, 5);
            echo $phrase[0];
            echo("<hr>");
        ?>

        <?php
            echo 5+9;
            $num = 10;
            $num++;
            echo $num;
            echo abs(-100);
            echo pow(2,4);
            echo sqrt(144);
            echo max(2,10);
            echo("<hr>");
        ?>

        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>
        <br>
        <?php
            echo $_GET["name"]
        ?>
    </body>
</html>