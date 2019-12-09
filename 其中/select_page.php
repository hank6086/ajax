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
$sql = "SELECT cha, name, UID FROM test";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - ID: " . $row["UID"]. " - 角色: " . $row["cha"].'<input type="submit" id="del" name="del" value="刪除" onclick="del()">'."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>