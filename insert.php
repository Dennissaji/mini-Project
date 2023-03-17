<?php
  $server="localhost:3325";
  $username="root";
  $password="dennis";
  $dbname="login";

  $name=$_POST['username'];
  $pass=$_POST['password'];

  $conn = mysqli_connect($server,$username,$password,$dbname);

  if($conn)
  { $sql="INSERT INTO `details` (username,pass) values ('$name','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<h> data inserted succesfully";
    }
}