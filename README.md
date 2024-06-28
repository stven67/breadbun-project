# Kelompok 16

## Anggota Kelompok
- **Stven67** / Steven Immanuel (535220141)
- **filbertwu** / Filbert Wu (535220120)
- **MOMOTRONICS** / Vincent Laurent (535220168)

## Latar Belakang
**BreadBun** adalah website bakery shop yang menjual beraneka macam jenis roti. Website ini dirancang untuk membantu dalam aplikasi pemesanan online yang lebih praktis dan efisien.

##Instalasi

#Gunakan perintah berikut untuk navigasi ke direktori proyek
cd breadbun

#Jalankan perintah berikut untuk menginstal semua ketergantungan PHP menggunakan Composer
composer install

#Mengatur Kredensial Database di File .env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=breadbun
DB_USERNAME=breadbun_user
DB_PASSWORD=breadbun_password

#Jalankan Migrasi Database
php artisan migrate

#Jalankan Server Pengembangan
php artisan serve

#Akses web
Buka http://localhost:8000 di browser web


## Fitur
- **Register:** Fitur pendaftaran untuk pengguna baru.
- **Login dan Logout:** Fitur untuk masuk dan keluar dari akun.
- **Auth:** Sistem otentikasi pengguna.
- **Role Admin-User:** Pembagian peran antara admin dan pengguna.
- **Admin Dashboard:** Panel kontrol untuk admin mengelola website.
- **Tampilan Produk:** Menampilkan berbagai macam produk roti yang dijual.
- **Checkout:** Proses pembelian dan pemesanan produk.

## Admin Account Information
Untuk mengakses akun admin, gunakan informasi berikut:

- **Email:** `admin@example.com`
- **Password:** `breadbunadmin`

