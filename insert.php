<?php

$username = 'root';
$password = '';
$dbname = 'registerdb';


// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST["name"];
$surname = $_POST["surname"];

$sql = "INSERT INTO registertable (name, surname)
VALUES ('$name', '$surname')";

if ($conn->query($sql) === TRUE) {
    echo "You have been added to the queue. Please have a seat";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>




