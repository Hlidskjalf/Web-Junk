<!doctype html>
<!-- Created by Andrew Vroman on 02/15/2018 for Assignment 4 in 18SP - Web Development and Programming -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Assignment 4</title>
        <!-- CSS, normally in a separate file, but for brevity its here -->
        <style type="text/css" media="screen">
            .prime {
                color:red;
            }
            
            html, body {
                height: 100%;
                background: linear-gradient(#F7F7F7, #7AA9CA);
            }
            
            .form {
                margin: 0 auto;
                width: 700px;
                background: #FFFFFF;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 5px 12px;
                margin: 20px;
                text-align: center;
                border-radius: 10px;
                text-decoration: none;
                border: 1px solid #000000;
                font-size: 12px;
            }
            
            table, td, th {
                border: 2px solid #000000;
                border-collapse: collapse;
                padding: 8px;
            }
        </style>
    </head>
    <!-- Body -->
    <body>
        <?php
        // Form setup and styling
        print "<form class=\"form\" action=\"index.php\" method=\"post\">";
        print "<h1 style=\"text-align:center; color: blue; font-family: Helvetica, san-serif; padding-top: 30px;\">Number Chart</h1>";
        print "<p style=\"margin: 20px;\">Enter Limit: <input type=\"number\" step=\"10\" min=\"10\" max=\"500\" name=\"limit\" required></p>";
        print "<input type=\"submit\" name=\"submit\" value=\"Submit\" class=\"button\">";
        
        // Functional logic
        if(isset($_POST['limit'])){  // Only run with it if $limit has validated input
            $limit = $_POST['limit'];
            print "<div style=\"padding: 20px;\">";
            print "<table>";
            print "<tr>";
            print "<td colspan=\"10\" style=\"text-align:center; font-weight:bold\">1 - $limit Prime Numbers Are Red</td>";
            print "</tr>";
            print "<tr>";
            for ($i = 1; $i <= $limit; $i++){   // Inital loop
                if ($i % 10 == 1) {    // Break off at the 10's place to keep the form consistent
                    print "</tr>";
                } 

              $counter = 0;     // Disposable variable to count successful division cases

              for ($j = 1; $j <= $i; $j++){

                    if ($i % $j == 0){ // 1 and the actual value of $limit should be the only success cases here
                          $counter++;
                    }
              }

                // If the counter is 2, then the only success cases were $limit % 1 == 0 and $limit % $limit == 0, therefore is prime
                if ($counter != 2){
                    print "<td>$i</td>";    // Non-prime output
                } else {
                    print "<td class=\"prime\">$i</td>";   // red for the success cases of a prime
                }
            }
            print "</tr>";  
            print "</table>";
            print "</div>";
            print "</form>";
        } else {
            print "</form>";  // Closes the form if $limit is uninitialized
        }
        ?>
    </body>
</html>