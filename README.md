<p align="center">
    <img src="https://github.com/Rizalmhmmd13zx/wfr2021-on-sight/blob/master/public/assets/img/readme-theme.png" width="1280"/>
</p>

## Onsight
Onsight adalah toko buku online yang memberikan kemudahan bagi masyarakat yang ingin membeli buku. onsight memungkinkan pengguna mencari buku yang dia butuhkan lebih cepat dengan harga dan layanan terbaik. web ini juga memungkinkan pengguna mengirimkan buku yang dibelinya sebagai hadiah kepada pengguna lain yang diinginkan.

## Requirement
- [PHP][1] >= 7.3
- [Composer][2]
- [XAMPP][3]

## Instalasi
- Clone repository:
            
        git clone https://github.com/Rizalmhmmd13zx/wfr2021-on-sight.git

- Instalasi dependencies PHP dengan menggunakan [Composer][2]:

        composer install


- Buat key baru:

        php artisan key:generate

- buat file ".env" isi sama dengan file ".env.example"
- konfigurasikan koneksi sesuai yang diinginkan
- buka program [XAMPP][3], jalankan Sevice MySql
- buat koneksi mysql seperti Konfigurasi di file ".env" sebelumnya
- buat schema db dengan nama seperti pada konfigurasi ".env"

- Lakukan migrate

        php artisan migrate

- lakukan seeding database

        php artisan migrate --seed


[0]: https://laravel.com "Laravel"
[1]: https://www.php.net "PHP"
[2]: https://getcomposer.org "Composer"
[3]: https://www.apachefriends.org "XAMPP"
<!-- ## Web ini dibangun dengan :
- web framework Laravel 8
- mysql
- xampp
- Boostrap 5
- bootstrap icons
- boxicons
- glightbox
- swiper-bundle
- Source icon https://www.flaticon.com
- Source Image https://unsplash.com -->
