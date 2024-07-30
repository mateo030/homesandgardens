<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO contact (username, email, msg) VALUES (:username, :email, :msg);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":msg", $msg);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location: ../index.php");
}