<?php
session_start();

// ✅ Replace with your own secure hash (use generate_hash.php below)
$stored_hash = '$2y$10$wweK8p2C7psgZI7ukYK8p.bOi5NpuHxR/VbKYxkz1ajI1Bovc1UdG'; // hash of '1234567890'

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
