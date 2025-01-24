<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user_file = "user.txt";

    // Membaca data pengguna dari file
    $file_data = file($user_file, FILE_IGNORE_NEW_LINES);

    // Loop melalui baris data dalam file
    $login_successful = false;
    foreach ($file_data as $line) {
        list($stored_username, $stored_password) = explode(',', $line);

        if ($username === $stored_username && $password === $stored_password) {
            // Login berhasil, atur tanda berhasil
            $login_successful = true;
            break;
        }
    }

    if ($login_successful) {
        // Set cookie untuk mengingat bahwa pengguna telah berhasil login
        setcookie("loggedin", "1");

        // Redirect ke halaman menu
        header("Location: list.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingDafzx</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="daftar.php">Signup</a>
        </div>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && !$login_successful) {
          echo "Login gagal. Silahkan Chat Sork Host Untuk Buat akun ⚡";
      }
      ?>
      
  </style>
	<audio autoplay>
	<source src="audio/Dafzx.mp3" type="audio/mp3"/>
</audio>

    </div>
  </body>
</html>
