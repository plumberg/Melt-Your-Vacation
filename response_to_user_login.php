
<?php
session_start();
$logins = array(
    'hamster' => 'hamster1',
    'kitten' => 'cat2008',
    'rooster' => 'goodMorning',
);

	if(isset($_POST['submit'])){
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['password'] = htmlentities($_POST['password']);	
	}

        $_SESSION['LoggedIn'] = false;

 foreach ($logins as $key=>$value)
        {
            if ($key == $_SESSION['name'] && $value == $_SESSION['password']){
            $_SESSION['LoggedIn'] = true;
            setcookie('cookieName', $_SESSION['name'], time() + 4800);
            break;
            }
            
        }
?>
 <?php include 'contents_of_user_login.php';      ?>