<?php
session_start();
include('includes/db.php');
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (!empty($username) && !empty($password)) {
        $hashedPassword = hash('sha256', $password);
        $check_sql = "SELECT * FROM admin_users WHERE username = ?";
        $check_stmt = $mysqli->prepare($check_sql);
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        if ($check_result->num_rows > 0) {
            $message = "<span style='color:red;'>⚠️ Username already exists!</span>";
        } else {
            // Insert new admin
            $insert_sql = "INSERT INTO admin_users (username, password) VALUES (?, ?)";
            $insert_stmt = $mysqli->prepare($insert_sql);
            $insert_stmt->bind_param("ss", $username, $hashedPassword);

            if ($insert_stmt->execute()) {
                $message = "<span style='color:green;'>✅ New admin added successfully!</span>";
            } else {
                $message = "<span style='color:red;'>❌ Error adding admin!</span>";
            }
            $insert_stmt->close();
        }
        $check_stmt->close();
    } else {
        $message = "<span style='color:red;'>⚠️ Please fill all fields!</span>";
    }
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Admin</title>
    <link rel="stylesheet" href="assets/css/dashboard.css"> <!-- optional if you have -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 420px;
            margin: 80px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: maroon;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: maroon;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: darkred;
        }
        .message {
            text-align: center;
            margin-top: 15px;
            font-size: 15px;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .back:hover {
            color: maroon;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Admin</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter new admin username" required>
        <input type="password" name="password" placeholder="Enter new admin password" required>
        <button type="submit">Add Admin</button>
    </form>

    <div class="message"><?php echo $message; ?></div>
    <a href="dashboard.php" class="back">← Back to Dashboard</a>
</div>

</body>
</html>
