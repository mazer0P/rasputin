<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
echo "<h2>Welcome, " . htmlentities($_SESSION['user']) . "</h2>";
echo "<a href='getlogs.php?log=auth.log'>View Logs</a><br>";
echo "<a href='logout.php'>Logout</a>";
