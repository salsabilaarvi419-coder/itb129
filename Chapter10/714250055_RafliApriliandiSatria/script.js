// Fungsi untuk konfirmasi hapus data
function konfirmasiHapus(e) {
    if (!confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        e.preventDefault(); // Membatalkan link jika user pilih 'Cancel'
    }
}

// Menghubungkan fungsi ke semua elemen dengan class 'btn-hapus'
document.addEventListener("DOMContentLoaded", function() {
    const tombolHapus = document.querySelectorAll(".btn-hapus");
    tombolHapus.forEach(btn => {
        btn.addEventListener("click", konfirmasiHapus);
    });
});