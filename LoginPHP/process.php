

<?php
/*
This is simple php program to check database
table values exist or not as per to input form parameters and display message to user_error
This method used here is object oriened
@author : Shaik

**/

include("config.php");
$username = $_POST['user'];
$password = $_POST['pass'];
$nameErr ="";
if (empty($_POST["user"])) {
    $nameErr = "Name is required";
  } 

echo $nameErr;

$username = stripcslashes($username);

$password = stripcslashes($password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users where username='$username'  and password='$password' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Login Successful , Welcome Mr " . $row['username'];
    }
} else {
    echo "<font color=red>Login Failed for " . $username;
}
$conn->close();

?>