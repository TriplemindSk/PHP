<?php



$day1 = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
$time1 = array("9.00-10.00","10.00-11.00","11.00-12.00","12.00-13.00","13.00-14.00","14.00-15.00","15.00-16.00");
  echo "<table>";

for ($i=0; $i < 7; $i++){
	     echo '<tr border = 2>';
   for ($j=0; $j < 7; $j++){
              if ($day1[$i]=="Sun"){

                
               echo '<td hight = 4 width = 130 bgcolor ="yellow">';
               echo $day1[$i].'  '.$time1[$j];
               echo '</td>';
         
			  }else{

              echo '<td hight = 4 width = 130 bgcolor ="pink">';
              echo $day1[$i].'  '.$time1[$j];
              echo '</td>';
			  }
   }

     echo '</tr>';
}
	echo "</table>";
?>









<?php

echo'<br>';
echo'<br>';
$room1 = array("Romm1","Romm2","Romm3","Romm4","Romm5","Romm6","Romm7");
$floor1 = array("Floor1","Floor2","Floor3","Floor4","Floor5","Floor6","Floor7");
  echo "<table>";

for ($i=0; $i < 7; $i++){
	     echo '<tr border = 2>';
   for ($j=0; $j < 7; $j++){
              if ($floor1[$j]=="Floor3"){

               echo '<td hight = 4 width = 110 bgcolor ="blue">';
               echo $room1[$i].'  '.$floor1[$j];
               echo '</td>';
         
			  }else{

              echo '<td hight = 4 width = 110 bgcolor ="pink">';
              echo $room1[$i].'  '.$floor1[$j];
              echo '</td>';
			  }
   }

     echo '</tr>';
}
	echo "</table>";
?>




<?php
echo'<br>';
echo'<br>';

$a=10;
++$a;
echo $a;
?>


<?php
echo'<br>';
echo'<br>';
$a=10;
$b=$a++;
echo 'a = '.$a;
echo'<br>';
echo 'b = '.$b;
?>