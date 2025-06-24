# Sistem Pakar Diagnosis Penyakit Gastro-Usus

Aplikasi ini adalah sistem pakar berbasis web menggunakan **CodeIgniter 4 (CI4)** untuk mendiagnosis penyakit yang berkaitan dengan gangguan gastro-usus. Sistem dirancang untuk dapat berjalan secara lokal tanpa koneksi internet.

---

## 📌 Fitur Utama

- ✅ Form input gejala (checkbox) untuk pengguna
- ✅ Input nilai threshold diagnosis
- ✅ Output hasil diagnosis (daftar penyakit + skor kecocokan)
- ✅ Halaman pakar untuk melihat data aturan (penyakit ↔ gejala)
- ✅ Aplikasi dapat dijalankan lokal menggunakan XAMPP dan PHP

---

## 🧱 Teknologi yang Digunakan

- PHP 7+ (CI4 Framework)
- MySQL (via phpMyAdmin di XAMPP)
- HTML, CSS
- Tidak menggunakan JavaScript eksternal atau database server khusus

---

## 🛠 Cara Menjalankan Aplikasi (Linux + XAMPP)

1. Pastikan XAMPP sudah terinstal di Ubuntu.
2. Letakkan folder `gastro_expert/` di dalam: /opt/lampp/htdocs/
3. Buat database:

- Buka `http://localhost/phpmyadmin`
- Buat database baru: `gastro_expert_db`
- Import tabel:
  - `symptoms` (kode, nama)
  - `diseases` (kode, nama)
  - `rules` (kode penyakit, gejala, bobot)

4. Ubah `app/Config/Database.php`:

```php
'hostname' => 'localhost', #default
'username' => 'root', #default
'password' => '', #default
'database' => 'gastro_expert_db',


```
