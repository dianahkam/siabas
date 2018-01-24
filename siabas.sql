-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 02:43 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siabas`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `masuk` time NOT NULL,
  `pulang` time NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nis` int(6) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) DEFAULT '0',
  `tempat_lahir` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `asal_skl` varchar(255) NOT NULL,
  `alamat_skl` text NOT NULL,
  `tahun_masuk` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nis`, `nisn`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `agama`, `asal_skl`, `alamat_skl`, `tahun_masuk`) VALUES
(1, 1, '0001', 'joko', 0, 'pasuruan', '0000-00-00', 'gentong', '08923763232', 'ang@yahoo.com', 'islam', 'sma', 'gentong', 2007);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `pegawai` int(11) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `tahun_ajar` year(4) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `tahun_ajar` year(4) NOT NULL,
  `jam_mulai` time NOT NULL,
  `kelas` int(11) NOT NULL,
  `jam_selesai` time NOT NULL,
  `hari` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `singkatan` varchar(10) NOT NULL,
  `biaya` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `singkatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `jenis` int(2) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip_nik` varchar(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL DEFAULT '0',
  `agama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pend_akhir` int(1) NOT NULL,
  `nama_skl` text NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `status_pgw` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Tani');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `jenis_bayar` int(11) NOT NULL,
  `tgl_deadline` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `tahun_ajar` year(4) NOT NULL,
  `jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `biodata`, `tingkat`, `kelas`, `tahun_ajar`, `jurusan`) VALUES
(1, 1, 1, 1, 2018, 1),
(2, 1, 1, 1, 2017, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa_keluar`
--

CREATE TABLE `siswa_keluar` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status_tabungan` int(1) NOT NULL DEFAULT '0',
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`id`, `nama`) VALUES
(1, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `tgl_deadline` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `id` int(11) NOT NULL,
  `biodata` int(11) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `pendidikan` int(2) NOT NULL,
  `pekerjaan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`id`, `biodata`, `hubungan`, `nama`, `alamat`, `no_hp`, `pendidikan`, `pekerjaan`) VALUES
(1, 1, '1. Ayah Kandung', 'Jono', 'aaa', '0000000000', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai` (`pegawai`),
  ADD KEY `tingkat` (`tingkat`,`kelas`,`jurusan`,`mapel`),
  ADD KEY `fk_kelas_guru` (`kelas`),
  ADD KEY `fk_jurusan_guru` (`jurusan`),
  ADD KEY `fk_mapel_guru` (`mapel`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel` (`mapel`,`tingkat`,`kelas`),
  ADD KEY `mapel_2` (`mapel`,`tingkat`,`kelas`),
  ADD KEY `fk_tingkat_jadwal` (`tingkat`),
  ADD KEY `fk_kelas_jadwal` (`kelas`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa` (`siswa`,`mapel`),
  ADD KEY `fk_mapel_nilai` (`mapel`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip_nik` (`nip_nik`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`),
  ADD KEY `jenis_bayar` (`jenis_bayar`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`,`tingkat`,`kelas`,`jurusan`),
  ADD KEY `fk_tingkat_siswa` (`tingkat`),
  ADD KEY `fk_kelas_siswa` (`kelas`),
  ADD KEY `fk_jurusan_siswa` (`jurusan`);

--
-- Indexes for table `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru` (`guru`,`siswa`),
  ADD KEY `fk_siswa_tugas` (`siswa`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata` (`biodata`),
  ADD KEY `pekerjaan` (`pekerjaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wali_murid`
--
ALTER TABLE `wali_murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_biodata_absensi` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_jurusan_guru` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `fk_kelas_guru` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `fk_mapel_guru` FOREIGN KEY (`mapel`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `fk_pegawai_guru` FOREIGN KEY (`pegawai`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `fk_tingkat_guru` FOREIGN KEY (`tingkat`) REFERENCES `tingkat` (`id`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_kelas_jadwal` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `fk_mapel_jadwal` FOREIGN KEY (`mapel`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `fk_tingkat_jadwal` FOREIGN KEY (`tingkat`) REFERENCES `tingkat` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_mapel_nilai` FOREIGN KEY (`mapel`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `fk_siswa_nilai` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_jabatan_pegawai` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_biodata_bayar` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`),
  ADD CONSTRAINT `fk_jenis_bayar_bayar` FOREIGN KEY (`jenis_bayar`) REFERENCES `jenis_pembayaran` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_biodata_siswa` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`),
  ADD CONSTRAINT `fk_jurusan_siswa` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `fk_kelas_siswa` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `fk_tingkat_siswa` FOREIGN KEY (`tingkat`) REFERENCES `tingkat` (`id`);

--
-- Constraints for table `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  ADD CONSTRAINT `fk_biodata_siswa_keluar` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `fk_biodata_tabungan` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_guru_tugas` FOREIGN KEY (`guru`) REFERENCES `guru` (`id`),
  ADD CONSTRAINT `fk_siswa_tugas` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD CONSTRAINT `fk_biodata_walimurid` FOREIGN KEY (`biodata`) REFERENCES `biodata` (`id`),
  ADD CONSTRAINT `fk_pekerjaan_walimurid` FOREIGN KEY (`pekerjaan`) REFERENCES `pekerjaan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
