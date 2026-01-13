
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    if (!form) return;

    form.addEventListener("submit", function (e) {
        const nama = document.querySelector("[name='nama']");
        const jk = document.querySelector("[name='jenis_kelamin']:checked");

        if (nama.value.length < 3) {
            alert("Nama minimal 3 karakter");
            e.preventDefault();
            return;
        }

        if (!jk) {
            alert("Pilih jenis kelamin");
            e.preventDefault();
            return;
        }
    });
});
