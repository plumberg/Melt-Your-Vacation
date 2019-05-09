<?php

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    Old Bootstrap:
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Contacts</title>
</head>
<body>

            <?php include 'header.php';?>


        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter Login">
		<br>
        <input type="password" name="password" placeholder="Enter Password">
		<br>
		<!-- <input type="submit"  name="submit" value="Submit">-->
        <input type="submit" formaction="response_to_user_login.php" name="submit" value="Submit">
	</form>

</body>
</html>
