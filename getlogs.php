<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Unauthorized");
}

if (isset($_GET['log'])) {
    $log = $_GET['log'];
    $cmd = "cat /var/log/" . $log;
    echo "<pre>" . shell_exec($cmd) . "</pre>";
} else {
    echo "No log specified.";
}
?>
