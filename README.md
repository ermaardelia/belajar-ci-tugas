# Website Toko
Website toko ini adalah sistem belanja online  berbasis CodeIgniter 4. 


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
C:.
|   .env
|   .gitignore
|   builds
|   composer.json
|   composer.lock
|   LICENSE
|   phpunit.xml.dist
|   preload.php
|   README.md
|   spark
|   struktur.txt
|
+---app
|   |   .htaccess
|   |   Common.php
|   |   index.html
|   |
|   +---Config
|   |   |   App.php
|   |   |   Autoload.php
|   |   |   Cache.php
|   |   |   Constants.php
|   |   |   ContentSecurityPolicy.php
|   |   |   Cookie.php
|   |   |   Cors.php
|   |   |   CURLRequest.php
|   |   |   Database.php
|   |   |   DocTypes.php
|   |   |   Email.php
|   |   |   Encryption.php
|   |   |   Events.php
|   |   |   Exceptions.php
|   |   |   Feature.php
|   |   |   Filters.php
|   |   |   ForeignCharacters.php
|   |   |   Format.php
|   |   |   Generators.php
|   |   |   Honeypot.php
|   |   |   Images.php
|   |   |   Kint.php
|   |   |   Logger.php
|   |   |   Migrations.php
|   |   |   Mimes.php
|   |   |   Modules.php
|   |   |   Optimize.php
|   |   |   Pager.php
|   |   |   Paths.php
|   |   |   Publisher.php
|   |   |   Routes.php
|   |   |   Routing.php
|   |   |   Security.php
|   |   |   Services.php
|   |   |   Session.php
|   |   |   Toolbar.php
|   |   |   UserAgents.php
|   |   |   Validation.php
|   |   |   View.php
|   |   |
|   |   \---Boot
|   |           development.php
|   |           production.php
|   |           testing.php
|   |
|   +---Controllers
|   |       ApiController.php
|   |       AuthController.php
|   |       BaseController.php
|   |       ContactController.php
|   |       DiskonController.php
|   |       FaqController.php
|   |       Home.php
|   |       ProductCategoryController.php
|   |       ProdukController.php
|   |       TransaksiController.php
|   |
|   +---Database
|   |   +---Migrations
|   |   |       .gitkeep
|   |   |       2025-06-21-022151_User.php
|   |   |       2025-06-21-022158_Product.php
|   |   |       2025-06-21-022205_Transaction.php
|   |   |       2025-06-21-022212_TransactionDetail.php
|   |   |       2025-06-21-022220_ProductCategory.php
|   |   |       2025-06-30-084606_Diskon.php
|   |   |
|   |   \---Seeds
|   |           .gitkeep
|   |           DiskonSeeder.php
|   |           ProductCategorySeeder.php
|   |           ProductSeeder.php
|   |           UserSeeder.php
|   |
|   +---Filters
|   |       .gitkeep
|   |       Auth.php
|   |       Redirect.php
|   |
|   +---Helpers
|   |       .gitkeep
|   |
|   +---Language
|   |   |   .gitkeep
|   |   |
|   |   \---en
|   |           Validation.php
|   |
|   +---Libraries
|   |       .gitkeep
|   |
|   +---Models
|   |       .gitkeep
|   |       DiskonModel.php
|   |       ProductCategoryModel.php
|   |       ProductModel.php
|   |       TransactionDetailModel.php
|   |       TransactionModel.php
|   |       UserModel.php
|   |
|   +---ThirdParty
|   |       .gitkeep
|   |
|   \---Views
|       |   layout.php
|       |   layout_clear.php
|       |   v_checkout.php
|       |   v_contact.php
|       |   v_diskon.php
|       |   v_faq.php
|       |   v_home.php
|       |   v_kategori.php
|       |   v_keranjang.php
|       |   v_login.php
|       |   v_pembelian.php
|       |   v_produk.php
|       |   v_produkPDF.php
|       |   v_profile.php
|       |   welcome_message.php
|       |
|       +---components
|       |       footer.php
|       |       header.php
|       |       sidebar.php
|       |
|       \---errors
|           +---cli
|           |       error_404.php
|           |       error_exception.php
|           |       production.php
|           |
|           \---html
|                   debug.css
|                   debug.js
|                   error_400.php
|                   error_404.php
|                   error_exception.php
|                   production.php
|
+---public
|   |   .htaccess
|   |   favicon.ico
|   |   index.php
|   |   robots.txt
|   |
|   +---dashboard-toko
|   |       index.php
|   |
|   +---img
|   |       asus_tuf_a15.jpg
|   |       asus_vivobook_14.jpg
|   |       lenovo_idepad_slim_3.jpg
|   |
|   \---NiceAdmin
|       |   charts-apexcharts.html
|       |   charts-chartjs.html
|       |   charts-echarts.html
|       |   components-accordion.html
|       |   components-alerts.html
|       |   components-badges.html
|       |   components-breadcrumbs.html
|       |   components-buttons.html
|       |   components-cards.html
|       |   components-carousel.html
|       |   components-list-group.html
|       |   components-modal.html
|       |   components-pagination.html
|       |   components-progress.html
|       |   components-spinners.html
|       |   components-tabs.html
|       |   components-tooltips.html
|       |   forms-editors.html
|       |   forms-elements.html
|       |   forms-layouts.html
|       |   forms-validation.html
|       |   icons-bootstrap.html
|       |   icons-boxicons.html
|       |   icons-remix.html
|       |   index.html
|       |   pages-blank.html
|       |   pages-contact.html
|       |   pages-error-404.html
|       |   pages-faq.html
|       |   pages-login.html
|       |   pages-register.html
|       |   Readme.txt
|       |   tables-data.html
|       |   tables-general.html
|       |   users-profile.html
|       |
|       +---assets
|       |   +---css
|       |   |       style.css
|       |   |
|       |   +---img
|       |   |       apple-touch-icon.png
|       |   |       card.jpg
|       |   |       favicon.png
|       |   |       logo.png
|       |   |       messages-1.jpg
|       |   |       messages-2.jpg
|       |   |       messages-3.jpg
|       |   |       news-1.jpg
|       |   |       news-2.jpg
|       |   |       news-3.jpg
|       |   |       news-4.jpg
|       |   |       news-5.jpg
|       |   |       not-found.svg
|       |   |       product-1.jpg
|       |   |       product-2.jpg
|       |   |       product-3.jpg
|       |   |       product-4.jpg
|       |   |       product-5.jpg
|       |   |       profile-img.jpg
|       |   |       slides-1.jpg
|       |   |       slides-2.jpg
|       |   |       slides-3.jpg
|       |   |
|       |   +---js
|       |   |       main.js
|       |   |
|       |   +---scss
|       |   |       Readme.txt
|       |   |
