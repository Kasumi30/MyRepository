<!DOCTYPE html>
<link href="StyleSheet.css" rel="stylesheet" media="screen">
<html>
<body>

<head>
<title>To Do List</title>
</head>

<nav>
<h1>Welcome to your To Do List</h1>
<a href="ViewList" target="Result">View Current List</a>
<a href="AddForm"><button id="button">Add Task</button></a>
<a href="DeleteForm"><button  id="button">Delete Task</button></a>
<a href="UpdateList"><button  id="button">Set Task To Complete</button></a>
</nav>

<?php
$con =mysqli_connect("localhost","root","","todolist");
	if(mysqli_connect_errno())
	{
	echo"Failed to Connect" . mysqli_connect_error();
	}

$result = mysqli_query($con,
"SELECT COUNT(*) AS NotCompleted
FROM   tasks
WHERE (Status= 'Not Completed')");


while($row = mysqli_fetch_array($result))
{
echo "<table border='.5'>";
echo "<tr>";
echo "<th>";

?>
<a href="FilterList2" target="Result">Not Completed</a>
<?php

echo"</th><th>". $row['NotCompleted'] . "</th>";
echo "</tr>";
echo "<tr>";
}

$result = mysqli_query($con,
"SELECT COUNT(*) AS Completed
FROM   tasks
WHERE Status= 'Completed'");

while($row = mysqli_fetch_array($result))
{
echo "<th>";
?>
<a href="FilterList" target="Result">Completed</a>
<?php
echo "</th><th>" . $row['Completed'] . "</th>";
echo "</tr>";
echo "</table>";
}
mysqli_close($con);
?>
<main>
<iframe name="Result" height="250" width="400" style="border:none;"></iframe>
</main>
</body>
</html>