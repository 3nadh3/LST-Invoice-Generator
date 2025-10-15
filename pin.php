<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredPin = $_POST['pin'];

    if (password_verify($enteredPin, $storedHash)) {
        $_SESSION['authenticated'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Incorrect PIN. Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pin.css">
  <title>PIN Login</title>
</head>
<body>
  <div class="pin-container">
    <h1>🔐 Secure Access</h1>
    <form action="" method="post">
      <label for="pin">Enter your 10-digit PIN:</label>
      <input type="password" id="pin" name="pin" maxlength="10" required>
      <button type="submit">Login</button>
    </form>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
  </div>
</body>
</html>
