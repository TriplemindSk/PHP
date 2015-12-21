<?php
$connect = mysqli_connect("localhost","root","","class");
$sql = 'SELECT StudentID FROM student';
$result = mysqli_query($connect,$sql);
echo '<form name = "select2" action  = "form2.php" method = "post" >';
echo "please select Student ID:";
echo '<select name="sele">';
while($row = mysqli_fetch_assoc($result))
{
echo '<option value="'.$row['StudentID'].'">'.$row['StudentID'].'</option>';
}
echo '</select>';
echo '<br>';
echo'<input type="submit" value="Submit">';
echo '</form>';
?>
