<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Dinoyo Kamera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contactStore.css') }}">
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('mainIMG/logoDinoyo.png') }}" alt="Dinoyo Kamera Logo" class="img-fluid" style="max-width: 90px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/about">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Main Content -->
<main class="container py-5">
    <section class="row g-0 mb-4">
        <div class="col-12 text-center mb-3">
            <h2 class="fw-bold text-dark">Hubungi Kami</h2>
            <p class="text-gray">Dinoyo Kamera dengan senang hati menerima dukungan dan pertanyaan Anda. Kami akan berusaha untuk menjawab pertanyaan Anda segera setelah kami menerimanya.</p>
        </div>
    </section>
    <section class="row g-4">
        <!-- Google Maps Section -->
        <div class="col-md-6">
            <div class="map-card shadow-sm h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6400010975767!2d112.6038165!3d-7.932615299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78821258558e79%3A0x329993e281b05187!2sDinoyo%20Kamera!5e0!3m2!1sen!2sid!4v1746725988976!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Contact Details Section -->
        <div class="col-md-6">
            <div class="contact-details-card shadow-sm p-4 h-100">
                <h4 class="fw-bold text-dark">Dinoyo Kamera Store Malang:</h4>
                <p><strong>Telp:</strong> (021) 2664 8999</p>
                <p><strong>WhatsApp:</strong> 0811 822 167</p>
                <p><strong>Jam Operasional:</strong></p>
                <p>Senin sampai Jumat: 8:00 - 17:00</p>
                <p>Sabtu: 9:00 - 14:00</p>
                <p><strong>Produk yang didukung:</strong></p>
                <p>Printer Inkjet, Printer Laser Fungsi Tunggal, Printer Foto Nikabel, Printer Multifungsi Besar, Kamera, Lensa, Video Kamera, Solsu Jaringan Video, Scanner, Proyektor, Suppli</p>
                <p><strong>Produk yang didukung:</strong></p>
                <p>Perangkat Multi-fungsi Bisnis, Printer Laser Multi-fungsi, Sistem Percetakan Komersial, Sistem Percetakan Untuk Produksi, Managed Document Service</p>
            </div>
        </div>
    </section>
    <!-- Contact Form Section -->
    <section class="row mt-4">
        <div class="col-12">
            <div class="contact-card shadow-sm p-4">
                <!-- Contact Form -->
                <form>
                    <div class="mb-3">
                        <label for="type" class="form-label text-dark">Pilih Tipe Pertanyaan*</label>
                        <select class="form-select" id="type" required>
                            <option value="">Pilih Tipe Pertanyaan</option>
                            <option value="general">Silahkan Pilih Topik*</option>
                            <option value="support">Silahkan Pilih Sapa*</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Nama*</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-dark">Alamat Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="Ketik Ulang Alamat Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-dark">Nomor Kontak*</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Nomor Kontak" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-dark">Pesan* (Harap cantumkan model produk dan jika ada)</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="robot">
                        <label class="form-check-label text-gray" for="robot">Saya bukan robot</label>
                    </div>
                    <button type="submit" class="btn btn-danger w-100 fw-bold">Kirim email</button>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <img src="{{ asset('mainIMG/logo_dinoyow.png') }}" alt="Dinoyo Kamera Logo" class="img-fluid mb-3" style="max-width: 80%;">
                    <p>Lihat semua outlet Dinoyo Camera</p>
                    <p>SMS/Whatsapp</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                    <p>+62 853 6730 1245 - CS Dinoyo Malang</p>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h5>Customer Service</h5>
                    <div class="cs-detail">
                        <a href="#" class="text-white text-decoration-none">Contact Us</a><br>
                        <a href="#" class="text-white text-decoration-none">Feedback</a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h5>About Us</h5>
                    <div class="cs-detail">
                        <a href="#" class="text-white text-decoration-none">About Dinoyo Camera</a><br>
                        <a href="#" class="text-white text-decoration-none">Store Location</a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h5>Marketplace</h5>
                    <div class="logo-medplace d-flex gap-3">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/shopee.png" alt="Shopee" class="img-fluid" style="max-width: 60px;">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/tokopedia.png" alt="Tokopedia" class="img-fluid" style="max-width: 60px;">
                        <img src="https://admin.focusnusantara.com/media/wysiwyg/blibli.png" alt="Blibli" class="img-fluid" style="max-width: 60px;">
                    </div>
                    <div class="mt-3">
                        <h5>Find Us</h5>
                        <div class="logo-medplace d-flex gap-3">
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