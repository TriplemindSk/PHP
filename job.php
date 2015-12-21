<html>
<table  align = "center" border=1 bgcolor ="00FFFF">
<tr>
<td>
<br>
<form name = "formjob" action  = "jobprint.php" method = "post" 
enctype = "multipart/form-data">
	--PLEASE INPUT YOUR DATA-- <br><br>

	Name : 
<input type = "text" name = "name">
	Lastname : 
<input type = "text" name = "lastname"><br><br>
	Gender : Female 
<input type = "radio" name  ="gender" value = "female" size = "25">
	Male
<input type = "radio" name  ="gender" value = "male" size = "25"><br><br>

	Birthday : Date 
<select name = "selectdate" >
<option value = "1">1</option>
<option value = "2">2</option>
<option value = "3">3</option>
<option value = "4">4</option>
<option value = "5">5</option>
<option value = "6">6</option>
<option value = "7">7</option>
<option value = "8">8</option>
<option value = "9">9</option>
<option value = "10">10</option>
<option value = "11">11</option>
<option value = "12">12</option>
<option value = "13">13</option>
<option value = "14">14</option>
<option value = "15">15</option>
<option value = "16">16</option>
<option value = "17">17</option>
<option value = "18">18</option>
<option value = "19">19</option>
<option value = "20">20</option>
<option value = "21">21</option>
<option value = "22">22</option>
<option value = "23">23</option>
<option value = "24">24</option>
<option value = "25">25</option>
<option value = "26">26</option>
<option value = "27">27</option>
<option value = "28">28</option>
<option value = "29">29</option>
<option value = "30">30</option>
<option value = "31">31</option>
</select>

	Month 
<select name = "selectmonth">
<option value = "January">January</option>
<option value = "February">February</option>
<option value = "March">March</option>
<option value = "April">April</option>
<option value = "May">May</option>
<option value = "June">June</option>
<option value = "July"> July</option>
<option value = "August">August</option>
<option value = "September">September</option>
<option value = "October">October</option>
<option value = "November"> November</option>
<option value = "December">December</option>
</select>

	Year 
<select name = "selectyear">
<option value = "1950">1950</option>
<option value = "1951">1951</option>
<option value = "1952">1952</option>
<option value = "1953">1953</option>
<option value = "1954">1954</option>
<option value = "1955">1955</option>
<option value = "1956">1956</option>
</select><br><br>

	Address : 
<input type = "text" name = "addr"><br><br>
	
	Telephone Number : 
<input type = "text" name = "Tel"><br><br>
	
	Email Address : 
<input type = "text" name = "email"><br><br>
	
	Homepage : 
<input type = "text" name = "homepage"><br><br>
	
	Education : <br>	
<input type = "radio" name = "education" value = "Secondary Education" size = "25">
	Secondary Education <br><br>
<input type = "radio" name = "education" value = "Degree" size = "25">
	Degree <br><br>
<input type = "radio" name = "education" value = "Master degree" size = "25">
	Master degree<br><br>
	
	Position : <br>
<input type = "checkbox" name = "position1" value = "Office Adminstrator">
	Office Adminstrator <br><br>
<input type = "checkbox" name = "position2" value = "Accountant">
	Accountant <br><br>
<input type = "checkbox" name = "position3" value = "Accountantcustomer support web designer">
	Accountantcustomer support web designer <br><br>
<input type = "checkbox" name = "position4" value = "Programmer">
	Programmer <br><br>
<input type = "checkbox" name = "position5" value = "System Adminitrator">
	System Adminitrator <br><br>
	
	Salary : 
<input type = "text" name = "salary" size = "25" value ="">
	bath<br><br>
	
	
	Picture :
<input type  = "file" name = "pic" size = "50">
<input type = "hidden" name = "MAX_FILE_SIZE" value = "100000"><br><br>

	
	Experience : <br>
<textarea name = "work" rows = "10" cols = "60"></textarea><br><br>
<input type = "submit" name = "submit" value = "Submit Now">
<input type = "reset" value = "Click to Reset">

</form>
</td>
</tr>
</table>
</html>


