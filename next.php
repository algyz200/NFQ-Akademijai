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

//$sql = "SELECT name, surname FROM registertable ORDER by id";

$sql = "SELECT min(id), id, name, surname FROM registertable";

//$sql = "SELECT id, name, surname FROM registertable WHERE id=min(id)";

$result = $conn->query($sql);

echo "Curent client:". "<br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. " " . $row["name"]. " " . $row["surname"]. "<br>";
        $myid = $row["id"];
    }
} else {
    echo "0 results";
}

$sql = "DELETE FROM registertable WHERE id=$myid";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>

			<button type="submit"  onClick="refreshPage()">NEXT</button>
	</form>	
</body>
</html>



 