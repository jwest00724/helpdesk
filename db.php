<?php

// Database details
$db_name = 'helpdesk';
$db_host = 'localhost';
$db_user = 'helpdesk';
$db_passwd = '1024768';

// Connect to database
$mysqli = new mysqli($db_host, $db_user, $db_passwd, $db_name);

// Check for errors, print if any
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
