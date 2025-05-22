<!-- Admin Navigation -->
<nav id="main-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
            <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="Dinoyo Camera Logo" class="img-fluid">
            <span class="brand-text ms-3">Dinoyo Kamera</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/" target="_blank">
                        <i class="bi bi-shop me-1"></i> Lihat Toko
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include header styles -->
<link rel="stylesheet" href="{{ asset('css/header.css') }}">