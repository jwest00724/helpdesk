<?php $pageName="Helpdesk - Login" ; include 'header.php'; ?>

<!-- Begin Page Content -->

<div class="row">
    <div id="loginContainer">
        <!-- Left (top on small) - Headings etc -->
        <div class="small-12 medium-7 large-7 columns login heading" id="">
            <h1 class="logo">Helpdesk.</h1>
            <h4 class="subheader">Bishop Justus IT Support System</h4>
        </div>
        <!-- Right (bottom on small) - login form -->
        <!-- TODO: Set up PHP login system (login.php) -->
        <!-- TODO: form validation -->
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
                        <input class="button" type="submit" value="Login" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php';?>