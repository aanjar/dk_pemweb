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

    <!-- Hero Section -->
    <section class="catalog-hero py-4 mb-4">
        <div class="container">
            <h1 class="text-center mb-2">Katalog Produk</h1>
            <p class="text-center text-muted mb-0">Temukan berbagai produk kamera dan aksesoris berkualitas</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section sticky-top bg-white border-bottom py-4">
        <div class="container">
            <form method="GET" action="{{ route('product.index') }}" id="filterForm">
                <div class="row g-3">
                    <!-- Search Bar -->
                    <div class="col-12 col-md-5">
                        <div class="input-group">
                            <span class="input-group-text border-end-0 bg-white">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 shadow-none" 
                                   name="search" placeholder="Cari produk..." 
                                   value="{{ $search ?? '' }}">
                        </div>
                    </div>

                    <!-- Category Select -->
                    <div class="col-6 col-md-4">
                        <select class="form-select shadow-none" name="kategori">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" 
                                        {{ $kategoriFilter == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sort Select -->
                    <div class="col-6 col-md-3">
                        <select class="form-select shadow-none" name="sort">
                            <option value="terbaru" {{ $sort == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                            <option value="termurah" {{ $sort == 'termurah' ? 'selected' : '' }}>Termurah</option>
                            <option value="termahal" {{ $sort == 'termahal' ? 'selected' : '' }}>Termahal</option>
                        </select>
                    </div>
                </div>

                <!-- Category Pills -->
                <div class="category-pills mt-3">
                    <div class="d-flex gap-2 overflow-auto pb-2">
                        <button type="button" class="category-pill {{ empty($kategoriFilter) ? 'active' : '' }}"
                                onclick="selectCategory('')">
                            Semua
                        </button>
                        @foreach ($kategoris as $kategori)
                            <button type="button" 
                                    class="category-pill {{ $kategoriFilter == $kategori->id ? 'active' : '' }}"
                                    onclick="selectCategory('{{ $kategori->id }}')">
                                {{ $kategori->nama_kategori }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Product Grid -->
    <section class="product-grid py-4">
        <div class="container">
            @if ($products->isEmpty())
                <div class="empty-state text-center py-5">
                    <i class="bi bi-camera2 display-1 text-muted mb-3"></i>
                    <p class="text-muted mb-0">Tidak ada produk yang tersedia.</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none">
                                <div class="product-card">
                                    <div class="product-image">
                                        @if ($product->grade === 'Unggulan')
                                            <span class="featured-badge">
                                                <i class="bi bi-star-fill me-1"></i>Unggulan
                                            </span>
                                        @endif
                                        @if ($product->gambarUtama)
                                            <img src="{{ asset($product->gambarUtama->path_gambar) }}"
                                                alt="{{ $product->nama_produk }}"
                                                loading="lazy">
                                        @else
                                            <img src="{{ asset('images/placeholder.jpg') }}"
                                                alt="No Image">
                                        @endif
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title" title="{{ $product->nama_produk }}">
                                            {{ $product->nama_produk }}
                                        </h3>
                                        <p class="product-price">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Product navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        @if ($products->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-chevron-left"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                        @endif

                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="page-item {{ $products->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($products->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-chevron-right"></i>
                                </span>
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
        // Debounced search input
        let timeout;
        const input = document.querySelector('input[name="search"]');
        input.addEventListener('keyup', () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                document.getElementById('filterForm').submit();
            }, 500);
        });

        // Category selection
        function selectCategory(categoryId) {
            document.querySelector('select[name="kategori"]').value = categoryId;
            document.getElementById('filterForm').submit();
        }

        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>
</html>
