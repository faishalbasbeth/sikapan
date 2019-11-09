-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 01:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(22) NOT NULL,
  `instansi` varchar(110) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `instansi`, `alamat`) VALUES
(38, 'aku', 'jl aku'),
(39, 'iga', 'hj');

-- --------------------------------------------------------

--
-- Table structure for table `s_keluar`
--

CREATE TABLE `s_keluar` (
  `id_s_keluar` int(11) NOT NULL,
  `tgl_s` date NOT NULL,
  `tujuan_s` varchar(110) NOT NULL,
  `no_s` int(22) NOT NULL,
  `perihal` text NOT NULL,
  `staf` enum('SEKRETARIS','KABID. PENCEGAHAN & KESIAPSIAGAAN','KABID. KEDARURATAN & LOGISTIK','KABID. REHABILITASI & REKONSTRUKSI') NOT NULL,
  `penerima_s` varchar(22) NOT NULL,
  `status` varchar(22) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_keluar`
--

INSERT INTO `s_keluar` (`id_s_keluar`, `tgl_s`, `tujuan_s`, `no_s`, `perihal`, `staf`, `penerima_s`, `status`, `foto`) VALUES
(8, '2018-11-19', 'Kepala Dinas Komunikasi dan Informatika Kabupaten Jember', 2516, 'Usulan Petugas untuk pengolahan E-lapor kabupaten Jember', 'SEKRETARIS', 'Ilham Purnama', 'Telah Diarsipkan', 0x3738392e6a7067),
(9, '2018-08-07', 'Ibu Bupati Jember', 1638, 'Permohonan Ijin Pengiriman Personil Penanganan Darurat Bencana Provinsi NTB', 'SEKRETARIS', 'Ilham Purnama', 'Telah Diarsipkan', 0x3738392e6a7067),
(10, '2018-11-16', 'Badan Kepegawaian dan Pengembangan SDM Kabupaten Jember', 2505, 'Usulan Pembuatan Kartu Pegawai', 'SEKRETARIS', 'Ilham Purnama', 'Telah Diarsipkan', 0x3738392e6a7067),
(11, '2018-10-18', 'DEKAN FISIP', 2405, 'Ijin Kuliah/Magang', 'SEKRETARIS', 'Ilham Purnama', 'Telah Diarsipkan', 0x3738392e6a7067),
(12, '2018-10-23', 'Badan Kepegawaian dan Pengembangan SDM Kabupaten Jember', 2272, 'Data PNS', 'SEKRETARIS', 'Ilham Purnama', 'Telah Diarsipkan', 0x3738392e6a7067),
(13, '2018-11-21', 'DANDIM 0824 JEMBER', 2057, 'Permohonan Pembinaan Kedisiplinan', 'KABID. KEDARURATAN & LOGISTIK', 'Ocha', 'Telah Diarsipkan', 0x3738392e6a7067),
(14, '2018-10-29', 'Direktur PDAM ', 2323, 'Permohonan MOU Pengadaan Air Bersih', 'KABID. KEDARURATAN & LOGISTIK', 'Ocha', 'Telah Diarsipkan', 0x3738392e6a7067),
(15, '2018-10-17', 'Bupati Jember', 2191, 'Permohonan Penetapan Tanggap Darurat Bencana Longsor', 'KABID. KEDARURATAN & LOGISTIK', 'Ocha', 'Telah Diarsipkan', 0x3738392e6a7067),
(17, '2018-10-24', 'Kepala Pelaksana BPBD Provinsi JATIM ', 2245, 'Permohonan Ujian Sertifikasi', 'KABID. KEDARURATAN & LOGISTIK', 'Ocha', 'Telah Diarsipkan', 0x3738392e6a7067),
(18, '2018-11-19', 'Kepala Dinas Perumahan Rakyat ', 2518, 'Permohonan verifikasi gambar perencanaan', 'KABID. PENCEGAHAN & KESIAPSIAGAAN', 'ichang', 'Telah Diarsipkan', 0x3738392e6a7067),
(19, '2018-10-18', 'Kepala Pelaksana BPBD Provinsi JATIM ', 2200, 'Surat Pengantar', 'KABID. PENCEGAHAN & KESIAPSIAGAAN', 'ichang', 'Telah Diarsipkan', 0x3738392e6a7067),
(20, '2018-05-04', 'Ibu Bupati Jember', 968, 'Permohonan Ijin Menghadiri Undangan', 'KABID. PENCEGAHAN & KESIAPSIAGAAN', 'ichang', 'Telah Diarsipkan', 0x3738392e6a7067),
(21, '2018-04-30', 'Kepala BPBD PROVINSI JATIM', 930, 'Pendaftaran Desa Tanggung Bencana', 'KABID. PENCEGAHAN & KESIAPSIAGAAN', 'ichang', 'Telah Diarsipkan', 0x3738392e6a7067),
(22, '2019-03-14', '', 0, '', '', '', '', ''),
(23, '2019-03-06', '', 0, '', '', '', '', ''),
(24, '2019-03-22', '', 0, '', '', '', '', ''),
(25, '2019-03-06', '', 0, '', '', '', '', ''),
(26, '2019-03-22', '', 0, '', '', '', '', ''),
(27, '2017-03-19', '', 0, '', '', '', '', ''),
(29, '2016-03-19', '', 0, '', '', '', '', ''),
(30, '2016-03-19', '', 0, '', '', '', '', ''),
(31, '2019-04-16', 'Kepala Pelaksana BPBD Provinsi JATIM ', 125, 'Pengiriman Air', 'SEKRETARIS', 'jjgjh', 'Belum Diarsipkan', 0x73696b6170616e312e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `s_masuk`
--

CREATE TABLE `s_masuk` (
  `id_s_masuk` int(22) NOT NULL,
  `surat_dari` varchar(22) NOT NULL,
  `tgl_terima` date NOT NULL,
  `no_agenda` varchar(22) NOT NULL,
  `perihal` text NOT NULL,
  `disposisi` enum('SEKRETARIS','KABID. PENCEGAHAN & KESIAPSIAGAAN','KABID. KEDARURATAN & LOGISTIK','KABID. REHABILITASI & REKONSTRUKSI') NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(22) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_masuk`
--

INSERT INTO `s_masuk` (`id_s_masuk`, `surat_dari`, `tgl_terima`, `no_agenda`, `perihal`, `disposisi`, `ket`, `status`, `foto`) VALUES
(251, 'aku', '2018-12-12', '1', 'a', 'SEKRETARIS', 'a', 'Belum Diarsipkan', 0x436170747572652e504e47),
(252, 'aku', '2018-12-04', '1', 'a', 'SEKRETARIS', 'a', 'Belum Diarsipkan', 0x3738392e6a7067),
(253, 'aku', '2019-03-26', '67', 'jk', 'SEKRETARIS', 'jk', 'Belum Diarsipkan', 0x6661697368616c626173626574685f3135323431303130313138342d70726f702e706466),
(254, '', '2017-03-19', '', '', '', '', '', ''),
(255, '', '2017-03-19', '', '', '', '', '', ''),
(256, '', '2018-03-19', '', '', '', '', '', ''),
(257, '', '2018-03-19', '', '', '', '', '', ''),
(258, '', '2018-03-13', '', '', '', '', '', ''),
(259, '', '2018-03-13', '', '', '', '', '', ''),
(260, '', '2018-03-13', '', '', '', '', '', ''),
(261, '', '2018-03-13', '', '', '', '', '', ''),
(262, '', '2016-03-14', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_tahun`
--

CREATE TABLE `s_tahun` (
  `id_s_tahun` int(22) NOT NULL,
  `tahun` int(22) NOT NULL,
  `t_s_masuk` int(22) NOT NULL,
  `t_s_keluar` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_tahun`
--

INSERT INTO `s_tahun` (`id_s_tahun`, `tahun`, `t_s_masuk`, `t_s_keluar`) VALUES
(1, 2010, 207, 189),
(2, 2011, 198, 178),
(3, 2012, 198, 165),
(4, 2013, 297, 210),
(5, 2014, 134, 100),
(7, 2015, 100, 130),
(12, 2016, 178, 187),
(44, 2017, 290, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `hak_akses` enum('AGENDARIS','SEKRETARIS','KABID. PENCEGAHAN & KESIAPSIAGAAN','KABID. KEDARURATAN & LOGISTIK','KABID. REHABILITASI & REKONSTRUKSI') NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `hak_akses`, `level`, `password`) VALUES
(1, 'agendaris', 'AGENDARIS', 1, 'agendaris'),
(2, 'admin_S', 'SEKRETARIS', 2, 'admin_S'),
(3, 'admin_PK', 'KABID. PENCEGAHAN & KESIAPSIAGAAN', 3, 'admin_PK'),
(4, 'admin_KL', 'KABID. KEDARURATAN & LOGISTIK', 4, 'admin_KL'),
(5, 'admin_RR', 'KABID. REHABILITASI & REKONSTRUKSI', 5, 'admin_RR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `s_keluar`
--
ALTER TABLE `s_keluar`
  ADD PRIMARY KEY (`id_s_keluar`);

--
-- Indexes for table `s_masuk`
--
ALTER TABLE `s_masuk`
  ADD PRIMARY KEY (`id_s_masuk`);

--
-- Indexes for table `s_tahun`
--
ALTER TABLE `s_tahun`
  ADD PRIMARY KEY (`id_s_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `s_keluar`
--
ALTER TABLE `s_keluar`
  MODIFY `id_s_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_masuk`
--
ALTER TABLE `s_masuk`
  MODIFY `id_s_masuk` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `s_tahun`
--
ALTER TABLE `s_tahun`
  MODIFY `id_s_tahun` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
