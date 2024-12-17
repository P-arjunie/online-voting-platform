<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votingsystem";


$UserName = $_POST['username'];
$Password = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Prepare and execute the query
$stmt = $conn->prepare("SELECT * FROM user WHERE UserName = ? AND Password = ?");
$stmt->bind_param("ss", $UserName, $Password);
$stmt->execute();
$result = $stmt->get_result();

// Check if a matching user was found
if ($result->num_rows == 1) {
    // User authenticated, perform further actions
    $row = $result->fetch_assoc();
    $authenticatedUserName = $row["UserName"];

    // Save the authenticated username in a session variable
    $_SESSION['username'] = $authenticatedUserName;
    header("Location: ../user%20account,rules%20&%20regulations/user%20account.php");
    exit();
    //echo "User authenticated and logged in!";
} else {
    echo "Invalid username or password!";
}

$stmt->close();
$conn->close();
?>

