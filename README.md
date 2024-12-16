# Tentang Project Manufaktur tjkt

Project ini adalah sebuah sistem peminjaman yang bertujuan untuk mencatat dan mengelola barang-barang di kantor tjkt secara efisien. Sistem ini memungkinkan pengguna untuk memantau pergerakan barang masuk dan keluar, serta menghasilkan laporan inventaris secara real-time.

### Teknologi Stack

- **Backend**: Menggunakan Laravel untuk membangun API yang robust dan scalable.
- **Database**: Menggunakan PostgreSQL.
- **Frontend**: Menggunakan Blade bawaan laravel.
- **Authentication**: Menggunakan Plugin Breeze

Dengan teknologi stack ini, sistem peminjaman dapat diandalkan, mudah di-maintain, dan dapat berkembang sesuai kebutuhan.

## Installasi atau Development

1. Clone project ini :
   ``` bash
    git clone https://github.com/RifkiAndriyanPratama/manufaktur-tjkt.git
    ```
2. Install Composer :
   ``` bash
   composer install
   ```
3. Install Node Package Module :
   ``` bash
   npm install
   ```
4. copy `.env.example` menjadi `.env` dan konfigurasi databasenya
5. Lakukan Migrate :
   ``` bash
   php artisan migrate
   ```
6. Tambahkan key untuk `.env` nya :
    ``` bash
    php artisan key:generate
    ```
7. Nyalakan server dan npm :
    ``` bash
    php artisan serve:dev
    ```
