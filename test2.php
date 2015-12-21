<?php
$countries=array("th"=>'Thailand',
				 "ca"=>'Canada',
				 "uk"=>'United Kingdom');

foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
echo "after sort<br>\n";
sort($countries);
foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
?>



<?php
echo'<br>';
echo"asort<br>\n";
$countries=array("th"=>'Thailand',
				 "ca"=>'Canada',
				 "uk"=>'United Kingdom');
asort($countries);
foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
?>



<?php
echo'<br>';
echo"rsort<br>\n";
$countries=array("th"=>'Thailand',
				 "ca"=>'Canada',
				 "uk"=>'United Kingdom');
rsort($countries);
foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
?>




<?php
echo'<br>';
echo"arsort<br>\n";
$countries=array("th"=>'Thailand',
				 "ca"=>'Canada',
				 "uk"=>'United Kingdom');
arsort($countries);
foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
?>





<?php
echo'<br>';
echo"ksort<br>\n";
$countries=array("c"=>'Thailand',
				 "b"=>'Canada',
				 "a"=>'United Kingdom');
ksort($countries);
foreach($countries as $key=>$value){
	echo "element $key = $value<br>\n";
	}
?>





<?php
function newline($x){
if($x==5){
for($i=0;$i<$x;$i++){
	echo "----\n";
}
}
else{
for($i=0;$i<$x;$i++){
	echo "+++++\n";
	}
   }
}
echo ("line 1");
newline(6);
echo ("line 2");
?>

<?php
function table($x){	
	echo"<table border = 2 bgcolor='pink'>";
		for($i=0;$i<$x;$i++){
			echo "<tr>";
			echo "<td>";
			if($x==5){
				echo '--';
			}else{
				echo '++';
			}
			echo $x;
			echo "</td>";
			echo "</tr>";		  
		  }
		  echo "</table>";
}
table(6);
?>