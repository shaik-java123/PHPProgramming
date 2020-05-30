<?php
include("config.php");
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);

$password = stripcslashes($password );

//$con = mysqli_connect("localhost:8889","admin","mysql","login");

if (mysqli_connect_errno()) {
  echo "<font color=red>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


$sql = "SELECT * FROM users";

$result = mysqli_query($db, $sql);

         
             while($row = mysqli_fetch_assoc($result)) {
               if($row["username"] == $username && $row["password"] == $password){
                echo "Login Success , Welcome".$username;
               }
               else {
                echo "Login Failed for ".$username;
             }
            } 
           
         
         mysqli_close($db);




?>
