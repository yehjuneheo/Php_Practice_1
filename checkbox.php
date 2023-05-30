<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="checkbox.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>
        <br>
        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];

            $grades = array("Jim" => "A+", "Pam" => "B");
            echo $grades["Jim"];
        ?>
    </body>
</html>