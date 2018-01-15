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
$x12 = $_POST['Task2'];
$result = mysqli_query($con,"DELETE FROM tasks WHERE (Task='$x12')");
mysqli_close($con);
?>
<a href="ToDoList"><button id="button">Go Back to homepage</button></a>
</body>
</html>



