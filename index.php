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
        
        <!-- The main Difference between INCLUDE and REQUIRE statement to call 
        a php file is that if a file not exist on path REQUIRE rise an error
        where INCLUDE does not -->
        <?php include './header.php';?>
        
        <?php
            echo "Hello World </br>";
            print "I'm coming into PHP <br />";
            printf("I've just began <br />");
            print_r("<p><a href='Variables.php'>Variables</a></p>");
            echo "<p><a href='Form.php'>Forms</a></p>";
            echo "<p><a href='Cookie.php'>Cookies</a></p>";
            echo "<p><a href='Session.php'>Sessions</a></p>";
            echo "<p><a href='Filter.php'>Filters</a></p>";
            echo "<p><a href='ErroHandling.php'>Erro Handling</a></p>";
            echo "<p><a href='MySQLi.php'>MySQLi</a></p>";
        ?>
        
        
        <?php require 'footer.php';?>
    </body>
</html>
