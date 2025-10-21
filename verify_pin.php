<?php
session_start();

// ✅ Replace with your own secure hash (use generate_hash.php below)
$stored_hash = '$2y$10$koC8OAsYyS6bqf5BJLEjEumkWa4YnUOVEni4bR753hHuq8MxM9/7m'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_pin = $_POST['pin'];

    if (password_verify($entered_pin, $stored_hash)) {
        $_SESSION['authenticated'] = true;
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Invalid PIN. Try again.'); window.location.href='pin.php';</script>";
        exit;
    }
}
?>
