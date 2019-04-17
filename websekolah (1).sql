-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Apr 2019 pada 17.37
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'query', 'query_me', 'kirishima699@gmail.com'),
(2, 'uname_admin', 'pass_admin', 'kirishima699@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_siswa`
--

CREATE TABLE `akun_siswa` (
  `id_siswa` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nis` varchar(4) NOT NULL COMMENT 'forign key.untuk data siswa',
  `auth_token` varchar(25) NOT NULL COMMENT 'saat register,dikirim ke email',
  `status` enum('verified','unverified') NOT NULL DEFAULT 'unverified',
  `avatar_user` varchar(250) NOT NULL DEFAULT 'user-def.svg',
  `role` enum('siswa','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_siswa`
--

INSERT INTO `akun_siswa` (`id_siswa`, `username`, `password`, `email`, `nis`, `auth_token`, `status`, `avatar_user`, `role`) VALUES
(6, 'yuandaH', 'Yuanda2', 'kirishima699@gmail.coma', '1111', 'KVvhH1y6RZBjyz017n1KmiM2O', 'verified', '5c99dc4ecd864.jpg', 'siswa'),
(7, 'yuanda2', 'Yuanda', 'kirishima699@gmail.com', '2222', 'KVvhH1y6RZBjyz017n1KmiMac', 'verified', '5c9f57e701329.png', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_dibuat`, `isi_berita`, `gambar_berita`) VALUES
(1, 'hut smk ke 2', '2019-03-19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(2, 'hut smk ke 3', '2019-03-27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(3, 'hut smk ke 4', '2019-03-01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(4, 'hut smk ke 4', '2019-03-19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(5, 'hut smk ke 5', '2019-03-27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(6, 'hut smk ke 6', '2019-03-01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(7, 'hut smk ke 7', '2019-03-19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(8, 'hut smk ke 8', '2019-03-27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(9, 'hut smk ke 9', '2019-03-01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(10, 'hut smk ke 10', '2019-03-19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(11, 'hut smk ke 11', '2019-03-27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png'),
(12, 'hut smk ke 12', '2019-03-01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus explicabo dolorem autem? Molestiae eaque ex sint. Dolore inventore dignissimos modi a praesentium non sequi quo temporibus repellendus, autem adipisci iure laudantium quia doloribus minus harum atque ab consectetur expedita!', 'berita.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` varchar(4) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `jurusan` enum('Mekatronika','Elektronika Industri','Rekayasa Perangkat Lunak','') NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `quotes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nisn`, `nama`, `kelas`, `jurusan`, `jenis_kelamin`, `agama`, `tanggal_lahir`, `tempat_lahir`, `quotes`) VALUES
('1111', '12345678', 'yuanda hanif hisyam', 'X', 'Rekayasa Perangkat Lunak', 'laki-laki', 'islam', '2002-06-21', 'purworejo', '	 lol i don\'t care anymore'),
('1233', '1233213123', 'yuanda', 'XI', 'Mekatronika', 'perempuan', 'budha', '0000-00-00', 'pakmi', ''),
('2222', '9876543', 'yuanda', 'XI', 'Rekayasa Perangkat Lunak', 'laki-laki', 'kristen', '1998-09-26', 'Bulan', 'press E to open inventory');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(250) NOT NULL,
  `tempat_event` varchar(255) NOT NULL,
  `tanggal_mulai_event` date NOT NULL,
  `tanggal_selesai_event` date NOT NULL,
  `deskripsi_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tempat_event`, `tanggal_mulai_event`, `tanggal_selesai_event`, `deskripsi_event`) VALUES
(1, 'PTS Genap', 'SMK N Tembarak', '2019-05-06', '2019-06-21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(2, 'Hut smk ke-2', 'SMK N Tembarak', '2012-05-13', '2019-04-30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(3, 'Hut smk ke-1', 'SMK N Tembarak', '2012-06-12', '2019-04-08', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(4, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '2019-04-01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(5, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '2018-12-03', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(6, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '2018-08-05', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis nihil assumenda, autem quis illum consectetur eius quia natus, saepe sit facere et similique totam illo, vel officiis quasi dolor.'),
(7, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '0000-00-00', 'hut smk yang tak pernah ada'),
(8, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-27', '0000-00-00', 'untuk lokasi di sebelah kana. pengen pake API google maps , tapi kapan kapan aja ya :v'),
(9, 'Hut smk ke-1', 'Asia Tenggara', '2012-12-12', '0000-00-00', 'maaf mas males ngisi :v'),
(10, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '0000-00-00', 'hut smk yang tak pernah ada'),
(11, 'Hut smk ke-1', 'Bumi bagian timur', '2012-12-12', '0000-00-00', 'hut smk yang tak pernah ada'),
(12, 'Hut smk ke-1', 'SMK N Tembarak', '2012-12-12', '0000-00-00', 'hut smk yang tak pernah ada'),
(13, 'PTS Genap', 'SMK N Tembarak', '2019-05-06', '2019-06-21', '[event spesial] PTS untuk kelas XI ,<br>\r\np.s untuk materi tidak akan diberitahukan sampai soal dibagikan'),
(14, 'UAS Genap', 'SMK N Tembarak', '2019-05-16', '2019-06-21', '[event super spesial] UAS untuk kelas XI ,<br>\r\np.s untuk materi tidak akan diberitahukan sampai soal dibagikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa_xi_1_rpl`
--

CREATE TABLE `nilai_siswa_xi_1_rpl` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `sem` enum('akhir','tengah') NOT NULL,
  `matematika` int(3) NOT NULL,
  `Bahasa indonesia` int(3) NOT NULL,
  `dasar desain grafis` int(3) NOT NULL,
  `pemerograman dasar` int(3) NOT NULL,
  `sistem komputer` int(3) NOT NULL,
  `pendidikan agama islam` int(3) NOT NULL,
  `bahasa jawa` int(3) NOT NULL,
  `seni budaya` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_siswa_xi_1_rpl`
--

INSERT INTO `nilai_siswa_xi_1_rpl` (`id`, `nis`, `sem`, `matematika`, `Bahasa indonesia`, `dasar desain grafis`, `pemerograman dasar`, `sistem komputer`, `pendidikan agama islam`, `bahasa jawa`, `seni budaya`) VALUES
(1, '2222', 'akhir', 43, 90, 90, 80, 80, 80, 78, 67),
(2, '2222', 'tengah', 36, 12, 67, 76, 15, 17, 11, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa_x_1_rpl`
--

CREATE TABLE `nilai_siswa_x_1_rpl` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `sem` enum('tengah','akhir') NOT NULL,
  `matematika` int(3) NOT NULL,
  `Bahasa indonesia` int(3) NOT NULL,
  `dasar desain grafis` int(3) NOT NULL,
  `pemerograman dasar` int(3) NOT NULL,
  `sistem komputer` int(3) NOT NULL,
  `pendidikan agama islam` int(3) NOT NULL,
  `bahasa jawa` int(3) NOT NULL,
  `seni budaya` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_siswa_x_1_rpl`
--

INSERT INTO `nilai_siswa_x_1_rpl` (`id`, `nis`, `sem`, `matematika`, `Bahasa indonesia`, `dasar desain grafis`, `pemerograman dasar`, `sistem komputer`, `pendidikan agama islam`, `bahasa jawa`, `seni budaya`) VALUES
(1, '1111', 'tengah', 123, 321, 333, 20, 32, 80, 40, 20),
(2, '1111', 'akhir', 123, 231, 444, 222, 30, 90, 92, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa_x_2_rpl`
--

CREATE TABLE `nilai_siswa_x_2_rpl` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `sem` enum('akhir','tengah') NOT NULL,
  `matematika` int(3) NOT NULL,
  `Bahasa indonesia` int(3) NOT NULL,
  `dasar desain grafis` int(3) NOT NULL,
  `pemerograman dasar` int(3) NOT NULL,
  `sistem komputer` int(3) NOT NULL,
  `pendidikan agama islam` int(3) NOT NULL,
  `bahasa jawa` int(3) NOT NULL,
  `seni budaya` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_siswa_x_2_rpl`
--

INSERT INTO `nilai_siswa_x_2_rpl` (`id`, `nis`, `sem`, `matematika`, `Bahasa indonesia`, `dasar desain grafis`, `pemerograman dasar`, `sistem komputer`, `pendidikan agama islam`, `bahasa jawa`, `seni budaya`) VALUES
(1, '2222', 'akhir', 50, 48, 22, 88, 98, 80, 90, 30),
(2, '2222', 'tengah', 43, 22, 33, 45, 54, 90, 92, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_siswa`
--
ALTER TABLE `akun_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `nilai_siswa_xi_1_rpl`
--
ALTER TABLE `nilai_siswa_xi_1_rpl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `nilai_siswa_x_1_rpl`
--
ALTER TABLE `nilai_siswa_x_1_rpl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `nilai_siswa_x_2_rpl`
--
ALTER TABLE `nilai_siswa_x_2_rpl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akun_siswa`
--
ALTER TABLE `akun_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa_xi_1_rpl`
--
ALTER TABLE `nilai_siswa_xi_1_rpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa_x_1_rpl`
--
ALTER TABLE `nilai_siswa_x_1_rpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa_x_2_rpl`
--
ALTER TABLE `nilai_siswa_x_2_rpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun_siswa`
--
ALTER TABLE `akun_siswa`
  ADD CONSTRAINT `akun_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_siswa_xi_1_rpl`
--
ALTER TABLE `nilai_siswa_xi_1_rpl`
  ADD CONSTRAINT `nilai_siswa_xi_1_rpl_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_siswa_x_1_rpl`
--
ALTER TABLE `nilai_siswa_x_1_rpl`
  ADD CONSTRAINT `nilai_siswa_x_1_rpl_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_siswa_x_2_rpl`
--
ALTER TABLE `nilai_siswa_x_2_rpl`
  ADD CONSTRAINT `nilai_siswa_x_2_rpl_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
