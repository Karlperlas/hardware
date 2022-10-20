<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbName = "hardware_supplies";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbName);
 
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }