<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new SQLite3('users.db');
    $stmt = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmt->bindValue(':username', $_POST['username'], SQLITE3_TEXT);
    $stmt->bindValue(':password', $_POST['password'], SQLITE3_TEXT);
    $result = $stmt->execute();

    if ($result->fetchArray()) {
        $_SESSION['user'] = $_POST['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<h2>Login</h2>
<form method="post">
    <input name="username" placeholder="Username"><br>
    <input name="password" placeholder="Password" type="password"><br>
    <button type="submit">Login</button>
</form>
<?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
