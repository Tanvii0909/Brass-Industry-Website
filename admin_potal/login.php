<?php
include('includes/db.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $hashedPassword = hash('sha256', $password); 

        $sql = "SELECT * FROM admin_users WHERE username = ? AND password = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $username, $hashedPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            echo "<script>alert('Login successful!'); window.location.href='dashboard.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid username or password.'); window.location.href='index.html';</script>";
            exit;
        }
        

        $stmt->close();
        $mysqli->close();
    } 
    else {
        $error = "Please enter both username and password.";
    }

?>