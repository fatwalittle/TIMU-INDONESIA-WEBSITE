-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2024 pada 17.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_customer`
--

CREATE TABLE `main_customer` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `logo_customer` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `main_customer`
--

INSERT INTO `main_customer` (`id`, `nama_customer`, `logo_customer`, `created_at`, `updated_at`) VALUES
(2, 'PT SHELL INDONESIA', '1734363118_shell.png', '2024-11-11 17:48:40', '2024-12-16 15:31:58'),
(3, 'PT ABB SAKTI INDUSTRI', '1734363224_ABB__1_-removebg-preview.png', '2024-11-11 17:48:59', '2024-12-16 15:33:44'),
(4, 'PT DHISA MANUNGGAL KARYA', '1734367765_Thumbnail_22_0000000-removebg-preview.png', '2024-11-11 17:49:25', '2024-12-16 16:49:25'),
(5, 'PT SRI REJEKI ISMAN', '1734363401_SRIL-removebg-preview.png', '2024-11-11 17:49:49', '2024-12-16 15:36:41'),
(6, 'PT INOCYCLE TEHNOLOGY GROUP', '1734363469_logo-inocycle-green_top.png', '2024-11-11 20:10:17', '2024-12-16 15:37:49'),
(7, 'PT HILON INDONESIA', '1734363779_images__1___1___1_-removebg-preview.png', '2024-12-16 22:39:17', '2024-12-16 15:42:59'),
(8, 'PT EXPEDITORS INDONESIA', '1734363840_images__2_-removebg-preview.png', '2024-12-16 22:44:00', '2024-12-16 15:44:00'),
(9, 'PT KUENE NAGEL INDONESIA', '1734367866_png-transparent-kuehne-nagel-third-party-logistics-management-freight-forwarding-agency-anchor-logo-company-trademark-service-thumbnail-removebg-preview.png', '2024-12-16 22:44:44', '2024-12-16 16:51:06'),
(10, 'PT DAMCO INDONESIA', '1734367702_damco-removebg-preview.png', '2024-12-16 22:46:54', '2024-12-16 16:48:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `scope`
--

CREATE TABLE `scope` (
  `id` int(11) NOT NULL,
  `jenis_scope` varchar(255) NOT NULL,
  `penjelasan_scope` text NOT NULL,
  `gambar_scope` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `scope`
--

INSERT INTO `scope` (`id`, `jenis_scope`, `penjelasan_scope`, `gambar_scope`, `created_at`, `updated_at`) VALUES
(2, 'Freight Forwarder and Customs Brokerage', 'As a Freighter, we providesfreight forwarding services toworldwide with selectedagents integrated in global\r\nnetwork.', '1734255185_freepik__upload__37412.jpeg', '2024-11-11 17:47:45', '2024-12-15 09:33:05'),
(3, 'Customs Brokerage', 'Not only we have to handle thecargos with care and secure, we alsoneed to improvise and keep ourselvesup to date by obtaining sufficient\r\nknowledge on document procedure aswell as customs systems andregulations in Indonesia, e.g.\r\nElectronics Data InterchangeSystems, a computerized to expeditecustoms clearance.', '1734255567_freepik__upload__94357.jpeg', '2024-12-15 16:35:13', '2024-12-15 09:39:27'),
(4, 'Land Transport', 'To support one-stop customer service,\r\nwe operate trailer trucks that meet thestandards of Road Transport Pillarstandard (HSSE, JourneyManagement, Vehicle Management,\r\nDriver Management).', '1734255467_freepik__upload__41776.jpeg', '2024-12-15 16:37:47', '2024-12-15 09:37:47'),
(5, 'Warehousing and Distribution', 'For the trusts in carrying out theprocess of delivery of goods throughTIMU INDONESIA, we havesimplify your company. We servesyou with our capabilities, facilitiesand experiences in warehousemanagement, including InventoryControl Management, VendorManaged Inventory, Consolidationand Distribution.', '1734255699_freepik__upload__68569.jpeg', '2024-12-15 16:41:39', '2024-12-15 09:41:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date_created`) VALUES
(1, 'admin', 'timu5758', '2024-11-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `main_customer`
--
ALTER TABLE `main_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `main_customer`
--
ALTER TABLE `main_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `scope`
--
ALTER TABLE `scope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
