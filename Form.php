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
        <p style='color:red; font-weight: 700;'> Note: $_SERVER['PHP_SELF'] can 
            be hacked easily. 
            We should validate form before response at server side!!!</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>
        
        <p>$_REQUEST</p>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_REQUEST['fname'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>
        
        
        <p>$_POST</p>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['fname'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>
        
        <p>$_GET</p>
        <a href="Form.php?subject=PHP&web=W3schools.com">Test $GET</a>
        <?php
            if(isset($_GET['subject']) && isset($_GET['web']))
                echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
        ?>
        
        <p>
            <form action="Form.php" method="get">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
            </form>
        </p>
        <?php
            if(isset($_GET['name'])){
                echo 'Welcome ' . $_GET["name"] . '<br>';            
                echo 'Your email address is: ' . $_GET["email"];
            };                    
        ?>
        
       
    </body>
</html>
