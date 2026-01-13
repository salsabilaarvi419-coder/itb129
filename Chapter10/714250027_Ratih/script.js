// Menunggu hingga seluruh konten DOM dimuat
document.addEventListener('DOMContentLoaded', function() {

    // --- 1. Konfirmasi Hapus Data ---
    const deleteButtons = document.querySelectorAll('.btn-hapus');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const confirmDelete = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (!confirmDelete) {
                e.preventDefault(); 
            }
        });
    });

    // --- 2. Validasi Form Pendaftaran & Edit ---
    const registrationForm = document.querySelector('form');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(e) {
            let isValid = true;
            let errorMessage = "";

            // Mengambil input
            const nama = registrationForm.querySelector('input[name="nama"]');
            const email = registrationForm.querySelector('input[name="email"]');
            const alamat = registrationForm.querySelector('textarea[name="alamat"]');
            
            // Validasi Nama Minimal 3 Karakter
            if (nama && nama.value.trim().length < 3) {
                isValid = false;
                errorMessage += "- Nama harus diisi minimal 3 karakter.\n";
            }

            // Validasi Format Email
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailPattern.test(email.value)) {
                isValid = false;
                errorMessage += "- Format email tidak valid.\n";
            }

            // Validasi Alamat
            if (alamat && alamat.value.trim() === "") {
                isValid = false;
                errorMessage += "- Alamat tidak boleh kosong.\n";
            }

            // Jika tidak valid, stop form dan munculkan alert
            if (!isValid) {
                e.preventDefault();
                alert("Mohon perbaiki kesalahan berikut:\n" + errorMessage);
            }
        });
    }

    // --- 3. Animasi Feedback saat Sukses (Opsional) ---
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'sukses') {
        alert("Data berhasil diproses!");
        // Bersihkan URL dari parameter status tanpa reload
        window.history.replaceState({}, document.title, window.location.pathname);
    }
});