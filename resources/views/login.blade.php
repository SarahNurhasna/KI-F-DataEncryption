<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset ('css/Login.css')}}" />
    {{-- <link rel="stylesheet" href="css/login.css" /> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet"> --}}
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
              <input type="text" id="user" required placeholder="name@example.com"/>
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" id="pass" required />
            </div>
            <button id="login-button" class="btn btn-primary btn-rounded" type="submit">Sign In</button>
          </form>
          <p>You don't have an account? <a href="register">Register</a></p>
        </div>
      </div>
    </div>
    <script>
        // Menangani saat tombol login ditekan
        document.getElementById("login-button").addEventListener("click", function (event) {
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "home";
        });

        document.getElementById("loginForm").addEventListener("submit", function(event) {

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Masukkan alamat email yang valid.");
                event.preventDefault();
                return;
            }

            if (password.length < 8 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
                alert("Password harus terdiri dari minimal 8 karakter dan mengandung setidaknya satu huruf dan satu angka.");
                event.preventDefault();
                return;
            }

        });
    </script>
  </body>
</html>
