# 🌴 Padang Tour - Platform Wisata Modern Kota Padang

Platform wisata digital yang menampilkan destinasi-destinasi menarik di Kota Padang dengan desain modern dan user-friendly.

![Padang Tour](https://img.shields.io/badge/Laravel-11.x-red?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-blue?style=for-the-badge&logo=tailwind-css)
![Status](https://img.shields.io/badge/Status-Active-green?style=for-the-badge)

## ✨ Fitur Utama

-   🏖️ **Katalog Destinasi Wisata** - Jelajahi berbagai tempat wisata menarik di Padang
-   🔍 **Pencarian & Filter** - Temukan destinasi sesuai kategori (Pantai, Gunung, Kuliner, dll)
-   📸 **Galeri Foto** - Lihat foto-foto indah dari setiap destinasi
-   💰 **Informasi Harga** - Dapatkan info harga tiket masuk yang transparan
-   📍 **Lokasi & Jam Buka** - Informasi lengkap lokasi dan jam operasional
-   ⭐ **Rating & Review** - Lihat rating dari pengunjung lain
-   🎯 **Admin Panel** - Kelola konten dengan mudah melalui dashboard admin
-   🔐 **Authentication System** - Login aman untuk admin
-   🚫 **Error Pages** - Halaman error 404 & 500 yang menarik

## 🚀 Teknologi yang Digunakan

-   **Backend**: Laravel 11.x
-   **Frontend**: Tailwind CSS 4.0
-   **Database**: MySQL/MariaDB
-   **Storage**: Laravel Storage untuk gambar
-   **Icons**: Emoji icons untuk visual yang menarik

## 📋 Persyaratan Sistem

-   PHP >= 8.2
-   Composer
-   Node.js & NPM/PNPM
-   MySQL/MariaDB
-   Git

## 🛠️ Instalasi

1. **Clone Repository**

    ```bash
    git clone https://github.com/yourusername/padang-tour.git
    cd padang-tour
    ```

2. **Install Dependencies**

    ```bash
    composer install
    pnpm install
    ```

3. **Setup Environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Konfigurasi Database**

    Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=padang_tour
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Migrasi Database & Seeder**

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

6. **Link Storage**

    ```bash
    php artisan storage:link
    ```

7. **Build Assets**

    ```bash
    pnpm run build
    ```

8. **Jalankan Server**

    ```bash
    php artisan serve
    ```

    Buka browser dan akses `http://localhost:8000`

## 📱 Screenshots

### Homepage

Tampilan modern dengan hero section yang eye-catching dan destinasi unggulan.

### Halaman Destinasi

Grid layout yang responsive menampilkan semua destinasi wisata dengan filter kategori.

### Detail Destinasi

Informasi lengkap destinasi termasuk deskripsi, fasilitas, harga, dan galeri foto.

### Admin Panel

Dashboard admin untuk mengelola destinasi wisata dengan mudah.

## 👤 Default Admin Account

```
Email: airmanis@gmail.com
Password: air-manis-tour234321
```

## 📂 Struktur Project

```
padang-tour/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── AuthController.php
│   │       └── Admin/
│   │           └── TouristSpotController.php
│   └── Models/
│       └── TouristSpot.php
├── database/
│   ├── migrations/
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── TouristSpotSeeder.php
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── spots/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── admin/
│       │   ├── layout.blade.php
│       │   └── tourist-spots/
│       │       ├── index.blade.php
│       │       ├── create.blade.php
│       │       ├── show.blade.php
│       │       └── edit.blade.php
│       ├── auth/
│       │   └── login.blade.php
│       └── errors/
│           ├── 404.blade.php
│           └── 500.blade.php
└── routes/
    └── web.php
```

## 🎨 Desain & UI/UX

-   **Modern & Clean**: Desain minimalis dengan aksen warna orange-pink gradient
-   **Responsive**: Optimal di semua ukuran device (mobile, tablet, desktop)
-   **Gen Z Friendly**: Visual yang menarik dengan emoji dan animasi smooth
-   **Fast Loading**: Optimized assets dan lazy loading untuk performa maksimal

## 🤝 Kontribusi

Kontribusi selalu welcome! Silakan:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Project ini dilisensikan di bawah [MIT License](LICENSE).

## 📞 Kontak

Jika ada pertanyaan atau saran, silakan hubungi:

-   Email: info@padangtour.com
-   Instagram: @padangtour
-   Website: https://padangtour.com

---

Made with ❤️ in Padang, West Sumatra
