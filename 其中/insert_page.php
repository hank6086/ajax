<?php
//echo "Welcome ~ " . $_POST["name"] . "<br>";
//echo "Your email address is: " . $_POST["email"] . "<br>";
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


if (isset($_POST['Submit'])) {
    $sql = "INSERT INTO test (name, UID,cha) VALUES ('" . $_POST["name"] . "', '" . $_POST["UID"] . "','" . $_POST["cha"] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "新增成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['updata'])) {
    $sql = "UPDATE test SET cha = '" . $_POST["cha"] . "' WHERE name = '" . $_POST["name"] . "'";
    if ($conn->query($sql) === TRUE) {
        echo "更新成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




$conn->close();
