<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// There are a couple of reason. One of the reasons is error handling. Using the tr-catch statement, any exceptions or errors 
// can be handled and avoid the whole application from crashing unexpectedly. The other reason is to validate the input from the user 
// using the if-else statement.

try {
    if (isset($_POST['complete_name'])) {
        $_SESSION['user_complete_name'] = $_POST['complete_name'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_birthdate'] = $_POST['birthdate'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}