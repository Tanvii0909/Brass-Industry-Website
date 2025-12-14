<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "brass");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;

}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'] ?? 'User';

// Fetch user quotes
$query = "
SELECT uq.id, c.category_name, p.product_name, uq.quantity, uq.message,
       IFNULL(uq.status, 'Pending') AS status, IFNULL(uq.admin_reply, '---') AS admin_reply
FROM user_quotes uq
JOIN categories c ON uq.category_id = c.category_id
JOIN product_variants pv ON uq.variant_id = pv.variant_id
JOIN products p ON pv.product_id = p.product_id
WHERE uq.user_id = ?
ORDER BY uq.id DESC;
";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile - Compaq Brass</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    margin: 0;
    padding: 0;
}
header {
    background: #007bff;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
