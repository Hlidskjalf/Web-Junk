<!doctype html>
<html>
    <!-- Head -->
    <head>
        <title>Assignment 1</title>
        <h1>PHP And HTML</h1>
    </head>
    <!-- Body -->
    <body>
        <p>Learning HTML is fun<br>Learning HTML is very easy</p>
        <?php
            print "<style>.php_style {font-size:2em; font-weight:bold; font-style:italic;}</style>";
            print "<p class=\"php_style\">Learning PHP is fun<br>Learning PHP is very easy</p>";
        ?>
    </body>
</html>