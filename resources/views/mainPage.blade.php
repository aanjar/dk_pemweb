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
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
</head>
<body>
    <!-- Navigation -->
    <nav id="header" class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="Dinoyo Camera Logo" class="img-fluid" style="max-width: 90px;">
            </a>
            <button class="navbar-toggler always-visible" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about">Tentang Kami</a></li>
                </ul>

            </div>
        </div>
    </nav>

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
                        <img src="{{ asset('mainIMG/Sample1.png') }}" alt="Promotion 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('mainIMG/Sample2.png') }}" alt="Promotion 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('mainIMG/Sample3.png') }}" alt="Promotion 3" class="d-block w-100">
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
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Camera.jpg" alt="Camera" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Video.jpg" alt="Video" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Lens.jpg" alt="Lens" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Tripod.jpg" alt="Tripod" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Studio_Kit.jpg" alt="Studio Kit" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Bag_Case.jpg" alt="Bag Case" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Filter.jpg" alt="Filter" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Accessories.jpg" alt="Accessories" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Camera_Film.jpg" alt="Camera Film" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="Used Item" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="Used Item" class="img-fluid"></div>
                <div class="col"><img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="Used Item" class="img-fluid"></div>
            </div>
        </div>
    </section>

    <!-- New Products -->
    <section id="Kategori2" class="py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">Produk Terbaru</h2>
            <a href="" class="text-decoration-none">Lihat Selengkapnya</a>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 product-list">
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="SONY FE16mm" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">SONY FE16mm</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="PANASONIC Lumix" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">PANASONIC Lumix</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="Sigma BF Mirrorless" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Sigma BF Mirrorless</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="OM SYSTEM OM" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">OM SYSTEM OM</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Monthly Promotions -->
    <section id="Kategori3" class="py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">Promo Bulanan</h2>
            <a href="" class="text-decoration-none">Lihat Selengkapnya</a>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 product-list">
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="SONY FE16mm" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">SONY FE16mm</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="PANASONIC Lumix" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">PANASONIC Lumix</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="Sigma BF Mirrorless" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Sigma BF Mirrorless</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="produk-baru-item card h-100">
                        <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg" alt="OM SYSTEM OM" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">OM SYSTEM OM</h2>
                            <p class="card-text text-danger">Rp30.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Benefits -->
    <section id="Benefit" class="py-4">
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
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <img src="{{ asset('mainIMG/logo_dinoyow.png') }}" alt="Dinoyo Camera Logo" class="img-fluid mb-3" style="max-width: 80%;">
                    <p>Lihat semua outlet Dinoyo Camera</p>
                    <p>SMS/Whatsapp</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h2 class="footer-title">Customer Service</h2>
                    <div class="cs-detail">
                        <a href="" class="d-block text-white text-decoration-none mb-2">Contact Us</a>
                        <a href="" class="d-block text-white text-decoration-none">Feedback</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h2 class="footer-title">About Us</h2>
                    <div class="cs-detail">
                        <a href="" class="d-block text-white text-decoration-none mb-2">About Dinoyo Camera</a>
                        <a href="" class="d-block text-white text-decoration-none">Store Location</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h2 class="footer-title">Marketplace</h2>
                    <div class="logo-medplace d-flex flex-wrap gap-3">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/shopee.png" alt="Shopee" class="img-fluid" style="max-width: 60px;">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/tokopedia.png" alt="Tokopedia" class="img-fluid" style="max-width: 60px;">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/blibli.png" alt="Blibli" class="img-fluid" style="max-width: 60px;">
                    </div>
                    <div id="Logo-Medsos" class="mt-4">
                        <h2 class="footer-title">Find Us</h2>
                        <div class="logo-medplace d-flex flex-wrap gap-3">
                            <img src="{{ asset('mainIMG/Instagram.svg') }}" alt="Instagram" class="img-fluid" style="max-width: 30px;">
                            <img src="{{ asset('mainIMG/Facebook.svg') }}" alt="Facebook" class="img-fluid" style="max-width: 30px;">
                            <img src="{{ asset('mainIMG/Twitter.svg') }}" alt="Twitter" class="img-fluid" style="max-width: 30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- WhatsApp Float Icon -->
    <div class="whatsapp-float">
        <a href="https://wa.me/6285226158143" target="_blank">
            <img src="https://brandlogos.net/wp-content/uploads/2013/04/whatsapp-logo-symbol-vector-400x400.png" alt="WhatsApp">
        </a>
        <span>Our Contact</span>
    </div>
</body>
</html>

