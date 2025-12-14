<?php
 include('fetch_counts.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard - Compaq Brass</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="db.css" />
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <img src="assets/img/compaqLOGO.jpg" alt="Logo" />
        <h2>Compaq Brass</h2>
      </div>
      <ul class="sidebar-menu">
        <li><a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="catagory.html"><i class="fas fa-folder-plus"></i> Add Category</a></li>
        <li><a href="add_product.php"><i class="fas fa-box-open"></i> Add Product</a></li>
        <li><a href="manage_product.php"><i class="fas fa-cogs"></i> Manage Products</a></li>
        <li><a href="rp_quotes.php"><i class="fas fa-file-invoice"></i> View Quotes</a></li>
        <li class="logout"><a href="index.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </aside>

    <main class="dashboard">
      <h1>Admin Dashboard</h1>
      <div class="grid">
        <div class="card blue">
          <div class="card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
          <div class="card-content">
            <p>Total Quotes</p>
            <h2><?= $totalQuotes ?></h2>
          </div>
        </div>

        <div class="card yellow">
          <div class="card-icon"><i class="fas fa-clock"></i></div>
          <div class="card-content">
            <p>Pending Quotes</p>
            <h2><?= $pendingQuotes ?></h2>
          </div>
        </div>

        <div class="card green">
          <div class="card-icon"><i class="fas fa-check-circle"></i></div>
          <div class="card-content">
            <p>Approved Quotes</p>
            <h2><?= $approvedQuotes ?></h2>
          </div>
        </div>

        <div class="card red">
          <div class="card-icon"><i class="fas fa-times-circle"></i></div>
          <div class="card-content">
            <p>Rejected Quotes</p>
            <h2><?= $rejectedQuotes ?></h2>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
