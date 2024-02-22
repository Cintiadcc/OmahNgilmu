-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 04:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omahngilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `kode_acara` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `tgl_acara` date NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `acara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`kode_acara`, `id_user`, `nama_acara`, `penyelenggara`, `tgl_acara`, `deskripsi`, `acara`) VALUES
(1, 1, 'Lomba 4 Tangkai ', 'Universitas Sebelas Maret Sukarta', '2022-05-29', 'LOMBA 4 TANGKAI-UNS\r\nSabtu, 4 juni 2022- AUDITORIUM UNS\r\nSYARAT\r\n1. KATEGORI POP\r\n2. KATEGORI DANGDUT\r\n3. KATEGORI KERONCONG\r\n4. KATEGORI SERIOSA\r\n \r\nSYARAT DAN KETENTUAN\r\n1. Mahasiswa aktif UNS\r\n2. U', 'IMG-20220528-WA0009.jpg'),
(2, 1, 'GAYATAMA gelar karya dan prestasi mahasiswa', 'Universitas Negeri Surabaya', '2022-05-29', 'GAYATAMA\r\nPETUNJUK PELAKSANAAN DAN INFORMASI DAPAT DIAKSES MELALUI : http//unesa.me/GAYATAMA2022', 'IMG-20220529-WA0006 (1).jpg'),
(3, 1, 'Video Konten', 'D3 TI PSDKU UNS', '0000-00-00', 'Lomba Video konten \r\nTema: Peningkatan Ekonomi Kreatif melalui potensi daerah skala nasional.\r\n', 'Poster Inotek Video Konten - Extended.jpg'),
(4, 1, 'DATABASE KEWIRAUSAHAAN', 'Fakultas Pertanian Universitas Trunojoyo Madura', '2022-06-10', 'Pendaftaran dimulai pada tanggal 16-26 Juni 2022\r\n-Link pendaftaran dapat dikases melalui \r\nbit.ly/DatabaseKewirausahaan-2022', 'IMG-20220618-WA0009.jpg'),
(6, 1, 'CONNECT \"Economic and Network Creative Talk Show\" ', 'Universitas Islam Negeri Sunan Ampel Surabaya', '2021-08-07', 'CONNECT\r\nEconomic and Network Creative Talk Show\r\n\r\nLink pendaftaran dapat diakses melalui\r\nhttp://bit.ly/RegistrationCONNECT', 'IMG-20220618-WA0020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `name`, `username`, `email`, `password`) VALUES
(3, 'Abi R', 'abirrwn', 'abi.rahmawan01@student.uns.ac.id', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Julia Elinda', 'juliaelinda', 'juliaelinda00@student.uns.ac.id', '04305e8ef1c15dbf249cc0c99ce86107'),
(5, 'Eliya Dwi Maulidda', 'eliya18', 'maulidda18@student.uns.ac.id', 'ac08b7debd0ab3ebe699c70c08c97930'),
(6, 'Ais Fitria ', 'aisfitria', 'aisfitria@student.uns.ac.id', '162b44b9b7ac0a6fa2feba2d7029e06a'),
(7, 'Cintia Dwi C', 'cintiaa', 'dwicintiadc@student.uns.ac.id', '0a834d514e44387811619f0b0b0d15e5'),
(8, 'Abi R', 'abi1', 'abi.rahmawan01@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `kode_game` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `panduan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `kode_infografis` int(11) NOT NULL,
  `kode_konten` int(10) NOT NULL,
  `judul_infografis` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `karya` varchar(100) NOT NULL,
  `infografis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infografis`
--

