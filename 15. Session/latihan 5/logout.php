<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
setcookie("IM", strtoupper(hash("gost-crypto", $row["id"])), time() - 3600);
setcookie("MI", strtoupper(hash("sha256", $row["username"])), time() - 3600);
header("Location: login.php");
exit;
?>