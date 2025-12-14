<?php
 include('includes/db.php');

// Update status 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_quote'])) {
    $quote_id = (int)$_POST['quote_id'];
    $status = $_POST['status'];
    $admin_reply = $_POST['admin_reply'];

    $stmt = $mysqli->prepare("UPDATE user_quotes SET status = ?, admin_reply = ? WHERE id = ?");
    $stmt->bind_param("ssi", $status, $admin_reply, $quote_id);

    if ($stmt->execute()) {
        echo "<h1 style='color: green;'>Quote updated successfully.</h1>";
        echo "<h3>You will be redirected shortly...</h3>";
        header("refresh:1; url=rp_quotes.php"); // 1 second wait then redirect
    } else {
        $error = "Update failed: " . $stmt->error;
    }
    $stmt->close();
}
?>