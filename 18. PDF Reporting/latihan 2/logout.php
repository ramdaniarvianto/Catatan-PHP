<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie("id", $row["id"], time()-60);
setcookie("key", hash("sha256", $row["id"]), time()-60);

header("Location: login.php");
exit;
?>