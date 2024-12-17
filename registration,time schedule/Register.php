<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votingsystem";


$FirstName = $_POST['firstName'];
$SecondName = $_POST['second'];
$DOB = $_POST['DOB'];
$Code = $_POST['code'];
$Email = $_POST['Email'];
$Gender = $_POST['gender'];
$ContactNo  = $_POST['phone'];
$Address = $_POST['no'] . ' ' . $_POST['line2'] . ' ' . $_POST['line3'];
$Province = $_POST['province'];
$UserName  = $_POST['username'];
$Password  = $_POST['Password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$sql = "INSERT INTO user (FirstName, SecondName, DOB, Code, Email, Gender, ContactNo, Address, Province, UserName, Password)
        VALUES ('$FirstName', '$SecondName', '$DOB', '$Code', '$Email', '$Gender', '$ContactNo', '$Address', '$Province', '$UserName', '$Password')";

if ($conn->query($sql) === TRUE){
    echo  "User Added!";
    header("Location:Confirmation pg.html");

}
else{
    echo "Error: " . $conn->error;
}

$conn->close();

?>