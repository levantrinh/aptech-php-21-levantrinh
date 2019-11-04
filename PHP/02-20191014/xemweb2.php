<?php
   function xemWeb($x) {
       if ($x >= 18) {
           echo "du tuoi XEM WEBSITE";
       }
        else        
        {
            echo "chưa đủ tuổi nhé, còn ";
            echo 18 -$x;
            echo " năm nữa";
        }
       }

      
?>

<h1 style="color:purple"> <?php xemWeb(14) ?> </h1>