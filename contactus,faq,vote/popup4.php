<?php


$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "votingsystem";

$UserName = $_COOKIE["username"];


// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vote (CanidateId, VoteBy)
        VALUES (4, '$UserName')";

if ($conn->query($sql) === TRUE) {
    header("Location:history.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>