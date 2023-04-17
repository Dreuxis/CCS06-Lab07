<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// Ans: It creates a session or resumes an already started session. 

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="styles.css">
	<title>Register</title>
</head>
<body>
	<div class="main">
	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your complete name:<br />
		<input type="text" name="complete_name" placeholder="Complete Name" required />
		<br />
		Enter your email:<br />
		<input type ="text" name="email" placeholder="Email" required />
		<br />
		Enter your birthdate:<br />
		<input type="date" name="birthdate" placeholder="Birthdate" required /><br />
		<br />
		<input type="submit" value="Register">
	</form>
	</div>
</body>
</html>


<!-- DEBUG MODE -->
<pre style="color:white; background-color:black; border-radius:25px; padding:25px; margin-top: 30px; margin-left: 400px; margin-right: 450px;">
<?php
var_dump($_SESSION);
?>
</pre>
