<html>

<?php
$countries[]="th";
$countries[]="ca";
$countries[]="uk";
$countries[]="usa";
echo count ($countries);
echo '<br>';
?>



<?php
echo '<br>';
$countries=array(0=>'th',
				1=>'ca',
				2=>'usa');
$countries=array(1=>'ca',2=>'uk',3=>'usa');
$countries=array(7=>'de','us');
echo $countries[7];
echo $countries[8];
echo '<br>';
?>



<?php
echo '<br>';
$countries=array('th','ca','uk','usa');
$num_elements = count ($countries);

for ($j=0;$j<$num_elements;$j++){
	echo $countries[$j].'<br>';
}
echo '<br>';
?>




<?php
echo '<br>';
$countries=array('th','ca','uk','usa');

for ($j=0;$j<count($countries);$j++){
	echo $countries[$j].'<br>';
}
echo '<br>';
?>







<?php
echo '<br>';
$countries[50]='cz';
$countries[20]='de';
$countries[10]='sg';
$countries[]='uk';
$key = key($countries);
$value = current($countries);
echo "element $key equals $value ";
echo '<br>';
?>




<?php
echo '<br>';
reset($countries);
while(list($key,$value)= each($countries)){
echo "element $key equals $value<br>\n";
}
echo '<br>';
?>



<?php
echo'<br>';
reset($countries);
foreach($countries as $key=>$value){
echo "element $key equals $value<br>\n";
}
echo'<br>';
?>




<?php
echo'<br>';
reset($countries);
echo "element".key($countries)."equals".current($countries)."  RESET"."<br>\n";

next($countries);
echo "element".key($countries)."equals".current($countries)."  NEXT"."<br>\n";

prev($countries);
echo "element".key($countries)."equals".current($countries)."  PREV"."<br>\n";
?>











<?php
echo '<table border
bgcolor="FFFF00">';

$countries["th"]="Thailand";
$countries["ca"]="Canada";
$countries["uk"]="United Kingdom";
$countries["usa"]="United State of America";
$key = key($countries);
$value = current($countries);

while(list($key,$value)= each($countries)){
echo '<tr>';
echo '<td>';
echo $key ;
echo '</td>';
echo '<td>';
echo $value;
echo '</td>';
echo '</tr>';
}

echo '</table>'; 
?>



<?php
echo '<br>';
echo '<table>';

$countries["th"]="Thailand";
$countries["ca"]="Canada";
$countries["uk"]="United Kingdom";
$countries["usa"]="United State of America";
$key = key($countries);
$value = current($countries);

foreach($countries as $key=>$value){
echo '<tr bgcolor="BEBEBE">';
echo '<td>';
echo $key ;
echo '</td>';
echo '<td>';
echo $value;
echo '</td>';
echo '</tr>';
}
echo '</table>'; 


?>
</html>




