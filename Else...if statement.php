<!DOCTYPE>
<html>
    <body>
        <?php
        $m= $marks("M");
        if ($m == 40)
            echo "you passed exams";
        elseif ($m < 40)
            echo "you failed exams";
        else
            echo "you passed exams";
        ?>
    </body>
</html>