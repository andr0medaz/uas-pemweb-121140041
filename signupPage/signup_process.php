<?php
include("../connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);

    // untuk validasi tambahan di server dengan panjang username minimal 5 karakter, password minimal 8 dan mengandung minimal 1 angka
    if (strlen($username) < 5 || strlen($password) < 8 || !preg_match('/\d/', $password) || $password !== $confirmPassword) {
        die("Invalid password, silahkan inputkan lagi");
    }

    // untuk melakukan hash password sebelum disimpan pada database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // untuk koneksi ke database
    $db = new Database();
    $connection = $db->connect();

    // proses penyimpanan password yang sudah di hash 
    $query = $connection->prepare(" INSERT INTO users_account (username, email, gender, password, ip_address, browser_info) 
        VALUES (:username, :email, :gender, :password)");
    $query->bindParam(':username', $username);
    $query->bindParam(':email', $email);
    $query->bindParam(':gender', $gender);
    $query->bindParam(':password', $hashedPassword);

    if ($query->execute()) {
        // untuk kembali ke index.php
        header("Location: ../index.php");
        exit;
    } else {
        echo "Sign up failed. Silahkan coba lagi.";
    }
}
?>
