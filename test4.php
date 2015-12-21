<html>
<?php

$mm = array("A","B","C");
$num = count($mm);
echo '<table border = 1 align="center" cellspacing = "2" cellpadding = "1" bgcolor="ADFF2F">';

	for($i=0;$i<$num;$i++){
		echo '<tr>';	
		
	for($j=0;$j<$num;$j++){
		echo '<td width="90" height="3">';
		echo $mm[$i];
		echo $mm[$j];
		echo '</td>';

}
		
		echo '</tr>';
}

		echo '</table>'; 
?>






<?php
echo'<br>';
echo'<br>';
$mm = array("A","B","C");
$num = count($mm);
echo '<table border = 1 align="center"  bgcolor="00FFFF">';

	for($i=0;$i<$num;$i++){
		echo '<tr>';	
		
	for($j=0;$j<$num;$j++){		
		
	for($n=0;$n<$num;$n++){		
		echo '<td width="90" height="3">';
		echo $mm[$i];
		echo $mm[$j];
		echo $mm[$n];
		echo '</td>';
	}
	echo '</tr>';
	}			
}
		echo '</table>'; 
?>




<?php
echo'<br>';
echo'<br>';
$mm = array("00","33","66","99","CC","FF");
$num = count($mm);
echo '<table border = 1 align="center"  bgcolor="D02090">';

	for($i=0;$i<$num;$i++){			
		echo '<tr>';
	for($j=0;$j<$num;$j++){		
		echo '<td width="90" height="3">';
		echo $mm[$i];	
		echo $mm[$j];
		echo '</td>';	
	}
		echo '</tr>';
}
		echo '</table>'; 
?>





<?php
$mm = array("00","33","66","99","CC","FF");
$num = count($mm);
echo '<table align="center"  bgcolor="FFFFFF">';

	for($i=0;$i<$num;$i++){			
		echo '<tr>';
	for($j=0;$j<$num;$j++){
	for($k=0;$k<$num;$k++){
		echo '<td width="90" height="3">';
		echo"<font color ='$mm[$i].$mm[$j].$mm[$k]'>";
		echo '#';
		echo $mm[$i];	
		echo $mm[$j];
		echo $mm[$k];
		echo'</font>';
		echo '</td>';
		}
		echo '</tr>';
	}
		
}
		echo '</table>'; 
?>





<?php
echo'<br>';
echo'<br>';
$mm = array("00","33","66","99","CC","FF");
$num = count($mm);
echo '<table align="center">';

	for($i=0;$i<$num;$i++){			
		echo '<tr>';
	for($j=0;$j<$num;$j++){
	for($k=0;$k<$num;$k++){		
		echo "<td width='90' height='3' bgcolor='$mm[$i].$mm[$j].$mm[$k]'>";		
		echo"<font color ='black'>";
		echo '#';
		echo $mm[$i];	
		echo $mm[$j];
		echo $mm[$k];
		echo'</font>';
		echo '</td>';
		}
		echo '</tr>';
	}
		
}
		echo '</table>'; 
?>
</html>