<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Log In - Melt Your Vacation</title>
</head>
<body>
        <?php include 'header.php';?>

        <div class="container">
            <br>
            <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-bold">Log In to your account:</h1>
                </div>

                <div class="form-label-group">
                    <label>Login</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Login">
                </div>

                <div class="form-label-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-primary" formaction="response_to_user_login.php"
                type="submit" name="submit" value="Enter">Sign in</button>
                <!--<input type="submit" formaction="response_to_user_login.php" name="submit" value="Enter">-->

                <p class="mt-5 mb-3 text-muted text-center">© MeltYourVacation, 2019</p>
            </form>

        </div>
<!--
        <form class="form-signin" method="POST" action="<//?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter Login">
		<br>
        <input type="password" name="password" placeholder="Enter Password">
		<br>
		<button class="btn btn-lg btn-primary" type="submit" formaction="response_to_user_login.php">Sign in</button>
        <input type="submit" formaction="response_to_user_login.php" name="submit" value="Enter">
    	</form>
-->
    <div class="page-footer">
        <?php include 'footer.php';?>
    </div>
