<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
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



  <div class="container py-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 product-list">
        @foreach($products as $product)
            <div class="col">
                <div class="produk-baru-item card h-100 overflow-hidden">
    <div class="ratio ratio-1x1">
        <img src="{{ asset($product->gambarUtama->path_gambar) }}"
             alt="{{ $product->nama_produk }}"
             class="card-img-top object-fit-cover w-100 h-100 rounded">
    </div>
    <div class="card-body p-2">
        <h5 class="card-title">{{ $product->nama_produk }}</h5>
        <p class="card-text text-danger">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
    </div>
</div>

            </div>
        @endforeach
    </div>
</div>


</body>
</html>
