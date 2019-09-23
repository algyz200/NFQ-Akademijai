 <?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'registerdb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, surname FROM registertable ORDER by id Limit 3";
$result = $conn->query($sql);

echo "Waiting list (first at the top):". "<br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]. " " . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 