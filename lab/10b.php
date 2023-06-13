<?php
session_start();

// Check if the visitor count session variable is set
if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 1; // Initialize visitor count if not set
} else {
    $_SESSION['visitor_count']++; // Increment visitor count on each page refresh
}

$visitorCount = $_SESSION['visitor_count'];
echo "number of visitors " . $visitorCount;
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Visitor Count</title>
</head>
<body>
    <h1>Visitor Count</h1>
    <h2>Welcome to our website!</h2>
    <p>Number of visitors: <?php echo $visitorCount; ?></p>
</body>
</html> -->