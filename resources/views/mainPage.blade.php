<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinoyo Cam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
</head>
<body>
    @include('partials.header')

    <!-- Promotion Carousel -->
    <section id="promotion" class="py-4">
        <div class="container">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('mainIMG/sample1.png') }}" alt="Promotion 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('mainIMG/sample2.png') }}" alt="Promotion 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('mainIMG/sample3.png') }}" alt="Promotion 3" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section id="Kategori" class="py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">Kategori</h2>
            <a href="" class="text-decoration-none">Lihat Selengkapnya</a>
        </div>
    </section>
    <section id="Kategori-Display" class="py-4">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-3">
                <div class="col"><img src="{{ asset('mCategoryIMG/1.png') }}" alt="Camera" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/2.png') }}" alt="Video" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/3.png') }}" alt="Lens" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/4.png') }}" alt="Tripod" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/5.png') }}" alt="Studio Kit" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/6.png') }}" alt="Bag Case" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/7.png') }}" alt="Filter" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/8.png') }}" alt="Accessories" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/9.png') }}" alt="Camera Film" class="img-fluid"></div>
                <div class="col"><img src="{{ asset('mCategoryIMG/10.png') }}" alt="Used Item" class="img-fluid"></div>
            </div>
        </div>
    </section>

    <section id="Kategori2" class="py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">Produk Terbaru</h2>
            <a href="{{ route('product.index', ['sort' => 'terbaru']) }}" class="text-decoration-none">Lihat Selengkapnya</a>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            @if ($latestProducts->isEmpty())
                <div class="empty-state text-center py-5">
                    <i class="bi bi-camera2 display-1 text-muted mb-3"></i>
                    <p class="text-muted mb-0">Tidak ada produk terbaru saat ini.</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach ($latestProducts as $product)
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
            @endif
        </div>
    </section>

    <section id="Kategori2" class="py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">Rekomendasi</h2>
            <a href="{{ route('product.index', ['sort' => 'rekomendasi']) }}" class="text-decoration-none">Lihat Selengkapnya</a>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            @if ($latestProducts->isEmpty())
                <div class="empty-state text-center py-5">
                    <i class="bi bi-camera2 display-1 text-muted mb-3"></i>
                    <p class="text-muted mb-0">Tidak ada produk rekomendasi saat ini.</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach ($produkUnggulan as $product)
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
            @endif
        </div>
    </section>

    <!-- Brands -->
    <section id="Brand" class="py-4">
        <div class="container">
            <h2 class="section-title">Brands</h2>
        </div>
    </section>
    <section id="Kategori-Display-Brand" class="py-4">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-8 g-3">
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__sony.jpg" alt="Sony" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__canon_1.jpg" alt="Canon" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__fujifilm.jpg" alt="Fujifilm" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__nikon.jpg" alt="Nikon" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__lumix.jpg" alt="Lumix" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__DJI.jpg" alt="DJI" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__godox.jpg" alt="Godox" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__hollyland.jpg" alt="Hollyland" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__phottix.jpg" alt="Phottix" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__thinktank.jpg" alt="Thinktank" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__om_system_update.jpg" alt="OM System" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__tamron.jpg" alt="Tamron" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__samyang.jpg" alt="Samyang" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__saramonic.jpg" alt="Saramonic" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__insta360.jpg" alt="Insta360" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__sigma.jpg" alt="Sigma" class="img-fluid"></div>
            </div>
        </div>
    </section>

    <!-- YouTube Section -->
    <section class="youtube-section">
        <div class="container">
            <div class="youtube-title">
                <h2>Dinoyo Kamera Channel</h2>
                <p>Temukan tips dan review produk terbaru dari tim kami di channel YouTube Dinoyo Kamera</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="youtube-container">
                        <iframe src="https://www.youtube.com/embed/3o2IrQrb7ws?si=t5g5UGYrifjmhKxD" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section id="Benefit" class="pb-1   ">
        <div class="container">
            <h2 class="section-title">Benefit</h2>
        </div>
    </section>
    <section id="Benefit-Item" class="py-4">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 text-center">
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/100___shopping_with_trust___comfort_Benefit_Customer-02.png" alt="Terpercaya" class="img-fluid mb-2">
                    <h2 class="benefit-title">100% Terpercaya</h2>
                </div>
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Tax-Free.png" alt="Bebas Pajak" class="img-fluid mb-2">
                    <h2 class="benefit-title">Bebas Pajak</h2>
                </div>
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Good_Experience_Shopping_at_Focus_Nusantara_Benefit_Customer-09.png" alt="Pengalaman Terbaik" class="img-fluid mb-2">
                    <h2 class="benefit-title">Pengalaman Terbaik</h2>
                </div>
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/quality___friendly_service_Benefit_Customer-04.png" alt="Pelayanan Baik" class="img-fluid mb-2">
                    <h2 class="benefit-title">Kualitas Pelayanan Baik</h2>
                </div>
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/GPP_Guaranteed_3_Years_Benefit_Customer-05.png" alt="Bergaransi" class="img-fluid mb-2">
                    <h2 class="benefit-title">Bergaransi</h2>
                </div>
                <div class="col">
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Free_Fast___Safe_to_Destination_Benefit_Customer-07.png" alt="Aman Sampai Tujuan" class="img-fluid mb-2">
                    <h2 class="benefit-title">Aman Sampai Tujuan</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- WhatsApp Float Icon -->
    @include('partials.floater')
</body>
</html>

