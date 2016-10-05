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
        <style>
            body{
                background: chartreuse;
            }
            
        </style>
    </head>
    <body>
        <?php
            $host = "localhost";
            $name = "root";
            $password = "";
            $db = "exam";

            $conn = mysqli_connect($host,$name,$password,$db);

            if (!$conn) {
                    echo "eror";
            }
        ?>
    </body>
</html>
