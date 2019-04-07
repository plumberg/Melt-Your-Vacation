<!DOCTYPE html>
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

            if($_SESSION['LoggedIn'] == true) {
                //When I was retrieving data using cookie, the previous logged in user's name wasn't erased and
                //therefore when a new user was loggong in, the previous user's name occured until the page
                //was refreshed. So here I used name stored in session to prevent that bug. I believe
                // the old cookie should be uset if the new user logged in. 
              // echo 'Welcome, '. $_COOKIE['cookieName'].'<br>';
                echo 'Welcome, ' . $_SESSION['name'].'<br>';
                echo '<a href="logout.php">Logout</a>';
                }
            else{
                echo 'Login not recognized. <a href="contact_login.php">Please login again</a>.' ;
                }
            ?>


        </h3>

    </body>
</html>
