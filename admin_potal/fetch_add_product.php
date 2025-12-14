<?php
include('includes/db.php');
// Load categories
//$categories = $mysqli->query("SELECT category_id, category_name FROM categories");

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];

    // Upload image
    $upload_dir = "uploads/";
    $image_name = time() . "_" . basename($_FILES["product_image"]["name"]);
    $target_file = $upload_dir . $image_name;

    if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
        // Insert product
        $stmt = $mysqli->prepare("INSERT INTO products (product_name, category_id, description, image_url) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $name, $category_id, $description, $target_file);
        $stmt->execute();
        $product_id = $stmt->insert_id;

        // Insert variants
        for ($i = 0; $i < count($_POST['size']); $i++) {
            $size = $_POST['size'][$i];
            $weight = $_POST['weight'][$i];
            $unit = $_POST['unit'][$i];
            $material = $_POST['material'][$i];
            $finish = $_POST['finish'][$i];

            $variant_stmt = $mysqli->prepare("INSERT INTO product_variants (product_id, size, weight, unit, material, finishing) VALUES ( ?, ?, ?, ?, ?, ?)");
            $variant_stmt->bind_param("isddss", $product_id, $size, $weight, $unit, $material, $finish);
            $variant_stmt->execute();
        }

        echo "<h1 style='color: green;'>Product and variants saved!</h1>";
        echo "<h3>You will be redirected shortly...</h3>";
        header("refresh:1; url=add_product.php"); // 1 second wait then redirect
    } else {
        echo "<p style='color: red;'>Image upload failed!</p>";
    }
}
?>