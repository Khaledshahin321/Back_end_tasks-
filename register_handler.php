<?php
$servername="localhost";
$username="root";
$password="";
$db="test1";

$conn=mysqli_connect($servername,$username,$password,$db)or die("ERROR : Conn't the cerver");

$Name =$_POST['name'];
$BirthDate = $_POST['birthday'];
$Gender = $_POST['gender'];
$Class = $_POST['class'];
$Registration_Code = $_POST['res_code'];


$insterUser="INSERT INTO user(Name,BirthDate,Gender,Class,Registration_Code) 
VALUES('$Name','$BirthDate','$Gender','$Class','$Registration_Code')";

$result= mysqli_query($conn,$insterUser);

if($result===TRUE)
{ 	  	
	echo "<h1>User Created Succefully</h1>";
}else
{
	echo"ERROR : ".mysqli_error($conn);
}