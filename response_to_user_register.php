<?php
session_start();
	if(isset($_POST['submit'])){
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['password'] = htmlentities($_POST['password']);
	}
        $_SESSION['LoggedIn'] = false;


$user = $_POST['name'];
$pass = $_POST['password'];
$fname = $_POST['FName'];
$lname = $_POST['LName'];
$phone = $_POST['phone'];
$paymentid = $_POST['payment'];

require ('config/db_conn.php');
$query ="INSERT INTO account (username,FName,LName,phone,payment_method,password)
VALUES ('$user', '$fname', '$lname', '$phone','$paymentid','$pass');";
$result=$conn->query($query);

$query1 ="SELECT accountID from account where username='$user'";
$result1=$conn->query($query1);
$row=$result1->fetch_assoc();
$_SESSION['userID'] = $row['accountID'];



$_SESSION['LoggedIn'] = true;
setcookie('cookieName', $_SESSION['name'], time() + 4800);



 include 'contents_of_user_login.php';      ?>
