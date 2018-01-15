<!DOCTYPE html>
<html>
<body>

<head>
<title>To Do List</title>
</head>

<?php
$con =mysqli_connect("localhost","root","","todolist");
	if(mysqli_connect_errno())
	{
	echo"Failed to Connect" . mysqli_connect_error();
	}
$x3 = $_POST['Task2'];
$x4 = $_POST['Date2'];
$result = mysqli_query($con,"UPDATE tasks 
SET Status = 'Completed' 
WHERE Task = '$x3' AND EndDate = '$x4'");
mysqli_close($con);
?>
<a href="ToDoList"><button id="button">Go Back to homepage</button></a>
</body>
</html>