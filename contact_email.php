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
	<title>Contact Us - Melt Your Vacation</title>
</head>
<body>
        <?php include 'header.php';?>
<div class="container">
    <br>
    <h3>Contact Us</h3>
        <form action="check_email.php" method="post">
            <input type ="email" name="email" placeholder="Enter Email" class ="form-control"><br>
            <textarea name ="message" placeholder="Enter Message" class = "form-control"></textarea><br>
            <button type="submit" name="send" class="btn btn-primary">Send</button>
        </form>
</div>

<div class="page-footer">
    <?php include 'footer.php';?>
</div>
