<?php
$db = new SQLite3('users.db');
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");
$db->exec("INSERT INTO users (username, password) VALUES ('admin', 'iloveyou123')");
echo "Database initialized.\n";
?>
