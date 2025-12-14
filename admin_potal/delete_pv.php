<?php
include('includes/db.php');

$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// First delete variants
$mysqli->query("DELETE FROM product_variants WHERE product_id = $product_id");

// Then delete the product
$delete = $mysqli->query("DELETE FROM products WHERE product_id = $product_id");

if ($delete) {
    header("Location: manage_product.php");
    exit;
} else {
    echo "Failed to delete product: " . $mysqli->error;
}
