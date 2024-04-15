<?php
require './include/config.php';

if(isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token exists in the database and is valid (not expired)
    $stmt = $conn->prepare("SELECT * FROM password_reset_tokens WHERE token = :token AND created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)");
    $stmt->bindParam(':token', $token);
    $stmt->execute();
    $row_count = $stmt->rowCount();

    if($row_count > 0) {
        // Token is valid, allow the user to reset their password
        // Display a form for the user to enter their new password
    } else {
        // Token is invalid or expired, display an error message
        echo "Invalid or expired token.";
    }
} else {
    // Token not provided, display an error message
    echo "Token not provided.";
}
?>
