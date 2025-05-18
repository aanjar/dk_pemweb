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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
</head>
<body>
    @include('partials.header')

    <!-- Category Pills -->
    <div class="category-pills-container bg-white border-bottom py-3">
        <div class="container">
            <div class="category-pills" data-aos="fade-right">
                <a href="{{ route('product.index') }}" 
                   class="category-pill {{ !$kategoriFilter ? 'active' : '' }}">
                    Semua
                </a>
                @foreach ($kategoris as $kategori)
                    <a href="{{ route('product.index', ['kategori' => $kategori->id]) }}" 
                       class="category-pill {{ $kategoriFilter == $kategori->id ? 'active' : '' }}">
                        {{ $kategori->nama_kategori }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <section class="filter-section py-4">
        <div class="container">
            <form method="GET" action="{{ route('product.index') }}" class="filter-form" data-aos="fade-up">
                <div class="row g-3 align-items-center">
                    <!-- Search: full width di xs, 5 kolom di md -->
                    <div class="col-12 col-md-5">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" 
                                   class="form-control search-input" 
                                   name="search" 
                                   placeholder="Cari produk..." 
                                   value="{{ $search ?? '' }}"
                                   autocomplete="off">
                        </div>
                    </div>

                    <!-- Kategori: setengah di xs, 4 kolom di md -->
                    <div class="col-6 col-md-4">
                        <select class="form-select" name="kategori">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" 
                                        {{ $kategoriFilter == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sort: setengah di xs, 3 kolom di md -->
                    <div class="col-6 col-md-3">
                        <select class="form-select" name="sort">
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
    <section class="product-section py-4">
        <div class="container">
            @if ($products->isEmpty())
                <div class="text-center py-5" data-aos="fade-up">
                    <i class="bi bi-search display-1 text-muted"></i>
                    <p class="text-muted mt-3">Tidak ada produk yang tersedia.</p>
                </div>
            @else
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach ($products as $product)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none">
                                <div class="product-card">
                                    <div class="product-image-wrapper">
                                        @if ($product->grade === 'Unggulan')
                                            <span class="featured-badge">
                                                <i class="bi bi-star-fill me-1"></i>Unggulan
                                            </span>
                                        @endif
                                        @if ($product->gambarUtama)
                                            <img src="{{ asset($product->gambarUtama->path_gambar) }}"
                                                 alt="{{ $product->nama_produk }}"
                                                 class="product-image" 
                                                 loading="lazy">
                                        @else
                                            <img src="{{ asset('images/placeholder.jpg') }}"
                                                 alt="No Image"
                                                 class="product-image">
                                        @endif
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title" title="{{ $product->nama_produk }}">
                                            {{ $product->nama_produk }}
                                        </h3>
                                        <p class="product-price mb-0">
                                            Rp {{ number_format($product->harga_jual, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-5">
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
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Debounced search
        let timeout;
        const input = document.querySelector('input[name="search"]');
        input.addEventListener('keyup', () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                input.form.submit();
            }, 500);
        });

        // Auto-submit on select change
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', () => {
                select.form.submit();
            });
        });

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
