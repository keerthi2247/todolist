<!DOCTYPE html>
<html>
<head>
    <title>Simple Listing Application</title>
</head>
<body>
    <h1>Simple Listing Application</h1>
    
    <h2>Objective</h2>
    <p>To create a simple application for listing items.</p>
    
    <h2>Introduction</h2>
    <p>This application allows users to list items and view them in a simple interface.</p>
    
    <h2>Methodology</h2>
    <p>The application is built using PHP for server-side logic and HTML5 for the frontend.</p>
    
    <h2>Listing Form</h2>
    <form method="post" action="">
        <label for="item_name">Item Name:</label><br>
        <input type="text" id="item_name" name="item_name" required><br><br>
        
        <label for="item_description">Item Description:</label><br>
        <textarea id="item_description" name="item_description" required></textarea><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    
    <?php
    // Process form submission
    if (isset($_POST['submit'])) {
        $itemName = $_POST['item_name'];
        $itemDescription = $_POST['item_description'];
        
        // Display the submitted item
        echo "<h2>Submitted Item</h2>";
        echo "<p><strong>Name:</strong> $itemName</p>";
        echo "<p><strong>Description:</strong> $itemDescription</p>";
    }
    ?>
    
</body>
</html>
