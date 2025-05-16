<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Dinoyo Kamera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    @include('partials.header')
    @section('content')
        <main class="container mt-5">
            <h2 class="mb-4">Tambah Produk</h2>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Form tambah produk -->
            
            <form method="POST" action="{{ route('admin.store') }}" class="form-produk">
                @csrf
                <div class="row g-2 mb-4">
                    <div><input name="kode_sku" class="form-control" placeholder="Kode SKU"></div>
                    <div><input name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                    </div>
                    <div><input name="harga_jual" class="form-control" placeholder="Harga" type="number"
                            required></div>
                    <div><input name="id_kategori" class="form-control" placeholder="ID Kategori"
                            type="number" required></div>
                    <div><input name="stok_produk" class="form-control" placeholder="Stok Produk"
                            type="number" required></div>
                    <div><textarea name="deskripsi_produk" class="form-control" placeholder="Deskripsi"
                            type="text" required></textarea></div>
                    <div><input type="text" name="status" class="form-control" placeholder="Status"></div>
                    <div><button class="btn btn-success w-100">Tambah</button></div>
                </div>
            </form>
            <h2 class="mb-4">Kelola Produk</h2>
            <!-- Tabel produk -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Kode SKU</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>ID Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->kode_sku }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                                <td>{{ $product->id_kategori }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Yakin?')"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Belum ada produk</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    @include('partials.footer')
    </html>
