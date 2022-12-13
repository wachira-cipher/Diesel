<!DOCTYPE>
<html>
    <body>
        <?php
        $g = $grade("G");
        
        switch ($g){

        case 'A':
        echo "Excelent!";
        break;

         
        case 'B':
        echo "brilliant!";
        break;

     
     case 'C':
        echo "good!";
     break;

          
        case 'D':
         echo "work harder!!";
        break;

        default:
         echo "retake!!";
        }
                        
                
        
        ?>
    </body>
</html>