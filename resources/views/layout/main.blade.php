<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info p-3">
        <div class="container">
            <h1 class="navbar-brand" href="home">KI-F15</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Encrypted Data") ? 'active' : '' }}" aria-current="page" href="encryptdata">Encrypt Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Decrypted Data") ? 'active' : '' }}" href="decryptdata">Decrypt Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Request") ? 'active' : '' }}" href="request">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Sent") ? 'active' : '' }}" href="sent">Sent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Inbox") ? 'active' : '' }}" href="inbox">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4"> 
        @yield('container')
    </div>
       
</body>
</html>