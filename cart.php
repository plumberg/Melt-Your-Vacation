<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="сcs/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slick/slick.css"/>
        <link rel="stylesheet" href="css/slick/slick-theme.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>Schedule - Melt Your Vacation</title>
</head>
<body>
        <?php include 'header.php';?>

<?php
//if($_SESSION['LoggedIn'] == true)
if(isset($_SESSION['name'])){
echo 'Welcome, ' . $_SESSION['name'].'<br>';
$tripId  = $_GET['id'];
$accountID = $_SESSION['userID'];
require('config/db_conn.php');
$query = "INSERT INTO booking(B_date_start, B_people_amount, B_trip_id, B_acc_id)
values " . "('$accountID','getdate()','2','$tripId')";
$result=$conn->query($query);
if ($result === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $result . "<br>" . $conn->error;
}
}else {
    echo 'Session is not set';
}
?>


<div class="page-footer">
    <?php include 'footer.php';?>
</div>
