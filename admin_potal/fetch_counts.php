<?php
include('includes/db.php');
$mysqli = new mysqli("localhost", "root", "", "brass");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$totalQuotes = $mysqli->query("SELECT COUNT(*) as count FROM user_quotes")->fetch_assoc()['count'];
$approvedQuotes = $mysqli->query("SELECT COUNT(*) as count FROM user_quotes WHERE status = 'approved'")->fetch_assoc()['count'];
$pendingQuotes = $mysqli->query("SELECT COUNT(*) as count FROM user_quotes WHERE status = 'pending'")->fetch_assoc()['count'];
$rejectedQuotes = $mysqli->query("SELECT COUNT(*) as count FROM user_quotes WHERE status = 'rejected'")->fetch_assoc()['count'];


?>