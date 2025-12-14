<?php
include('includes/db.php');

$variant_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$variant = $mysqli->query("SELECT * FROM product_variants WHERE variant_id = $variant_id")->fetch_assoc();

if (!$variant) {
    die("Variant not found.");
}

// Update 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $size = $mysqli->real_escape_string($_POST['size']);
    $weight = $mysqli->real_escape_string($_POST['weight']);
    $unit = $mysqli->real_escape_string($_POST['unit']);
    $material = $mysqli->real_escape_string($_POST['material']);
    $finishing = $mysqli->real_escape_string($_POST['finishing']);

    $update = $mysqli->query("
        UPDATE product_variants 
        SET 
            size = '$size',
            weight = '$weight',
            unit = '$unit',
            material = '$material',
            finishing = '$finishing'
        WHERE variant_id = $variant_id
    ");

    if ($update) {
        echo "updaaddd";
        header("Location: manage_product.php");
        exit;
    } else {
        echo "Update failed: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Variant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4 text-primary">✏️ Edit Product Variant</h2>

  <form method="post">
    <div class="mb-3">
      <label class="form-label">Size</label>
      <input type="text" name="size" class="form-control" value="<?= htmlspecialchars($variant['size']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Weight</label>
      <input type="text" name="weight" class="form-control" value="<?= htmlspecialchars($variant['weight']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Unit</label>
      <input type="text" name="unit" class="form-control" value="<?= htmlspecialchars($variant['unit']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Material</label>
      <input type="text" name="material" class="form-control" value="<?= htmlspecialchars($variant['material']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Finishing</label>
      <input type="text" name="finishing" class="form-control" value="<?= htmlspecialchars($variant['finishing']) ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Variant</button>
    <a href="manage_products.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
