<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Dinoyo Kamera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    @include('partials.header')
    
    <main>
        <div class="container">
            <!-- Dashboard Header -->
            <div class="dashboard-header mb-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>Dashboard Admin</h1>
                        <p class="lead text-muted">Kelola produk anda, tambahkan item, dan update inventaris anda disini.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <span class="badge bg-primary p-2">
                            <i class="bi bi-clock me-1"></i>
                            {{ now()->format('d M Y') }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="admin-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                <i class="bi bi-box-seam text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Total Produk</h6>
                                <h3 class="mb-0">{{ count($products) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-check-circle text-success fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Produk Aktif</h6>
                                <h3 class="mb-0">{{ $products->where('status', 'aktif')->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                                <i class="bi bi-exclamation-circle text-warning fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Stok Menipis</h6>
                                <h3 class="mb-0">{{ $products->where('stok_produk', '<', 5)->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Product Form -->
            <section class="mb-4">
                <div class="admin-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah Produk
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <i class="bi bi-check-circle me-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.store') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="kode_sku" class="form-label">Kode SKU</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-upc"></i></span>
                                        <input type="text" class="form-control" id="kode_sku" name="kode_sku" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-camera"></i></span>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="harga_jual" class="form-label">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="id_kategori" class="form-label">Kategori</label>
                                    <select class="form-select" id="id_kategori" name="id_kategori" required>
                                        <option value="">Pilih Kategori...</option>
                                        <option value="1">Kamera</option>
                                        <option value="2">Lensa</option>
                                        <option value="3">Aksesoris</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="stok_produk" class="form-label">Stok</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-boxes"></i></span>
                                        <input type="number" class="form-control" id="stok_produk" name="stok_produk" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Unggulan">Unggulan</option>
                                        <option value="Unggulan">Standar</option>
                                        <option value="Minus">Minus</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="deskripsi_produk" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-plus-circle me-2"></i>
                                        Tambah Produk
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Product Management -->
            <section>
                <div class="admin-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">
                            <i class="bi bi-grid me-2"></i>
                            Kelola Produk
                        </h2>
                        <div class="d-flex gap-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari produk..." id="searchProduct">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode SKU</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $product->kode_sku }}</td>
                                            <td>{{ $product->nama_produk }}</td>
                                            <td>Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                                            <td>
                                                <span class="badge bg-info">
                                                    {{ $product->id_kategori }}
                                                </span>
                                            </td>
                                            <td>
                                                @if($product->stok_produk < 5)
                                                    <span class="badge bg-danger">{{ $product->stok_produk }}</span>
                                                @else
                                                    <span class="badge bg-success">{{ $product->stok_produk }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($product->status == 'aktif')
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-secondary">Non-aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.destroy', $product->id) }}" method="POST" class="d-inline">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4">
                                                <div class="text-muted">
                                                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                                    Belum ada produk
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()

        // Search functionality
        document.getElementById('searchProduct').addEventListener('keyup', function() {
            let searchQuery = this.value.toLowerCase();
            let tableRows = document.querySelectorAll('tbody tr');
            
            tableRows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchQuery) ? '' : 'none';
            });
        });
    </script>
</body>
</html>