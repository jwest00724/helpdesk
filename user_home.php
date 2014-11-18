<?php $pageName='Helpdesk - Home' ; include 'header.php'; ?>
<!-- Get subjects from db -->
<?php
include 'db.php';
$subjectQuery = "SELECT subject FROM subjects";
$subjectResult = mysqli_query($conn,$subjectQuery) or die("Error: ".mysqli_error($conn));
mysqli_close($conn);
?>

<!-- Begin Page Content -->
<!-- Succcess ALert -->
<?php if(isset($_GET['success'])) { echo 
    '<div class="row">
        <div class="small-12 columns">
            <div data-alert class="alert-box success top hide-for-small-only">
                Ticket Submitted! You will be notified via email when the ticket has been closed.
                <a href="#" class="close">&times;</a>
            </div>
            <div data-alert class="alert-box success show-for-small-only">
                Ticket Submitted!
                <a href="#" class="close">&times;</a>
            </div>
        </div>
    </div>';}?>
<!-- Logo and logout + ticket history buttons -->
<div class="row">
    <div class="small-12 large-9 columns">
        <h1 class="logo heading">Helpdesk.</h1>
        <h4 class="subheader heading">Bishop Justus IT Support System</h4>
    </div>
    <div class="small-12 large-3 columns">
        <ul class="inline-list">
            <li><a href="ticket_history.php" class="menu hide-for-small-only">Ticket History</a>
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
        <p class="logout show-for-small-only"><a href="ticket_history.php">Ticket History</a>
        </p>
    </div>
</div>
<!-- Accordion navigation -->
<div class="row">
    <div class="small-12 columns">
        <dl class="accordion" data-accordion="">
            <dd class="accordion-navigation">
                <a href="#panel1">Submit a new support ticket</a>
                <div id="panel1" class="content">
                    <!-- TODO: form validation -->
                    <form name="submitTicket" data-abide action="submit_ticket.php" method="post">
                        <div class="row">
                            <div class="large-12 columns">
                                <label>Subject <small>required</small>
                                    <?php $dropdown = "<select required name='subject'>";
                                    while($subjectArray = mysqli_fetch_assoc($subjectResult)) {
                                        $dropdown .= "\r\n<option value=''>Please select</option><option value='{$subjectArray['subject']}'>{$subjectArray['subject']}</option>";
                                    }
                                    $dropdown .= "\r\n</select>";
                                    echo $dropdown; ?>
                                </label>
                                <small class="error">Please choose a subject. If there is no suitable subject, just select "other".</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <label>Priority <small>required</small>
                                    <select required name="priority">
                                        <option value="" disabled selected>Please select</option>
                                        <option value="Very High">Very High</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </label>
                                <small class="error">You must choose a priority level.</small>
                            </div>
                            <div class="large-6 columns">
                                <label>Room Nuber
                                    <input type="text" pattern="bj_room_number" name="room" />
                                </label>
                                <small class="error">Invalid room number!</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <label>Description
                                    <textarea name="description" rows="16" placeholder="Enter specific details of your issue"></textarea>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input name="ticketOwner" type="hidden" value="<?php echo $_SESSION['sess_username']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input name="ticketOwnerEmail" type="hidden" value="<?php echo $_SESSION['sess_user_email']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input class="button radius" type="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </dd>
            <dd class="accordion-navigation">
                <a href="#panel2">View the knowledge base</a>
                <div id="panel2" class="content">
                    <?php 
                    include 'db.php'; // Connect to database
                    $knowledgeQuery = "SELECT knowledgeID, knowledgeTitle, knowledge FROM knowledge_base ;"; // Query knowledge_base table
                    
                    $knowledgeResult = mysqli_query($conn,$knowledgeQuery) or die("Error: ".mysqli_error($conn)); // Run query
                    
                    while($knowledgeArray = mysqli_fetch_array($knowledgeResult)) // Put returned rows into array
                    {
                        echo "<h3>" . $knowledgeArray['knowledgeTitle'] . "</h3>"; // Echo knowledgeTitle as entry heading
                        echo $knowledgeArray['knowledge']; // Echo knowledge as entry body text
                        echo "<hr></hr>"; // Insert divider
                    }
                    mysqli_close($conn); // Close conn
                    ?>
                </div>
            </dd>
        </dl>
    </div>
</div>

<?php include 'footer.php';?>