# web-perpustakaan

LANGKAH-LANGKAH :
1. Download/clone code
2. Unzip file download
3. Pindahkan ke "htdocs" (C:/xampp/htdocs/)
4. Jalankan XAMPP (APACHE dan MYSQL)
5. Pergi ke link localhost/phpmyadmin/
6. Buat Database
7. Import Database
8. Jalankan aplikasi -> localhost/(nama_folder)

Menyiapkan database
1. Buat database di mysql dengan nama "perpustakaan"
2. Klik database "perpustakaan"
3. Pilih menu "import" di bagian atas
4. Pilih "choose file"
5. Pilih file "perpustakaan.sql"
6. Klik "Ok"

Keterangan Folder:
1. Folder css -> berisi file .css
2. Folder database -> berisi database perpustakaan.sql
3. Folder upload -> berisi file gambar hasil upload file oleh user

Keterangan File PHP:
1. File function.php berisi fungsi-fungsi php yang diperlukan untuk melakukan CRUD
2. File penyusun halaman website (admin.php, edit.php, index.php, login.php, signup.php, tambah.php)
3. File logout.php berisi function untuk melakukan logout (destroy session)

Keterangan File CSS:
1. File color.css berisi variabel warna yang di set pada elemen :root html
2. File main.css berisi konfigurasi tampilan website dengan menggunakan tag html (body, h1, p, a, dll)
3. File main.css perlu file color.css
4. File style.css berisi konfigurasi tampilan website dengan menggunakan elemen custom class pada tag div -> div class="..."
5. File style.css perlu file main.css dan color.css
6. File button.css sama seperti file style.css tetapi hanya fokus pada elemen button yang diperlukan dalam web
7. File button.css perlu file main.css dan color.css

Alur program:
1. Halaman default index.php
2. Jika tidak login hanya bisa melihat daftar buku dan melakukan pencarian buku
3. Jika ingin melakukan CRUD klik tombol login
4. Jika belum punya akun, klik Signup
5. Jika berhasil membuat akun dan berhasil login akan masuk ke halaman admin.php
6. Sekarang bisa melakukan CRUD data buku dan melakukan pencarian buku
7. Klik Logout untuk mengakhiri session dan kembali ke halaman index.php

<p>Tingkatan User:</p>
User biasa --- fitur -> Read, Cari, Login, Signup <br>
User admin --- fitur -> Create, Read, Update, Delete, Cari, Login, Signup, Logout <br>

<footer><p>HAPPYCODING :) | &copy; 2022 Anang Prasetyo</p></footer>
