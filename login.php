<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link href="./style/gaya.css" rel="stylesheet" />
  </head>
  <body>
    <form action="cek_data.php" method="post">
      <div class="imgcontainer">
        <img src="./image/avatar.jpg" alt="Avatar" class="avatar" />
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pswd" required />

        <label> <input type="checkbox" checked="checked" name="remember" /> Remember me </label>
        <button type="submit">Login</button>
        <label> Sudah punya akun? <a href="register.php">Daftar </a></label>
      </div>
    </form>
  </body>
</html>
