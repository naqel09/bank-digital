# Bank Digital

Aplikasi **Bank Digital** merupakan aplikasi perbankan berbasis web yang dirancang untuk menyediakan layanan perbankan digital secara sederhana, aman, dan mudah digunakan.

Aplikasi ini memungkinkan nasabah untuk mengelola rekening, melihat saldo, melakukan transfer, melakukan top up, melakukan pembayaran, serta melihat riwayat transaksi. Selain itu, tersedia panel administrasi untuk membantu administrator mengelola nasabah, rekening, transaksi, dan aktivitas sistem.

> **Status:** Dalam tahap pengembangan

---

## 1. Tujuan Aplikasi

Aplikasi ini dikembangkan sebagai sistem perbankan digital berbasis web dengan tujuan:

* Menyediakan layanan perbankan yang dapat diakses secara digital.
* Memudahkan nasabah dalam mengelola rekening dan transaksi.
* Menyediakan informasi saldo dan riwayat transaksi secara terpusat.
* Menyediakan fasilitas transfer dan pembayaran.
* Menyediakan sistem administrasi untuk pengelolaan data nasabah dan transaksi.
* Menerapkan autentikasi dan pembatasan akses berdasarkan role.
* Membuat struktur aplikasi yang mudah dikembangkan dan dipelihara.

---

# 2. Role Pengguna

Aplikasi memiliki dua role utama:

## 2.1 Guest

Guest adalah pengguna yang belum melakukan login.

Guest hanya dapat mengakses halaman yang bersifat publik.

### Fitur Guest

* Home / Landing Page
* Informasi produk dan layanan
* Tentang aplikasi
* FAQ / Bantuan
* Informasi keamanan
* Kontak
* Login
* Registrasi

Guest **tidak dapat** mengakses data pribadi maupun melakukan transaksi.

---

## 2.2 Customer / Nasabah

Customer adalah pengguna yang telah memiliki akun dan berhasil melakukan autentikasi.

### Fitur Customer

* Dashboard
* Melihat informasi rekening
* Melihat saldo
* Transfer
* Top Up
* Pembayaran
* Riwayat transaksi
* Detail transaksi
* Notifikasi
* Pengaturan profil
* Logout

Customer hanya dapat mengakses data dan rekening miliknya sendiri.

---

## 2.3 Admin

Admin merupakan pengguna yang bertugas mengelola dan memonitor operasional aplikasi.

### Fitur Admin

* Dashboard Admin
* Mengelola data nasabah
* Melihat data rekening
* Melihat transaksi
* Melakukan pencarian transaksi
* Melakukan verifikasi data tertentu
* Monitoring aktivitas sistem
* Melihat laporan
* Melihat audit log

Admin tidak memiliki akses untuk menggunakan rekening customer atas nama customer tanpa mekanisme yang telah ditentukan sistem.

---

# 3. Konsep Aplikasi

Secara umum aplikasi dibagi menjadi tiga bagian:

```text
                    BANK DIGITAL
                         |
            +------------+------------+
            |                         |
          PUBLIC                   AUTHENTICATED
            |                         |
          GUEST                 +-----+-----+
                                |           |
                            CUSTOMER       ADMIN
```

### Guest

```text
Home
 ├── Produk
 ├── Tentang Kami
 ├── FAQ
 ├── Keamanan
 ├── Kontak
 ├── Login
 └── Register
```

### Customer

```text
Dashboard
 ├── Rekening
 ├── Transfer
 ├── Top Up
 ├── Pembayaran
 ├── Transaksi
 ├── Notifikasi
 └── Profile
```

### Admin

```text
Admin Dashboard
 ├── Customer
 ├── Rekening
 ├── Transaksi
 ├── Verifikasi
 ├── Laporan
 └── Audit Log
```

---

# 4. Fitur Utama

## 4.1 Landing Page

Halaman pertama yang dapat diakses oleh Guest.

Halaman ini memberikan informasi mengenai:

* Identitas aplikasi
* Layanan yang tersedia
* Keunggulan aplikasi
* Informasi keamanan
* Cara menggunakan layanan
* Ajakan untuk melakukan registrasi atau login

---

## 4.2 Authentication

Sistem autentikasi digunakan untuk membedakan Guest, Customer, dan Admin.

Fitur authentication meliputi:

* Login
* Register
* Logout
* Password hashing
* Validasi credentials
* Session management
* Authorization berdasarkan role

---

# 5. Customer Dashboard

Setelah berhasil login, Customer diarahkan ke Dashboard.

Dashboard memberikan informasi penting seperti:

