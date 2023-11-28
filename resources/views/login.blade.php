<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <div class="login-form">
          <h2>Login</h2>
          <form id="login-form">
            <div class="form-group">
              <label for="user">Email</label>
              <input type="text" id="user" required />
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" id="pass" required />
            </div>
            <button id="login-button" type="submit">Sign In</button>
          </form>
          <p>Don't have an account? <a href="./register/register.html">Register</a></p>
        </div>
      </div>
    </div>
    <!-- <script>
      // Menangani saat tombol login ditekan
      document.getElementById("login-button").addEventListener("click", function (event) {
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "./game/2048.html";
      });
    </script>
    <script src="js/login.js"></script> -->
  </body>
</html>
