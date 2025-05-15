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
                    <input type="text" class="form-control" name="search" placeholder="Cari produk..." value="{{ $search ?? '' }}">
                </div>
                <div class="col">
                    <select class="form-select" name="kategori">
                        <option value="">Semua Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ $kategoriFilter == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="urutkan">
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="terbaru" {{ $urutkan == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="termurah" {{ $urutkan == 'termurah' ? 'selected' : '' }}>Harga Termurah</option>
                        <option value="termahal" {{ $urutkan == 'termahal' ? 'selected' : '' }}>Harga Termahal</option>
                        <option value="populer" {{ $urutkan == 'populer' ? 'selected' : '' }}>Paling Populer</option>
                        <option value="a-z" {{ $urutkan == 'a-z' ? 'selected' : '' }}>A - Z</option>
                        <option value="z-a" {{ $urutkan == 'z-a' ? 'selected' : '' }}>Z - A</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="price_range">
                        <option value="">Rentang Harga</option>
                        <option value="0-500000" {{ $priceRange == '0-500000' ? 'selected' : '' }}>Di bawah Rp 500.000</option>
                        <option value="500000-1000000" {{ $priceRange == '500000-1000000' ? 'selected' : '' }}>Rp 500.000 - Rp 1.000.000</option>
                        <option value="1000000-3000000" {{ $priceRange == '1000000-3000000' ? 'selected' : '' }}>Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3000000-5000000" {{ $priceRange == '3000000-5000000' ? 'selected' : '' }}>Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="5000000-10000000" {{ $priceRange == '5000000-10000000' ? 'selected' : '' }}>Rp 5.000.000 - Rp 10.000.000</option>
                        <option value="10000000-up" {{ $priceRange == '10000000-up' ? 'selected' : '' }}>Di atas Rp 10.000.000</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-dark">Filter</button>
                </div>
            </form>
        </div>
    </section>

     {{-- <section id="category-buttons" class="py-4">
        <div class="container">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-outline-dark category-btn" data-category="all">Semua Kategori</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="kamera">Kamera DSLR</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="lensa">Kamera Mirrorless</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="tripod">Kamera Digital</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="aksesoris">Handycam</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="studio-kit">Kamera Instan</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="tas-kamera">Kamera Lain</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="filter">Lensa</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="camera-film">Baterai/Charger</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="used-item">Kartu Memori</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="video">Aksesoris Lain</button>
                <button type="button" class="btn btn-outline-dark category-btn" data-category="lain-lain">Lain-lain</button>
            </div>
        </div>
    </section> --}}

    <section id="product-grid" class="py-4">
        <div class="container">
            <!-- Tombol Filter Kategori -->
            <div class="d-flex flex-wrap gap-2 mb-4">
                <button type="button" class="btn btn-outline-dark category-btn {{ !request('kategori') ? 'active' : '' }}" data-category="all">Semua Kategori</button>
                @foreach ($kategoris as $kategori)
                    <button type="button" class="btn btn-outline-dark category-btn {{ request('kategori') == $kategori->id ? 'active' : '' }}" data-category="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</button>
                @endforeach
            </div>

            <!-- Produk -->
            @if ($kategoris->isEmpty())
                <p class="text-center">Tidak ada kategori yang tersedia.</p>
            @elseif (empty($productsByCategory))
                <p class="text-center">Tidak ada produk untuk kategori yang dipilih.</p>
            @else
                @foreach ($productsByCategory as $nama_kategori => $produk_list)
                    @if ($produk_list->isNotEmpty())
                        <div class="mb-4">
                            <h2 class="section-title mb-3">{{ $nama_kategori }}</h2>
                            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                                @foreach ($produk_list as $product)
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
                                                {{-- <p class="card-text small">{{ Str::limit($product->deskripsi_produk, 100) }}</p> --}}
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

    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                const url = new URL(window.location.href);
                if (category === 'all') {
                    url.searchParams.delete('kategori');
                } else {
                    url.searchParams.set('kategori', category);
                }
                window.location.href = url.toString();
            });
        });

//         document.querySelectorAll('.category-btn').forEach(button => {
//             button.addEventListener('click', function() {
//                 const categoryId = this.getAttribute('data-category');
//                 document.querySelectorAll('.category-section').forEach(section => {
//                     if (categoryId === 'all' || section.getAttribute('data-category-id') === categoryId) {
//                         section.style.display = 'block';
//                     } else {
//                         section.style.display = 'none';
//                     }
//                 });
//             });
// });
    </script>

    <!-- Footer -->
    @include('partials.footer')

    <!-- WhatsApp Float Icon -->
    @include('partials.floater')
</body>
</html>
