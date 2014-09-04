<?php
session_start();
unset($_SESSION["sess_user_id"]);
header("Location: index.php");
?>