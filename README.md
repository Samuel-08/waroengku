# 🚀 CodeIgniter 4: Framework PHP

## 🌟 Pendahuluan

CodeIgniter 4 adalah framework PHP yang super cepat, fleksibel, dan aman! Dibuat untuk mempermudah pengembangan web, CodeIgniter 4 memudahkan Anda membangun aplikasi yang powerfull dan scalable. Untuk info lebih lanjut, cek [situs resmi CodeIgniter](https://codeigniter.com).

Repositori ini menawarkan aplikasi starter yang bisa diinstal via Composer, dibangun dari [repositori pengembangan CodeIgniter 4](https://github.com/codeigniter4/CodeIgniter4). Untuk update tentang versi 4, kunjungi [forum CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28). Panduan pengguna terbaru bisa ditemukan [di sini](https://codeigniter.com/user_guide/).

## 🛠 Instalasi & Pembaruan

### Instalasi

Mau mulai? Gunakan Composer dengan perintah berikut:

```bash
composer create-project codeigniter4/appstarter nama_project
```

### Pembaruan

Untuk mengupdate ke versi terbaru, jalankan:

```bash
composer update
```

### Konfigurasi

#### 🔧 Variabel Lingkungan

Salin file `env` ke `.env` dan sesuaikan dengan kebutuhan aplikasi Anda. Jangan lupa untuk mengatur `baseURL` dan konfigurasi database.

#### 🗂 Lokasi `index.php`

Agar lebih aman, `index.php` tidak lagi berada di root proyek, tapi di folder `public` . Konfigurasi server web Anda agar mengarah ke folder `public` , bukan root proyek. Pastikan host virtual Anda diatur ke folder `public` untuk menjaga keamanan aplikasi.

**Penting:** Rujuk [panduan pengguna CodeIgniter](https://codeigniter.com/user_guide/) untuk info lebih detail tentang konfigurasi ini.

### Manajemen Repositori

Repositori ini adalah repositori distribusi, dibangun dengan skrip persiapan rilis kami. Isu terkait repositori ini bisa dilaporkan di forum kami atau sebagai isu di [repositori utama](https://github.com/codeigniter4/CodeIgniter4). Gunakan GitHub untuk melacak bug dan pekerjaan pengembangan yang disetujui. Untuk dukungan dan diskusi fitur, kunjungi forum kami.

### Persyaratan Server

CodeIgniter 4 butuh PHP versi 8.1 atau lebih tinggi dengan ekstensi berikut:

```plaintext
intl
mbstring
```

**Penting:**
* PHP 7.4 sudah mencapai akhir dukungan pada 28 November 2022.
* PHP 8.0 berakhir dukungannya pada 26 November 2023.
* PHP 8.1 akan berakhir dukungannya pada 31 Desember 2025.

Pastikan versi PHP Anda didukung dan aktifkan ekstensi berikut:

* `json` (aktif secara default, jangan dinonaktifkan)
* `mysqlnd` (jika menggunakan MySQL)
* `libcurl` (jika menggunakan pustaka HTTP\CURLRequest)

### Konfigurasi Server

#### Apache

Aktifkan `mod_rewrite` untuk mendukung URL bersih. Tambahkan file `.htaccess` di folder `public` untuk aturan `mod_rewrite` .

#### Nginx

Konfigurasikan server Nginx Anda untuk mengarah ke folder `public` . Gunakan konfigurasi berikut sebagai referensi:

```nginx
server {
    listen 80;
    server_name example.com;
    root /path/to/your/project/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

#### 🏠 Pengaturan Base URL

Sesuaikan nilai `baseURL` di file `.env` Anda:

```plaintext
app.baseURL = 'http://example.com'
```

#### 💾 Konfigurasi Database

Atur pengaturan basis data di file `.env` atau di `app/Config/Database.php` . Misalnya:

```plaintext
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = nama_pengguna
database.default.password = kata_sandi
```

#### 📂 Izin Folder

Pastikan folder yang dapat ditulis (seperti `writable/cache` , `writable/logs` , dll.) memiliki izin yang benar agar server web bisa menulis ke dalamnya.

### 📚 Dokumentasi dan Dukungan

Butuh bantuan lebih lanjut? Cek:

* [Panduan Pengguna CodeIgniter 4](https://codeigniter.com/user_guide/)
* [Forum CodeIgniter](https://forum.codeigniter.com)
* Bergabunglah dengan komunitas CodeIgniter di Slack untuk dukungan dan diskusi dengan pengembang lainnya.

Happy coding! 🚀
