<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="switch.php" method="post">
            What was your grade: <input type="text" name="grade">
            <input type="submit">
        </form>
        <br>
        <?php
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "Nice";
                    break;
                case "B":
                    echo "Can do better";
                    break;
            }
            echo $grade;
        ?>
    </body>
</html>