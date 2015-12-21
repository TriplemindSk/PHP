<?php
$connect = mysqli_connect("localhost", "root","", "class");
$sql = 'SELECT * FROM student WHERE StudentID ="'.$_POST["sele"].'"';
$result = mysqli_query($connect,$sql);
if(!$result){
echo mysqli_error.'<br>';
die('Can not access database!');
}
else {
	while($row = mysqli_fetch_assoc($result))
{
echo 'StudentID : ';
echo '<input type = "text" value="'.$row['StudentID'].'" disabled = "disabled"><br><br>';
echo 'Firstname : ';
echo '<input type = "text" value="'.$row['SFirstname'].'" disabled = "disabled"><br><br>';
echo 'Lastname : ';
echo '<input type = "text" value="'.$row['SLastname'].'" disabled = "disabled"><br><br>';
echo 'Address : ';
echo '<input type = "text" value="'.$row["Address"].'"><br><br>';
echo 'Major : ';
echo '<input type = "text" value="'.$row["Major"].'"><br><br>';
echo 'Teacher : ';
echo '<input type = "text" value="'.$row["TeacherID"].'"><br><br>';
}
echo '<input type = "submit" value="OK">';
mysqli_close($connect);
}
?>
