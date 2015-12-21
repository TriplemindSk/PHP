<html>
<?php
$newfile = 'image/'.$_FILES['pic']['name'];
if(copy($_FILES['pic']['tmp_name'],$newfile)){

echo '<br>';
echo "<br>";
echo '<table  align = "center" border=1 bgcolor ="CD853F">';
echo '<tr>';
echo '<td>';

echo '<img width = "120" height = "150" src = "'.$newfile.'">';

echo '</td>';
echo '</tr>';
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";
}

echo '<table  align = "center" border=1 bgcolor ="CD853F">';
echo '<tr>';
echo '<td>';

echo "Your Detail";
echo "<br>";
echo "<br>";

echo "Name : ";
echo $_POST["name"];
echo "<br>";
echo "LastName : ";
echo $_POST["lastname"];
echo "<br>";

echo "Sex : ";
echo $_POST["gender"];
echo "<br>";

echo "Birthday : ";
echo $_POST["selectdate"];
echo $_POST["selectmonth"];
echo $_POST["selectyear"];
echo "<br>";

echo "Address : ";
echo $_POST["addr"];
echo "<br>";

echo "Phone : ";
echo $_POST["Tel"];
echo "<br>";

echo "Email : ";
echo $_POST["email"];
echo "<br>";

echo "Homepage : ";
echo $_POST["homepage"];
echo "<br>";

echo "Educate : ";
echo $_POST["education"];
echo "<br>";

echo "Position : ";
echo $_POST["position1"];
echo "<br>";
echo $_POST["position2"];
echo "<br>";
echo $_POST["position3"];
echo "<br>";
echo $_POST["position4"];
echo "<br>";
echo $_POST["position5"];
echo "<br>";

echo "Slary : ";
echo $_POST["salary"];
echo "<br>";

echo "Experience : ";
echo $_POST["work"];
echo "<br>";


echo '</td>';
echo '</tr>';
echo '</table>';
?>
</html>
