<?php
 $servername = "localhost";
 $username = "admin";
 $password = "123";
 $dbname = "strona";


 $conn = mysqli_connect($servername, $username, $password, $dbname);

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
             }
 @mysqli_query($conn, 'SET NAMES utf8');
?>
	