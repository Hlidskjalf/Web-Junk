<!doctype html>
<!-- Created by Andrew Vroman on 02/22/2018 for Assignment 5 in 18SP - Web Development and Programming -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Assignment 5</title>
        <!-- CSS, normally in a separate file, but for brevity its here -->
        <style type="text/css" media="screen">
            .negative {
                color:red;
            }
            
            .positive {
                color: green;
            }
            
            html, body {
                height: 100%;
                background: linear-gradient(#F7F7F7, #7AA9CA);
            }
            
            h1{
                text-align: left;
                color: blue;
                font-family: sans-serif;
                padding-top: 30px;
                margin: 10px;
            }
            
            p {
                margin: 10px;
            }
            
            form {
                margin: 5;
                width: 80%;
                background: #FFFFFF;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 5px 40px;
                margin: 10px;
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
        echo "<form action=\"index.php\" method=\"post\">";
        echo "<h1>US Census Population Change Calculator</h1>";
       
        // The primary two dimentional array, bascally a hash map
        $hash = [
            "1790" => "3929214",
            "1800" => "5236631",
            "1810" => "7239881",
            "1820" => "9638453",
            "1830" => "12866020",
            "1840" => "17069453",
            "1850" => "23191876",
            "1860" => "31443321",
            "1870" => "38558371",
            "1880" => "49371340",
            "1890" => "62979766",
            "1900" => "76212168",
            "1910" => "92228531",
            "1920" => "106021568",
            "1930" => "123202660",
            "1940" => "132165129",
            "1950" => "151325798",
            "1960" => "179323175",
            "1970" => "203211926",
            "1980" => "226545805",
            "1990" => "248709873",
            "2000" => "281421906",
            "2010" => "308745538"
        ];
        
        // Build dropdowns 
        // Year 1: 
        echo "<p>Year 1:";
        echo "<select name=\"year1\">";
        echo "<option selected=\"selected\">Choose one</option>";
        
        // Populate Year 1 by iterating over $hash
        foreach ($hash as $year => $population) {
        ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>;
        <?php
        }
        
        echo "</select>";
        echo "</p>";
        
        // Year 2:
        echo "<p>Year 2:";
        echo "<select name=\"year2\">";
        echo "<option selected=\"selected\">Choose one</option>";
        
        // Populate Year 2 by iterating over $hash
        foreach ($hash as $year => $population) {
        ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>;
        <?php
        }
        
        echo "</select>";
        echo "</p>";   
        
        // Submit button
        echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" class=\"button\">";
        
        // Check for a value, and set some default variables
        if (isset($_POST['year1']) and isset($_POST['year2'])) {
            $year1 = $_POST['year1'];
            $year2 = $_POST['year2'];
            $value1 = "";
            $value2 = "";

            // Set the population user-facing variables
            echo "<p><strong>------------------------------------------------------</strong></p>";
            foreach ($hash as $key => $value) {
                if ($year1 == $key) {
                    $value1 = $value;
                    $value_format1 = number_format($value1);
                    echo "<p>Population $year1: <strong>$value_format1</strong></p>";
                }
                if ($year2 == $key) {
                    $value2 = $value;
                    $value_format2 = number_format($value2);
                    echo "<p>Population $year2: <strong>$value_format2</strong></p>";
                }
            }
            echo "<p><strong>------------------------------------------------------</strong></p>";
            
            // Determing the change, if any, and display formatted output
            $final = $value2 - $value1;
            if ($final < 0) {  // Red if negative
                echo "<p class=\"negative\"><strong>The Population decreased by ";
                $final = abs($final);
                echo number_format($final);
                echo "</strong></p><br>";
            } else if ($final > 0) {   // Green if positive
                $formatted_final = number_format($final);
                echo "<p class=\"positive\"><strong>The Population increased by ";
                echo number_format($final);
                echo "</strong></p><br>";
            } else {   // No change
                echo "<p><strong>There was no change in population</strong></p>";
            }
            echo "</form>"; 
        } else {  // Close the form if blank
            echo "</form>";
        }
        ?>
    </body>
</html>