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

    <!-- Form Filter -->
    <section id="filter-section" class="py-4 bg-light border-bottom">
        <div class="container">
            <form action="{{ route('product.index') }}" method="GET" class="row row-cols-auto align-items-center g-md-3 g-2">
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" name="search" placeholder="Cari produk..." value="{{ $search ?? '' }}">
                    </div>
                </div>
                <div class="col">
                    <select class="form-select" name="kategori" onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ $kategoriFilter == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </section>

    <!-- Produk -->
    <section id="product-grid" class="py-4">
        <div class="container">
            @if ($kategoris->isEmpty())
                <p class="text-center">Tidak ada kategori yang tersedia.</p>
            @elseif (empty($productsByCategory) || collect($productsByCategory)->flatten()->isEmpty())
                <p class="text-center">Tidak ada produk untuk filter yang dipilih.</p>
            @else
                @foreach ($productsByCategory as $nama_kategori => $produk_list)
                    @if ($produk_list->isNotEmpty())
                        <div class="mb-4">
                            <div class="section-title mb-3">
                                <h2>{{ $nama_kategori }}</h2>
                            </div>
                            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                                @foreach ($produk_list as $product)
                                    <div class="col">
                                        <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none
">
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
                                        </a>
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
