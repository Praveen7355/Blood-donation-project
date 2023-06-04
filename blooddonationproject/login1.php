<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="test";

   if($_SERVER["REQUEST_METHOD"] =="POST")
   {
$conn =new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error)
  {
    die("connection failed..." . $conn->connect_error);
  }

  $fname=$_POST["name"];
  $fpswd=$_POST["password"];

  $sql="SELECT  *FROM register1 WHERE name='$fname' AND password='$fpswd'";
 $result=$conn->query($sql);

 if($result->num_rows>0)
 {
   header("location:home1.html");
    echo "<center><h1>Login successfully....</h1></center>";
 }
 else {
    echo "<center><h1>Login failed or invalid user</h1></center>";
    
 }
 $conn->close();
   
}





?>