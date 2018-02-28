<!doctype html>
<html>
    <!-- Head -->
    <head>
        <title>Assignment 2</title>
        <style>

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 50%;
            }

            .lead {
                text-align: left;
            }

            .user_data {
                text-align: center;
            }

            td, th, td {
                border: 2px solid #64B9F9;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <!-- Body -->
    <body>
        <?php // PHP Script assignment2.php 
            // Variables to store HTML Form entries
            $name = $_POST['name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $email = $_POST['email'];
            $response = $_POST['response'];
            $notes = $_POST['notes'];
            // Display output to the user
            print "<h1>Customer Record</h1>";
            print "<table>";
            print "<tr>";
            print "<td class=\"lead\">Name</td>";
            print "<td class=\"user_data\">$name</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">Address</td>";
            print "<td class=\"user_data\">$address</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">City</td>";
            print "<td class=\"user_data\">$city</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">State</td>";
            print "<td class=\"user_data\">$state</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">Zip Code</td>";
            print "<td class=\"user_data\">$zip</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">Email</td>";
            print "<td class=\"user_data\">$email</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">Customer type</td>";
            print "<td class=\"user_data\">$response</td>";
            print "</tr>";
            print "<tr>";
            print "<td class=\"lead\">Notes</td>";
            print "<td class=\"user_data\">$notes</td>";
            print "</tr>";
            print "</table>";
        ?>
    </body>
</html>