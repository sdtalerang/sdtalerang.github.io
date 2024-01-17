<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$fname = $conn->real_escape_string($_REQUEST['fname']);
$lname = $conn->real_escape_string($_REQUEST['lname']);
$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['password']);
$cpassword = $conn->real_escape_string($_REQUEST['cpassword']);

// Validate passwords match
if ($password != $cpassword) {
 echo "<div class='error'>Passwords do not match.</div>";
 exit;
}

// Create SQL statement
$sql = "INSERT INTO Users (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
