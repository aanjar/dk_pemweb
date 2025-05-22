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


        <form action="{{ route('admin.update', $product->id) }}" method="POST" class="form"
            enctype="multipart/form-data">
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

            <div class="row mb-3">
                <label class="form-label">Gambar yang Sudah Ada</label>
                @foreach ($product->gambar as $index => $gambar)
                    <div class="col-md-3 text-center position-relative">
                        <img src="{{ asset('storage/' . $gambar->path_gambar) }}" class="img-thumbnail"
                            style="width: 100%; height: 200px; object-fit: cover;">

                        <!-- Radio untuk memilih gambar utama -->
                        <div class="form-check mt-2">
                            <input type="radio" class="form-check-input" name="main_image_existing"
                                value="{{ $gambar->id }}" id="main_image_{{ $gambar->id }}"
                                {{ $gambar->is_main ? 'checked' : '' }}>
                            <label class="form-check-label" for="main_image_{{ $gambar->id }}">Jadikan Gambar
                                Utama</label>
                        </div>

                        <!-- Tombol hapus -->
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0"
                            onclick="hapusGambarLama('{{ $gambar->id }}')">x</button>

                        <!-- Input hidden untuk menandai penghapusan -->
                        <input type="hidden" name="hapus_gambar_lama[]" value=""
                            id="hapus_gambar_{{ $gambar->id }}">
                    </div>
                @endforeach
            </div>


            <div class="col-md-6">
                <label for="gambar_produk" class="form-label">Gambar Produk</label>
                <div class="input-group mb-2">
                    <span class="input-group-text"><i class="bi bi-images"></i></span>
                    <input type="file" class="form-control" id="gambar_produk" name="gambar_produk[]" multiple
                        accept="image/*" onchange="previewGambar(event)">
                </div>
                <div id="preview-container" class="row g-2"></div>
                <small class="text-muted">Pilih salah satu gambar sebagai gambar utama.</small>
            </div>


            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        function previewGambar(event) {
            const files = event.target.files;
            const container = document.getElementById('preview-container');
            container.innerHTML = ''; // Kosongkan preview

            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.classList.add('col-4');

                    col.innerHTML = `
                <div class="card">
                    <img src="${e.target.result}" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body text-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="main_image_new" value="${i}" id="mainImage${i}" ${i === 0 ? 'checked' : ''}>
                            <label class="form-check-label" for="mainImage${i}">
                                Jadikan Gambar Utama
                            </label>
                        </div>
                    </div>
                </div>
            `;
                    container.appendChild(col);
                }

                reader.readAsDataURL(files[i]);
            }
        }

        function hapusGambarLama(id) {
            const el = document.getElementById('existing-image-' + id);
            if (el) el.remove();

            // Tambahkan hidden input agar backend tahu gambar ini harus dihapus
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'hapus_gambar_lama[]';
            input.value = id;
            document.querySelector('form').appendChild(input);
        }
    </script>
</body>

</html>
