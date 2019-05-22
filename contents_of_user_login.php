<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    Old Bootstrap:
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>My Account</title>
    </head>
    <body>
            <?php include 'header.php';?>
        <h3>

             <?php
             if($_SESSION['LoggedIn'] == true){
                //When I was retrieving data using cookie, the previous logged in user's name wasn't erased and
                //therefore when a new user was logging in, the previous user's name occured until the page
                //was refreshed. So here I used name stored in session to prevent that bug. I believe
                // the old cookie should be unset if the new user logged in.
              // echo 'Welcome, '. $_COOKIE['cookieName'].'<br>';

                echo 'Welcome, ' . $_SESSION['name'].'<br>';
                echo '<a href="logout.php">Logout</a>';

                //Then should display all the data in the database table which
                //is used to save web-submitted-information on the web (e.g. orders).
                }
            else{
                echo 'Login not recognized.<br><a href="contact_login.php">Please login again</a>.' ;
                }
            ?>


        </h3>

    </body>
</html>
