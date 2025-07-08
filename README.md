# Parfume - Manajemen Penjualan & Jaringan

Parfume adalah aplikasi web berbasis Laravel untuk mengelola penjualan produk parfum, jaringan mitra, klaim reward, dan sistem poin. Aplikasi ini dilengkapi dengan fitur dashboard, manajemen produk, user, role & permission, serta laporan penjualan dan overview jaringan.

## Fitur Utama

-   **Manajemen Produk**: CRUD produk parfum beserta detail dan gambar.
-   **Manajemen User & Jaringan**: Pengelolaan user, role, permission, serta visualisasi struktur jaringan (downline tree).
-   **Sistem Poin & Reward**: Pencatatan histori poin, klaim reward, dan penukaran hadiah.
-   **Laporan Penjualan**: Laporan penjualan detail dan overview, ekspor laporan ke Excel.
-   **Autentikasi & Otorisasi**: Login, registrasi, verifikasi email, manajemen profil, dan pengaturan hak akses.
-   **Dashboard Interaktif**: Statistik penjualan, pertumbuhan downline, dan riwayat aktivitas.
-   **SEO & Sitemap**: Pengelolaan SEO dan sitemap otomatis.
-   **UI Modern**: Menggunakan Filament Admin Panel dan Tailwind CSS.

## Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/username/parfume.git
    cd parfume
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Copy file environment**

    ```bash
    cp .env.example .env
    ```

4. **Generate key**

    ```bash
    php artisan key:generate
    ```

5. **Konfigurasi database**

    - Edit file `.env` dan sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD.

6. **Migrasi & seeder**

    ```bash
    php artisan migrate --seed
    ```

7. **Build assets**

    ```bash
    npm run build
    ```

8. **Jalankan server**
    ```bash
    php artisan serve
    ```

## Struktur Direktori Penting

-   `app/Models/` : Model Eloquent (User, Product, Sales, Rewards, dsb)
-   `app/Filament/` : Halaman admin, resource, widget, dan page custom
-   `app/Http/Controllers/` : Controller aplikasi
-   `database/migrations/` : Migrasi database
-   `database/seeders/` : Seeder data awal (user, role, permission)
-   `resources/views/` : Blade template untuk frontend dan admin
-   `public/img/` : Asset gambar produk, reward, tier, dsb

## Akun Default (Seeder)

-   **Admin**

    -   Email: admin@parfume.test
    -   Password: password

-   **User**
    -   Email: user@parfume.test
    -   Password: password

> Ubah password setelah login pertama kali.

## Kontribusi

Kontribusi sangat terbuka! Silakan buat pull request atau issue untuk fitur/bug baru.

## Lisensi

Aplikasi ini menggunakan lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detail.
