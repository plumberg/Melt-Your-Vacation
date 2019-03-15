<?php
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['password'] = htmlentities($_POST['password']);	
	}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Contacts</title>
</head>
<body>
        <div class="jumbotron header-menu" name="header-menu">
            <?php include 'header.php';?>
        </div>
	
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter Login">
		<br>
		<input type="text" name="password" placeholder="Enter Password">
		<br>
		<input type="submit" formaction="response_to_user_login.php" name="submit" value="Submit">
	</form>

</body>
</html>