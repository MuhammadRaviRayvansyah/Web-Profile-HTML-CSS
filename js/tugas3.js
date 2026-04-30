document.getElementById("myForm").addEventListener("submit", function(e) {
    let nama = document.getElementById("nama").value;
    let usia = document.getElementById("usia").value;
    let email = document.getElementById("email").value;
    let tel = document.getElementById("tel").value;
    let pesan = document.getElementById("pesan").value;

    if (nama === "" || usia === "" || email === "" || tel === "" || pesan === "") {
        alert("Harap isi semua kolom");
        e.preventDefault();
        return;
    }

    if (tel.length < 6) {
        alert("Nomor telepon minimal harus 6 angka!");
        e.preventDefault();
        return;
    }

    alert("Pesan berhasil dikirim!");
});