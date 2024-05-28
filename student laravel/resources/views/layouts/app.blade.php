<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom styles */
        body {
            background-image: url('images/bg.jpg');
            background-size: cover; /* Adjust the image size to cover the whole page */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center center; /* Center the image */
            min-height: 100vh;
            background-color: #a0b7f2;
        }

        .container {
            background-color: rgba(255, 255, 255, 1.0); /* White with 80% opacity */
            border-radius: 10px; /* Optional: add rounded corners */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: add a subtle shadow */
        }
        .navbar{
            background-color: #230c29;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white;">Student Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                           <a class="nav-link" style="color:white;" href="{{ route('logout') }}"><strong>Logout</strong></a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    
        @yield('content')

</body>
</html>
