-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2024 pada 06.53
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
-- Database: `finances`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_type` enum('Asset','Liability','Equity','Revenue','Expense') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_name`, `account_type`) VALUES
(1, 'Cash', 'Asset'),
(2, 'Accounts Receivable', 'Asset'),
(3, 'Accounts Payable', 'Liability'),
(4, 'Capital', 'Equity'),
(5, 'Sales Revenue', 'Revenue'),
(6, 'Cost of Goods Sold', 'Expense');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `total` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `date`, `description`, `total`) VALUES
(1, '2024-11-01', 'Sales Transaction for Client A', 5000.00),
(2, '2024-11-05', 'Purchase of Inventory', 2000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_categories`
--

CREATE TABLE `transaction_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_categories`
--

INSERT INTO `transaction_categories` (`category_id`, `category_name`) VALUES
(1, 'Sales'),
(2, 'Purchases'),
(3, 'Operating Expenses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_category_links`
--

CREATE TABLE `transaction_category_links` (
  `transaction_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_category_links`
--

INSERT INTO `transaction_category_links` (`transaction_id`, `category_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transaction_detail_id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `type` enum('Debit','Credit') NOT NULL,
  `amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`transaction_detail_id`, `transaction_id`, `account_id`, `type`, `amount`) VALUES
(1, 1, 5, 'Credit', 5000.00),
(2, 1, 1, 'Debit', 5000.00),
(3, 2, 1, 'Debit', 2000.00),
(4, 2, 3, 'Credit', 2000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `transaction_categories`
--
ALTER TABLE `transaction_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `transaction_category_links`
--
ALTER TABLE `transaction_category_links`
  ADD PRIMARY KEY (`transaction_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`transaction_detail_id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaction_categories`
--
ALTER TABLE `transaction_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `transaction_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaction_category_links`
--
ALTER TABLE `transaction_category_links`
  ADD CONSTRAINT `transaction_category_links_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`transaction_id`),
  ADD CONSTRAINT `transaction_category_links_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `transaction_categories` (`category_id`);

--
-- Ketidakleluasaan untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`transaction_id`),
  ADD CONSTRAINT `transaction_details_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
