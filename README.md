# Studi Independen GITS ID Tugas 6

### Creator
- Nama: Danuarta Dwi Yuli Saputro

- Asal Perguruan Tinggi: Universitas Brawijaya

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


#### Sign In
![signin](https://user-images.githubusercontent.com/106716258/230142809-2aa8dcc1-32fa-4941-a722-5a7c1c4b406f.png)


#### Sign Up
![signup](https://user-images.githubusercontent.com/106716258/230144117-1b032395-4483-41e8-ac2a-041d99f87ea2.png)


#### Product
![product](https://user-images.githubusercontent.com/106716258/230144202-a3e1f5df-d7bb-4a61-940b-69d137b07e63.png)


#### Category
![category](https://user-images.githubusercontent.com/106716258/230144309-aa0a7d60-b77d-4e44-a4e7-f2936fdb6637.png)
