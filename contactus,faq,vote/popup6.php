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
        VALUES (6, '$UserName')";

if ($conn->query($sql) === TRUE) {
    header("Location:finalvote.html");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>