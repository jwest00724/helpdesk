<?php $pageName="Helpdesk - Home" ; include 'header.php'; ?>

<!-- Begin Page Content -->
<!-- Logo and logout + ticket history buttons -->
<div class="row">
    <div class="small-12 large-9 columns">
        <h1 class="logo heading">Helpdesk.</h1>
        <h4 class="subheader heading">Bishop Justus IT Support System</h4>
    </div>
    <div class="small-12 large-3 columns">
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
<div class="row">
    <div class="small-12 columns">
        <dl class="accordion" data-accordion="">
            <dd class="accordion-navigation active">
                <a href="#panel1">Submit a new support ticket</a>
                <div id="panel1" class="content">
                    <form name="submitTicket" action="submit_ticket.php" method="post">
                        <div class="row">
                            <div class="large-12 columns">
                                <label>Subject
                                    <select name="priority">
                                        <option value="" disabled selected>Placehold</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <label>Priority
                                    <select name="priority">
                                        <option value="" disabled selected>Please select</option>
                                        <option value="Very High">Very High</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>Room Nuber
                                    <input type="text" name="room" />
                            </div>
                            </label>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <label>Description
                                    <textarea name="description" rows="16" placeholder="Enter further deatils of your issue"></textarea>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input name="ticketOwner" type="hidden" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input name="email" type="hidden" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input class="button" type="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </dd>
            <dd class="accordion-navigation">
                <a href="#panel2">View the knowledge base</a>
                <div id="panel2" class="content">
                    Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </dd>
        </dl>
    </div>
</div>

<?php include 'footer.php';?>