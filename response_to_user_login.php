<!DOCTYPE html>
<?php
session_start();
$logins = array(
    'hamster' => 'hamster1',
    'kitten' => 'cat2008',
    'rooster' => 'goodMorning',
);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>My Account</title>
    </head>
    <body>
        <div class="jumbotron header-menu" name="header-menu">
            <?php include 'header.php';?>
           
        </div>
        <h3>
             <?php 
            if(isset($_SESSION['name'])) {
            echo 'Hello, '. $_SESSION['name'];
            }
            ?>
        </h3>
    </body>
</html>
