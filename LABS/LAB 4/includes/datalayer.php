<?php

function databaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "databank_php";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully to <b>$dbName</b>";
        return $conn;
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

}

function retrieveMenuData() {
    $dbConn = databaseConnection();
    $sql = 'SELECT id, name FROM subjects';
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConn = null;
    return $result;
}

function retrieveSubjectData($id) {
    $dbConn = databaseConnection();
    $sql = 'SELECT * FROM subjects WHERE id =:id';
    $stmt = $dbConn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbConn = null;
    return $result;
}

function getDatabaseAmount() {
    $dbConn = databaseConnection();
    $sql = 'SELECT COUNT(id) AS AMOUNT FROM subjects';
    $stmt = $dbConn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbConn = null;
    return $result;
}

?>