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
    <link rel="stylesheet" href="assets/css/dashbord.css" />
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <img src="assets/img/compaqLOGO.jpg" alt="Compaq Brass Industries logo" class="logo" />
            <h2>Admin Dashboard</h2>
        </div>
        <div class="admin-nav">
            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="catagory.php" ><i class="fas fa-folder-plus"></i> Add Category</a></li>
                <li><a href="add_product.php"><i class="fas fa-box-open"></i> Add Product</a></li>
                <li><a href="manage_product.php"><i class="fas fa-cogs"></i> Manage Products</a></li>
                <li><a href="rp_quotes.php"><i class="fas fa-file-invoice"></i> View Quotes</a></li>
                <li><a href="add_admin.php"><i class="fas fa-user-plus"></i> Add Admin</a></li>
                
                <li style="padding-top:120px;"><a href="index.html"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a></li>
            </ul>
        </div>
         <!-- Dashboard Content -->
         <main class="dashboard">
            <!-- Total Quotes -->
            <div class="card">
              <div class="content">
                <div class="icon-box blue">
                  <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div>
                  <div class="label">Total Quotes</div>
                  <div class="value"><?= $totalQuotes ?></div>
                </div>
              </div>
            </div>
        
            <!-- Pending Quotes -->
            <div class="card">
              <div class="content">
                <div class="icon-box yellow">
                  <i class="fas fa-clock"></i>
                </div>
                <div>
                  <div class="label">Pending Quotes</div>
                  <div class="value"><?= $pendingQuotes ?></div>
                </div>
              </div>
            </div>
        
            <!-- Approved Quotes -->
            <div class="card">
              <div class="content">
                <div class="icon-box green">
                  <i class="fas fa-check-circle"></i>
                </div>
                <div>
                  <div class="label">Approved Quotes</div>
                  <div class="value"><?= $approvedQuotes ?></div>
                </div>
              </div>
            </div>
        
            <!-- Rejected Quotes -->
            <div class="card">
              <div class="content">
                <div class="icon-box red">
                  <i class="fas fa-times-circle"></i>
                </div>
                <div>
                  <div class="label">Rejected Quotes</div>
                  <div class="value"><?= $rejectedQuotes ?></div>
                </div>
              </div>
            </div>
        </main>
    </div>
</body>
</html>
