<?php
include('includes/db.php');
$categories = $mysqli->query("SELECT category_id, category_name FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product with Variants - Compaq Brass</title>
    <link rel="stylesheet" href="assets/css/add_product.css" />
</head>

<body>

<?php include('includes/close.php'); ?>

<div class="header" align="center">
    <h1 style="color:maroon;">Add New Product</h1>
    <p style="color: darkblue; margin-top:-14px">Premium Brass Products Management</p>
</div>

<form method="POST" enctype="multipart/form-data" action="fetch_add_product.php">
    <label>Product Name:</label>
    <input type="text" name="product_name" required><br><br>

    <label>Category:</label>
    <select name="category_id" required>
        <option value="">--Select Category--</option>
        <?php while($row = $categories->fetch_assoc()): ?>
            <option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <label>Description:</label>
    <textarea name="description" rows="4"></textarea><br><br>

            <label>
                Choose File
                <input type="file" name="product_image" required>
            </label>
      
    </div><br><br>

    <label>Product Variants</label>
    <div id="variantRows">
        <div class="variant-row">
            <input type="text" name="size[]" placeholder="Size">
            <input type="text" name="weight[]" placeholder="Weight (g)">
            <input type="text" name="unit[]" placeholder="Unit">
            <input type="text" name="material[]" placeholder="Material">
            <input type="text" name="finish[]" placeholder="Finish">
        </div>
    </div>
    <button type="button" onclick="addVariantRow()" class="a">+ Add Another Variant</button><br><br>
    <center>
    <button type="submit" class="sb">
        <i class="fas fa-save"></i> Save Product
    </button>
</center>
</form>


<script>
function addVariantRow() {
    const row = document.createElement('div');
    row.className = 'variant-row';
    row.innerHTML = `
        <input type="text" name="size[]" placeholder="Size">
        <input type="text" name="weight[]" placeholder="Weight (g)">
        <input type="text" name="unit[]" placeholder="Unit">
        <input type="text" name="material[]" placeholder="Material">
        <input type="text" name="finish[]" placeholder="Finish">
    `;
    document.getElementById('variantRows').appendChild(row);
}
</script>

</body>
</html>