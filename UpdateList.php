<!DOCTYPE html>
<html>
<body>

<head>
	<title>To Do List</title>
</head>

<form action="UpdateList2" method="POST">
	Task:
	<br>
  <input type="text" name="Task2">
  <br>
  Date:
  <br>
  <input type="date" name="Date2">
  <br><br>
  <input type="submit" value="Set to Complete">
</form>

<br><br>
<a href="ToDoList"><button id="button">Go Back to homepage</button></a>
<a href="ViewList" target="Result">View Current List</a>


<main>
<iframe name="Result" style="border:none;"></iframe>
</main>

</body>
</html>