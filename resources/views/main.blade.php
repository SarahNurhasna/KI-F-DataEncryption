<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset ('css/main.css')}}" />
    <!-- <link rel="stylesheet" href="css/login.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <title>Dashboard</title>
<body>
    <header>
            <nav class="navbar navbar-expand-lg p-3">
                <div class="container">
                    <h3 class="navbar-brand" href="home">KI-F15</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="encryptdata">Encrypt Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="decryptdata">Decrypt Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="request">Request</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inbox">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    <div class="container mt-4"> 
        @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>