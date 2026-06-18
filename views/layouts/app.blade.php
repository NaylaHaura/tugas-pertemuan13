<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT L'Essential</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .hijau-toska-gelap { 
            background-color: #0d524d !important; 
            color: white !important; 
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,0.8);
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark hijau-toska-gelap shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">PT L'Essential</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li> 
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4" style="min-height: 80vh;">
        @yield('content')
    </main>

    <footer class="hijau-toska-gelap text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1 fw-bold">PT L'Essential</p>
            <p class="small opacity-75">Your Trusted Partner in Aesthetic and Health Innovation.</p>
            <hr class="w-25 mx-auto opacity-25">
            <p class="small">&copy; 2026 All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>