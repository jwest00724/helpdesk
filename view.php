<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Ticket Viewing Test
    </title>
    <!-- Zurb Foundation main stylesheet -->
    <link rel="stylesheet" href="css/foundation.css" />
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Media queries style sheet -->
    <link rel="stylesheet" href="css/media_queries.css" />
    <!-- modernizr.js to detect browser CSS3 and HTML5 feature supported by users browser -->
    <script src="js/vendor/modernizr.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <!-- Responsive Tables -->
    
</head>

<body>
    <div class="row">
        <div class="small-12 large-12 columns">
            <?php
            include 'db.php';

            $result = mysqli_query($conn,"SELECT * FROM tickets WHERE status = 'Open'");

            echo "<table class='responsive'>
            <tr>
                <th>Ticket Number</th>
                <th>Ticket Owner</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>More Info</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['ticketID'] . "</td>";
            echo "<td>" . $row['ticketOwner'] . "</td>";
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
            echo "<td><a href='view_ticket.php?ticketID=" . $row['ticketID'] . "' data-reveal-id='viewTicketModal' data-reveal-ajax='true'>View</a></td>";
            echo "</tr>";
            }
            echo "</table>";

            mysqli_close($conn);
            ?>
        </div>
    </div>
    <div id="viewTicketModal" class="reveal-modal" data-reveal></div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
        <script>
            $(document)
            .foundation({
                abide: {
                    patterns: {
                        bj_room_number: /(G|F|S{3})(\d{3})$/
                    }
                }
            });
    </script>
</body>