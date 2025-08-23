# Latihan 2

Buat program latihan-2.php dengan ketentuan:

1. Buat **5 variable** yang menyimpan data tentang diri kamu sendiri:
   - `$nama` -> string
   - `$umur` -> integer
   - `$tinggi_badan` -> float
   - `$isPelajar` -> boolean
2. Cetak kalimat perkenalan seperti ini:
   ```text
       Halo, nama saya [nama], saya berumur [xx] tahun, tinggi badan saya [xxx.x]cm.
       Apakah saya seorang pelajar? Ya
   ```
   > Perhatikan untuk boolean, tampil "Ya" jika `true` dan "Tidak" jika `false`.
3. Hitung perkiraan tahun lahir menggunakan $umur.
   - Tahun sekarang bisa diambil dengan fungsi `date("Y")`.
   - Tahun lahir = Tahun sekarang - Umur.
4. Gunakan `var_dump()` untuk menampilkan tipe data setiap variable.

## Contoh Output

> **(Kalau siswa bernama Elgin, umur 17 tahun, tinggi badan 170.5cm.)**

```text
    Halo, nama saya Elgin, saya berumur 17 tahun, tinggi badan saya 170.5 cm.
    Apakah saya seorang pelajar? Ya
    Nilai rata-rata saya: 87.5
    Saya lahir pada tahun 2008

    string(5) "Elgin"
    int(17)
    float(170.5)
    bool(true)
    float(87.5)
```
