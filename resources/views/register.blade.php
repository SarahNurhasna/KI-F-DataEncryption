<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/register.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <div class="register-form">
          <h2>Register</h2>
          <form id="register-form">
            <div class="form-group">
              <label for="user">Full Name</label>
              <input type="text" id="user" required/>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" required placeholder="name@example.com"/>
            </div>
            <div class="form-group">
              <label for="telp">Phone number</label>
              <input type="telp" id="telp" required placeholder="example: 087800000003" />
            </div>
            <div class="form-group">
              <label for="date">Date of birth</label>
              <input type="date" id="date" required />
            </div>
            <!-- <div class="form-group">
              <label for="age">Age</label>
              <input type="age" id="age" required />
            </div> -->
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-select" aria-label=".form-select-lg">
                <option selected>Select one</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="address" id="address" required />
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" id="pass" required />
            </div>
            <button id="register-button" class="btn btn-primary btn-rounded" type="submit">Register</button>
          </form>
          <p>Already have an account? <a href="login">Login</a></p>
        </div>
      </div>
    </div>
    <!-- <script src="js/register.js"></script> -->
    <!-- <script>
      // Menangani saat tombol login ditekan
      document.getElementById("register-button").addEventListener("click", function (event) {
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "../index.html";
      });
    </script> -->
  </body>
</html>
