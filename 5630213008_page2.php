<html>
<?php
$EM = $_POST["emID"];
$HU = $_POST["hour"];
	function calculate($EM,$HU){
	$salary = 200*$HU;
		if($salary>=15000){
			$bonus = 5000+$salary;
		}else if($salary<15000){
			$bonus = 2000+$salary;
		}	
	echo '<table border=3 bgcolor="DAA520">';
	echo '<tr bgcolor="00FF7F">';
	echo '<td>';
	echo 'Employee ID';
	echo '</td>';

	echo '<td>';
	echo 'Hour';
	echo '</td>';

	echo '<td>';
	echo 'Salary+Bonus';
	echo '</td>';

	echo '</tr>';

	echo '<tr>';
	echo '<td>';
	echo $EM;
	echo '</td>';

	echo '<td>';
	echo $HU;
	echo '</td>';

	echo '<td>';
	echo $bonus;
	echo '</td>';

	echo '</tr>';
	echo '</table>';
	
	}
calculate($EM,$HU)
?>
</html>