<?php
$fname=$_POST["name"];
$faddress=$_POST["address"];
$femail=$_POST["email"];
$fpswd=$_POST["password"];

$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed.." .$conn->connect_error);
}
$sql="INSERT INTO register1 VALUES('$fname','$faddress','$femail','$fpswd')";
if($conn->query($sql)==TRUE) //or mysqli_query($conn,$sql)
{
    header("location:login1.html");
    
    
}
else{
    echo" Error:" .$sql ."<br>" .$conn->error;
}
$conn->close();


?>