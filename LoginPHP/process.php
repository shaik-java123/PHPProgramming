<?php
include("config.php");
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);

$password = stripcslashes($password );


//$con = mysqli_connect("localhost:8889","admin","mysql","login");

if (mysqli_connect_errno()) {
  echo "<font color=red>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT username FROM users where username='$username'  and password='$password' ";
  
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Login Successful , Welcome Mr " . $row['username'];
    }
  } else {
    echo "<font color=red>Login Failed for ".$username;
  }
  $conn->close();

?>
