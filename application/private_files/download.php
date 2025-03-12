<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    die("Unauthorized access!");
}

$file = 'application/private_files/protected_file.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="protected_file.pdf"');
readfile($file);
?>
