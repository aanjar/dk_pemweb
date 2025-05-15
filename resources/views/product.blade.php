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

    <section id="filter-section" class="py-4 bg-light border-bottom">
        <div class="container">
            <form action="" method="" class="row row-cols-auto align-items-center g-md-3 g-2">
                <div class="col">
                    <input type="text" class="form-control" name="search" placeholder="Cari produk...">
                </div>
                <div class="col">
                    <select class="form-select" name="kategori">
                        <option value="">Semua Kategori</option>
                        <option value="kamera">Kamera DSLR/option>
                        <option value="lensa">Kamera Mirrorless</option>
                        <option value="tripod">Kamera Digital</option>
                        <option value="aksesoris">Handycam</option>
                        <option value="studio-kit">Kamera Instan</option>
                        <option value="tas-kamera">Kamera Lain</option>
                        <option value="filter">Lensa</option>
                        <option value="camera-film">Baterai/Charger</option>
                        <option value="used-item">Kartu Memori/option>
                        <option value="video">Aksesoris Lain</option>
                        <option value="lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="urutkan">
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="termurah">Harga Termurah</option>
                        <option value="termahal">Harga Termahal</option>
                        <option value="populer">Paling Populer</option>
                        <option value="a-z">A - Z</option>
                        <option value="z-a">Z - A</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="price_range">
                        <option value="">Rentang Harga</option>
                        <option value="0-500000">Di bawah Rp 500.000</option>
                        <option value="500000-1000000">Rp 500.000 - Rp 1.000.000</option>
                        <option value="1000000-3000000">Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3000000-5000000">Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="5000000-10000000">Rp 5.000.000 - Rp 10.000.000</option>
                        <option value="10000000-up">Di atas Rp 10.000.000</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-dark">Filter</button>
                </div>
            </form>
        </div>
    </section>

    <section id="category-buttons" class="py-4">
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
    </section>

    <section id="product-grid" class="py-4">
        <div class="container">
            <div class="mb-4">
                <h2 class="section-title mb-3">Kamera DSLR</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_alpha_a7_iv_body_only_1_1.jpg" alt="Sony Alpha A7 IV" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony Alpha A7 IV Body Only</h6>
                                <p class="card-text text-danger fw-semibold">Rp 35.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_eos_r6_mark_ii_body_1.jpg" alt="Canon EOS R6 Mark II" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon EOS R6 Mark II Body</h6>
                                <p class="card-text text-danger fw-semibold">Rp 38.500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_x-t5_body_black_1.jpg" alt="Fujifilm X-T5" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm X-T5 Body Black</h6>
                                <p class="card-text text-danger fw-semibold">Rp 26.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_z_6ii_body_1.jpg" alt="Nikon Z 6II" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon Z 6II Body</h6>
                                <p class="card-text text-danger fw-semibold">Rp 29.750.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/p/a/panasonic_lumix_dc-s5m2_body_1.jpg" alt="Panasonic Lumix S5 II" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Panasonic Lumix DC-S5M2 Body</h6>
                                <p class="card-text text-danger fw-semibold">Rp 27.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/o/m/om_system_om-5_body_black_1.jpg" alt="OM System OM-5" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">OM System OM-5 Body Black</h6>
                                <p class="card-text text-danger fw-semibold">Rp 21.500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_eos_r5_body_1.jpg" alt="Canon EOS R5" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon EOS R5 Body</h6>
                                <p class="card-text text-danger fw-semibold">Rp 45.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_z_8_body_1.jpg" alt="Nikon Z 8" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon Z 8 Body</h6>
                                <p class="card-text text-danger fw-semibold">Rp 49.500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Kamera Mirrorless</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_fe_24-70mm_f_2.8_gm_ii_1.jpg" alt="Sony FE 24-70mm f/2.8 GM II" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony FE 24-70mm f/2.8 GM II Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 32.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_rf_15-35mm_f_2.8l_is_usm_1.jpg" alt="Canon RF 15-35mm f/2.8L IS USM" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon RF 15-35mm f/2.8L IS USM Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 31.500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_xf_16-55mm_f_2.8_r_lm_wr_1.jpg" alt="Fujifilm XF 16-55mm f/2.8 R LM WR" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm XF 16-55mm f/2.8 R LM WR Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 16.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_nikkor_z_24-70mm_f_2.8_s_1.jpg" alt="Nikon Nikkor Z 24-70mm f/2.8 S" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon Nikkor Z 24-70mm f/2.8 S Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 28.750.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/p/a/panasonic_lumix_s_24-105mm_f_4_macro_o.i.s._1.jpg" alt="Panasonic Lumix S 24-105mm f/4" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Panasonic Lumix S 24-105mm f/4 Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 19.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/o/m/om_system_m.zuiko_digital_ed_12-40mm_f_2.8_pro_ii_1.jpg" alt="OM System 12-40mm f/2.8 Pro II" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">OM System 12-40mm f/2.8 Pro II Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 14.500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_fe_50mm_f_1.4_gm_1.jpg" alt="Sony FE 50mm f/1.4 GM" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony FE 50mm f/1.4 GM Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 18.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_rf_70-200mm_f_2.8l_is_usm_1.jpg" alt="Canon RF 70-200mm f/2.8L IS USM" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon RF 70-200mm f/2.8L IS USM Lens</h6>
                                <p class="card-text text-danger fw-semibold">Rp 39.999.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Kamera Digital</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/m/a/manfrotto_mvttripodkitmk190xpro4-bhq2_1.jpg" alt="Manfrotto MK190XPRO4-BHQ2" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Manfrotto MK190XPRO4-BHQ2 Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 4.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/b/e/benro_aero_2_travel_angel_traveler_kit_1.jpg" alt="Benro Aero 2 Travel Angel" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Benro Aero 2 Travel Angel Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 3.799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/a/vanguard_alta_pro_2_263ab_100_1.jpg" alt="Vanguard Alta Pro 2 263AB 100" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vanguard Alta Pro 2 263AB 100 Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/g/i/gitzo_systematic_series_1_4-section_carbon_fibre_tripod_1.jpg" alt="Gitzo Systematic Series 1" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Gitzo Systematic Series 1 Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 6.500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/m/a/manfrotto_element_mii_1.jpg" alt="Manfrotto Element MII" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Manfrotto Element MII Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/b/e/benro_aero_4_travel_angel_traveler_kit_1.jpg" alt="Benro Aero 4 Travel Angel" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Benro Aero 4 Travel Angel Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 4.299.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/a/vanguard_alta_pro_2_plus_263cb_100_1.jpg" alt="Vanguard Alta Pro 2+ 263CB 100" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vanguard Alta Pro 2+ 263CB 100 Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 3.799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/g/i/gitzo_traveler_series_0_1.jpg" alt="Gitzo Traveler Series 0" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Gitzo Traveler Series 0 Tripod</h6>
                                <p class="card-text text-danger fw-semibold">Rp 5.999.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Handycam</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/a/sandisk_extreme_pro_128gb_sdhc_uhs-i_memory_card_1.jpg" alt="SanDisk Extreme Pro 128GB" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">SanDisk Extreme Pro 128GB Memory Card</h6>
                                <p class="card-text text-danger fw-semibold">Rp 799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/o/vortex_media_pro_cage_for_sony_a7iv_1.jpg" alt="Vortex Media Pro Cage" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vortex Media Pro Cage for Sony A7IV</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/j/u/jungle_fighter_pro_lens_pouch_1.jpg" alt="Jungle Fighter Pro Lens Pouch" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Jungle Fighter Pro Lens Pouch</h6>
                                <p class="card-text text-danger fw-semibold">Rp 450.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_hvl-f60rm2_wireless_radio_flash_1.jpg" alt="Sony HVL-F60RM2 Flash" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony HVL-F60RM2 Wireless Radio Flash</h6>
                                <p class="card-text text-danger fw-semibold">Rp 9.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_bg-r10_battery_grip_1.jpg" alt="Canon BG-R10 Battery Grip" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon BG-R10 Battery Grip</h6>
                                <p class="card-text text-danger fw-semibold">Rp 3.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_mb-n11_power_battery_pack_1.jpg" alt="Nikon MB-N11 Battery Pack" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon MB-N11 Power Battery Pack</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/o/vortex_media_pro_cage_for_canon_r5_1.jpg" alt="Vortex Media Pro Cage for Canon R5" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vortex Media Pro Cage for Canon R5</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_fh_x_m_l_bracket_1.jpg" alt="Fujifilm FH-X M L Bracket" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm FH-X M L Bracket</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.499.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Kamera Instan</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/g/o/godox_sl-200wii_bi-color_led_monolight_1.jpg" alt="Godox SL-200WII LED Monolight" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Godox SL-200WII Bi-Color LED Monolight</h6>
                                <p class="card-text text-danger fw-semibold">Rp 5.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/e/l/elinchrom_three_head_kit_elc_500_to_go_1.jpg" alt="Elinchrom ELC 500 To Go Kit" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Elinchrom ELC 500 To Go Kit</h6>
                                <p class="card-text text-danger fw-semibold">Rp 12.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/p/r/profoto_b10_plus_500_airttl_duo_kit_1.jpg" alt="Profoto B10 Plus 500 AirTTL Duo Kit" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Profoto B10 Plus 500 AirTTL Duo Kit</h6>
                                <p class="card-text text-danger fw-semibold">Rp 45.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/l/u/lumie_muse_2_bi-color_led_studio_panel_1.jpg" alt="Lumie Muse 2 Bi-Color LED Panel" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Lumie Muse 2 Bi-Color LED Panel</h6>
                                <p class="card-text text-danger fw-semibold">Rp 3.799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/g/o/godox_ad600pro_witstro_all-in-one_outdoor_flash_1.jpg" alt="Godox AD600Pro Witstro Flash" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Godox AD600Pro Witstro All-in-One Flash</h6>
                                <p class="card-text text-danger fw-semibold">Rp 9.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/e/l/elinchrom_elb_500_ttl_to_go_kit_1.jpg" alt="Elinchrom ELB 500 TTL To Go Kit" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Elinchrom ELB 500 TTL To Go Kit</h6>
                                <p class="card-text text-danger fw-semibold">Rp 14.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/p/r/profoto_a10_airttl_studio_light_1.jpg" alt="Profoto A10 AirTTL Studio Light" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Profoto A10 AirTTL Studio Light</h6>
                                <p class="card-text text-danger fw-semibold">Rp 7.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/l/u/lumie_studio_kit_3_in_1_1.jpg" alt="Lumie Studio Kit 3-in-1" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Lumie Studio Kit 3-in-1</h6>
                                <p class="card-text text-danger fw-semibold">Rp 4.499.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Kamera Lain</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/l/o/lowepro_pro_tactic_bp_350_aw_iii_1.jpg" alt="Lowepro Pro Tactic BP 350 AW III" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Lowepro Pro Tactic BP 350 AW III</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/t/h/think_tank_photo_airport_accelerate_v2.0_-_black_1.jpg" alt="Think Tank Airport Accelerate V2.0" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Think Tank Airport Accelerate V2.0</h6>
                                <p class="card-text text-danger fw-semibold">Rp 3.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_ps-1000_wdl_1.jpg" alt="Canon PS-1000 WDL Case" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon PS-1000 WDL Case</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/a/vanguard_alta_fly_58t_1.jpg" alt="Vanguard Alta Fly 58T" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vanguard Alta Fly 58T</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/l/o/lowepro_flipside_400_aw_iii_1.jpg" alt="Lowepro Flipside 400 AW III" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Lowepro Flipside 400 AW III</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.199.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/t/h/think_tank_photo_retrospective_20_1.jpg" alt="Think Tank Retrospective 20" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Think Tank Retrospective 20</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_ps-800_wdl_case_1.jpg" alt="Canon PS-800 WDL Case" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon PS-800 WDL Case</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/v/a/vanguard_alta_fly_55t_1.jpg" alt="Vanguard Alta Fly 55T" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Vanguard Alta Fly 55T</h6>
                                <p class="card-text text-danger fw-semibold">Rp 2.299.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Lensa</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/h/o/hooya_protective_uv_filter_77mm_1.jpg" alt="Hoya Protective UV Filter 77mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Hoya Protective UV Filter 77mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 799.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/h/o/hooya_circular_polarizer_filter_67mm_1.jpg" alt="Hoya Circular Polarizer Filter 67mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Hoya Circular Polarizer Filter 67mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.299.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_cpl_filter_58mm_1.jpg" alt="Nikon CPL Filter 58mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon CPL Filter 58mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_nd_filter_82mm_1.jpg" alt="Sony ND Filter 82mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony ND Filter 82mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/h/o/hooya_ndx8_filter_72mm_1.jpg" alt="Hoya NDx8 Filter 72mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Hoya NDx8 Filter 72mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.099.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_pl-c_filter_67mm_1.jpg" alt="Canon PL-C Filter 67mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon PL-C Filter 67mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.199.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_nd8_filter_77mm_1.jpg" alt="Nikon ND8 Filter 77mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon ND8 Filter 77mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 1.399.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_uv_filter_55mm_1.jpg" alt="Sony UV Filter 55mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony UV Filter 55mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 699.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Baterai/Charger</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/k/o/kodak_colorplus_200_35mm_36_exp._1.jpg" alt="Kodak ColorPlus 200 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Kodak ColorPlus 200 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 199.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_superia_x-tra_400_35mm_36_exp._1.jpg" alt="Fujifilm Superia X-Tra 400 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm Superia X-Tra 400 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 249.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/i/l/ilford_fp4_plus_125_35mm_36_exp._1.jpg" alt="Ilford FP4 Plus 125 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Ilford FP4 Plus 125 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 299.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/k/o/kodak_t-max_400_35mm_36_exp._1.jpg" alt="Kodak T-MAX 400 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Kodak T-MAX 400 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 349.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_pro_400h_35mm_36_exp._1.jpg" alt="Fujifilm Pro 400H 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm Pro 400H 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 399.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/i/l/ilford_hp5_plus_400_35mm_36_exp._1.jpg" alt="Ilford HP5 Plus 400 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Ilford HP5 Plus 400 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 329.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/k/o/kodak_portra_160_35mm_36_exp._1.jpg" alt="Kodak Portra 160 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Kodak Portra 160 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 279.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/k/o/kodak_portra_800_35mm_36_exp._1.jpg" alt="Kodak Portra 800 35mm 36 Exp" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Kodak Portra 800 35mm 36 Exp</h6>
                                <p class="card-text text-danger fw-semibold">Rp 429.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Kartu Memori</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_eos_5d_mark_iii_used_1.jpg" alt="Canon EOS 5D Mark III Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon EOS 5D Mark III Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 12.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_d750_used_1.jpg" alt="Nikon D750 Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon D750 Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 10.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_a7_ii_used_1.jpg" alt="Sony A7 II Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony A7 II Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 9.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_x-t20_used_1.jpg" alt="Fujifilm X-T20 Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm X-T20 Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 7.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_eos_6d_used_1.jpg" alt="Canon EOS 6D Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon EOS 6D Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 8.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/n/i/nikon_d810_used_1.jpg" alt="Nikon D810 Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Nikon D810 Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 11.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_a7r_ii_used_1.jpg" alt="Sony A7R II Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony A7R II Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 13.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/f/u/fujifilm_x100f_used_1.jpg" alt="Fujifilm X100F Used" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Fujifilm X100F Used</h6>
                                <p class="card-text text-danger fw-semibold">Rp 9.499.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="section-title mb-3">Aksesoris Lain</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 product-list">
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/d/j/dji_osmo_pocket_3_creator_combo_1.jpg" alt="DJI Osmo Pocket 3 Creator Combo" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">DJI Osmo Pocket 3 Creator Combo</h6>
                                <p class="card-text text-danger fw-semibold">Rp 9.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/c/a/canon_xa50_professional_camcorder_1.jpg" alt="Canon XA50 Professional Camcorder" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Canon XA50 Professional Camcorder</h6>
                                <p class="card-text text-danger fw-semibold">Rp 25.999.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/s/o/sony_fx30_cinema_line_camera_1.jpg" alt="Sony FX30 Cinema Line Camera" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Sony FX30 Cinema Line Camera</h6>
                                <p class="card-text text-danger fw-semibold">Rp 29.499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="produk-baru-item card h-100">
                            <img src="https://admin.focusnusantara.com/media/catalog/product/cache/6ed58d7bcc92d46b5b7dc5fc5ce62a7b/p/a/panasonic_lumix_s5_ii_x_with_20-60mm_1.jpg" alt="Panasonic Lumix S5 II X with 20-60mm" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title fw-bold mb-1">Panasonic Lumix S5 II X with 20-60mm</h6>
                                <p class="card-text text-danger fw-semibold">Rp 33.999.000</p>
                            </div>
                        </div>
                    </div>
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