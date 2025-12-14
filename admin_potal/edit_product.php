<?php
include('includes/db.php');

$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$product = $mysqli->query("SELECT * FROM products WHERE product_id = $product_id")->fetch_assoc();
if (!$product) {
    die("Product not found.");
}

$categories = $mysqli->query("SELECT * FROM categories");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $mysqli->real_escape_string($_POST['product_name']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $category_id = (int)$_POST['category_id'];

    $image_url = $product['image_url'];
    
    if (!empty($_FILES['image_file']['name'])) {
        $upload_dir = 'uploads/';
        $filename = time() . '_' . basename($_FILES['image_file']['name']);
        $target_file = $upload_dir . $filename;

        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($image_type, $allowed)) {
            if (move_uploaded_file($_FILES['image_file']['tmp_name'], $target_file)) {
                $image_url = $mysqli->real_escape_string($target_file);
            } else {
                echo "❌ Failed to upload image.";
            }
        } else {
            echo "❌ Only JPG, PNG, and GIF files are allowed.";
        }
    }

    // Update product in database
    $update = $mysqli->query("
        UPDATE products 
        SET 
            product_name = '$name',
            description = '$description',
            image_url = '$image_url',
            category_id = $category_id
        WHERE product_id = $product_id
    ");

    if ($update) {
        header("Location: manage_product.php");
        exit;
    } else {
        echo "❌ Update failed: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Product - Compaq Brass</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include('includes/close.php'); ?>
<div class="container py-5">
  <h2 class="mb-4 text-primary">✏️ Edit Product</h2>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Product Name</label>
      <input type="text" name="product_name" class="form-control" value="<?= htmlspecialchars($product['product_name']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($product['description']) ?></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Image</label>
      <input type="file" name="image_file" class="form-control">
      <?php if (!empty($product['image_url'])): ?>
        <div class="mt-2">
          <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="Current Image" height="100">
        </div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label class="form-label">Category</label>
      <select name="category_id" class="form-select" required>
        <?php while ($cat = $categories->fetch_assoc()): ?>
          <option value="<?= $cat['category_id'] ?>" <?= $cat['category_id'] == $product['category_id'] ? 'selected' : '' ?>>
            <?= htmlspecialchars($cat['category_name']) ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-success">💾 Update Product</button>
    <a href="manage_product.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
