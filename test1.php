<?php
$h=4;
$j=6;
$i=5;
if($h==4 && $i==5 && $j==6){
	echo 'A...This will print';
}
if($h==3 or $i==5){
	echo 'B...This will print';
}
if($h==4 xor $i==5 xor $j==6){
	echo 'C...This will not print';
}
if($h==4 && $i==5){
	echo 'D...This will not print';
} 
if(($h==4) || ($i==4) xor ($h==5 || $j==5) xor ($i==6 || $j==7)){
	echo 'E...This will print';
}

?>





<?php
echo '<select name = "num_parts">';
$i=0;
$total_parts=32;
do{
	echo '<option value="$'.$i.'">'.$i.'</option>';
	}while (++$i < $total_parts);
echo'</select>';

echo '"$'.$i;



echo "<br>";
echo "<br>";

for($i=1;$i<11;$i++){
echo "$i <br>\n";
}
?>






<?php
$num =5;
echo '<table border=3
bgcolor="F4A460">';
echo '<tr>';

$i=0;
while($i++ < $num){
	echo '<td>';
	echo $i;
	echo '</td>';
}
echo '</tr>';
echo '</table>'; 
?>





<?php
$num =5;
echo '<br>';
echo '<br>';
echo '<table border=3
bgcolor="EE82EE">';
echo '<tr>';

$i=0;
do{
	echo '<td>';
	echo $i+1;
	echo '</td>';
	$i++;
}while($i < $num);
echo '</tr>';
echo '</table>';
?>





<?php
$num=5;
echo '<br>';
echo '<br>';
echo '<table border=3
bgcolor="F4A460">';

$i=0;
while($i++ < $num){
	echo '<tr>'; 
	$j=0;
while($j++ < $num){
	echo '<td>';
	echo $i;
	echo '</td>';
	}
	echo '</tr>';
}

echo '</table>';
?>





<?php
$num =5;
echo '<br>';
echo '<br>';
echo '<table border=3
bgcolor="EE82EE">';

$i=1;
do{
	echo '<tr>';
	$j=1;
do{
	echo '<td>';
	echo $i;
	echo '</td>';	
	}while($j++ <$num);
	echo '</tr>';
}while($i++ < $num);
echo '</table>';
?>





<?php
$num=5;
echo '<br>';
echo '<br>';
echo '<table border=3
bgcolor="F4A460">';

$i=0;
while($i++ < $num){
	echo '<tr>'; 
	$j=0;
while($j++ < $num){
	echo '<td>';
	echo 'No. ';
	echo $i;
	echo '_';
	echo $j;
	echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>






<?php
$num =5;
echo '<br>';
echo '<br>';
echo '<table border=3
bgcolor="EE82EE">';

$i=1;
do{
	echo '<tr>';
	$j=1;
do{
	echo '<td>';
	echo 'No. ';
	echo $i;
	echo '_';
	echo $j;
	echo '</td>';	
	}while($j++ <$num);
	echo '</tr>';
}while($i++ < $num);
echo '</table>';
?>
