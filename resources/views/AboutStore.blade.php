<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Dinoyo Kamera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/aboutStore.css') }}">
</head>
<body>
    <!-- Navigation -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="container py-5">
        <!-- About Us Section -->
        <section class="row align-items-center mb-5 about-card">
            <div class="col-md-7">
                <p class="text-uppercase text-muted small">About Us</p>
                <h2 class="fw-bold text-dark">Kami Termotivasi untuk Memenuhi Passion Fotografi Anda!</h2>
                <p class="text-gray">DinoyoKamera.com sebagai toko penyedia kamera profesional, perlengkapan fotografi, lensa kamera, tripod, lighting studio, aksesoris kamera, kamera digital, kamera analog, hingga jasa servis kamera. Dengan cara layanan yang ramah dan informatif, didukung beberapa keahlian dari para fotografer dan teknisi kamera berpengalaman, Dinoyo Kamera menjadi pilihan toko kamera terbaik di kota, <span class="text-pink">Malang</span>.</p>
                <a href="#" class="link text-pink fw-bold text-decoration-none">Let's work together!</a>
            </div>
            <div class="col-md-5">
                <div class="image-stack">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipOwN60wyBHXel9mMa_GAk-o__tyrk4oqh2ELz_M=w426-h240-k-no" alt="Book cover" class="img-fluid rounded shadow">
                </div>
            </div>
        </section>

        <!-- YouTube Video Section -->
        <section class="mb-5">
            <div class="video-wrapper">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/3o2IrQrb7ws?si=qPdiaa0io3PMVR_-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Reputation Section -->
        <section class="row mb-5">
            <div class="col-12">
                <div class="card feature-card shadow-sm">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                            <img src="https://i.ytimg.com/an_webp/434F8u2J8xs/mqdefault_6s.webp?du=3000&sqp=CMyu88AG&rs=AOn4CLAcEnWion7IDIEj5X-OpTkcFFeyWQ" alt="Hands holding camera" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-dark">REPUTASI</h3>
                                <p class="card-text text-gray">Dinoyo Kamera telah menjadi lebih dari sekadar toko - kami adalah komunitas penggemar kamera selama lebih dari 10 tahun, tempat pelanggan dapat menemukan penawaran nyata. Kami menawarkan keaslian dan akurasi. Tim kami berbasis di Malang, jadi jangan ragu untuk menghubungi kami atau datang ke toko kami untuk menemukan perbedaan Dinoyo Kamera hari ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Selection Section -->
        <section class="row mb-5">
            <div class="col-12">
                <div class="card feature-card shadow-sm">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-8 order-md-1 order-2">
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-dark">KEPERCAYAAN</h3>
                                <p class="card-text text-gray">Dengan lebih dari 10.000 item dalam stok, ada sesuatu untuk setiap fotografer di Dinoyo Kamera. Dari kamera klasik 35mm hingga medium dan large-format, kami menambahkan ratusan item baru setiap minggu. Kami menyediakan segala yang lolos inspeksi (atau yang kami perbaiki). Baik Anda pemula atau profesional berpengalaman, Anda akan menemukan peralatan yang sesuai dengan visi dan anggaran Anda.</p>
                            </div>
                        </div>
                        <div class="col-md-4 order-md-2 order-1">
                            <img src="https://i.ytimg.com/an_webp/EG58Pi5rH94/mqdefault_6s.webp?du=3000&sqp=CKyS88AG&rs=AOn4CLD4HY4hRpASFJVxOFy6xhCWRy_wgg" alt="Stack of cameras" class="img-fluid rounded-end">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clarity Section -->
        <section class="row mb-5">
            <div class="col-12">
                <div class="card feature-card shadow-sm">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                            <img src="https://i.ytimg.com/an_webp/tQru5Ae4pfM/mqdefault_6s.webp?du=3000&sqp=CK-988AG&rs=AOn4CLDXvdjYZ2hTDNlNyGXiYmUG5E42Ew">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-dark">KESETIAAN</h3>
                                <p class="card-text text-gray">Kami percaya pada transparansi penuh. Itu sebabnya hampir setiap item di toko kami difoto secara individual. Apa yang Anda lihat adalah apa yang akan Anda terima - tanpa kejutan. Dikombinasikan dengan peringkat kontrol kualitas kami, kami memberi Anda semua yang Anda butuhkan untuk membuat keputusan yang tepat. Masih ada pertanyaan? Tim kami siap membantu!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quality Section -->
        <section class="row mb-5">
            <div class="col-12">
                <div class="card feature-card shadow-sm">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-8 order-md-1 order-2">
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-dark">KUALITAS</h3>
                                <p class="card-text text-gray">Di Dinoyo Kamera, kami percaya untuk melakukan sesuatu dengan benar. Itu sebabnya setiap item yang kami jual diuji menggunakan peralatan kamera profesional era film. Baik itu kecepatan rana, pengukuran, atau akurasi eksposur, kami memastikan setiap produk memenuhi standar tinggi kami sebelum sampai ke Anda. Setiap kamera, lensa, dan aksesoris diperiksa dengan cermat, diperbaiki jika perlu, dan diberi label dengan peringkat kondisi yang jelas.</p>
                            </div>
                        </div>
                        <div class="col-md-4 order-md-2 order-1">
                            <img src="https://i.ytimg.com/an_webp/McOxVcYId8Q/mqdefault_6s.webp?du=3000&sqp=CJCe88AG&rs=AOn4CLDY37TBOVU_wLAoQuD-DyYNO3UPzA" alt="Testing equipment" class="img-fluid rounded-end">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section class="mb-5 why-us text-center">
            <p class="text-uppercase text-muted small">Kenapa Kami?</p>
            <h3 class="fw-bold text-dark">Apa yang Bisa Kami Lakukan untuk Anda?</h3>
            <div class="row">
                <div class="col-md-4">
                    <p class="text-gray">Tidak hanya fokus pada penjualan kamera digital dan analog, Dinoyo Kamera juga menyediakan beragam perlengkapan fotografi lainnya seperti lensa, tripod, lighting, aksesoris kamera, tas kamera, hingga perangkat perekaman audio.</p>
                </div>
                <div class="col-md-4">
                    <p class="text-gray">Untuk kebutuhan fotografi dan videografi, Dinoyo Kamera juga menyediakan layanan tambahan seperti rental kamera, jasa servis kamera, konsultasi perlengkapan, hingga pelatihan dasar fotografi bagi pemula maupun profesional.</p>
                </div>
                <div class="col-md-4">
                    <p class="text-gray">Dikelola oleh tim yang ramah, berpengalaman, dan antusias di bidang fotografi, Dinoyo Kamera selalu berkomitmen memberikan produk dan layanan terbaik sesuai dengan kebutuhan serta passion Anda dalam dunia visual.</p>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="bottom-section mb-5">
            <p class="text-uppercase text-muted small text-center">TESTIMONI</p>
            <h3 class="fw-bold text-dark text-center mb-4">Apa Kata Mereka?</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card testimonial-card shadow-sm text-center">
                        <img src="https://images.pexels.com/photos/21852309/pexels-photo-21852309/free-photo-of-pria-laki-laki-lelaki-kedudukan.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500  " alt="Customer 1" class="rounded-circle mx-auto mt-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Ferdiansyah</h5>
                            <p class="card-text text-gray">"Pelayanan di Dinoyo Kamera sangat memuaskan! Saya membeli kamera analog dan tim mereka sangat membantu menjelaskan cara penggunaannya."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card shadow-sm text-center">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/983/2024/11/16/unnamed-355406532.png" alt="Customer 2" class="rounded-circle mx-auto mt-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Rosul</h5>
                            <p class="card-text text-gray">"Saya menyewa kamera untuk proyek fotografi dan sangat puas dengan kondisi peralatannya. Harga sewa juga terjangkau, dan stafnya ramah sekali!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card shadow-sm text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDLcaoMqauKXsMZwJOio8tds2bjfB3WK3HnQ&s" alt="Customer 3" class="rounded-circle mx-auto mt-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Imtiaz Hussain</h5>
                            <p class="card-text text-gray">"Dinoyo Kamera adalah tempat terbaik untuk servis kamera di Malang. Kamera saya yang bermasalah jadi seperti baru lagi setelah diperbaiki di sini."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Quote Modal -->
    <div id="quoteModal" class="modal fade" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-3" placeholder="Nama">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-dark">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/aboutStore.js') }}"></script>
    <script src="{{ asset('js/loadingScreen.js') }}"></script>
    <script src="{{ asset('js/productHover.js') }}"></script>
    <script src="{{ asset('js/scrollNavigation.js') }}"></script>

   <!-- WhatsApp Float Icon -->
    @include('partials.floater')

</body>
</html>