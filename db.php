<!DOCTYPE html>
<html>
<body>
<?php
session_start();
  
  $server="localhost:3325";
  $username="root";
  $password="dennis";
  $dbname="login";

  $name=$_POST['username'];
  $pass=$_POST['password'];

  $conn = mysqli_connect($server,$username,$password,$dbname);

  if($conn)
  { 
    $sql="SELECT * FROM details where username='$name' && pass='$pass' ";
    $res = $conn->query($sql);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
        $_SESSION['status']="login successful";
        echo '<script>alert ("login succesful")</script> ';
        header("location:home.php");
    }
    else
    {   $_SESSION['status']="invalid user name or password";
        header("location:login.php");
        
    
  }
}
  else{
    echo "connection failed ";
  }


?>
</body>
<script>
function delay(){
  location.href="http://localhost/mini%20project/login.php"
}
setTimeout(delay,1);


</script>
</html>