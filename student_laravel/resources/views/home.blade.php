<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Home</h2>
                    </div>
                    <div class="card-body">
                        @if(Auth::check())
                            <p class="text-center">Welcome, {{ Auth::user()->name }}!</p>
                            <form action="{{ route('logout') }}" method="POST" class="text-center">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        @else
                            <p class="text-center">You are not logged in.</p>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
