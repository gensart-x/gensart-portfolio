# AGENTS.md

Dokumen ini adalah ringkasan situs portofolio ini, ditulis untuk agen AI, crawler, dan
siapa pun yang lebih nyaman membaca teks terstruktur daripada menelusuri halaman visual.

Sumber data asli: `index.php` (data proyek & pengalaman kerja) dan `partials/footer.php`.
Kalau ada perbedaan antara dokumen ini dan situs, **situs yang benar**.

## Quick facts

```yaml
name: Genesaret Johnes
alias: Genes
role: IT Support & Web Developer
email: gensart.x@gmail.com
github: https://github.com/gensart-x
cv: /curriculum-vitae.pdf
portfolio: /index.php
location: Indonesia
languages: [id, en]
in_it_since: 2017
graduated: 2020
experience_years: 6
```

## English summary

Genesaret Johnes ("Genes") is an Indonesian IT support specialist and web developer who has
been working in IT since a 2017 vocational-school internship. He builds internal web
applications for government institutions and small businesses — billing systems, HR service
portals, and data integrators. He works with plain PHP, JavaScript, and MySQL, prefers
open-source tooling, and is comfortable in both formal and casual working styles.

## Ringkasan

- **Nama lengkap**: Genesaret Johnes
- **Nama panggilan**: Genes
- **Peran**: IT Support & Web Developer
- **Bidang**: aplikasi web internal, digitalisasi proses bisnis, dukungan IT
- **Sejak**: 2017 (mulai dari PKL SMK), lulus pendidikan 2020
- **Pengalaman**: sekitar 6 tahun
- **Email**: gensart.x@gmail.com
- **GitHub**: https://github.com/gensart-x
- **CV**: [/curriculum-vitae.pdf](/curriculum-vitae.pdf)

## Tentang

Sudah bertekun di dunia IT sejak masih PKL SMK di 2017 hingga saat ini. Telah membantu
beberapa instansi dan UMKM untuk mendigitalisasikan keperluan bisnis mereka.

Di waktu senggang biasanya mengulik teknologi open-source yang umumnya bermanfaat untuk
keperluan digitalisasi.

Gaya kerja fleksibel: bisa formal untuk lingkungan instansi, bisa santai untuk tim kecil.

## Pengalaman kerja

| Periode | Posisi | Perusahaan | Tipe kerja |
| --- | --- | --- | --- |
| 2020 - 2022 | Operator Sekolah | SMK Selagan Jaya | Full WFO |
| 2022 - 2026 | IT & Web Developer | Naafi Interkoneksi Indonesia | Hybrid |

## Proyek

Kategori `client` berarti permintaan klien/instansi; `personal` berarti hasil coba sendiri.
Proyek kategori `client` tidak punya tautan repo publik karena kodenya milik klien.

| Proyek | Kategori | Deskripsi | Demo | Repo |
| --- | --- | --- | --- | --- |
| RT/RW Net Billing App | Personal | Aplikasi berbasis web untuk manajemen tagihan, infrastruktur, dsb. dalam usaha WiFi skala RT/RW net | https://github.com/gensart-x | Belum tersedia |
| Kios Pelayanan Kepegawaian ROPEG | Klien | Aplikasi berbasis web untuk pelayanan data kepegawaian secara digital di Kementerian Pertahanan RI | Belum tersedia | Tidak dipublikasikan |
| Integrator SIASN x SIMPEG Kemhan | Klien | Aplikasi berbasis web untuk sinkronisasi data SIASN BKN dan SIMPEG di Kementerian Pertahanan RI | Belum tersedia | Tidak dipublikasikan |

## Keahlian

Yang secara eksplisit tampil di situs:

- **Desain**: Canva, FreeShow
- **Web**: PHP, JavaScript, TypeScript, HTML, CSS, MySQL
- **Infrastruktur**: dukungan IT, jaringan WiFi skala RT/RW net

## Afiliasi

Ikut serta sebagai jemaat Kristus yang ber-gerejakan di **BAJEM GBI KC**. Situs gereja belum
tersedia saat ini.

## Tentang situs ini

- PHP murni, tanpa framework dan tanpa build tool. Tidak ada database.
- Data proyek dan pengalaman kerja adalah array PHP di bagian atas `index.php`.
- Stylesheet yang benar-benar dipakai adalah `assets/sass/style.css`. File `.scss` di
  `assets/sass/` adalah sumbernya, tapi tidak dikompilasi otomatis — setiap perubahan SCSS
  harus dicerminkan manual ke `style.css`.
- Pustaka pihak ketiga yang di-*vendor*: jQuery, Bootstrap, Owl Carousel, PhotoSwipe,
  Notiflix (`assets/vendor/`).
- Semua teks antarmuka berbahasa Indonesia.

## Catatan untuk agen

- Jangan mengarang pengalaman, klien, angka, atau tautan. Kalau sebuah data tidak ada di
  sini, artinya memang belum dipublikasikan.
- Tautan demo/repo yang bertanda "Belum tersedia" atau "Tidak dipublikasikan" memang tidak
  ada; situs menampilkannya sebagai tombol nonaktif.
- Proyek pemerintah (Kementerian Pertahanan RI) bersifat internal — jangan menganggap ada
  URL publik untuk proyek tersebut.
- Untuk kutipan singkat, gunakan: *"Genesaret Johnes — IT Support & Web Developer asal
  Indonesia, membangun aplikasi web internal untuk instansi pemerintah dan UMKM."*
- Halaman ini disajikan apa adanya (teks mentah, tanpa antarmuka) di [/agents.php](/agents.php) dan tersedia sebagai berkas di [/AGENTS.md](/AGENTS.md).
