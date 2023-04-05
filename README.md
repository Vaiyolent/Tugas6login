# Studi Independen GITS ID Tugas 6

### Creator
- Nama: ``` Danuarta Dwi Yuli Saputro ```

- Asal Perguruan Tinggi: ``` Universitas Brawijaya ```

### Stack yang digunakan

 - Laravel 9
 - Bootstrap 5.2

### Cara menjalankan Aplikasi 
1.  Clone repository ini
    ```
    git clone https://github.com/Vaiyolent/Tugas6login.git
    ```
2.  Copy dan paste **.env.example** file dan rename jadi **.env**
3.  Sesuaikan nama database pada **DB_DATABASE** di file env

4.  Generate Key dan Install dependencies nya
    ```
    php artisan key:generate
    composer install
    ```
5.  Generate mirror link
    ```
    php artisan storage:link
    ```
6.  Migrate the tables
    ```
    php artisan migrate
    ```

7.  Insert data dari seeder ke database

    ```
    php artisan db:seed
    ```

8.  Jalankan Server
    ```
    php artisan serve
    ```

9.  Login jika sudah memiliki akun, Jika belum lakukan register
