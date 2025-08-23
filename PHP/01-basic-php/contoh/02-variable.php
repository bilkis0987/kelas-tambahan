<?php 

    /**
     * Variable = tempat untuk menyimpan data.
     * Di PHP, variable selalu diawali dengan tanda $.
     * Nama variable case-sensitive (huruf besar & kecil dianggap beda).
     */

    // Contoh:
    $nama = "Elgin";
    $umur = 18;

    echo "Halo, nama saya $nama, umur saya $umur tahun.";

    /**
     * --- Aturan Penamaan Variable ---
     * - Harus diawali huruf/underscore (_)
     * - Bisa mengandung huruf, angka, underscore
     * - Tidak boleh diawali angka
     * - Tidak boleh ada spasi
     */

    // Contoh valid:
    $namaDepan = "Budi";
    $_alamat = "Bandung";
    $nilai_uts = 90;

    // Contoh salah:
    // $1nama = "Error"; tidak boleh diawali angka
    // $nama siswa = "Error"; tidak boleh ada spasi

?>