document.addEventListener('DOMContentLoaded', function () {
    const quoteBtn = document.querySelector('.btn-quote');
    const quoteModal = new bootstrap.Modal(document.getElementById('quoteModal'));
    const loader = document.getElementById('loader');

    // Tampilkan loader saat halaman mulai dimuat
    loader.style.display = 'flex';

    // Sembunyikan loader setelah DOM selesai dimuat
    function hideLoader() {
        loader.style.display = 'none';
    }

    // Sembunyikan loader setelah DOM selesai dimuat
    hideLoader();

    // Cadangan: Sembunyikan loader setelah 5 detik jika masih stuck
    setTimeout(hideLoader, 5000);

    // Event untuk tombol quote
    quoteBtn.addEventListener('click', function () {
        quoteModal.show();
    });
});