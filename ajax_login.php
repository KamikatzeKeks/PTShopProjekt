<?php 
session_start();

$pw = $_POST['pw'];
$username = $_POST['username'];

$dbConnect = mysqli_connect("localhost", "root", "", "ebayfuerarme") or die (mysql_error());
$query = "SELECT Passwort FROM User Where Username = '" . $username . "';";

$result = mysqli_query($dbConnect, $query);

 while($row=mysqli_fetch_array($result)) {
        if($row[0] == $pw) {
            $_SESSION['username'] = $username;
            echo true;
        } else {
            echo false;
        }
    }
?>