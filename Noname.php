<html>
	<?php
		$day = array("Mon","Tue","Wed","Thu","Fri","Sat","sun");
		$time = array ("9.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00");
		$numd = key($day);
		$numt = key($time);
		echo '<table>';
		for($i=0; $i<$numt; $i++){
			echo '<tr>';
			for($j=0; $j<$numd; $j++){
				echo '<td>';
				echo $day[$i];
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	?>
</html>