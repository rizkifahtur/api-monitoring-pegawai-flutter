-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 03:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monitoring_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_job`
--

CREATE TABLE `tb_job` (
  `id_job` varchar(10) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_job`
--

INSERT INTO `tb_job` (`id_job`, `job_name`, `salary`) VALUES
('ad', 'Admin', 0),
('fd', 'Flutter Developer', 7000000),
('njs', 'NodeJS Developer', 5000000),
('op', 'Operator', 4000000),
('pd', 'PHP Developer', 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_task`
--

CREATE TABLE `tb_task` (
  `id_task` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `description` text NOT NULL,
  `progress` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_task`
--

INSERT INTO `tb_task` (`id_task`, `task_name`, `description`, `progress`, `id_user`) VALUES
(2, 'Home Screen', 'buat home screen yang ada drawernya\nkriteria :\n- menu 1\n- menu 2\n- menu 3', 100, 4),
(3, 'Session Manager', 'buat shared preference did profile', 85, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `id_job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `nohp`, `pass`, `role`, `address`, `id_job`) VALUES
(1, 'Admin', '0891', '202cb962ac59075b964b07152d234b70', 'Admin', 'Jl. Admin', 'ad'),
(3, 'Trisna', '0892', '202cb962ac59075b964b07152d234b70', 'Operator', 'South Blue', 'op'),
(4, 'Indra', '0893', '202cb962ac59075b964b07152d234b70', 'Pegawai', 'North Blue', 'fd'),
(6, 'Ucup Sangar', '0895', '202cb962ac59075b964b07152d234b70', 'Operator', 'Just. apartment adanya', 'op'),
(8, 'Yosan', '0896', '202cb962ac59075b964b07152d234b70', 'Pegawai', 'Be an wwelah', 'pd'),
(10, 'One', '111', '202cb962ac59075b964b07152d234b70', 'Operator', 'Alamat 111', 'op');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_job`
--
ALTER TABLE `tb_job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
