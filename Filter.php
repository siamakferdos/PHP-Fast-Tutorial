<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
              <td>Filter Name</td>
              <td>Filter ID</td>
            </tr>
            <?php
            foreach (filter_list() as $id =>$filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
            ?>
        </table>
        
        <hr>
        
        <?php
            $str = "<h1>Hello World!</h1>";
            $newstr = filter_var($str, FILTER_SANITIZE_STRING);
            echo "<p>Original : <h1>Hello World!</h1>";
            echo "Filtered: $newstr </p>";
        ?>
        
        <hr>
        
        <?php
            $int = 100.1;
            if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
                echo("Integer is valid");
            } else {
                echo("Integer is not valid");
            }
        ?>
        
        <hr>
        
        <?php
            $ip = "127.0.0.1";
            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo("$ip is a valid IP address");
            } else {
                echo("$ip is not a valid IP address");
            }
        ?>
        
        <hr>
        
        <?php
            $email = "john.doe@example.com";
            // Remove all illegal characters from email
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address");
            } else {
                echo("$email is not a valid email address");
            }
        ?>
        
        <hr>
        
        <?php
            $int = 122;
            $min = 1;
            $max = 200;

            if (filter_var($int, FILTER_VALIDATE_INT, 
                    array("options" => array("min_range"=>$min,
                        "max_range"=>$max))) === false) {
                echo("Variable value is not within the legal range");
            } else {
                echo("Variable value is within the legal range");
            }
        ?>
        
        <hr>
        
        <?php
            $url = "http://www.w3schools.com";

            // Remove all illegal characters from a url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Validate url
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo("$url is a valid URL");
            } else {
                echo("$url is not a valid URL");
            }
        ?>
        
        <p>
            <a href='http://www.w3schools.com/php/php_ref_filter.asp'>Full Filters Link</a>
        </p>
    </body>
</html>
