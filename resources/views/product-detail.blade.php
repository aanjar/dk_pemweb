<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} - Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/loadingScreen.js') }}"></script>
    <script type="module" src="{{ asset('js/productHover.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollNavigation.js') }}"></script>
    @php
        $nomorWA = '6281234567890'; // Ganti nomor WA kamu
        $pesan = "Apakah {$produk->nama_produk} tersedia?";
        $linkWA = "https://wa.me/{$nomorWA}?text=" . urlencode($pesan);
    @endphp
    <style>
        .description-box {
            font-size: 13px;
            max-height: 400px;
            overflow-y: auto;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 6px;
            /* white-space: pre-wrap; */
            scrollbar-width: thin;
            scrollbar-color: #888 #f5f5f5;
        }
        .description-box::-webkit-scrollbar {
            width: 8px;
        }
        .description-box::-webkit-scrollbar-track {
            background: #f5f5f5;
        }
        .description-box::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        .floating-wa {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 10px 16px;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-weight: 600;
            z-index: 1000;
        }

        .floating-wa:hover {
            background-color: #1ebe5d;
            text-decoration: none;
            color: white;
        }
    </style>
    <a href="{{ $linkWA }}" target="_blank" class="floating-wa">
        <i class="bi bi-whatsapp"></i>
        Pesan Sekarang
    </a>

</head>
<body>
    @include('partials.header')

    <section id="product-detail" style="padding-top: 50px; padding-bottom:50px" >
    <div class="container">
        <div class="row">
            <!-- KIRI: Gambar Carousel -->
            <div class="col-lg-6 mb-3">
                <div id="productCarousel" class="carousel slide mb-3" data-bs-ride="false">
                    <div class="carousel-inner">
                        @foreach ($produk->gambar as $index => $gambar)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($gambar->path_gambar) }}"
                                    class="d-block w-100 main-image"
                                    alt="{{ $produk->nama_produk }}">
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
                        <img src="{{ asset($gambar->path_gambar) }}"
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
                <p class="text-danger fw-bold fs-4 mb-2">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</p>
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
                <div class="description-box">
                    {!! nl2br(e($produk->deskripsi_produk)) !!}
                </div>
                {{-- Tambahkan detail lainnya di sini --}}
            </div>
        </div>
    </div>
</section>


        <!-- Footer -->
    @include('partials.footer')

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
    </script>
</body>
</html>
