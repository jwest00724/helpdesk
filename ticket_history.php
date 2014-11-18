<?php $pageName='Helpdesk - Ticket History' ; include 'header.php'; ?>

<!-- Begin Page Content -->

<!-- Logo and logout + ticket history buttons -->
<div class="row">
    <div class="small-12 large-9 columns">
        <h1 class="logo heading">Helpdesk.</h1>
        <h4 class="subheader heading">Bishop Justus IT Support System</h4>
    </div>
    <div class="small-12 large-3 columns">
        <ul class="inline-list">
            <li><a href="user_home.php" class="menu hide-for-small-only">Home</a>
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
        <p class="logout show-for-small-only"><a href="user_home.php">Home</a>
        </p>
    </div>
</div>

<!-- Ticket history modal -->
<div class="row">
    <div class="small-12 large-12 columns">
        <?php
        include 'db.php';

        $result = mysqli_query($conn,"SELECT * FROM tickets WHERE ticketOwner = '" .$_SESSION['sess_username']. "'");

        echo "<table class='responsive'>
            <tr>
                <th>Ticket Number</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>Status</th>
                <th>More Info</th>
            </tr>";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td>" . $row['ticketID'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                if ($row["priority"] == "Very High") {
                    echo '<td><font color="red">Very High</font></td>';
                    } elseif ($row["priority"] == "High") {
                        echo '<td><font color="orange">High</font></td>';
                    } elseif ($row["priority"] == "Medium") {
                        echo '<td><font color="yellow">Medium</font></td>';
                    } else {
                        echo '<td><font color="green">Low</font></td>';
                    }
                echo '</td>';
                echo "<td>" . $row['status'] . "</td>";
                echo "<td><a href='view_ticket_history.php?ticketID=" . $row['ticketID'] . "' data-reveal-id='viewTicketModal' data-reveal-ajax='true'>View</a>   </td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conn);
        ?>
    </div>
</div>
<div id="viewTicketModal" class="reveal-modal" data-reveal></div>

<?php include 'footer.php';?>