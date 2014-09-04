<?php
ob_start();
session_start();

// Recieve login values from form. store in vars.
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to db.
include 'db.php';

// Sanitise username.
$username = mysqli_real_escape_string($conn, $username);
$query = "SELECT userID, username, forename, surname, email, password, salt
        FROM users
        WHERE username = '$username';";

$result = $conn->query($query) or die($conn->error.__LINE__);

// Count how many rows returned by query.
$row_cnt = mysqli_num_rows($result); 

// User not found. So, redirect to login_form again.
if($row_cnt == 0)
{
    header('Location: index.php?invalid');
}

// Put results into array
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );

if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    header('Location: index.php?invalid');
}else{ // Redirect to home page after successful login.
    session_regenerate_id();
    $_SESSION['sess_user_id'] = $userData['userID'];
    $_SESSION['sess_username'] = $userData['username'];
    session_write_close();
    header('Location: user_home.php');
}
?>