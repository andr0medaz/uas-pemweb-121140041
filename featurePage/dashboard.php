<?php
include("../connection.php");
session_start();

// untuk cek apakah session username ada
if (!isset($_SESSION['username'])) {
    header("Location: signin.php"); 
    exit;
}

// untuk koneksi ke database
$db = new Database();
$connection = $db->connect();

// untuk mengambil data dari table pada database
$query = $connection->prepare("SELECT * FROM users_account");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="#" id="logout-link">Logout</a>

    <h2>Data User</h2>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['gender']); ?></td>
                    <td><?php echo htmlspecialchars($user['password']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
<script>
    document.getElementById("logout-link").addEventListener("click", (event) => {
    event.preventDefault();
    window.location.href = "logout.php";
});
</script>
</html>



