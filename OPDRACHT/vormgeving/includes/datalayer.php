<?php

function databaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "j1b3w4-5";

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

function retrieveCharacters() {
    $dbConn = databaseConnection();
    $sql = 'SELECT * FROM characters ORDER BY name ASC';
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConn = null;
    return $result;
}

function retrieveSpecificCharacter($id) {
    $dbConn = databaseConnection();
    $sql = 'SELECT * FROM characters WHERE id=:id';
    $stmt = $dbConn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConn = null;
    return $result;
}

function getAmount() {
    $dbConn = databaseConnection();
    $sql = 'SELECT COUNT(id) AS AMOUNT FROM characters';
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbConn = null;
    return $result;
}

?>
