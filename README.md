# Aplikasi Laundry | Kelompok 2
Aplikasi Laundry untuk tugas akhir mata kuliah Pemrograman Web Lanjut | Pak Saiful
## Deskripsi Aplikasi
Aplikasi yang dikembangkan adalah aplikasi laundry. 
Apliaksi laundry ini dibuat untuk mempermudah pengelolaan data laundry.

Dihalaman awal aplikasi terdapat landing page dan dipojok atas terdapat login dan register.
Login disini terdapat 2 role yaitu admin dan user. 

Jika kita login sebagai user, kita akan diarahkan ke halaman list.
Dihalaman List paket terdapat 3 paket yang disediakan yaitu paket cuci, paket setrika, dan paket komplit.
Untuk memulai pesan, klik pesan sekarang masukan nama, alamat, no hp, berat dan paket yang dipilih dan klik kirim
Setelah sudah dikirim, kita bisa mengeceknya dihalaman list pemesanan.
Dihalaman List Pemesanan ditampilkan table data yang berisi inputan dari halaman list paket sebelumnya dan terdapat total harga dan status dari pesanan tersebut dan juga ada fitur search.

Jika kita login sebagai admin, kita akan diarahkan ke halaman admin 
dihalaman Admin terdapat table data yang berisi inputan dari halaman list paket sebelumnya, hampir seperti halaman list pemesanan bedanya di halaman admin terdapat invoice untuk mencetak hasil transaksi, dan aksi yang berisi edit data dan hapus data. Dan juga jika kita login sebagai admin kita bisan mengakses semua halaman.

role

-admin

-user

library
- html2canvas : untuk mencetak div menjadi gambar
## Cara Install
```shell
    git clone https://github.com/saifulrizal17/uas_pwl.git

    cd uas_pwl

    cp .env.example .env

    composer install

    npm i

    php artisan key:generate

    php artisan migrate:fresh --seed

    npm run dev

    php artisan serve

```
## Akun
### Admin
```shell
    email    : admin@gmail.com
    password : 123
```
### User
```shell
    email    : user@gmail.com
    password : 123
```
