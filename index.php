<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Helpdesk</title>
    <!-- Zurb Foundation main stylesheet -->
    <link rel="stylesheet" href="css/foundation.css" />
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- modernizr.js to detect browser CSS3 and HTML5 feature supported by users browser -->
    <script src="js/vendor/modernizr.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
</head>

<body>
    
    <!-- Begin Page Content -->

    <div class="row">
        <div id="loginContainer">
            <!-- Left (top on small) - Headings etc -->
            <div class="small-12 medium-7 large-7 columns login heading" id="">
                <h1 class="logo">Helpdesk</h1>
                <h4 class="subheader">Bishop Justus IT Support System</h1>
            </div>
            <!-- Right (bottom on small) - login form -->
            <div class="small-12 medium-5 large-5 columns login" id="">
                <form>
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
                            <a href="#" class="button postfix">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

    <!-- Call in jquery and js -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
