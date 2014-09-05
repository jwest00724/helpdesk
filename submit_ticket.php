<?php
//retrieve our data from POST
$ticketOwner = $_POST['ticketOwner'];
$ticketOwnerEmail = $_POST['ticketOwnerEmail'];
$subject = $_POST['subject'];
$priority = $_POST['priority'];
$room = $_POST['room'];
$description = $_POST['description'];

// Connect to database
include 'db.php';

// INSERT query (inserts ticket data into db
$submitQuery = "INSERT INTO tickets ( ticketOwner, ticketOwnerEmail, subject, priority, room, description )
        VALUES ( '$ticketOwner', '$ticketOwnerEmail', '$subject', '$priority', '$room', '$description' );";

// Run query
$submitResult = mysqli_query($conn,$submitQuery) or die("Error: ".mysqli_error($conn)); // Run query, die if errors

// Close conn
mysqli_close($conn);

// Redirect user
header('Location: user_home.php?success');

?>

<!-- TODO: Email notifications -->