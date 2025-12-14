<?php
$success = "";
$error = "";

$mysqli = new mysqli("localhost", "root", "", "brass");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$selected_category_id = isset($_POST['category_id']) ? (int)$_POST['category_id'] : 0;
$selected_variant_id  = isset($_POST['variant_id']) ? (int)$_POST['variant_id'] : 0;
$old = $_POST ?? [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_quote'])) {
    $user_name  = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $category_id = (int)$_POST['category_id'];
    $product_id = (int)$_POST['variant_id'];
    $quantity   = (int)$_POST['quantity'];
    $message    = $_POST['message'];
    $stmt = $mysqli->prepare("INSERT INTO user_quotes 
        (user_name, user_email, user_phone, category_id, variant_id, quantity, message) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssiiis", $user_name, $user_email, $user_phone, $category_id, $product_id, $quantity, $message);
        if ($stmt->execute()) {
            $success = "Quote request submitted successfully!";
            $old = []; 
        } else {
            $error = "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error = "Error preparing statement: " . $mysqli->error;
    }
}
$category_result = $mysqli->query("SELECT category_id, category_name FROM categories");
$product_result = null;
if ($selected_category_id) {
    $product_query = "
        SELECT pv.variant_id, p.product_name, pv.size, pv.weight
        FROM product_variants pv
        JOIN products p ON pv.product_id = p.product_id
        WHERE p.category_id = $selected_category_id
    ";
    $product_result = $mysqli->query($product_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Quote - Compaq Brass</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body>
<?php include('assets/includes/close.php'); ?>


    <div class="container">
        <h2>Request a Quote</h2>

        <div class="message">
            <?php if (!empty($success)) echo "<p class='success'>$success</p>"; ?>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        </div>

        <form method="post" action="">
            <label>Name:</label>
            <input type="text" name="user_name" value="<?= htmlspecialchars($old['user_name'] ?? '') ?>" required>

            <label>Email:</label>
            <input type="email" name="user_email" value="<?= htmlspecialchars($old['user_email'] ?? '') ?>" required>

            <label>Phone:</label>
            <input type="text" name="user_phone" value="<?= htmlspecialchars($old['user_phone'] ?? '') ?>">

            <label>Category:</label>
            <select name="category_id" onchange="this.form.submit()" required>
                <option value="">-- Select Category --</option>
                <?php while ($row = $category_result->fetch_assoc()): 
                    $selected = ($selected_category_id == $row['category_id']) ? "selected" : "";
                ?>
                    <option value="<?= $row['category_id'] ?>" <?= $selected ?>>
                        <?= $row['category_name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <?php if ($product_result): ?>
                <label>Product:</label>
                <select name="variant_id" required>
                    <option value="">-- Select Product Variety --</option>
                    <?php while ($row = $product_result->fetch_assoc()): 
                        $selected = ($selected_variant_id == $row['variant_id']) ? "selected" : "";
                    ?>
                        <option value="<?= $row['variant_id'] ?>" <?= $selected ?>>
                            <?= $row['product_name'] ?> - Size: <?= $row['size'] ?> - Weight: <?= $row['weight'] ?>g
                        </option>
                    <?php endwhile; ?>
                </select>
            <?php endif; ?>

            <?php if ($selected_category_id): ?>
                <label>Quantity:</label>
                <input type="number" name="quantity" min="1" value="<?= htmlspecialchars($old['quantity'] ?? '') ?>" required>

                <label>Message:</label>
                <textarea name="message" rows="4" cols="40"><?= htmlspecialchars($old['message'] ?? '') ?></textarea>

                <input type="submit" name="submit_quote" value="Submit Request">
            <?php endif; ?>
        </form>
    </div>
</body>
</html>