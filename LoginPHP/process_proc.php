

<?php
/*
This is simple php program to check database
table values exist or not as per to input form parameters and display message to user_error
This method used here is procedural style
@author : Shaik

**/

include("config.php");
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);

$password = stripcslashes($password);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username FROM users where username='$username'  and password='$password' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<font color=green>Login Successful </font>, Welcome Mr " . $row['username'];
    }
} else {
    echo "<font color=red>Login Failed for " . $username;
}
mysqli_close($conn);

?>