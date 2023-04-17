<?php

require "vendor/autoload.php";
session_start();

// 4.

use App\QuestionManager;

$score = null;
try {
    $manager = new QuestionManager;
    $manager->initialize();

    $_SESSION['answers']=$_POST;   

    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers'); 
    }
    $score = $manager->computeScore($_SESSION['answers']);
    
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Quiz</title>
    </head>
    <body>
    <div class="main">
        <h1>Thank You</h1>

        <h3>
            Congratulations <?php echo $_SESSION['user_complete_name']." (".$_SESSION['user_email'].")"; ?>!<br />
            Your score is <?php echo "<font color=\"blue\">$score</font>"; ?> out of <?php echo $manager->getQuestionSize() ;?></h3>
            <p>Your Answer</p>
            <div class="finalResults" >
                <?php $endResult = $manager->resultCheck($_SESSION['answers']); ?>
            </div>
    </div>
    </body>
</html>


<!-- DEBUG MODE -->
<pre style="color:white; background-color:black; border-radius:25px; padding:25px; margin-top: 30px; margin-left: 400px; margin-right: 450px;">
<?php
var_dump($_SESSION);
?>
</pre>
