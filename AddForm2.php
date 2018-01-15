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
$x1 = $_POST['Task'];
$x2 = $_POST['Date'];
$result = mysqli_query($con,"INSERT INTO tasks (Task, EndDate) values('$x1', '$x2')");
mysqli_close($con);
?>
<a href="ToDoList"><button id="button">Go Back to homepage</button></a>
</body>
</html>