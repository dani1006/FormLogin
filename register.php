<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registrasi</title>
    <link href="./style/gaya.css" rel="stylesheet" />
  </head>
  <body>
    <form action="authen.php" method="post">
      <div class="imgcontainer">
        <img src="./image/avatar.jpg" alt="Avatar" class="avatar" />
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required />

        <label for="eml"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pswd" required />

        <button type="submit">Daftar</button>

        <label> Sudah punya akun? <a href="login.php">Login </a></label>
      </div>
    </form>
  </body>
</html>
