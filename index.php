<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Helpdesk - Login
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

<!-- Begin Page Content -->

<div class="row">
    <!-- Show error message if username/password is incorrect -->
    <?php if(isset($_GET['invalid'])) { echo 
    '<div class="row">
        <div class="small-12 columns">
            <div data-alert class="alert-box alert error hide-for-small-only">
                Incorrect username or password!
                <a href="#" class="close">&times;</a>
            </div>
            <div data-alert class="alert-box alert mobile-error show-for-small-only">
                Incorrect username or password!
                <a href="#" class="close">&times;</a>
            </div>
        </div>
    </div>';}?>
    <div id="loginContainer">
        <!-- Left (top on small) - Headings etc -->
        <div class="small-12 medium-7 large-7 columns login heading" id="">
            <h1 class="logo">Helpdesk.</h1>
            <h4 class="subheader">Bishop Justus IT Support System</h4>
        </div>
        <!-- Right (bottom on small) - login form -->
        <!-- FUTURE: more advanced form validation -->
        <div class="small-12 medium-5 large-5 columns login" id="">
            <form action="login.php" method="post">
                <div class="row">
                    <div class="small-12 medium-12 small-centered medium-uncentered columns">
                        <input type="text" name="username" placeholder="Username" />
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-12 small-centered medium-uncentered columns">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-12 small-centered medium-uncentered columns">
                        <input class="button radius" type="submit" value="Login" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php';?>