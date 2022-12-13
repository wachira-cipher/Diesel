<!DOCTYPE>
<html>
    <body>
        <?php
        $array=array(1,2,3,4,5);
        foreach($array as $value){
            $a++;
            if ($a == 3)
                continue;
            echo ("$value<br/>");
        }
        ?>
    </body>
</html>