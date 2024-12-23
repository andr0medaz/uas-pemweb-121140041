-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`username`, `password`, `email`, `gender`) VALUES
('adira', '$2y$10$UQMh9Rh4xZd1FrHZTuCeCefT8wIjjj9WC306sx/wNYh4t6zjOUweC', '', 'laki-laki'),
('adira3787', '$2y$10$enILa2TI4C49H.T.bnbQ5OdOx5LN5LCwwTf6OIiAuPj3EER86SLlm', '', 'laki-laki'),
('andromeda', '$2y$10$Ta3PCiQqMW6bHRmvfR2D4eZZm', '', 'laki-laki'),
('chiko', '$2y$10$OEu04C1FzlNKF9H96DagxOBJH', '', 'laki-laki'),
('cicilia', '$2y$10$TGb0IyZKHbkDIDNbL61Dv.Sma.nFQ2BLoTNHL.ZYHF4dri0JrXuXm', '', 'laki-laki'),
('godzila', '$2y$10$i.0W/uba6TNzseJofh0dCeU2O4btUw8OdN6Xrz4DfQuCOX2.4GzUm', '', 'laki-laki'),
('gregorius', '$2y$10$HaYFHPApAj9Va1SXiZn3mez.b./8aLFwc4kCfbn2hhK0n2aoeLYha', '', 'laki-laki'),
('halooo', '$2y$10$u036TdvAdTwM6OjZE4VPoOo..xeuMX5JvnLUVtnBqfesQIIQ0tt5u', '', 'laki-laki'),
('initest123', '$2y$10$JMI4kaL2ErLJsVhNzhrWO.0.JyOwiOLN4ORTm2MEfEk3ttE6uUWdS', '', 'laki-laki'),
('ironheart123', '$2y$10$QHsqGCotscaEdMJSvFVW..gApY/6L0k.fk6NmH9.KBG6V0oKePhCy', 'binta.andromeda@gmail.com', 'laki-laki'),
('test123', '$2y$10$sals6qKW54cHb5u396CilerQZc0jQHL/pFiDC3z1mYlrhpxBbpOte', '', 'laki-laki'),
('test12345', '$2y$10$dwGLNq5Xdw0Rbhr3MEW9i.eBaSOdo8TPhxx8p1Ot/bJqLDCnAvE3q', '', 'laki-laki'),
('test555', '$2y$10$TN95STAnVlMB6HEB9/nAyeJoo1PfN9T6zKqVufcMKI.mFbddBqjuq', '', 'laki-laki'),
('test5555', '$2y$10$/wtr8FwI88..Ig9KJZ.saed/V/sJ7dGE62Vdes6P3PwywVWLWzPDa', '', 'laki-laki'),
('wingman501', '$2y$10$2UFvhtM8fmZuGNfCsaSubO1Wsfbv..V1jvEsashGzAFv6ggZm2pOa', 'binta.andromeda@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
