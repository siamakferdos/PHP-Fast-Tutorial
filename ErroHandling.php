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
        <?php
            function customError($errno, $errstr) {
                echo "<b>Error:</b> [$errno] $errstr<br>";     
                //die(Error);
            }
            set_error_handler("customError");
            
            if(!file_exists("welcome.txt") && 1 != 1) {
              die("File not found");
            } else {
              $file=fopen("welcome.txt","r");
            }
            
            echo "<br>";
            $test=2;
            if ($test>=1) {
              trigger_error("Value must be 1 or below");
            }    
            
            
            $to = "somebody@example.com";
            $subject = "My subject";
            $txt = "Hello world!";
            $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: siamak.ferdos@gmail.com";
            mail($to,$subject,$txt,$headers);
            
        ?>
        
        <hr>
        <b>die(message):</b> will show a message and terminate to process
        of page.
    </body>
</html>
