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

$result = mysqli_query($con,"SELECT * FROM tasks");
echo "<table border='.5'>";
echo "<tr>";
echo "<th>Task Name</th>";
echo "<th>Date</th>";
echo "<th>Status</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row["Task"] . "</td>";
echo "<td>" . $row['EndDate'] . "</td>";
echo "<td>" . $row["Status"] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>