```text
+---------------------------------------+
| Selamat Datang, Customer              |
+---------------------------------------+
|                                       |
| Saldo                                  |
| Rp 5.000.000                           |
|                                       |
+---------------------------------------+
|                                       |
| [ Transfer ] [ Top Up ] [ Pembayaran ]|
|                                       |
+---------------------------------------+
| Transaksi Terakhir                    |
|                                       |
| Transfer       - Rp500.000            |
| Top Up         + Rp1.000.000           |
| Pembayaran     - Rp200.000             |
+---------------------------------------+
```

Dashboard harus memberikan informasi yang ringkas dan mudah dipahami.

---

# 6. Account / Rekening

Customer dapat melihat informasi rekening yang dimilikinya.

Informasi rekening dapat meliputi:

* Nomor rekening
* Jenis rekening
* Saldo
* Status rekening
* Tanggal pembukaan rekening

Struktur hubungan data secara konseptual:

```text
Customer
    |
    | 1 : N
    |
  Account
```

Satu Customer dapat memiliki satu atau lebih Account apabila sistem nantinya mendukung multi-rekening.

---

# 7. Transfer

Customer dapat melakukan transfer dana.

Alur dasar transfer:

```text
Customer
    |
    v
Pilih Transfer
    |
    v
Masukkan Rekening Tujuan
    |
    v
Masukkan Nominal
    |
    v
Validasi
    |
    v
Konfirmasi
    |
    v
Autentikasi / PIN
    |
    v
Proses Transfer
    |
    +---- Gagal
    |
    +---- Berhasil
            |
            v
       Saldo diperbarui
            |
            v
       Transaksi dicatat
```

Sistem harus memastikan:

* Rekening pengirim valid.
* Rekening penerima valid.
* Saldo mencukupi.
* Nominal transfer valid.
* Transaksi memiliki status.
* Transaksi tercatat.
* Saldo diperbarui secara konsisten.

---

# 8. Top Up

Customer dapat menambahkan saldo melalui mekanisme top up yang disediakan aplikasi.

Alur dasar:

```text
Customer
    |
    v
Top Up
    |
    v
Pilih metode
    |
    v
Masukkan nominal
    |
    v
Konfirmasi
    |
    v
Proses pembayaran
    |
    v
Top Up berhasil
    |
    v
Saldo bertambah
    |
    v
Transaksi tercatat
```

Metode pembayaran/top up dapat dikembangkan lebih lanjut sesuai kebutuhan aplikasi.

---

# 9. Pembayaran

Customer dapat melakukan pembayaran terhadap layanan tertentu.

Contoh layanan:

* Pulsa
* Listrik
* Internet
* Tagihan lainnya

Alur umum:

```text
Pilih Pembayaran
      |
      v
Pilih Jenis Tagihan
      |
      v
Masukkan Nomor / ID Pelanggan
      |
      v
Masukkan / Konfirmasi Nominal
      |
      v
Konfirmasi
      |
      v
PIN / Authentication
      |
      v
Pembayaran
      |
      v
Transaksi tercatat
```

---

# 10. Transaction / Riwayat Transaksi

Setiap aktivitas keuangan harus memiliki catatan transaksi.

Jenis transaksi dapat mencakup:

* Transfer masuk
* Transfer keluar
* Top Up
* Pembayaran
* Transaksi lainnya

Informasi transaksi dapat meliputi:

```text
Transaction
├── ID
├── Transaction Code
├── Account
├── Type
├── Amount
├── Description
├── Status
└── Created At
```

Status transaksi dapat berupa:

```text
PENDING
SUCCESS
FAILED
CANCELLED
```

Daftar status final dapat disesuaikan dengan kebutuhan sistem.

---

# 11. Notification

Sistem dapat memberikan notifikasi kepada Customer terkait aktivitas penting.

Contoh:

* Transfer berhasil
* Transfer gagal
* Top Up berhasil
* Pembayaran berhasil
* Perubahan profil
* Aktivitas login
* Informasi keamanan

Contoh:

```text
Notifikasi

✓ Transfer berhasil sebesar Rp500.000
✓ Top Up berhasil sebesar Rp1.000.000
⚠ Aktivitas login baru terdeteksi
```

---

# 12. Profile

Customer dapat mengelola informasi profilnya.

Informasi yang dapat dikelola:

* Nama
* Email
* Nomor telepon
* Alamat
* Foto profil
* Password

Data sensitif harus diproses dengan mekanisme keamanan yang sesuai.

---

# 13. Admin Dashboard

Admin memiliki dashboard terpisah dari Customer.

Contoh informasi:

