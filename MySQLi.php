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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "1st";
        ?>
        
        <?php
            $con=mysqli_connect($servername,$username,$password,$dbname);
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

            // Perform queries and print out affected rows
            mysqli_query($con,"SELECT * FROM wp_posts");
            echo "Affected rows: " . mysqli_affected_rows($con);
        ?>
        
        <hr>
        
        <?php
            $sql = "Select * from wp_posts LIMIT 4";
            if ($result=mysqli_query($con,$sql))
            {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
              {
                printf ("<p> %s (%s)</p>",$row[3],$row[2]);
              }
            // Free result set
            mysqli_free_result($result);
          }
          
        ?>
        
        <hr>
        
        <?php
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";

            if ($con->query($sql) === TRUE) {
                $last_id = $con->insert_id;
                echo "(Object-Oriented) New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            echo "<br>";
            if (mysqli_query($con, $sql)) {
                $last_id = mysqli_insert_id($con);
                echo "(Procedural) New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            
            echo "<br>";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                VALUES ('John', 'Doe', 'john@example.com')";
                // use exec() because no results are returned
                $conn->exec($sql);
                $last_id = $conn->lastInsertId();
                echo "(PDO) New record created successfully. Last inserted ID is: " . $last_id;
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
        ?>
        
        <?php
          mysqli_close($con);
        ?>    
        
        <hr>
        <a href="http://www.w3schools.com/php/php_mysql_intro.asp">
            More Information & Tutorials
        </a>
    </body>
</html>
