<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} - Detail Produk - Dinoyo Kamera</title>
    <link rel="shortcut icon" href="{{ asset('mainIMG/logoDK.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail-produk.css') }}">
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
    @php
        $nomorWA = '62895411200308';
        $pesan = "Halo Dinoyo Kamera, saya tertarik dengan produk *{$produk->nama_produk}* (SKU: {$produk->kode_sku}). Apakah produk ini masih tersedia dan bisakah saya mendapatkan informasi lebih lanjut?";
        $linkWA = "https://wa.me/{$nomorWA}?text=" . urlencode($pesan);
    @endphp

</head>
<body>
    @include('partials.header')

    <section id="product-detail" style="padding-top: 50px; padding-bottom:50px" >
    <div class="container">
        <div class="row align-items-center mb-3">
            <!-- Tombol Kembali -->
            <div class="col-auto">
                <a href="javascript:history.back()" class="btn btn-light border d-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

            <!-- Search bar -->
            <div class="col-8 col-sm-7 col-md-5 col-lg-4 ms-auto">
                <form method="GET" action="{{ route('product.index') }}">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" name="search" placeholder="Cari produk..." value="{{ request('search') }}">
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <!-- KIRI: Gambar Carousel -->
            <div class="col-lg-6 mb-3">
                <div id="productCarousel" class="carousel slide mb-3" data-bs-ride="false">
                    <div class="carousel-inner">
                        @foreach ($produk->gambar as $index => $gambar)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="/storage{{ asset($gambar->path_gambar) }}"
                                    class="d-block w-100 main-image"
                                    alt="{{ $produk->nama_produk }}" loading="lazy">
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Thumbnail -->
                <div class="d-flex flex-wrap gap-2 justify-content-center mt-2">
                    @foreach ($produk->gambar as $index => $gambar)
                        <img src="/storage{{ asset($gambar->path_gambar) }}"
                            alt="{{ $produk->nama_produk }}"
                            class="img-fluid thumbnail"
                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                            data-bs-target="#productCarousel"
                            data-bs-slide-to="{{ $index }}">
                    @endforeach
                </div>
            </div>

            <!-- KANAN: Detail Produk -->
            <div class="col-lg-6">
                <h2>{{ $produk->nama_produk }}</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                    <p class="text-danger fw-bold fs-4 mb-2">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</p>
                    {{-- TOMBOL PESAN SEKARANG DI SINI --}}
                    @if ($produk->stok_produk > 0)
                        <a href="{{ $linkWA }}" class="btn btn-success btn-lg flex-shrink-0" target="_blank" rel="noopener noreferrer">
                            <i></i> Pesan Sekarang
                        </a>
                    @else
                        <button class="btn btn-secondary btn-lg flex-shrink-0" disabled>
                            <i class="bi bi-x-circle me-2"></i> Stok Habis
                        </button>
                    @endif
                </div>
                <p class="text-muted mb-2"><strong>Kode SKU:</strong> {{ $produk->kode_sku }}</p>
                <p class="text-muted mb-2"><strong>Kategori:</strong> {{ $produk->kategori->nama_kategori }}</p>
                <p class="text-muted mb-2"><strong>Status:</strong> {{ $produk->status }}</p>
                <p class="text-muted mb-2">
                    <strong>Stok:</strong>
                    @if ($produk->stok_produk > 0)
                        <span class="text-success">{{ $produk->stok_produk }} tersedia</span>
                    @else
                        <span class="text-danger">Stok habis</span>
                    @endif
                </p>
                <p class="text-muted mb-2"><strong>Deskripsi Produk:</strong></p>
                <p id="descriptionText" class="description collapsed">
                    {!! nl2br(e($produk->deskripsi_produk)) !!}
                </p>
                <span id="toggleText" class="toggle-text" style="display: none;">Baca selengkapnya</span>

                {{-- Tambahkan detail lainnya di sini --}}
            </div>
        </div>
    </div>
</section>


        <!-- Footer -->
    @include('partials.footer')
    @include('partials.floating-wa')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('#productCarousel');
            const thumbnails = document.querySelectorAll('.thumbnail');

            const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);

            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener('click', () => {
                    carouselInstance.to(index);
                });
            });

            // Optional: highlight active thumbnail
            carousel.addEventListener('slid.bs.carousel', function (e) {
                thumbnails.forEach((thumb, idx) => {
                    if (idx === e.to) {
                        thumb.classList.add('border', 'border-primary');
                    } else {
                        thumb.classList.remove('border', 'border-primary');
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const desc = document.getElementById("descriptionText");
            const toggle = document.getElementById("toggleText");

            // Hitung tinggi maksimal untuk 20 baris
            const lineHeight = parseFloat(getComputedStyle(desc).lineHeight) || 18;
            const maxHeight = lineHeight * 18;

            // Tampilkan toggle hanya jika teks melebihi 20 baris
            if (desc.scrollHeight > maxHeight) {
                desc.classList.add("collapsed");
                toggle.style.display = "inline";
            }

            toggle.addEventListener("click", function () {
                desc.classList.toggle("collapsed");
                toggle.textContent = desc.classList.contains("collapsed")
                    ? "Baca selengkapnya"
                    : "Tampilkan lebih sedikit";
            });
        });


    </script>
</body>
</html>
