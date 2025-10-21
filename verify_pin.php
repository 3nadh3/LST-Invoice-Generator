<?php
session_start();

// ✅ Replace with your own secure hash (use generate_hash.php below)
$stored_hash = '$2y$10$kyZaSar9m4EzpaCVa3SKQeCo0c1h0s85Uma8y7qzCwkwStoi4568u'; 

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
