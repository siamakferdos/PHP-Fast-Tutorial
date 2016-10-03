<?php
    $cookie_name = "user";
?>

<html>    
    <body>
        <?php            
            if(!isset($_COOKIE[$cookie_name])) {
                $cookie_value = "Alex Porter";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                echo "Cookie named '" . $cookie_name . "' is not set!";                  
            }else{            
                echo "Cookie '" . $cookie_name . "' is set!<br>";                        
            }
            
        ?>
    </body>    
</html>
