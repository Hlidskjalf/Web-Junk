<!doctype html>
<html>
    <!-- Head -->
    <head>
        <title>Assignment 3</title>
        <style>
                h1 {
                    text-align: center;
                    color: white;
                    background-color: #8B8B8B;
                }
    
                table {
                    background-color: #E2DFD8;
                }
    
        </style>
    </head>
    <!-- Body -->
    <body>
        <?php
            // Pull variables from index.html
            $r_width = $_POST['r_width'];
            $r_len = $_POST['r_len'];
            $r_height = $_POST['r_height'];
            $c_rad = $_POST['c_rad'];
            $c_height = $_POST['c_height'];
            // Calculate the volumes
            // Rectangle (Cuboid) = L * W * H
            // Cone = (pi((r^2)h)) / 3
            $pi = pi();
            $rad_sq = pow($c_rad, 2);
            $v_rect = ($r_len * $r_width) * $r_height;
            $v_cone = ($pi * (($rad_sq) * $c_height)) / 3;
            // Display the output
            print "<h1>Volume Calculator Output</h1>";
            print "<table width=100%>";
            print "<tr>";
            print "<td>Summary of Calculations:</td>";
            print "</tr>";
            print "<tr>";
            print "<td><br></td>";
            print "</tr>";
            print "<tr>";
            print "<td><strong>Volume of Rectangle</strong></td>";
            print "</tr>";
            print "<tr>";
            print "<td>Length: $r_len</td>";
            print "</tr>";
            print "<tr>";
            print "<td>Width: $r_width</td>";
            print "</tr>";
            print "<tr>";
            print "<td>Height: $r_height</td>";
            print "</tr>";
            print "<tr>";
            print "<td><br></td>";
            print "</tr>";
            print "<tr>";
            print "<td>The Volume of the Rectange is <strong>$v_rect</strong></td>";
            print "</tr>";
            print "<tr>";
            print "<td><br></td>";
            print "</tr>";
            print "<tr>";
            print "<td><strong>Volume of a Cone</strong></td>";
            print "</tr>";
            print "<tr>";
            print "<td>Radius: $c_rad</td>";
            print "</tr>";
            print "<tr>";
            print "<td>Height: $c_height</td>";
            print "</tr>";
            print "<tr>";
            print "<td>The Volume of the Cone is <strong>$v_cone</strong></td>";
            print "</tr>";
            print "</table>";
        ?>
    </body>