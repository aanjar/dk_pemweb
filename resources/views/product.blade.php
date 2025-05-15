<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog Produk - Dinoyo Cam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
</head>
<body>
    @include('partials.header')

    <section id="filter-section" class="py-4 bg-light border-bottom">
        <div class="container">
            <form action="" method="" class="row row-cols-auto align-items-center g-md-3 g-2">
                <div class="col">
                    <input type="text" class="form-control" name="search" placeholder="Cari produk...">
                </div>
                <div class="col">
                    <select class="form-select" name="kategori">
                        <option value="">Semua Kategori</option>
                        <option value="kamera">Kamera</option>
                        <option value="lensa">Lensa</option>
                        <option value="tripod">Tripod</option>
                        <option value="aksesoris">Aksesoris</option>
                        <option value="studio-kit">Studio Kit</option>
                        <option value="tas-kamera">Tas & Case</option>
                        <option value="filter">Filter</option>
                        <option value="camera-film">Camera Film</option>
                        <option value="used-item">Used Item</option>
                        <option value="video">Video</option>
                        <option value="lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="urutkan">
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="termurah">Harga Termurah</option>
                        <option value="termahal">Harga Termahal</option>
                        <option value="populer">Paling Populer</option>
                        <option value="a-z">A - Z</option>
                        <option value="z-a">Z - A</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="price_range">
                        <option value="">Rentang Harga</option>
                        <option value="0-500000">Di bawah Rp 500.000</option>
                        <option value="500000-1000000">Rp 500.000 - Rp 1.000.000</option>
                        <option value="1000000-3000000">Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3000000-5000000">Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="5000000-10000000">Rp 5.000.000 - Rp 10.000.000</option>
                        <option value="10000000-up">Di atas Rp 10.000.000</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-dark">Filter</button>
                </div>
            </form>
        </div>
    </section>

    <section id="category-buttons" class="py-4">
        <div class="container">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-outline-dark category-btn" data-category="all">Semua Kategori</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="kamera">Kamera</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="lensa">Lensa</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="tripod">Tripod</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="aksesoris">Aksesoris</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="studio-kit">Studio Kit</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="tas-kamera">Tas & Case</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="filter">Filter</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="camera-film">Camera Film</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="used-item">Used Item</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="video">Video</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="lain-lain">Lain-lain</button>
            </div>
        </div>
    </section>

    <section id="product-grid" class="py-4">
        <div class="container">
            @if ($kategoris->isEmpty())
                <p class="text-center">Tidak ada kategori atau produk yang tersedia.</p>
            @else
                @foreach ($kategoris as $kategori)
                    @if ($productsByCategory[$kategori->nama_kategori]->isNotEmpty())
                        <div class="mb-4">
                            <h2 class="section-title mb-3">{{ $kategori->nama_kategori }}</h2>
                            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                                @foreach ($productsByCategory[$kategori->nama_kategori] as $product)
                                    <div class="col">
                                        <div class="produk-baru-item card h-100">
                                            @if ($product->gambarUtama)
                                                <img src="{{ asset($product->gambarUtama->path_gambar) }}"
                                                     alt="{{ $product->nama_produk }}"
                                                     class="card-img-top">
                                            @else
                                                <img src="{{ asset('images/placeholder.jpg') }}"
                                                     alt="No Image"
                                                     class="card-img-top">
                                            @endif
                                            <div class="card-body p-2">
                                                <h6 class="card-title fw-bold mb-1">{{ $product->nama_produk }}</h6>
                                                <p class="card-text text-danger fw-semibold">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- WhatsApp Float Icon -->
    @include('partials.floater')
</body>
</html>
