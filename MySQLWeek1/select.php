<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    print_r($result);
    echo "<br>";
    echo "<br>";
    print_r($result->fetch_assoc());
    echo "<br>";
    echo "<br>";
    print_r($result->fetch_array());
    echo "<br>";
    echo "<br>";

    // output data of each row
    while($row = $result->fetch_array()) {
        echo "id: " . $row[0]. " - Name: " . $row[1]. " " .
        $row[2]. " - Email: " . $row[3]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>