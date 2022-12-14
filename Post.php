<!DOCTYPE>
<html>
    <?php
    if ($_POST["name"] || $_POST['age'])
        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
            echo "welcome" . $_POST["name"] . "<br/>";
            echo "you are" . $_POST['age'] . "years old";
            exit();
        }
    ?>
    <body>
        <form action="<?php $_self_help?>" method ="POST">
        <input type="text" name='name'>
        <input type="text" name='age'>
        <input type="submit">
        </form>
    </body>
</html>