<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php Tutorial</title>
    </head>
    <body>
        <?php
        #1
        echo "<br />Inline var: ";
        $txt = "W3Schools.com";
        echo "I love $txt!"; 
        var_dump($txt);
        
        #2
        echo "<br /><br />Concat var: ";
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!<br />";
        //+=, + use only for numbers. For strings use .=, .
        $txt += " New Text 1";
        echo $txt;
        var_dump($txt);
        $txt .= " New Text 2";
        echo $txt;
        var_dump($txt);
        
        #3
        echo "<br /><br />Global var: ";
        $x = 5; // global scope
        function myTest() {
        global $x;
        // using x without general keyword inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        
        //We can use $GLOBALS to access global variable too
        $GLOBALS["x"]++;
        } 
        myTest();
        echo "<p>Variable x outside function is: $x</p>";
        var_dump($GLOBALS["x"]);
        
        #4
        echo "<br />Static var: ";
        function myTest1() {
            static $x = 0;
            echo $x;
            $x++;
        }
        myTest1();
        myTest1();
        myTest1();
        var_dump($x);

        #5
        echo "<br />Array var: ";
        $cars = array("Volvo","BMW","Toyota");
        echo $count = count($cars);
        echo "<br>";
        for($i = 0; $i < $count; $i++) {
            echo $cars[$i];
            echo "<br>";
        }
        var_dump($cars);
        
        
        #6
        echo "<br />Object var: ";
        class Car {
            function Car() {
                $this->model = "VW";
            }
        }
        // create an object
        $herbie = new Car();
        $herbie->model = "Volvo";
        // show object properties
        echo $herbie->model;
        var_dump($herbie);
        
               
        ?>
        
        <!--#7-->
        Useful Global Variables:<br />
        <?php 
        echo "Current File: " . $_SERVER['PHP_SELF'];
        echo "<br>";
        echo "Server Name: " . $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "Host header: " . $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo "Complete URL of the current page: " . $_SERVER['HTTP_REFERER'];
        echo "<br>";       
        ?>
        
    </body>
</html>
