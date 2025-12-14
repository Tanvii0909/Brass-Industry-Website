<?php
    include('includes/db.php');

    // Fetch all quotes
$query = "
SELECT q.*, c.category_name, p.product_name, pv.size, pv.weight
FROM user_quotes q
JOIN categories c ON q.category_id = c.category_id
JOIN product_variants pv ON q.variant_id = pv.variant_id
JOIN products p ON pv.product_id = p.product_id
ORDER BY q.id DESC
";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Quotes</title>
    <link rel="stylesheet" href="assets/css/view_quotes.css" />
</head>
<body>
    <?php include('includes/close.php'); ?>
<h2>Admin Panel - Manage Quotes</h2>

<?php if (!empty($success)) echo "<p class='success'>$success</p>"; ?>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

<?php if ($result->num_rows > 0): ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>User Info</th>
                <th>Product Info</th>
                <th>Quote Details</th>
                <th>Status & Reply</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td class="quote-info">
                        <div><strong>Name :</strong> <?= htmlspecialchars($row['user_name']) ?></div>
                        <div><strong>Email :</strong> <?= htmlspecialchars($row['user_email']) ?></div>
                        <div><strong>Phone :</strong> <?= htmlspecialchars($row['user_phone']) ?></div>
                    </td>
                    <td class="quote-info">
                        <div><strong>Category :</strong> <?= htmlspecialchars($row['category_name']) ?></div>
                        <div><strong>Product :</strong> <?= htmlspecialchars($row['product_name']) ?></div>
                        <div><strong>Size :</strong> <?= htmlspecialchars($row['size']) ?></div>
                        <div><strong>Weight :</strong> <?= htmlspecialchars($row['weight'])?>g</div>
                    </td>
                    <td class="quote-info">
                        <div><strong>Quantity :</strong> <?= $row['quantity'] ?></div>
                        <div><strong>Message :</strong><br><?= nl2br(htmlspecialchars($row['message'])) ?></div>
                        <div><strong>Submitted :</strong><br><?= $row['created_at'] ?? '-' ?></div>
                    </td>
                    <td>
                        <form method="post" action="view_quotes.php" >
                            <input type="hidden" name="quote_id" value="<?= $row['id'] ?>">
                            
                            <label>Status:</label>
                            <select name="status" required>
                                <option value="pending" <?= $row['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                <option value="approved" <?= $row['status'] == 'approved' ? 'selected' : '' ?>>Approved</option>
                                <option value="rejected" <?= $row['status'] == 'rejected' ? 'selected' : '' ?>>Rejected</option>
                            </select>

                            <label>Reply:</label>
                            <textarea name="admin_reply"><?= htmlspecialchars($row['admin_reply'] ?? '') ?></textarea>

                            <input type="submit" name="update_quote" value="Update Quote">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No quotes found.</p>
<?php endif; ?>

</body>
</html>
