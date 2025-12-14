<?php
include('includes/db.php');

$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;


$mysqli->query("DELETE FROM product_variants WHERE product_id = $product_id");


$delete = $mysqli->query("DELETE FROM products WHERE product_id = $product_id");

if ($delete) {
    header("Location: manage_products.php");
    exit;
} else {
    echo "Failed to delete product: " . $mysqli->error;
}
