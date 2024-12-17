<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $ques = mysqli_real_escape_string($conn, $_POST['subject']);


    $sql = "INSERT INTO details1 (Fname, Lname, email, question)
            VALUES ('$fname', '$lname', '$email', '$ques')";

    if ($conn->query($sql)) {
        echo "<br><p><b>Question added!</b><p>";
        header("Location:finalcontactus.html");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
