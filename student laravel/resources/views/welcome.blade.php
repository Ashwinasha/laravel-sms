<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/bg.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover; /* Adjust the image size to cover the whole page */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center center; 
        }
        .welcome-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn-custom {
            width: 150px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Student Management System</h1>
        <p>Please login or register to continue</p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-custom">Register</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
