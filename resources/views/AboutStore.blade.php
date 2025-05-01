<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/AboutStore.css') }}" />
    <script type="module" src="{{ asset ('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset ('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset ('js/scrollNavigation.js') }}"></script>

</head>
<body>
    <section>
        <nav id="header">
            <div>
                <img src="{{ asset ('mainIMG/logoDinoyo.png') }}" alt="">
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
                    <a href="/about">Tentang Kami</a>
                </li>
            </ul>  
        </nav>
    </section>
    <section>
        <div class="container">
            <div class="flex flex-col md-flex-row md-space-x-10 space-y-8 md-space-y-0">
                <div class="md-w-7-12">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3o2IrQrb7ws?si=qPdiaa0io3PMVR_-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="logo-row" aria-label="Client logos">
                    </div>
                </div>  
                <div class="md-w-5-12 about-card" role="region" aria-labelledby="aboutus-title">
                    <p class="uppercase">ABOUT US</p>
                    <h2 id="aboutus-title">
                        We're Motivated By<br />
                        The Desire<br />
                        To Achieve.
                    </h2>
                    <p class="text-gray">
                        DinoyoKamera.com sebagai toko penyedia kamera profesional, perlengkapan fotografi, lensa kamera, tripod, lighting studio, aksesoris kamera, kamera digital, kamera analog, hingga jasa servis kamera. Dengan cara layanan yang ramah dan informatif, didukung beberapa keahlian dari para fotografer dan teknisi kamera berpengalaman, Dinoyo Kamera menjadi pilihan toko kamera terbaik di kota,
                        <span style="color:#db2777;"> Malang</span>
                    </p>
                    <a href="#" class="link">Let's work together!</a>
                </div>
            </div>

            <!-- Middle Section -->
            <div class="flex flex-col md-flex-row md-space-x-10 space-y-8 md-space-y-0" style="margin-top:64px;">
                <!-- Left text block -->
                <div class="md-w-6-12 why-us">
                    <p class="uppercase">WHY US</p>
                    <h3>What We Can Do For<br /> Your Business?</h3>
                    <p>
                        Tidak hanya fokus pada penjualan kamera digital dan analog, Dinoyo Kamera juga menyediakan beragam perlengkapan fotografi lainnya seperti lensa, tripod, lighting, aksesoris kamera, tas kamera, hingga perangkat perekaman audio.
                    </p>
                    <p>
                        Untuk kebutuhan fotografi dan videografi, Dinoyo Kamera juga menyediakan layanan tambahan seperti rental kamera, jasa servis kamera, konsultasi perlengkapan, hingga pelatihan dasar fotografi bagi pemula maupun profesional.
                    </p>
                    <p>
                        Dikelola oleh tim yang ramah, berpengalaman, dan antusias di bidang fotografi, Dinoyo Kamera selalu berkomitmen memberikan produk dan layanan terbaik sesuai dengan kebutuhan serta passion Anda dalam dunia visual.
                    </p>
                </div>

                <!-- Right images stack -->
                <div class="image-stack" aria-label="Portfolio book images">
                    <div class="image1" role="img" aria-label="">
                        <img src="https://www.soocadesign.com/wp-content/uploads/2021/02/jasa-desain-annual-report-molindo.png" alt="Book cover design with blue and white stripes and text" />
                    </div>
                </div>
            </div>
            <!-- Bottom Section -->
            <div class="bottom-section">
                <!-- Left pink block -->
                <div class="pink-box" role="region" aria-labelledby="pinkbox-title">
                    <h4 id="pinkbox-title">Fotografi Mampu Menjadi Sarana Perubahan</h4>
                    <p>
                        Kami percaya bahwa fotografi memiliki kekuatan untuk menginspirasi dan menjadi sarana perubahan. Sebuah foto bukan sekadar hasil jepretan, tetapi cara melihat, merasakan, dan menceritakan dunia. Fotografi adalah proses menangkap momen, menyusun narasi visual, dan membangun koneksi emosional yang bisa mengubah cara pandang seseorang terhadap realitas di sekitarnya. Dengan kamera di tangan, setiap orang punya potensi untuk berbicara tanpa kata.
                    </p>
                </div>

                <!-- Right white block -->
                <div class="white-box" role="region" aria-labelledby="whitebox-title">
                    <p class="uppercase">What Are You Waiting for?</p>
                    <h4 id="whitebox-title">Let's gear up your photography journey!</h4>
                    <button class="btn-quote">Request a Quote</button>
                </div>
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
    </footer>s
    <div id="quoteModal" style="display:none;position:fixed;top:20%;left:50%;transform:translateX(-50%);background:white;padding:20px;border:1px solid #ccc;z-index:1000;">
        <h3>Request a Quote</h3>
        <input type="text" placeholder="Nama" style="display:block; margin-bottom:10px;">
        <input type="email" placeholder="Email" style="display:block; margin-bottom:10px;">
        <button onclick="closeModal()">Kirim</button>
        <button onclick="closeModal()">Tutup</button>
    </div>
    <div id="loader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:white;z-index:9999;display:flex;align-items:center;justify-content:center;">
        <div class="spinner"></div>
      </div>
</body>
</html>