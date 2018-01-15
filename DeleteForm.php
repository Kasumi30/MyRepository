<!DOCTYPE html>
<html>
<body>

<head>
<title>To Do List</title>
</head>

<form action="DeleteForm2" method="POST">
  Task Name:<br>
  <input type="text" name="Task2"><br>
  <input type="submit" value="Submit Task">
</form>
<a href="ToDoList"><button id="button">Go Back to homepage</button></a>
<a href="ViewList" target="Result">View Current List</a>

<main>
<iframe name="Result" style="border:none;"></iframe>
</main>

</body>
</html>