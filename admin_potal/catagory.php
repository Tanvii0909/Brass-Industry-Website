<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category - Brass Industries</title>
    <link rel="stylesheet" href="assets/css/catagory.css" />
    
    </head>
<body>
    
    <?php include('includes/close.php'); ?>

    <div class="container">
        <h2>Add Category</h2>
        <form method="POST" action="catagory.php">
            <label for="category_name">Category Name:</label>
            <input type="text" id="category_name" name="category_name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <input type="submit" value="Add Category">
        </form>
        <div class="footer">
            <p>© Compaq Brass Industries. All rights reserved.</p>
        </div>
    </div>
</body>
</html>