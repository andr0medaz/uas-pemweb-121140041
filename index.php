<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }

    .menu-container {
      text-align: center;
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .button-group {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .button-group button {
      padding: 10px 20px;
      font-size: 16px;
      color: white;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button-group button:hover {
      background-color: #0056b3;
    }

    .button-group button:active {
      transform: scale(0.98);
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <h1>Selamat Datang! Silahkan pilih</h1>
    <div class="button-group">
      <button id="sign-up">Sign Up</button>
      <button id="sign-in">Sign In</button>
    </div>
  </div>

  <script>
    // Untuk redirect ke halaman sign up dan sign in
    document.getElementById("sign-up").addEventListener("click", () => {
      window.location.href = "signupPage/signup.html"; 
    });

    document.getElementById("sign-in").addEventListener("click", () => {
      window.location.href = "loginPage/signin.html"; 
    });
  </script>
</body>
</html>
