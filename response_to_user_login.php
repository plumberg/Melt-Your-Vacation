<?php
session_start();
	if(isset($_POST['submit'])){
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['password'] = htmlentities($_POST['password']);
	}
        $_SESSION['LoggedIn'] = false;


$user = $_POST['name'];
$pass = $_POST['password'];

require ('config/db_conn.php');
if ($user&&$pass)
{
	$query = <<<SQL
	SELECT * FROM authorizedusers WHERE userName='$user' and password='$pass'
	SQL;
	$result=$conn->query($query);
	$row=$result->fetch_assoc();
	$_SESSION['userID'] = $row['user_id'];
	if($user == $row['userName'] && $pass == $row['password'])
	{
		$_SESSION['LoggedIn'] = true;
		setcookie('cookieName', $_SESSION['name'], time() + 4800);
	}
}

/*
 foreach ($logins as $key=>$value)
        {
            if ($key == $_SESSION['name'] && $value == $_SESSION['password']){
            $_SESSION['LoggedIn'] = true;
            setcookie('cookieName', $_SESSION['name'], time() + 4800);
            break;
            }

        }
 */
 include 'contents_of_user_login.php';      ?>
