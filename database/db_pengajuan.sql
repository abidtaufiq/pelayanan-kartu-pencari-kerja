-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 11:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengajuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` varchar(256) NOT NULL,
  `id_perusahaan_details` varchar(256) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `jumlah_rekrut` int(30) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `batas_akhir` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan_details`, `judul`, `deskripsi`, `posisi`, `jumlah_rekrut`, `salary`, `batas_akhir`, `created_at`) VALUES
('66946b44ab37c0675d6e543afcc22256', 'd509166e5f7601075b91b2de69f13471', 'Pusri', 'Admin', 'Admin Perusahaan', 100, '100000000', '2022-05-31', '2022-05-31'),
('a0fcae9ddf1f8ef6c0b679409f96253e', 'e64405bfb4d637b3902f0806a494e801', 'Penerimaan Pegawai Kontrak', 'Penerimaan Pegawai Kontrak tahun 2022', 'Operator Tambang', 100, '4000000000', '2022-06-30', '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan_detail`
--

CREATE TABLE `perusahaan_detail` (
  `id_perusahaan_detail` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `jenis_perusahaan` varchar(50) DEFAULT NULL,
  `npwp_perusahaan` varchar(30) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nomor_telepon` varchar(50) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `id_status_verifikasi` int(11) NOT NULL,
  `id_status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan_detail`
--

INSERT INTO `perusahaan_detail` (`id_perusahaan_detail`, `nama_perusahaan`, `jenis_perusahaan`, `npwp_perusahaan`, `provinsi`, `kota`, `alamat`, `kode_pos`, `deskripsi`, `nomor_telepon`, `date_registered`, `logo`, `id_status_verifikasi`, `id_status_aktif`) VALUES
('0fce2d618d88fcb962a30f6ca370b7c7', 'PT Pusri', 'Persero', '910920192', 'Sumatera Selatan', 'Select City', 'CV g', '30661', 'ahsuas', '17287182', '2022-06-14', '5d1e614a00d8ad72b9eeadd176d3cc30_logo.jpg', 2, 2),
('7ec0c82dacd303494c008521f8a3c04a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, 1, 1),
('a69bb59aa6b7a811881eb71061d44a73', 'PT Pusri ', 'Persero', '910920192', 'Sumatera Selatan', 'Select City', 'Jl.Belanti', '30661', 'bukit', '082176350289', '2022-06-14', 'e87fae3ea452cd87592d545ff2649879_logo.jpg', 2, 2),
('d509166e5f7601075b91b2de69f13471', 'PT Pusri ', 'Persero', '910920192', 'Sumatera Selatan', 'test', 'Jl. Sekip', '30661', 'Bagus', '+62812781728', '2022-05-25', 'f9c37483c1c51ecb622b3b6d4975c6e4_logo1.png', 2, 1),
('e64405bfb4d637b3902f0806a494e801', 'PT Bukit Asam', 'Persero', '910920192', 'Sumatera Selatan', 'Lahat', 'Jl.Belanti', '30661', 'Mantabb', '082176350289', '2022-06-01', '23d3a842aafc9d203ba7cd95affe4cad_logo.png', 2, 1),
('f86ce82e5fbbc90231459ead48d2532a', 'PT.Garuda', 'Persero', '910920228', 'Jawa Tengah', 'Pati', 'Jl. Pperjuangan', '59188', 'Perusahaan bergerak dibidang kuliner makanan', '59188', '2022-08-18', 'e43ae16f243c18fe6039cbd5940f16c3_logo4.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_aktif`
--

CREATE TABLE `status_aktif` (
  `id_status_aktif` int(11) NOT NULL,
  `status_aktif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_aktif`
--

INSERT INTO `status_aktif` (`id_status_aktif`, `status_aktif`) VALUES
(1, 'Belum Aktif'),
(2, 'Telah Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_perpanjangan`
--

CREATE TABLE `status_perpanjangan` (
  `id_status_perpanjangan` int(11) NOT NULL,
  `status_perpanjangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_perpanjangan`
--

INSERT INTO `status_perpanjangan` (`id_status_perpanjangan`, `status_perpanjangan`) VALUES
(1, 'Belum Membutuhkan Perpanjang'),
(2, 'Membutuhkan Perpanjangan');

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi`
--

CREATE TABLE `status_verifikasi` (
  `id_status_verifikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi`
--

INSERT INTO `status_verifikasi` (`id_status_verifikasi`, `status_verifikasi`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Sudah Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user_level` varchar(256) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_user_level`, `id_user_detail`) VALUES
('0fce2d618d88fcb962a30f6ca370b7c7', 'pt_pupuk', '123', 'pupuk@gmail.com', '2', '0fce2d618d88fcb962a30f6ca370b7c7'),
('3cb2dea54efd01a9283b9c38c2616696', 'Ahmad Khoirul', 'ahmad', 'ahmad@gmail.com', '3', '3cb2dea54efd01a9283b9c38c2616696'),
('7ec0c82dacd303494c008521f8a3c04a', 'pama', '123', 'pama@gmail.com', '2', '7ec0c82dacd303494c008521f8a3c04a'),
('8afecfbc3731b9a6c601ae70da706442', 'pegawai', 'pegawai', 'taufiiqul.hakim@binus.ac.id', '3', '8afecfbc3731b9a6c601ae70da706442'),
('a69bb59aa6b7a811881eb71061d44a73', 'bukit', '123', 'bukit@gmail.com', '2', 'a69bb59aa6b7a811881eb71061d44a73'),
('d509166e5f7601075b91b2de69f13471', 'perusahaan', 'perusahaan', 'taufiiqulhakim23@gmail.com', '2', 'd509166e5f7601075b91b2de69f13471'),
('e2c929f4edd991d6371a719e8c72c3ec', 'ika', '123', 'ika@gmail.com', '3', 'e2c929f4edd991d6371a719e8c72c3ec'),
('e64405bfb4d637b3902f0806a494e801', 'bukit_asam', 'bukit_asam', 'bukit_asam@gmail.com', '2', 'e64405bfb4d637b3902f0806a494e801'),
('ef6e295b553be6143f5179fd1955515f', 'admin', 'admin123', 'admin@admin.com', '1', 'ef6e295b553be6143f5179fd1955515f'),
('ef7c895ae10cbcca951ba4afbd9e6241', 'bagus', 'bagus', 'bagus@gamil.com', '3', 'ef7c895ae10cbcca951ba4afbd9e6241'),
('f86ce82e5fbbc90231459ead48d2532a', 'garuda', 'garuda', 'garuda@gmail.com', '2', 'f86ce82e5fbbc90231459ead48d2532a');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `no_pendaftaran` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_perkawinan` varchar(30) DEFAULT NULL,
  `tinggi_badan` int(12) DEFAULT NULL,
  `berat_badan` int(12) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `pengalaman_kerja` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto_saya` varchar(256) DEFAULT NULL,
  `foto_ktp` varchar(256) DEFAULT NULL,
  `foto_ijazah` varchar(256) DEFAULT NULL,
  `foto_akte` varchar(255) DEFAULT NULL,
  `foto_surat_pengalaman_kerja` varchar(255) DEFAULT NULL,
  `foto_transkrip_nilai` varchar(255) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `id_status_verifikasi` int(12) NOT NULL,
  `id_status_perpanjangan` int(12) NOT NULL,
  `id_status_aktif` int(11) NOT NULL,
  `mulai_berlaku` date DEFAULT NULL,
  `akhir_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `no_pendaftaran`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `tinggi_badan`, `berat_badan`, `pendidikan_terakhir`, `jurusan`, `pengalaman_kerja`, `no_hp`, `provinsi`, `kota`, `kode_pos`, `alamat`, `foto_saya`, `foto_ktp`, `foto_ijazah`, `foto_akte`, `foto_surat_pengalaman_kerja`, `foto_transkrip_nilai`, `date_registered`, `id_status_verifikasi`, `id_status_perpanjangan`, `id_status_aktif`, `mulai_berlaku`, `akhir_berlaku`) VALUES
('3cb2dea54efd01a9283b9c38c2616696', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17', 1, 1, 1, NULL, NULL),
('8afecfbc3731b9a6c601ae70da706442', '24918943', '061827182871812', 'Taufiiqulhakim', 'Palembang', '2001-03-23', 'L', 'Islam', 'Kawin', 170, 59, 'SD', 'Teknik komputer', 'CV Digital Creative', '+62812781728', 'Sumatera Selatan', 'test', '30661', 'Jl. Sekip', '187f8c10a8c6254954af4765049046bd_saya.png', '187f8c10a8c6254954af4765049046bd_ktp.png', '187f8c10a8c6254954af4765049046bd_ijazah.png', '187f8c10a8c6254954af4765049046bd_akte.png', '8e429fe6ab8e2228618fd27cefdaf1c2_foto_surat_pengalaman_kerja.png', '187f8c10a8c6254954af4765049046bd_foto_transkrip_nilai.png', '2022-07-07', 1, 1, 1, NULL, NULL),
('e2c929f4edd991d6371a719e8c72c3ec', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', 1, 1, 1, NULL, NULL),
('ef6e295b553be6143f5179fd1955515f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18', 1, 1, 1, NULL, NULL),
('ef7c895ae10cbcca951ba4afbd9e6241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-18', 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Perusahaan'),
(3, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `perusahaan_detail`
--
ALTER TABLE `perusahaan_detail`
  ADD PRIMARY KEY (`id_perusahaan_detail`);

--
-- Indexes for table `status_aktif`
--
ALTER TABLE `status_aktif`
  ADD PRIMARY KEY (`id_status_aktif`);

--
-- Indexes for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  ADD PRIMARY KEY (`id_status_perpanjangan`);

--
-- Indexes for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  ADD PRIMARY KEY (`id_status_verifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_aktif`
--
ALTER TABLE `status_aktif`
  MODIFY `id_status_aktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  MODIFY `id_status_perpanjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  MODIFY `id_status_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
