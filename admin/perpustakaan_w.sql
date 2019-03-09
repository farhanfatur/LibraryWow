-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 03:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_w`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah`) VALUES
('BR001', 'Bolpoin', 2),
('BR002', 'Kipas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(8) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `jenis_buku` varchar(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `jml_halaman` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `jenis_buku`, `stok`, `tahun_terbit`, `jml_halaman`) VALUES
('B001', 'Negeri 5', 'Kang', 'Gramedia', 'Agama', 3, 2018, 318),
('B002', 'The Maze Runner', 'Farhan', 'Gramedia', 'Dystopia', 5, 2018, 200),
('B003', '123', '123', '123', '123', 123, 123, 123),
('B004', 'dsa', 'dsa', 'dsa', 'dsa', 123, 0, 123);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(8) NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `id_peminjaman` varchar(8) NOT NULL,
  `id_pengunjung` varchar(8) NOT NULL,
  `id_petugas` varchar(8) NOT NULL,
  `jumlah_pengunjung` int(11) NOT NULL,
  `jumlah_peminjam` int(11) NOT NULL,
  `total_pengurus` int(11) NOT NULL,
  `id_barang` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemgembalian`
--

CREATE TABLE `pemgembalian` (
  `id_pengembalian` varchar(8) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `id_pengunjung` varchar(8) NOT NULL,
  `id_petugas` varchar(8) NOT NULL,
  `id_peminjaman` varchar(8) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(8) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `id_pengunjung` varchar(8) NOT NULL,
  `nama_pengunjung` varchar(25) NOT NULL,
  `id_petugas` varchar(8) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `id_buku`, `judul`, `id_pengunjung`, `nama_pengunjung`, `id_petugas`, `nama_petugas`) VALUES
('PN001', '2019-02-06', '2019-02-10', 'B002', 'The Maze Runner', 'PG004', 'Wahid', 'P003', 'maulana'),
('PN002', '2019-02-06', '2019-02-09', 'B001', 'Negeri 5', 'PG003', 'galuh', 'P002', 'yasa');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` varchar(8) NOT NULL,
  `nama_pengunjung` varchar(25) NOT NULL,
  `kelas` varchar(7) DEFAULT NULL,
  `jenis_pengunjung` enum('guru','staf','siswa') NOT NULL,
  `keperluan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama_pengunjung`, `kelas`, `jenis_pengunjung`, `keperluan`, `tgl`) VALUES
('PG001', 'Wahyu Ilman', 'X TKR  ', 'siswa', 'gfj', '2019-02-06'),
('PG003', 'galuh', 'XII TKJ', 'siswa', 'pinjam buku', '0000-00-00'),
('PG004', 'Wahid', '', 'guru', 'kjashd', '2019-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(8) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jabatan` enum('kruhp','admin') NOT NULL,
  `kelas` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `email`, `password`, `alamat`, `jabatan`, `kelas`) VALUES
('P002', 'yasa', 'yasa2@gmail.com', 'yasa123', 'kalipare', 'kruhp', 'X RPl 2'),
('P004', 'sekar', 'sekar@asd.asd', 'sekar123', 'Kediri', 'admin', 'Kediri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pemgembalian`
--
ALTER TABLE `pemgembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
