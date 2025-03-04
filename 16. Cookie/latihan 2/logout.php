<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie("im", "", time() - 999999);
setcookie("mi", "", time() - 999999);

header("Location: login.php");
exit;
?>