```text
+---------------------------------------+
| ADMIN DASHBOARD                       |
+---------------------------------------+
| Total Customer       : 10.250         |
| Total Account        : 11.430         |
| Transaksi Hari Ini   : 5.832          |
| Total Transaksi      : Rp2.5 Miliar   |
+---------------------------------------+
```

Admin dapat melihat kondisi sistem secara umum tanpa mengakses fungsi customer secara langsung.

---

# 14. Struktur Data Utama

Pada tahap awal, sistem memiliki tiga entitas utama:

```text
Customer
    |
    | 1 : N
    v
Account
    |
    | 1 : N
    v
Transaction
```

### Customer

Menyimpan informasi pengguna.

Contoh atribut:

```text
id
name
email
password
phone
nik
date_of_birth
gender
address
status
email_verified_at
created_at
updated_at
```

### Account

Menyimpan informasi rekening.

Contoh atribut:

```text
id
user_id
account_number
account_type
balance
status
created_at
updated_at
```

### Transaction

Menyimpan aktivitas transaksi.

Contoh atribut:

```text
id
account_id
transaction_code
type
amount
description
status
created_at
updated_at
```

> Struktur database masih dapat berubah selama proses pengembangan setelah kebutuhan fitur dan business rules ditentukan lebih lanjut.

---

# 15. Arsitektur Aplikasi

Aplikasi menggunakan pendekatan Laravel MVC dengan pemisahan tanggung jawab antara:

```text
Route
  |
  v
Controller
  |
  v
Request Validation
  |
  v
Service / Business Logic
  |
  v
Model
  |
  v
Database
```

### Route

Menentukan endpoint yang dapat diakses pengguna.

### Controller

Menangani request dan mengatur alur komunikasi antara View dan Business Logic.

### Request

Menangani validasi input pengguna.

### Service

Menangani business logic yang kompleks seperti:

* Transfer
* Top Up
* Pembayaran
* Perhitungan transaksi

### Model

Merepresentasikan data dan relationship dengan database.

### View

Menampilkan antarmuka aplikasi menggunakan Blade.

---

# 16. Struktur Folder

Struktur awal yang direncanakan:

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   ├── DashboardController.php
│   │   ├── AccountController.php
│   │   ├── TransferController.php
│   │   ├── TopUpController.php
│   │   ├── PaymentController.php
│   │   ├── TransactionController.php
│   │   └── ProfileController.php
│   │
│   ├── Requests/
│   └── Middleware/
│
├── Models/
│   ├── User.php
│   ├── Account.php
│   └── Transaction.php
│
└── Services/
    ├── TransferService.php
    ├── TopUpService.php
    ├── PaymentService.php
    └── TransactionService.php
```

View:

```text
resources/views/
│
├── layouts/
│   ├── app.blade.php
│   ├── guest.blade.php
│   └── admin.blade.php
│
├── components/
│   ├── navbar.blade.php
│   ├── sidebar.blade.php
│   └── balance-card.blade.php
│
├── home.blade.php
│
├── auth/
│   ├── login.blade.php
│   └── register.blade.php
│
├── dashboard/
│   └── index.blade.php
│
├── transfer/
│   └── index.blade.php
│
├── topup/
│   └── index.blade.php
│
├── payment/
│   └── index.blade.php
│
├── transactions/
│   └── index.blade.php
│
└── profile/
    └── index.blade.php
```

---

# 17. Routing

Routing dibagi berdasarkan hak akses pengguna.

### Public Routes

Dapat diakses tanpa login:

```text
/
 /products
 /about
 /faq
 /security
 /login
 /register
```

### Customer Routes

Membutuhkan autentikasi:

```text
/dashboard
/account
/transfer
/topup
/payment
/transactions
/profile
```

### Admin Routes

Membutuhkan autentikasi dan role Admin:

```text
/admin
/admin/customers
/admin/accounts
/admin/transactions
/admin/reports
/admin/audit-logs
```

Authorization harus diterapkan sehingga Customer tidak dapat mengakses halaman Admin dan sebaliknya.

---

# 18. Keamanan

Karena aplikasi menangani data keuangan, keamanan merupakan salah satu bagian utama sistem.

Beberapa aspek yang harus diperhatikan:

* Password harus menggunakan hashing.
* Authentication harus diterapkan pada halaman privat.
* Authorization harus diterapkan berdasarkan role.
* Input harus divalidasi.
* Jangan mempercayai data dari client.
* Transaksi keuangan harus menggunakan database transaction.
* Saldo tidak boleh diubah secara sembarangan dari client.
* Setiap transaksi harus memiliki reference/transaction code.
* Aktivitas penting dapat dicatat dalam audit log.
* Data sensitif tidak boleh ditampilkan secara sembarangan.
* Endpoint transaksi harus dilindungi dari request yang tidak sah.
* Perubahan saldo harus dilakukan melalui business logic aplikasi.

---

# 19. Teknologi

Teknologi yang digunakan dalam pengembangan:

* **Laravel**
* **PHP**
* **PostgreSQL**
* **Blade**
* **Tailwind CSS**
* **Vite**
* **Docker**
* **Git**

Versi dependency mengikuti konfigurasi project yang digunakan pada saat pengembangan.

---

# 20. Development Environment

Project menggunakan Docker untuk menjaga konsistensi environment antar developer.

Contoh menjalankan aplikasi:

```bash
docker compose up -d
```

Melihat container:

```bash
docker compose ps
```

Menjalankan Laravel Artisan:

```bash
docker compose exec app php artisan <command>
```

Contoh:

```bash
docker compose exec app php artisan migrate
```

---

# 21. Development Workflow

Developer diharapkan mengikuti alur pengembangan berikut:

```text
Requirement
    |
    v
