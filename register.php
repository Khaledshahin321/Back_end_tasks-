<?php
$conn=mysqli_connect("localhost","root","")or die("ERROR : Conn't the cerver");
$db = mysql_select_db($conn,"test1")or die ("Cannot connect to database");

?>