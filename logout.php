<?php
session_start();
session_destroy();
if(isset $_COOKIE['cookieName']){
 unset ($_COOKIE['cookieName']);
 setcookie('cookieName', '', time() - 4800, '/');
}
header('Location: contact_login.php');
exit;

?>
