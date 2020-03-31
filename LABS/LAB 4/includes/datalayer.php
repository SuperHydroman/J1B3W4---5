<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "databank_php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully to <b>$dbName</b>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT * FROM subjects WHERE id = '. $id .'.';

$data = $conn->query($sql);
?>