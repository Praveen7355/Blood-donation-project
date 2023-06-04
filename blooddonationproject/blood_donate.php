<?php

$servername="localhost";
$username="root";
$password="";
$dbname="test";

$bdname=$_POST["fullname"];
$bdaddress=$_POST["address"];
$bdemail=$_POST["email"];
$bdgroup=$_POST["bloodgroup"];
$bdid=$_POST["id"];
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed.." .$conn->connect_error);
}

$sql="INSERT INTO regblooddonate VALUES('$bdname','$bdaddress','$bdemail','$bdgroup','$bdid')";

$result=$conn->query($sql);

if($result==TRUE) //or mysqli_query($conn,$sql)
{
    header("location:display_value.php");
    
    
}
else{
    echo" Error:" .$sql ."<br>" .$conn->error;
}
$conn->close();
?>