<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinoyo Cam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset ('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset ('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset ('js/scrollNavigation.js') }}"></script>
</head>

<body>
    <section>
        <nav id="header">
            <div>
                <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="">
            </div>
            <ul>
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>
                    <a href="">Katalog</a>
                </li>
                <li>
                    <a href="">Kontak</a>
                </li>
                <li>
                    <a href="about">Tentang Kami</a>
                </li>
            </ul>
        </nav>
    </section>
    <section id="promotion">
        <!-- wrapper -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Dot Carousel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- Carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../mainIMG/Sample1.png" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../mainIMG/Sample2.png" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../mainIMG/Sample3.png" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Tombol Kanan Kiri Slide Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </section>
    <section id="Kategori">
        <div>
            <h2>Kategori</h2>
        </div>
        <div>
            <a href="">Lihat Selengkapnya</a>
        </div>
    </section>
    <section id="Kategori-Display">
        <div class="Kategori-Display">
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Camera.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Video.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Lens.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Tripod.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Studio_Kit.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Bag_Case.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Filter.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Accessories.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Camera_Film.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/categories/Used_Item.jpg" alt="">
            </div>
        </div>
    </section>
    <section id="Kategori2">
        <div>
            <h2>PRODUK TERBARU</h2>
        </div>
        <div>
            <a href="">Lihat Selengkapnya</a>
        </div>
    </section>
    <section>
        <div class="Produk-Baru">
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>SONY FE16mm</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>PANASONIC Lumix</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>Sigma BF Mirrorless</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>OM SYSTEM OM</h2>
                <p>Rp30.000,00</p>
            </div>
        </div>
    </section>
    <section id="Kategori3">
        <div>
            <h2>PROMO BULANANAN</h2>
        </div>
        <div>
            <a href="">Lihat Selengkapnya</a>
        </div>
    </section>
    <section>
        <div class="Produk-Baru">
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>SONY FE16mm</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>PANASONIC Lumix</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>Sigma BF Mirrorless</h2>
                <p>Rp30.000,00</p>
            </div>
            <div class="Produk-Baru-Item">
                <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/p/cpn38864-panasonic-lumix-dc-tz99-_dc-ft99ga-k_-black-web_d1_1.jpg"
                    alt="">
                <h2>OM SYSTEM OM</h2>
                <p>Rp30.000,00</p>
            </div>
        </div>
    </section>
    <section id="Brand">
        <div>
            <h2>BRANDS</h2>
        </div>
    </section>
    <section id="Kategori-Display-Brand">
        <div class="Kategori-Display-Brand">
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__sony.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__canon_1.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__fujifilm.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__nikon.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__lumix.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__DJI.jpg" alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__godox.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__hollyland.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__phottix.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__thinktank.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__om_system_update.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__tamron.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__samyang.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__saramonic.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__insta360.jpg"
                    alt="">
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/brands/Logo_All_Brand_Home_-__sigma.jpg"
                    alt="">
            </div>
        </div>
    </section>
    <section id="Benefit">
        <div>
            <h2>BENEFIT</h2>
        </div>
    </section>
    <section id="Benefit-Item">
        <div class="Benefit-Item">
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/100___shopping_with_trust___comfort_Benefit_Customer-02.png"
                    alt="">
                <h2>100% Terpercaya</h2>
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Tax-Free.png" alt="">
                <h2>Bebas Pajak</h2>
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Good_Experience_Shopping_at_Focus_Nusantara_Benefit_Customer-09.png"
                    alt="">
                <h2>Pengalaman Terbaik</h2>
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/quality___friendly_service_Benefit_Customer-04.png"
                    alt="">
                <h2>Kualitas Pelayanan Baik</h2>
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/GPP_Guaranteed_3_Years_Benefit_Customer-05.png"
                    alt="">
                <h2>Bergaransi</h2>
            </div>
            <div>
                <img src="https://admin.focusnusantara.com/media/wysiwyg/benefit/compressed_img/Free_Fast___Safe_to_Destination_Benefit_Customer-07.png"
                    alt="">
                <h2>Aman Sampai Tujuan</h2>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div>
            <img src="../mainIMG/logo dinoyow.png" alt="">
            <p>Lihat semua outlet Dinoyo Camera</p>
            <p>SMS/Whatsapp</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
            <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
        </div>
        <div class="cs-dinoyo">
            <h2>CUSTOMER SERVICE</h2>
            <div class="cs-detail">
                <a href="">Contact Us</a> <br>
                <a href="">Feedback</a>
            </div>
        </div>
        <div class="cs-dinoyo">
            <h2>ABOUT US</h2>
            <div class="cs-detail">
                <a href="">About Dinoyo Camera</a><br>
                <a href="">Store Location</a>
            </div>
        </div>
        <div class="cs-dinoyo">
            <div>
                <h2>MARKETPLACE</h2>
            </div>
            <div class="Logo-Medplace">
                <div>
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/shopee.png" alt="">
                </div>
                <div>
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/tokopedia.png" alt="">
                </div>
                <div>
                    <img src="https://admin.focusnusantara.com/media/wysiwyg/blibli.png" alt="">
                </div>
            </div>
            <div id="Logo-Medsos">
                <div>
                    <h2>FIND US</h2>
                </div>
                <div class="Logo-Medplace">
                    <div>
                        <img src="../mainIMG/Instagram.svg" alt="">
                    </div>
                    <div>
                        <img src="../mainIMG/Facebook.svg" alt="">
                    </div>
                    <div>
                        <img src="../mainIMG/Twitter.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- <div id="loader"
        style="position:fixed;top:0;left:0;width:100%;height:100%;background:white;z-index:9999;display:flex;align-items:center;justify-content:center;">
        <div class="spinner"></div>
    </div> --}}
</body>

</html>