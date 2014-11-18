<?php $pageName='Helpdesk - Administration Panel' ; include 'admin_header.php'; ?>

<!-- Begin Page Content -->

<!-- Logo and logout + ticket history buttons -->
<div class="row">
    <div class="small-12 large-9 columns">
        <h1 class="logo heading">Helpdesk.</h1>
        <h4 class="subheader heading">Administration Panel</h4>
    </div>
    <div class="small-12 large-3 columns">
        <ul class="inline-list">
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
    </div>
</div>

<!-- Side Nav -->

<?php include 'admin_footer.php';?>