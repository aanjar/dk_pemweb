<!-- Navigation -->
<nav id="main-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="Dinoyo Camera Logo" class="img-fluid">
            <span class="brand-text ms-3">Dinoyo Kamera</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('katalog*') ? 'active' : '' }}" href="/katalog">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-admin" href="/admin">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include header styles -->
<link rel="stylesheet" href="{{ asset('css/header.css') }}">