<?php
include("../connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        die("Please fill in both fields.");
    }

    // untuk koneksi ke database
    $db = new Database();
    $connection = $db->connect();

    // untuk mencari username pada tabel database
    $query = $connection->prepare("SELECT * FROM users_account WHERE username = BINARY :username");
    $query->bindParam(':username', $username);
    $query->execute();

    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // untuk menyimpan username dalam session
        $_SESSION['username'] = $user['username'];

        // untuk melakukan redirect ke dashboard/homepage
        header("Location: ../featurePage/dashboard.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>