INSERT INTO `infografis` (`kode_infografis`, `kode_konten`, `judul_infografis`, `tgl_upload`, `deskripsi`, `kategori`, `karya`, `infografis`) VALUES
(1, 1, 'Inovasi Mengatasi Anemia Pada Remaja Putri', '2022-06-21', 'Infografis ini menggambarkan tentang kasus anemia pada anak remaja yang semakin meningkat. Terdapat inovasi cara mengatasi anemia pada remaja putri beserta penanganan anemia pada remaja putri..', 'Kesehatan', 'Kementrian Kesehatan Repubulik Indonesia', '24e1706ce5528af6cc9192c3d327933e.jpg'),
(2, 1, 'Menghindari Hoax - Mengubah \"Pandemi menjadi Endemi\"', '2022-06-21', 'Infografis ini berisi tentang fakta dan hoax tentang kasus covid -19', 'Kesehatan', 'diskominfoemc.id', '792aa4be2cb3d82a287b3b72ae6dd30d.jpg'),
(3, 1, 'ALABAMA \"Enam Langkah Bebas Asma\"', '2022-06-21', 'Infografis ini menjelaskan enam langkah cara-cara bebas asma.', 'Kesehatan', 'Flavia D,Nimas A,Rainissya', '71987bb9f1209530d7712877605fe122.jpg'),
(4, 1, 'Media Sosial Sebagai Wadah Berkekspresi Bebas Terbatas', '2022-06-21', 'Infografis ini berisi tentang hal-hal yang boleh kita lakukan dan tidak boleh kita lakukan ketika bermain sosmed.', 'Teknologi', 'Atmajaya', 'db147465e0c7fa634d365047e801aa48.jpg'),
(5, 1, 'Mengenal Skoliosis dan Bagaimana cara mengatasinya?', '2022-06-21', 'Infografis ini berisi penjelasan tentang skoliosis dan cara mengatasi skoliosis.', 'Kesehatan', 'Karlina Puspa Ningtyas', '221b293249cc13312a5c67ffb0d844c1.jpg'),
(6, 1, 'Cyberbullying using Role Playing Game', '2022-06-21', 'Infografis ini berisi tentang penejalasan cyberbullying dan result data  kasus bullying.', 'Kesehatan', 'Universitas Teknologi Mara (Malaka)', '1ff6f506185bf61a78c8dd309d7d6c1f.jpg'),
(7, 1, '5 Hal yang Harus Diwaspadai dari Pinjol Ilegal', '2022-06-21', 'Infografis ini berisi tentang 5 hal yang harus di waspadai dari Pijol Ilegal', 'Ekonomi', 'Fajrian', 'WhatsApp Image 2022-06-21 at 23.41.49.jpeg'),
(8, 1, 'Negara - Negara Paling Dibenci di Dunia', '2022-06-21', 'Infografis ini berisi tentang  negara-negara yang paling dibenci di dunia beserta alasannya.', 'Politik', 'Arie Pratama', 'WhatsApp Image 2022-06-21 at 23.42.30.jpeg'),
(9, 1, 'Tips Series Living Less Plastic', '2022-06-21', 'Infografis ini berisi tentang tips dan trik mengurangi plastik dalam kehidupan sehari-hari', 'Lingkungan', 'Femina Indonesia', 'WhatsApp Image 2022-06-21 at 23.46.12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `kode_konten` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `pilihan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`kode_konten`, `id_user`, `pilihan`) VALUES
(1, 5, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id_quote` int(10) NOT NULL,
  `nama_quoter` varchar(50) NOT NULL,
  `isi_quote` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id_quote`, `nama_quoter`, `isi_quote`) VALUES
(2, 'Elon musk', 'Lorem Ipssum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `password`) VALUES
(7, 'Rahmawan', 'ar21', 'abi.rahmawan01@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Julia Elinda', 'juliaelinda', 'juliaelinda00@student.uns.ac.id', '04305e8ef1c15dbf249cc0c99ce86107'),
(10, 'Ais Fitria ', 'aisfitria', 'aisfitria@student.uns.ac.id', '162b44b9b7ac0a6fa2feba2d7029e06a'),
(11, 'Eliya Dwi Maulidda', 'eliya', 'maulidda18@student.uns.ac.id', 'dd5262f51b3389fd392ed65d0facf4e1'),
(12, 'Cintia Dwi C', 'cintiaa', 'dwicintiadc@student.uns.ac.id', '0a834d514e44387811619f0b0b0d15e5'),
(13, 'Julia Elinda', 'julia1', 'julia01@gmail.com', '8ec70a26c1ffbba5e35a269286e8cea4');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `kode_video` int(11) NOT NULL,
  `kode_konten` int(10) NOT NULL,
  `judul_video` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `karya` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`kode_video`, `kode_konten`, `judul_video`, `tgl_upload`, `deskripsi`, `kategori`, `karya`, `video`) VALUES
(2, 1, 'Belajar Berhitung untuk Anak Balita dengan Kartun Mobil', '2022-06-21', 'Belajar Berhitung menjadi asik dengan Kartun Mobil', 'Pendidikan', 'LumaLumi', 'https://youtube.com/embed/KTIAwAAzFkI'),
(3, 1, 'Inilah Alasan Mengapa Merokok Berbahaya?', '2022-06-22', 'Bagaimana pendapat kalian tentang rokok?', 'Kesehatan', 'Neuron', 'https://youtube.com/embed/96ZPwmtjpJQ'),
(4, 1, 'SIKLUS PEREDARAN DARAH MANUSIA', '2022-06-22', 'Video ini berisi pemaparan siklus peredaran darah manusia. semoga dapat bermanfaat bagi peserta didik untuk menjadi Generasi Smart Indonesia.', 'Pendidikan', 'Mr.Klik', 'https://youtube.com/embed/E_Pt1XxWP1U'),
(7, 1, 'Tips untuk memulai semester baru!👩🏼‍🏫', '2022-06-22', 'Yuk ikuti Tips untuk memulai semester baru!👩🏼‍🏫', 'Pendidikan', 'Notes mangka', 'https://youtube.com/embed/6ABXBXpjYh8'),
(8, 1, 'Kemajuan Teknologi Makin Pesat, Kita Mesti Gimana?', '2022-06-22', 'Seiring dengan kemajuan teknologi ini, pasti akan menimbulkan efek negatif dan positif bagi kita semua. Bagaimana kita harus memposisikan diri terhadap perkembangan teknologi? Tonton video kita dulu yuk.', 'Teknologi', 'Hujan Tanda Tanya', 'https://youtube.com/embed/81lgOrIA3C8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`kode_acara`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`kode_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`kode_infografis`),
  ADD KEY `kode_konten` (`kode_konten`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`kode_konten`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id_quote`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`kode_video`),
  ADD KEY `kode_konten` (`kode_konten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `kode_acara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `kode_game` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `kode_infografis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `kode_konten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id_quote` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `kode_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infografis`
--
ALTER TABLE `infografis`
  ADD CONSTRAINT `infografis_ibfk_1` FOREIGN KEY (`kode_konten`) REFERENCES `konten` (`kode_konten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`kode_konten`) REFERENCES `konten` (`kode_konten`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
