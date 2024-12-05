<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Locatin: login.php");
exit;

?>