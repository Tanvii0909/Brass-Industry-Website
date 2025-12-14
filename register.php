<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compaq Brass Works - Register Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f4e5;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(135deg, #f8f4e5 0%, #f0e6c6 100%);
        }
        .container {
            width: 100%;
            max-width: 420px;
            margin: 80px auto;
            padding: 30px;
            background: rgba(248, 244, 229, 0.92);
            border-radius: 12px;
            box-shadow: 
                0 0 16px rgba(184, 138, 61, 0.15),
                0 0 1px rgba(184, 138, 61, 0.5);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(217, 166, 72, 0.4);
        }
        h2 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #C9A227, #B88A3D);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 12px 0;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #B88A3D;
            box-shadow: 0 0 0 4px rgba(184, 138, 61, 0.15);
            background-color: #fff;
        }
        input[type="submit"] {
            background: linear-gradient(135deg, #C9A227 0%, #B88A3D 100%);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background: linear-gradient(135deg, #2f6690 0%, #3a7ca5 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(47, 102, 144, 0.2);
        }
        .message {
            text-align: center;
            margin-top: 10px;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form method="POST">
        Name: <input name="name" type="text" required><br>
        Email: <input name="email" type="email" required><br>
        Password: <input name="password" type="password" required><br>
        Confirm Password: <input name="confirm_password" type="password" required><br>
        <input type="submit" name="register" value="Register">
    </form>
    <div class="message">
        <?php
       session_start();
       $conn = new mysqli("localhost", "root", "", "brass");
       
       if (isset($_POST["register"])) {
           $name = trim($_POST["name"]);
           $email = trim($_POST["email"]);
           $password = $_POST["password"];
           $confirm_password = $_POST["confirm_password"];
       
           if ($password !== $confirm_password) {
               echo "❌ Passwords do not match.";
           } else {
               $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
               $stmt->bind_param("s", $email);
               $stmt->execute();
               $stmt->store_result();
       
               if ($stmt->num_rows > 0) {
                   echo "❌ Email already registered.";
               } else {   
                   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                   $insert_stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                   $insert_stmt->bind_param("sss", $name, $email, $hashed_password); 
                 
                   if ($insert_stmt->execute()) {
                        echo "<script>alert('Register successful!'); window.location.href='login.php';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Invalid username or password.'); window.location.href='register.php';</script>";
                        exit;
                    }
       
                   $insert_stmt->close();
               }
       
               $stmt->close();
           }
       }
       ?>
    
    </div>
    <div class="login-link">
        <a href="login.php">Already have an account? Login here</a>
    </div>
</div>

</body>
</html>
