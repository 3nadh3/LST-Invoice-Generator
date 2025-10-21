<?php
// config.php

// Securely store your hashed PIN (this one is just an example)
$storedHash = '$2y$10$wweK8p2C7psgZI7ukYK8p.bOi5NpuHxR/VbKYxkz1ajI1Bovc1UdG'; 

// Define a session timeout period (in seconds)
define('PIN_SESSION_TTL', 300); // 5 minutes
?>
