
<?php
session_start();
$logins = array(
    'hamster' => 'hamster1',
    'kitten' => 'cat2008',
    'rooster' => 'goodMorning',
);

 foreach ($logins as $key=>$value)
        {
            if ($key === $_SESSION['name'] && $value === $_SESSION['password']){
            $_SESSION['LoggedIn'] = true;
            setcookie('cookieName', $_SESSION['name'], time() + 4800);
            }
            else 
                {
                $_SESSION['LoggedIn'] = false;
                }
        }
        
  include 'contents_of_user_login.php';      
?>
