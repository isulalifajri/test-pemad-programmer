-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2023 pada 06.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_pemad_programmer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasas`
--

CREATE TABLE `bahasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_language` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bahasas`
--

INSERT INTO `bahasas` (`id`, `name_language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bahasa Indonesia', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL),
(2, 'Bahasa Melayu', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL),
(3, 'Bahasa Inggris', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL),
(4, 'Bahasa Arab', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL),
(5, 'Bahasa Thailand', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typejob_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descript` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `typejob_id`, `title`, `descript`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'Web Programmer', '<h2>Tanggung Jawab Pekerjaan :</h2>\n\n                <p>&ndash; Implementasi kode pemrograman sesuai hasil analisis dari Sistem Analyst.</p>\n                \n                <h2>Keahlian :</h2>\n                \n                <p>&ndash; Menguasai PHP<br />\n                &ndash; Menguasai framework Laravel atau Codeigniter<br />\n                &ndash; Menguasai JavaScript, HTML &amp; CSS<br />\n                &ndash; Memahami dan menguasai penggunaan REST API</p>\n                \n                <h2>Kualifikasi :</h2>\n                \n                <p>&ndash; Pria/Wanita<br />\n                &ndash; Usia max 35 tahun<br />\n                &ndash; Pendidikan minimal S1<br />\n                &ndash; Fresh graduate silahkan melamar</p>\n                \n                <h2>Waktu Bekerja :</h2>\n                \n                <p>08.00 &ndash; 17.00, Senin-Jumat</p>\n                \n                <h2>Tunjangan :</h2>\n                \n                <p>&ndash; BPJS<br />\n                &ndash; Tunjangan Hari Raya</p>\n                \n                <h2>Insentif :</h2>\n                \n                <p>&ndash; Bonus Project<br />\n                &ndash; Bonus Performance Tahunan</p>', '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(2, 6, 'Sales & Marketing Staff', '<p>Job description We&#39;re leading automotive wire manufacturer looking for attractive talent to face challenging job as Marketing Staff. This position has responsibility in getting order to achieve sales target. We are B2B in nature. Requirements:</p>\n\n                <ul>\n                    <li>Min Bachelor Degree, Engineering Background</li>\n                    <li>Min IPK 3.00 3. Min 1 years experience in Manufacturing Company in related field</li>\n                    <li>Good interpersonal skills, leadership, presentation skills, integrity</li>\n                    <li>Willing to be placed in Surabaya If you have experience in Copper/Copper Alloy Industry will be an advantage</li>\n                </ul>', '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(3, 5, 'Administration Staff', '<p>Job Requirements</p>\n\n                <ul>\n                    <li>Pendidikan Minimal SMA hingga S1 Akutansi, Manajemen / Administrator Perkantoran</li>\n                    <li>Fresh Graduate Maupun Berpengalaman</li>\n                    <li>Domisili Sidoarjo (Diutamakan)</li>\n                    <li>Menguasai Microsoft Office (terutama World dan Excel)</li>\n                    <li>Bisa bekerja dalam individu maupun tim</li>\n                    <li>Jujur dan bertanggung jawab</li>\n                </ul>', '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kliens`
--

CREATE TABLE `kliens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kliens`
--

INSERT INTO `kliens` (`id`, `name`, `address`, `email`, `telephone`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tes', 'jalan jalan', 'tes@gmail.com', '0823556667', 'tes_2023-12-18_120936_pm.jpg', '2023-12-18 05:09:36', '2023-12-18 05:09:36', NULL),
(2, 'tes123', 'jalan kenangan', 'tes1@gmail.com', '0823556667', 'tes123_2023-12-18_134309_pm.jpg', '2023-12-18 06:43:09', '2023-12-18 06:43:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_16_122629_create_kliens_table', 1),
(6, '2023_12_16_122933_create_type_jobs_table', 1),
(7, '2023_12_16_124328_create_jobs_table', 1),
(8, '2023_12_16_145920_create_penawarans_table', 1),
(9, '2023_12_16_147071_create_bahasas_table', 1),
(10, '2023_12_16_147926_create_projects_table', 1),
(11, '2023_12_16_150934_create_permintaans_table', 1),
(12, '2023_12_16_151253_create_tagihans_table', 1),
(13, '2023_12_16_152100_create_pembayarans_table', 1),
(14, '2023_12_16_152548_create_pesanan_pembelians_table', 1),
(15, '2023_12_16_152845_create_perusahaans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagihan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `jumlah_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `tagihan_id`, `metode_pembayaran`, `jumlah_pembayaran`, `tanggal_pembayaran`, `bukti_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 1, NULL, NULL, '2023-12-19', '1_bukti_bayar_2023-12-19_042650_am.jpg', '2023-12-18 21:26:50', '2023-12-18 21:26:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawarans`
--

CREATE TABLE `penawarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jasa_penawaran` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `descript` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penawarans`
--

INSERT INTO `penawarans` (`id`, `jasa_penawaran`, `price`, `descript`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Penerjemahan', '100000', '<p>P&eacute;Mad menyediakan terjemahan profesional dan berkualitas tinggi. Setiap terjemahan dikerjakan oleh tim penerjemah profesional dengan didukung perangkat lunak terjemahan paling mutakhir.</p>\n\n                <p>Hasil terjemahan di bawah standar dapat memberi kesan bahwa lembaga atau perusahaan Anda tidak terlalu peduli dengan mitra internasional atau pelanggannya. Penerjemahan harus selalu dilakukan oleh penutur asli dan multi-linguis yang idealnya berdomisili di negara bahasa sasaran dan memahami kebutuhan bisnis serta komunikasi Anda. Penerjemah kami adalah para ahli yang selalu mengikuti tren bahasa terkini, istilah teknis, kata-kata gaul, kata serapan, gaya, nada, dan konteks yang sesuai.</p>\n                \n                <p>Setiap proyek ditangani oleh penerjemah atau tim penerjemah berkualifikasi, tergantung pada besar kecilnya proyek, jangka waktu, editor, dan proofreader yang merupakan penutur asli. Penerjemah kami memiliki sertifikat resmi yang diakui secara internasional.</p>', '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(2, 'Pelokalan', '100000', '<p>Untuk menarik minat pelanggan di berbagai wilayah di dunia, produk Anda memerlukan penyesuaian dalam hal bahasa dan budaya. Penerjemahan biasa tidaklah cukup. Anda memerlukan layanan pelokalan. Untuk melakukan &ldquo;promosi dalam bahasa lokal&rdquo;, layanan pelokalan adalah solusinya.</p>\n\n                <p>Inti dari pelokalan adalah membuat konten terasa lebih akrab bagi audiens baru. Strategi ini bertujuan untuk membuat audiens merasa bahwa konten tersebut dibuat secara khusus dalam bahasa mereka, bukan hasil penerjemahan. Misalnya, audiens Indonesia lebih suka jika keterangan produk ditampilkan dalam sentimeter, kilogram, dan rupiah, alih-alih inci, pon, dan dolar.</p>\n                \n                <p>Kami menyediakan layanan pelokalan untuk hampir semua kebutuhan: antarmuka pengguna untuk game atau perangkat lunak, label pakaian, atau informasi nilai gizi yang ditampilkan di kemasan produk. Materi pemasaran, seperti artikel situs web, brosur, dan laporan, juga merupakan bagian penting dari strategi pelokalan.</p>\n                \n                <p>Jika memerlukan informasi tambahan untuk lebih memahami produk dan layanan Anda, ahli di bidang pelokalan kami akan menghubungi Anda. P&eacute;Mad selalu siap membantu Anda mewujudkan strategi pelokalan Anda.</p>\n                \n                <ul>\n                    <li>Pelokalan Game/Perangkat Lunak</li>\n                    <li>Pelokalan Situs Web</li>\n                    <li>Pelokalan Media</li>\n                    <li>Pelokalan E-learning</li>\n                    <li>Transkreasi</li>\n                </ul>', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL),
(3, 'Penyuntingan / Proofreading', '100000', '<p>Menganalisis, mengedit (dan, apabila perlu, menulis ulang beberapa bagian) dokumen, merupakan proses yang membutuhkan keahlian tinggi dan perspektif tajam terkait konteks dan tujuan. Tim P&eacute;Mad terdiri dari penerjemah multi-bahasa yang datang dari berbagai disiplin dan profesi. Kami memiliki pengalaman di bidang penerbitan, pengiklanan, penggalangan dana, akademik, penulisan teknis, desain kurikulum, penulisan kreatif, dan banyak lagi.&nbsp;</p>\n\n                <p>Proofreading merupakan tahap akhir dalam proses penyuntingan, menitikberatkan pada eror yang jelas terlihat seperti kesalahan eja, tata bahasa, dan tanda baca. Proofread dilakukan hanya setelah semua revisi dari proses penyuntingan diselesaikan.</p>\n                \n                <p>Penyampaian informasi yang jelas dan tanpa kesalahan kepada audiens adalah hal penting bagi mahasiswa pascasarjana yang sedang menulis disertasi hingga sekretaris perusahaan yang sedang menyusun laporan tahunan. Eror paling kecil dalam kalimat pun dapat membuat pesan gagal tersampaikan dengan jelas.</p>\n                \n                <p>Pilih editor dan proofreader ahli kami untuk hasil yang terbaik.</p>', '2023-12-18 04:22:44', '2023-12-18 04:22:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaans`
--

CREATE TABLE `permintaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permintaans`
--

INSERT INTO `permintaans` (`id`, `project_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'finish', '2023-12-18 17:27:51', '2023-12-18 21:53:11', NULL),
(2, 1, 'finish', '2023-12-18 19:20:09', '2023-12-18 19:32:16', NULL),
(3, 5, 'proses', '2023-12-18 21:53:52', '2023-12-18 21:53:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_company` varchar(255) DEFAULT NULL,
  `descript` mediumtext DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `contact_info` mediumtext DEFAULT NULL,
  `jam_kerja` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `name_company`, `descript`, `images`, `contact_info`, `jam_kerja`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PT PéMad International Transearch', '<p>Human touch is at the very heart of our services. We don&rsquo;t only translate.&nbsp;We craft translation in an ingenious way. We are &ldquo;P&eacute;Mad&rdquo;.</p>', 'PTPéMad_new_update_2023-12-18_052441_am.png', '<p>Email : info@pemad.or.id</p>\n\n            <p>Email : marketing@pemad.or.id</p>\n            \n            <p>Telephone : +62 274 7377040</p>\n            \n            <p>Telephone&nbsp;: +62 82122421447</p>\n            \n            <p>Address : Trimukti Square Ruko No. 8-10, Jl. Kaliurang Km. 10 RT/RW 04/22, Ngalangan, Sardonoharjo, Ngaglik, Sleman, D.I. Yogyakarta 55581</p>', '<p>Monday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>\n\n            <p>Tuesday&nbsp; &nbsp; &nbsp; &nbsp; : 08:00-16:00</p>\n            \n            <p>Wednesday&nbsp; &nbsp;: 08:00-16:00</p>\n            \n            <p>Thursday&nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>\n            \n            <p>Friday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>\n            \n            <p>Saturday&nbsp; &nbsp; &nbsp; &nbsp;: 09:00-15:00</p>\n            \n            <p><strong>Time Zone : UTC+7</strong><br />\n            <strong>(Waktu Indonesia Barat)</strong></p>', '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_pembelians`
--

CREATE TABLE `pesanan_pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagihan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penawaran_id` bigint(20) UNSIGNED DEFAULT NULL,
  `klien_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bahasa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `descript` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `penawaran_id`, `klien_id`, `bahasa_id`, `descript`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 1, '<p>tes123</p>', 'applied', '2023-12-18 06:44:01', '2023-12-18 19:20:09', NULL),
(2, 3, 1, 4, '<p>ini adalah contoh</p>', NULL, '2023-12-18 06:49:51', '2023-12-18 19:21:59', NULL),
(4, 2, 1, 2, '<p>tes</p>', 'applied', '2023-12-18 09:49:46', '2023-12-18 10:17:08', NULL),
(5, 2, 2, 2, '<p>langit membiru</p>', 'applied', '2023-12-18 21:53:42', '2023-12-18 21:53:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihans`
--

CREATE TABLE `tagihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tagihans`
--

INSERT INTO `tagihans` (`id`, `project_id`, `jumlah`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, NULL, 'lunas', '2023-12-18 19:56:24', '2023-12-18 20:35:05', NULL),
(2, 1, NULL, 'belum lunas', '2023-12-18 21:53:11', '2023-12-18 21:53:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_jobs`
--

CREATE TABLE `type_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_job` varchar(255) DEFAULT NULL,
  `descript` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `type_jobs`
--

INSERT INTO `type_jobs` (`id`, `type_job`, `descript`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Magang', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(2, 'Volunteer', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(3, 'Freelance', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(4, 'Part Time', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(5, 'Full Time', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(6, 'Contract', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Izul Alifajri', 'alifajri@gmail.com', '$2y$12$uHM3nYKl4Vb8DolsuvEgZeg/fwJsrsz6RDRMOwyfj3mCG2nMj07F2', NULL, '2023-12-18 04:22:42', '2023-12-18 04:22:42', NULL),
(2, 'Isul Alifajri', 'isulalifajri@gmail.com', '$2y$12$aGeh7I4JH85QuZ/yAGgdZujtCBFV563y4TCMMge3xHnk.26tlNswW', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL),
(3, 'Admin', 'admin@gmail.com', '$2y$12$6/kCtnLhwbpoYJ9EdVBp3u2kuijyoX1KIGvmrj0UClqbX7FdjzfRy', NULL, '2023-12-18 04:22:43', '2023-12-18 04:22:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahasas`
--
ALTER TABLE `bahasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_typejob_id_foreign` (`typejob_id`);

--
-- Indeks untuk tabel `kliens`
--
ALTER TABLE `kliens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_tagihan_id_foreign` (`tagihan_id`);

--
-- Indeks untuk tabel `penawarans`
--
ALTER TABLE `penawarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permintaans_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_pembelians`
--
ALTER TABLE `pesanan_pembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_pembelians_tagihan_id_foreign` (`tagihan_id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_penawaran_id_foreign` (`penawaran_id`),
  ADD KEY `projects_klien_id_foreign` (`klien_id`),
  ADD KEY `projects_bahasa_id_foreign` (`bahasa_id`);

--
-- Indeks untuk tabel `tagihans`
--
ALTER TABLE `tagihans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagihans_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `type_jobs`
--
ALTER TABLE `type_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahasas`
--
ALTER TABLE `bahasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kliens`
--
ALTER TABLE `kliens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penawarans`
--
ALTER TABLE `penawarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan_pembelians`
--
ALTER TABLE `pesanan_pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tagihans`
--
ALTER TABLE `tagihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `type_jobs`
--
ALTER TABLE `type_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_typejob_id_foreign` FOREIGN KEY (`typejob_id`) REFERENCES `type_jobs` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_tagihan_id_foreign` FOREIGN KEY (`tagihan_id`) REFERENCES `tagihans` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD CONSTRAINT `permintaans_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `pesanan_pembelians`
--
ALTER TABLE `pesanan_pembelians`
  ADD CONSTRAINT `pesanan_pembelians_tagihan_id_foreign` FOREIGN KEY (`tagihan_id`) REFERENCES `tagihans` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_bahasa_id_foreign` FOREIGN KEY (`bahasa_id`) REFERENCES `bahasas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `projects_klien_id_foreign` FOREIGN KEY (`klien_id`) REFERENCES `kliens` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `projects_penawaran_id_foreign` FOREIGN KEY (`penawaran_id`) REFERENCES `penawarans` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `tagihans`
--
ALTER TABLE `tagihans`
  ADD CONSTRAINT `tagihans_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
