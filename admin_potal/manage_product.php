<?php
include('includes/db.php');

$products = $mysqli->query("
    SELECT p.*, c.category_name 
    FROM products p 
    JOIN categories c ON p.category_id = c.category_id 
    ORDER BY p.product_id DESC
");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Products - Compaq Brass</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mng_product.css" />
</head>
<body>

<?php include('includes/close.php'); ?>

<div class="container py-5">
  <h2 class="text-center mb-5 text-primary">📦 Manage Brass Products</h2>

  <div class="row g-4">
    <?php while ($product = $products->fetch_assoc()): ?>
      <div class="col-lg-6 col-lg-4">
        <div class="card product-card h-100">
          <img src="<?= $product['image_url'] ?>" class="product-img" alt="Product">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($product['product_name']) ?></h5>
            <span class="badge badge-category"><?= htmlspecialchars($product['category_name']) ?></span>
            <p class="mt-2"><?= nl2br(htmlspecialchars($product['description'])) ?></p>

            <?php
            $pid = $product['product_id'];
            $variants = $mysqli->query("SELECT * FROM product_variants WHERE product_id = $pid");
            if ($variants->num_rows > 0): ?>
              <div>
                <span class="variant-toggle" data-bs-toggle="collapse" data-bs-target="#variants<?= $pid ?>">
                  <i class="fas fa-chevron-down"></i> Show Variants
                </span>
                <div class="collapse mt-2" id="variants<?= $pid ?>">
                  <table class="table table-bordered variant-table">
                    <thead class="table-light">
                      <tr>
                        <th>Size</th>
                        <th>Weight</th>
                        <th>Unit</th>
                        <th>Material</th>
                        <th>Finish</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($v = $variants->fetch_assoc()): ?>
                        <tr>
                          <td><?= htmlspecialchars($v['size']) ?></td>
                          <td><?= htmlspecialchars($v['weight']) ?></td>
                          <td><?= htmlspecialchars($v['unit']) ?></td>
                          <td><?= htmlspecialchars($v['material']) ?></td>
                          <td><?= htmlspecialchars($v['finishing']) ?></td>
                          <td>
                          <div class="d-flex gap-2">
                                    <!-- Edit Button -->
                                    <a href="edit_variant.php?id=<?= $v['variant_id'] ?>" class="btn btn-sm btn-outline-success">
                                      <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <a href="delete_variant.php?id=<?= $v['variant_id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this variant?');">
                                      <i class="fas fa-trash-alt"></i>
                                    </a>
                                  </div>

                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <?php endif; ?>

            <div class="mt-3 action-buttons d-flex justify-content-between">
              <a href="edit_product.php?id=<?= $pid ?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-pen"></i> Edit</a>
              <a href="delete_pv.php?id=<?= $pid ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this product?');"><i class="fas fa-trash"></i> Delete</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
