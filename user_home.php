<?php 
$pageName="Helpdesk - Home"; 
include 'header.php'; 
?>

<!-- Begin Page Content -->
<!-- Logo and logout + ticket history buttons -->
<div class="row">
    <div class="small-12 large-8 columns">
        <h1 class="logo heading">Helpdesk.</h1>
        <h4 class="subheader heading">Bishop Justus IT Support System</h4>
    </div>
    <div class="small-12 large-4 columns">
        <ul class="inline-list">
            <li><a href="#" class="menu hide-for-small-only">Ticket History</a>
            </li>
            <li><a href="logout.php" class="menu hide-for-small-only">Logout</a>
            </li>
        </ul>
    </div>
</div>
<!-- Mobile menu -->
<div class="row">
    <div class="small-12 columns">
        <p class="logout show-for-small-only"><a href="logout.php">Logout</a>
        </p>
        <p class="logout show-for-small-only"><a href="#">Ticket History</a>
        </p>
    </div>
</div>
<!-- Help Options -->


<?php include 'footer.php';?>