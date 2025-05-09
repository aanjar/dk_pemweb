<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="" width="80">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Filter section dengan Bootstrap -->
    <div class="container my-4">
        <div class="row align-items-center g-2 flex-wrap">
            <div class="col-md-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Cari produk...">
            </div>
            <div class="col-md-2 col-sm-6">
                <select class="form-select">
                    <option value="">Kategori</option>
                    <option value="kamera">Kamera</option>
                    <option value="lensa">Lensa</option>
                    <option value="aksesoris">Aksesoris</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-6">
                <select class="form-select">
                    <option value="">Harga</option>
                    <option value="low">Termurah</option>
                    <option value="high">Termahal</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-6">
                <select class="form-select">
                    <option value="">Urutkan</option>
                    <option value="terbaru">Terbaru</option>
                    <option value="terlama">Terlama</option>
                    <option value="populer">Populer</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-6">
                <select class="form-select" name="price_range">
                    <option value="">Pilih Rentang Harga</option>
                    <option value="1">1 jutaan</option>
                    <option value="2">2 jutaan</option>
                    <option value="3">3 jutaan</option>
                    <option value="4">> 3 juta</option>
                </select>
            </div>
        </div>
    </div>

    <!-- PENTING: Keluar dari container Bootstrap untuk grid produk -->
    </div> <!-- Tutup container dari filter section -->

<div class="container py-4">
    {{-- <h1 class="h4 fw-bold mb-4">Produk Kami</h1> --}}
    <div class="row g-3">
        @foreach($products as $product)
            <div class="col-12 col-sm-6 col-md-3 col-lg-2"> <!-- max 6 item per row -->
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset($product->gambarUtama->path_gambar) }}"
                             class="card-img-top object-fit-cover"
                             alt="{{ $product->nama_produk }}">
                    </div>
                    <div class="card-body p-2">
                        <h5 class="card-title fs-6 text-truncate">{{ $product->nama_produk }}</h5>
                        <p class="card-text text-muted small">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
