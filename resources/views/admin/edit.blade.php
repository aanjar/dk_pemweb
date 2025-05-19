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

    <div class="container mt-4">
        <h2>Edit Produk</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('admin.update', $product->id) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode_sku" class="form-label">Kode SKU</label>
                <input type="text" name="kode_sku" id="sku" class="form-control"
                    value="{{ old('kode_sku', $product->kode_sku) }}">
            </div>

            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                    value="{{ old('nama_produk', $product->nama_produk) }}" required>
            </div>

            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="number" name="harga_jual" id="harga_jual" class="form-control"
                    value="{{ old('harga_jual', $product->harga_jual) }}" required>
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}" {{ $product->id_kategori == $kat->id ? 'selected' : '' }}>
                            {{ $kat->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control" rows="4" required>{{ old('deskripsi_produk', $product->deskripsi_produk) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Unggulan" {{ $product->status == 'Second' ? 'selected' : '' }}>Second</option>
                    <option value="Standar" {{ $product->status == 'Baru' ? 'selected' : '' }}>Baru</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade</label>
                <select name="grade" id="grdae" class="form-control" required>
                    <option value="Unggulan" {{ $product->status == 'Unggulan' ? 'selected' : '' }}>Unggulan</option>
                    <option value="Standar" {{ $product->status == 'Standar' ? 'selected' : '' }}>Standar</option>
                    <option value="Minus" {{ $product->status == 'Minus' ? 'selected' : '' }}>Minus</option>
                </select>
            </div>


            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
