
<!DOCTYPE html>
<html>
<head>
	<title>database app</title>
</head>
<body background="img.jpg">
	<h1 align="center"><b><u>Employee List</u></b></h1>
<table>
<?php
$connection = mysql_connect('localhost', 'root',''); 
mysql_select_db('codezonec1');

$query = "SELECT emp_no,name,dept_desc FROM employee,department where employee.dept_id=department.dept_id";
$result = mysql_query($query);
echo "<table border='1' align='center'>
	<tr>
		<th><b> Emp_no</b></th>
		<th><b>Name</b></th>
		<th><b> Dept_Desc</b></th>
		<th><b>Status</b></th>
	</tr>"; 

while($row= mysql_fetch_array($result)){   
echo "<tr>";
echo "<td>" . $row['emp_no']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row["dept_desc"]."</td>";
echo "<td>"."Active"."</td>";
echo "</tr>";
}
echo "</table>"; 

mysql_close();
?>
</table>
</body>
</html>