<?php
session_start();
unset($_SESSION["sess_admin_id"]);
header("Location: index.php");
?>