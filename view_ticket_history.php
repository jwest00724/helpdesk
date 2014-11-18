<?php
// Get header, set page anme
$pageName='Helpdesk - View Ticket History' ; include 'header.php';

// Identify what ticket the user wants to look at from var in URL
$ticketSelected = htmlspecialchars($_GET["ticketID"]);

// Connect to db
include 'db.php';

// Query db for all attributes on the selected record 
$ticketResult = mysqli_query($conn,"SELECT * FROM tickets WHERE `ticketID` = '" .$ticketSelected. "'");

// Modal close button
echo "<a class='close-reveal-modal'>&#215;</a>";

// render record attributes within the modal
while($ticketArray = mysqli_fetch_array($ticketResult))
{
    // Modal heading with ticket ID
    echo "<div class='row'>";
    echo "<div class='small-12 large-12 columns'>";
    echo "<h2>Ticket " . $ticketArray['ticketID'] . "</h2>";
    echo "</div>";
    echo "</div>";

    // Ticket subject
    echo "<div class='row'>";        
    echo "<div class='small-12 columns'>";
    echo "<h4>Subject: " . $ticketArray['subject'] . "</h4>";
    echo "</div>";
    echo "</div>";

    // Tcket Details
    echo "<div class='row'>";
    echo "<div class='small-12 columns'>";
    echo "<ul class='small-block-grid-1 medium-block-grid-4 large-block-grid-4'>";
    // Colour coding of priority level
    if ($ticketArray['priority'] == "Very High") {
        echo '<li>Priority: <font color="red">Very High</font></li>';
    } elseif ($ticketArray['priority'] == "High") {
        echo '<li>Priority: <font color="orange">High</font></li>';
    } elseif ($ticketArray['priority'] == "Medium") {
        echo '<li>Priority: <font color="yellow">Medium</font></li>';
    } else {
        echo '<li>Priority: <font color="green">Low</font></li>';
    };
    echo "<li>Room Number: " . $ticketArray['room'] . "</li>";
    echo "<li>Ticket Status: " . $ticketArray['status'] . "</li>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";

    // Issue description/further details
    echo "<div class='row'>";
    echo "<div class='small-12 columns'>";
    echo "<h5>Issue Description</h5>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='small-12 columns'>";
    echo "<textarea rows='10' cols='50' readonly>" . $ticketArray['description'] . "</textarea>";
    echo "</div>";
    echo "</div>";

}

mysqli_close($conn);
?>