Database / ERD
    |
    v
Migration
    |
    v
Model & Relationship
    |
    v
Request Validation
    |
    v
Service / Business Logic
    |
    v
Controller
    |
    v
Route
    |
    v
Blade / UI
    |
    v
Testing
```

Untuk fitur yang berhubungan dengan uang, business logic harus diprioritaskan sebelum membuat UI final.

---

# 22. Prinsip Pengembangan

Beberapa prinsip yang digunakan dalam project:

### Separation of Concern

Setiap bagian aplikasi memiliki tanggung jawab masing-masing.

```text
Controller → Request handling
Request    → Validation
Service    → Business Logic
Model      → Data & Relationship
Blade      → Presentation
```

### Jangan menaruh Business Logic di Blade

Blade hanya bertanggung jawab terhadap tampilan.

### Jangan menaruh Business Logic kompleks di Controller

Logic seperti transfer dan perubahan saldo sebaiknya berada di Service.

### Database sebagai sumber data utama

Data penting seperti saldo dan transaksi harus berasal dari database dan tidak boleh dipercaya dari input client.

---

# 23. Roadmap

Pengembangan aplikasi dilakukan secara bertahap.

## Phase 1 — Foundation

* [ ] Setup Laravel
* [ ] Setup Docker
* [ ] Setup PostgreSQL
* [ ] Setup Git
* [ ] Authentication
* [ ] Role Customer
* [ ] Role Admin

## Phase 2 — Customer

* [ ] Landing Page
* [ ] Customer Dashboard
* [ ] Profile
* [ ] Account
* [ ] Balance
* [ ] Transaction History

## Phase 3 — Financial Features

* [ ] Transfer
* [ ] Top Up
* [ ] Payment
* [ ] Transaction processing
* [ ] Transaction status
* [ ] Notification

## Phase 4 — Admin

* [ ] Admin Dashboard
* [ ] Customer Management
* [ ] Account Management
* [ ] Transaction Monitoring
* [ ] Verification
* [ ] Reports
* [ ] Audit Log

## Phase 5 — Security & Testing

* [ ] Authorization
* [ ] Validation
* [ ] Transaction security
* [ ] Feature testing
* [ ] Integration testing
* [ ] Security testing

---

# 24. Status Pengembangan

Project saat ini masih berada pada tahap **perancangan sistem dan pembangunan fondasi aplikasi**.

Prioritas pengembangan:

```text
1. Requirement
2. Role & Permission
3. Database / ERD
4. Authentication
5. Customer
6. Account
7. Transaction
8. Transfer
9. Top Up
10. Payment
11. Admin
12. Testing
```

Fitur yang belum ditentukan secara final tidak boleh dianggap sebagai requirement tetap dan dapat berubah berdasarkan hasil analisis kebutuhan.

---

# 25. Contribution

Developer yang berkontribusi pada project diharapkan:

1. Membuat branch untuk setiap fitur atau perubahan.
2. Mengikuti struktur project yang telah ditentukan.
3. Tidak memasukkan credentials atau secret ke repository.
4. Membuat migration untuk perubahan database.
5. Melakukan validation terhadap input.
6. Membuat test untuk fitur penting.
7. Menggunakan commit message yang jelas.
8. Melakukan pull request sebelum perubahan digabungkan ke branch utama.

Contoh:

```bash
git checkout -b feature/transfer
```

Kemudian setelah selesai:

```bash
git add .
git commit -m "feat: add transfer feature"
git push origin feature/transfer
```

---

# 26. License

Project ini dikembangkan untuk keperluan pengembangan dan pembelajaran.

License dapat ditentukan kemudian sesuai kebutuhan project.
