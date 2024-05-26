# Portal Berita Codeigniter 4

Website ini merupakan tugas kelompok 2 mata kuliah Pemograman 2 prodi Sistem Informasi dan Teknik Informatika berisi tentang sebuah timeline pembelajaran di mata kuliah pemograman 2 seperti portal berita. Terdapat 2 halaman yaitu halaman Portal dan halaman Admin.

Dikembangkan oleh :
- [Ahmar Ramzi Sanjaya](https://ahmar.kelaspagi.my.id/)
- [Aryo Fadillah Pradana](http://aryofadillahpradana.angkatan14.id/)
- [Muhamad Ali Angga](http://muhamadaliangga.angkatan14.id/)
- [Siti Hawasih](https://hawasih.kelaspagi.my.id/)
- [Warni](https://warni.kelaspagi.my.id/)


## Instalasi
**Pastikan versi php adalah 8.1^**

Buat database dengan nama yang diinginkan

Buka terminal lalu masukkan direktori yang dituju untuk menyimpan project lalu clone project sebagai berikut:


```bash
git clone https://github.com/MuhamadAliAngga/Portal-Berita_CI4.git
```
```bash
cd Portal-Berita_CI4/
```
```bash
composer install
```

Ubah nama file `env` menjadi `.env` kemudian sesuaikan bagian database dan environment

```php
#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------

CI_ENVIRONMENT = development

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = //nama database
database.default.username = //username database
database.default.password = //password database
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```
Buka terminal kembali dan masukkan
```bash
php spark migrate
```
```bash
php spark serve
```
