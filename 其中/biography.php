<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM test WHERE UID = '".$_POST["UID"]."' AND name = '".$_POST["name"]."'";
if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error ;
}
$conn->close();
?>