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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
</head>
<body>
    @include('partials.header')

    <!-- Filter Section -->
    <section class="bg-white border-bottom py-4">
        <div class="container">
            <form method="GET" action="{{ route('product.index') }}">
    <div class="row g-3 align-items-center">
        <!-- Search: full width di xs, 5 kolom di md -->
        <div class="col-12 col-md-5">
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" name="search" placeholder="Cari produk..." value="{{ $search ?? '' }}" onkeyup="this.form.submit()">
            </div>
        </div>

        <!-- Kategori: setengah di xs, 4 kolom di md -->
        <div class="col-6 col-md-4">
            <select class="form-select" name="kategori" onchange="this.form.submit()">
                <option value="">Semua Kategori</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kategoriFilter == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Sort: setengah di xs, 3 kolom di md -->
        <div class="col-6 col-md-3">
            <select class="form-select" name="sort" onchange="this.form.submit()">
                <option value="terbaru" {{ $sort == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                <option value="termurah" {{ $sort == 'termurah' ? 'selected' : '' }}>Termurah</option>
                <option value="termahal" {{ $sort == 'termahal' ? 'selected' : '' }}>Termahal</option>
            </select>
        </div>
    </div>
</form>

        </div>
    </section>

    <!-- Product Grid -->
    <section class="py-4">
        <div class="container">
            @if ($products->isEmpty())
                <p class="text-center text-muted">Tidak ada produk yang tersedia.</p>
            @else
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">

                    @foreach ($products as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none">
                                <div class="produk-baru-item card h-100 border-0 shadow">
                                   <div class="img-wrapper position-relative">
                                        @if ($product->grade === 'Unggulan')
                                            <span class="badge bg-warning position-absolute top-0 end-0 m-2">
                                                <i class="bi bi-star-fill"></i> <!-- Ikon Bintang Bootstrap -->
                                            </span>
                                        @endif
                                        @if ($product->gambarUtama)
                                            <img src="{{ asset($product->gambarUtama->path_gambar) }}"
                                                alt="{{ $product->nama_produk }}"
                                                class="card-img-top" loading="lazy">
                                        @else
                                            <img src="{{ asset('images/placeholder.jpg') }}"
                                                alt="No Image"
                                                class="card-img-top">
                                        @endif
                                    </div>
                                    <div class="card-body p-2 d-flex flex-column justify-content-center">
                                        <h6 class="card-title fw-bold mb-1" title="{{ $product->nama_produk }}">
                                            {{ $product->nama_produk }}
                                        </h6>
                                        <p class="card-text text-danger fw-semibold mb-0">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        @if ($products->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous"><</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous"><</a>
                            </li>
                        @endif

                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="page-item {{ $products->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($products->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">></a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Next">></a>
                            </li>
                        @endif
                    </ul>
                </nav>
            @endif
        </div>
    </section>

    @include('partials.footer')
    @include('partials.floater')

    <script>
        let timeout;
        const input = document.querySelector('input[name="search"]');
        input.addEventListener('keyup', () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                input.form.submit();
            }, 500);
        });

        document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
    </script>
</body>
</html>
