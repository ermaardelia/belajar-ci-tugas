<<<<<<< HEAD






# CodeIgniter 4 Application Starter
 
## What is CodeIgniter?
=======
# Website Toko
Website toko ini adalah sistem belanja online  berbasis CodeIgniter 4. 

>>>>>>> 2711235a892238adc8df02bea306c8ab3d7dd20c

## Features Website Toko 
##### Autentikasi dan Role Akses
- Login dan Logout
- Role "admin" dan "guest" dengan hak akses berbeda

##### Menu Home
- Tampilan produk di halaman utama.
- Mendukung diskon otomatis berdasarkan tanggal aktif.

##### Menu Produk untuk role admin
- Tambah data produk, hapus data produk, edit data produk, dan download data produk dalam format pdf

##### Menu Keranjang 
- Tambah produk ke keranjang, edit jumlah produk, hapus produk, selesai belanja dan kosongkan keranjang.

##### Menu Diskon untuk role admin
- Menambah data diskon dengan menentukan tanggal dan nominal diskon
- Edit data diskon dengan ketentuan tanggal Readonly
- Hapus data diskon

##### Menu Pembelian untuk role admin
- Menampilkan semua transaksi pembelian dari user.
- Admin bisa mengubah status pesanan (belum/sudah selesai).
- Modal detail produk per transaksi.

##### Menu Profile
- Menampilkan history transaksi pembelian

##### Menu Produk Kategori
- Menampilkan data kategori produk
- Edit kategori produk dan hapus kategori produk

##### Halaman Dashboard Admin
- Menampilkan ringkasan pembelian secara tabel.


## Instalasi
- Install composer dengan menjalankan perintah composer install untuk mengunduh dependensi
- lalu jalankan composer create-project codeigniter4/appstarter
- Setup file .env , buat salinan dari file env menjadi .env
- Setup database dengan membuat database baru dan membuat tabel user, product, transaction, transacton_detail, diskon.
- Aktifkan XAMPP
- Jalankan server dengan menggunakan perintah php spark serve

## Struktur Proyek
app
 ┣ Config
 ┃ ┣ Boot
 ┃ ┃ ┣ development.php
 ┃ ┃ ┣ production.php
 ┃ ┃ ┗ testing.php
 ┃ ┣ App.php
 ┃ ┣ Autoload.php
 ┃ ┣ Cache.php
 ┃ ┣ Constants.php
 ┃ ┣ ContentSecurityPolicy.php
 ┃ ┣ Cookie.php
 ┃ ┣ Cors.php
 ┃ ┣ CURLRequest.php
 ┃ ┣ Database.php
 ┃ ┣ DocTypes.php
 ┃ ┣ Email.php
 ┃ ┣ Encryption.php
 ┃ ┣ Events.php
 ┃ ┣ Exceptions.php
 ┃ ┣ Feature.php
 ┃ ┣ Filters.php
 ┃ ┣ ForeignCharacters.php
 ┃ ┣ Format.php
 ┃ ┣ Generators.php
 ┃ ┣ Honeypot.php
 ┃ ┣ Images.php
 ┃ ┣ Kint.php
 ┃ ┣ Logger.php
 ┃ ┣ Migrations.php
 ┃ ┣ Mimes.php
 ┃ ┣ Modules.php
 ┃ ┣ Optimize.php
 ┃ ┣ Pager.php
 ┃ ┣ Paths.php
 ┃ ┣ Publisher.php
 ┃ ┣ Routes.php
 ┃ ┣ Routing.php
 ┃ ┣ Security.php
 ┃ ┣ Services.php
 ┃ ┣ Session.php
 ┃ ┣ Toolbar.php
 ┃ ┣ UserAgents.php
 ┃ ┣ Validation.php
 ┃ ┗ View.php
 ┣ Controllers
 ┃ ┣ ApiController.php
 ┃ ┣ AuthController.php
 ┃ ┣ BaseController.php
 ┃ ┣ ContactController.php
 ┃ ┣ DiskonController.php
 ┃ ┣ FaqController.php
 ┃ ┣ Home.php
 ┃ ┣ ProductCategoryController.php
 ┃ ┣ ProdukController.php
 ┃ ┗ TransaksiController.php
 ┣ Database
 ┃ ┣ Migrations
 ┃ ┃ ┣ .gitkeep
 ┃ ┃ ┣ 2025-06-21-022151_User.php
 ┃ ┃ ┣ 2025-06-21-022158_Product.php
 ┃ ┃ ┣ 2025-06-21-022205_Transaction.php
 ┃ ┃ ┣ 2025-06-21-022212_TransactionDetail.php
 ┃ ┃ ┣ 2025-06-21-022220_ProductCategory.php
 ┃ ┃ ┗ 2025-06-30-084606_Diskon.php
 ┃ ┗ Seeds
 ┃ ┃ ┣ .gitkeep
 ┃ ┃ ┣ DiskonSeeder.php
 ┃ ┃ ┣ ProductCategorySeeder.php
 ┃ ┃ ┣ ProductSeeder.php
 ┃ ┃ ┗ UserSeeder.php
 ┣ Filters
 ┃ ┣ .gitkeep
 ┃ ┣ Auth.php
 ┃ ┗ Redirect.php
 ┣ Helpers
 ┃ ┗ .gitkeep
 ┣ Language
 ┃ ┣ en
 ┃ ┃ ┗ Validation.php
 ┃ ┗ .gitkeep
 ┣ Libraries
 ┃ ┗ .gitkeep
 ┣ Models
 ┃ ┣ .gitkeep
 ┃ ┣ DiskonModel.php
 ┃ ┣ ProductCategoryModel.php
 ┃ ┣ ProductModel.php
 ┃ ┣ TransactionDetailModel.php
 ┃ ┣ TransactionModel.php
 ┃ ┗ UserModel.php
 ┣ ThirdParty
 ┃ ┗ .gitkeep
 ┣ Views
 ┃ ┣ components
 ┃ ┃ ┣ footer.php
 ┃ ┃ ┣ header.php
 ┃ ┃ ┗ sidebar.php
 ┃ ┣ errors
 ┃ ┃ ┣ cli
 ┃ ┃ ┃ ┣ error_404.php
 ┃ ┃ ┃ ┣ error_exception.php
 ┃ ┃ ┃ ┗ production.php
 ┃ ┃ ┗ html
 ┃ ┃ ┃ ┣ debug.css
 ┃ ┃ ┃ ┣ debug.js
 ┃ ┃ ┃ ┣ error_400.php
 ┃ ┃ ┃ ┣ error_404.php
 ┃ ┃ ┃ ┣ error_exception.php
 ┃ ┃ ┃ ┗ production.php
 ┃ ┣ layout.php
 ┃ ┣ layout_clear.php
 ┃ ┣ v_checkout.php
 ┃ ┣ v_contact.php
 ┃ ┣ v_diskon.php
 ┃ ┣ v_faq.php
 ┃ ┣ v_home.php
 ┃ ┣ v_kategori.php
 ┃ ┣ v_keranjang.php
 ┃ ┣ v_login.php
 ┃ ┣ v_pembelian.php
 ┃ ┣ v_produk.php
 ┃ ┣ v_produkPDF.php
 ┃ ┣ v_profile.php
 ┃ ┗ welcome_message.php
 ┣ .htaccess
 ┣ Common.php
 ┗ index.html
