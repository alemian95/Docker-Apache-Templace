<?php

_log("Cron started");
_log("Cron ended");



function _log(string $message) {

    $timestamp = date("Y-m-d H:i:s");

    print("$timestamp - $message\n");
    // _log_db($timestamp, $message);
}

// Example log insertion into db
// function _log_db(string $timestamp, string $message) {
//     $conn = null;

//     try {
//         $conn = new PDO("mysql:host=db;dbname=example", 'example', 'example');
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "Connected successfully";
//     } catch(PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//     }

//     if (! $conn) return;

//     $stmt = $conn->prepare("insert into cron (executed_at, message) values(:exec_at, :msg)");
//     $stmt->bindParam("exec_at", $timestamp);
//     $stmt->bindParam("msg", $message);
//     $stmt->execute();
// }
