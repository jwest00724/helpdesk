<?php
$ticketClosing = htmlspecialchars($_GET["close"]);
echo $ticketClosing;
include 'db.php';
$closeTicket = mysqli_query($conn,"UPDATE tickets SET status = 'Closed' WHERE ticketID = '" .$ticketClosing. "'") or die("Error: ".mysqli_error($conn));
header('Location: view.php');
?>

