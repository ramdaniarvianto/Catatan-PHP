<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
setcookie("im", $row["id"], time() + 60);
setcookie("mi", hash("sha256", $row["username"]), time() - 60);
header("Location: login.php");
exit;
?>