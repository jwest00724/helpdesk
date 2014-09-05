<?php
// Start session
session_start();

// Check whether the session variable SESS_MEMBER_ID is present or not / if user is logged in
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    header("location: index.php");
    exit();
}

// set timeout period in seconds
$inactive = 1800; // (30 mins)

// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
    { 
        // go to login page when idle
        session_destroy(); 
        header("Location: index.php?timeout");
        exit();
    }
}
$_SESSION['timeout'] = time();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $pageName; ?>
    </title>
    <!-- Zurb Foundation main stylesheet -->
    <link rel="stylesheet" href="css/foundation.css" />
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Media queries style sheet -->
    <link rel="stylesheet" href="css/media_queries.css" />
    <!-- modernizr.js to detect browser CSS3 and HTML5 feature supported by users browser -->
    <script src="js/vendor/modernizr.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
</head>

<body>