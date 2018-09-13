## TEST SPRINT 1

Sebelum running project ini, langkah-langkah yang harus dilakukan:
- setelah melakukan git clone/ download project ini, running `composer install`
- buat file bernama `.env`
- copy isi file `.env.example` ke dalam `.env`
- isi hal-hal penting di dalam `.env` seperti `DB_DATABASE`,`DB_USERNAME`,`DB_PASSWORD`
- isi juga hal penting lainnya seperti `APP_URL_CITY` untuk api rajaongkir city, `APP_URL_PROVINSI` 
untuk api raja ongkir provinsi dan `APP_KEY_RAJAONGKIR` untuk api key rajaongkir
 - lakukan command `php artisan migrate` untuk migrasi database
 - untuk melakukan artisan command provinsi bisa ketik `php artisan post:provinsi` data provinsi dari rajaongkir 
akan masuk database
 - untuk melakukan artisan command city bisa ketik `php artisan post:city` maka otomatis data city dari rajaongkir 
 akan masuk database
 -untuk melakukan pencarian provinsi dari database bisa ketik url `/search/provinces/{id}` id ini diisi sesuai yang ada di database
 - untuk melakukan pencarian city dari database bisa ketik url `/search/cities/{id}` id ini diisi sesuai yg ada di database