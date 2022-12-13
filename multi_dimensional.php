<!DOCTYPE>
<html>
    <body>
        <?php
        $marks=array(
            "jonathan"=> array(
            'physics'=>90,
            "maths"=>80,
            "chemistry"=>70
            ),

          "wachira"=>array(
            "physics"=>95,
            "maths"=>85,
            "chemistry"=>80
          ),
          "tyson"=>array(
            "physics"=>70,
            "maths"=>65,
            "chemistry"=>60
          )
           
        );
        echo "tysons marks in physics:";
        echo $marks ['jonathan'] ['physics']. "<br/>";
        echo "marks for wachira in maths:";
        echo $marks['wachira'] ['maths']."<br/>";
        echo "marks for tyson in chemistry:";
        echo$marks['tyson'] ['chemistry']."<br>";

        ?>
    </body>
</html>