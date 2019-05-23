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
$query1 = <<<SQL
    SELECT * FROM authorizedusers WHERE userName='$user'
SQL;
$resultUser=$conn->query($query1);
$row1=$resultUser->fetch_assoc();
$_SESSION['userID'] = $row1['user_id'];

$query2  = <<<SQL
    SELECT * FROM authorizedusers WHERE password='$pass'
SQL;
$resultPass=$conn->query($query2);
$row2=$resultPass->fetch_assoc();

     if($user == $row1['userName'] && $pass == $row2['password'])
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
