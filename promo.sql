-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 01.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `pass`, `level`, `nama`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idberita` int(10) UNSIGNED NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` mediumtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungikami`
--

CREATE TABLE `hubungikami` (
  `idhubungikami` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hubungikami`
--

INSERT INTO `hubungikami` (`idhubungikami`, `nama`, `email`, `message`, `tanggal`) VALUES
(14, 'Andri Atna Syah Pratama', 'andriatna108@gmail.com', 'coba', '22-11-2021 15:46:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `idpaket` int(10) UNSIGNED NOT NULL,
  `namapaket` varchar(100) DEFAULT NULL,
  `detailpaket` longtext DEFAULT NULL,
  `hargatermasuk` longtext DEFAULT NULL,
  `hargatidaktermasuk` longtext DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`idpaket`, `namapaket`, `detailpaket`, `hargatermasuk`, `hargatidaktermasuk`, `catatan`, `image`) VALUES
(2, 'HAJI PLUS', '                    <table style=\"margin: 1.25rem 0px; max-width: 100%; height: auto; color: rgb(41, 41, 41); font-family: Roboto, Arial, sans-serif;\"><tbody><tr><td><b style=\"font-weight: bold;\">Paket Haji</b></td><td> : Plus 25-30 Hari</td></tr><tr><td><b style=\"font-weight: bold;\">Berangkat</b></td><td> : 2022 dan 2023</td></tr><tr><td><b style=\"font-weight: bold;\">Biaya Haji<br>Setara➔</b></td><td> : $ 17.500<br> : Rp 250.250.000</td></tr><tr><td><b style=\"font-weight: bold;\">Hotel Makkah ⭐5</b></td><td> : Makkah Towers</td></tr><tr><td><b style=\"font-weight: bold;\">Hotel Madinah ⭐5</b></td><td> : Nozol Munawarah</td></tr><tr><td><b style=\"font-weight: bold;\">Aziziyah</b></td><td> : Hotel Transit</td></tr><tr><td><b style=\"font-weight: bold;\">Arafah</b></td><td> : Tenda Ac</td></tr><tr><td><b style=\"font-weight: bold;\">Jeddah</b></td><td> : City Tour</td></tr><tr><td><b style=\"font-weight: bold;\">Pesawat</b></td><td> : Saudia / Garuda</td></tr><tr><td><b style=\"font-weight: bold;\">Kuota</b></td><td> : <span style=\"color: red;\">Available</span></td></tr></tbody></table>\r\n                                          \r\n                    ', '                    <ul style=\"margin: 1.25rem 0px; padding-left: 3rem; color: rgb(41, 41, 41); font-family: Roboto, Arial, sans-serif; text-align: justify;\"><li>Tiket Pesawat Kelas Ekonomi</li><li>Asuransi</li><li>Visa Haji</li><li>Bus Ac Executive</li><li>Akomodasi Hotel Sesuai Paket / Setaraf Paket</li><li>Arafah Tenda Ac</li><li>Aziziyah Hotel Transit</li><li>Makan 3X Sehari: Pagi, Siang dan Malam</li><li>Tour / Ziarah Sesuai Program Umroh</li><li>Tour Guide Pembimbing Ibadah Selama di Tanah Suci</li><li>Tour Leader / Guide Saat Berangkat dan Pulang</li><li>Handling Bandara dan Airpotax</li><li><b style=\"font-weight: bold;\">Perlengkapan Umroh :</b> Tas Koper Fiber, Kain Batik 2 M, Id Card, Syal, Kain Ikhram dan Sabuknya (Pria), Mukena (Wanita), Buku Do\'a, Buku Panduan, Air Zam-zam 5 Liter Perorang</li><li>Manasik Sebelum Berangkat</li><li>Lain - lainnya Akan di Update Kembali jika ada Aturan Baru</li></ul>                     \r\n                                          \r\n                    ', '                    <ul style=\"margin: 1.25rem 0px; padding-left: 3rem; color: rgb(41, 41, 41); font-family: Roboto, Arial, sans-serif; text-align: justify;\"><li>Pembuatan Paspor / Perpanjangan Paspor / Tambah Nama Paspor</li><li>Suntik Vaksin Meningitis</li><li>Biaya Surat Mahram (Bagi yang dikenakan)</li><li>Upgrade Kamar Hotel</li><li>Upgrade Seat Pesawat Kelas Bisnis</li><li>Kelebihan Bagasi di Atas 30 Kg</li><li>Tour / Acara di Luar Program atas Permintaan Pribadi / Group</li><li>Hal - hal yang Bersifat Pribadi</li><li>Biaya Kirim Barang jika diperlukan</li><li>Transport Pribadi dari Daerah Asal ke Bandara Soekarno - Hatta</li><li>Lain - lainnya Akan di Update Kembali jika ada Aturan Baru</li></ul>                    \r\n                                          \r\n                    ', '<span style=\"font-family: Arial;\">Hanya Terbastas</span>', '1637575182-best_umrah_hajj_travel.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `idpromosi` int(10) UNSIGNED NOT NULL,
  `idadmin` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promosi`
--

INSERT INTO `promosi` (`idpromosi`, `idadmin`, `image`) VALUES
(1, 1, '1638072557-Perwakilan_Resmi_Paket_Rp_1_350_000_akan_diberikan_Marketing_tools.jpg'),
(2, 1, '1638073782-Perwakilan_Resmi_Paket_Rp_1_350_000_akan_diberikan_Marketing_tools_(1).jpg'),
(3, 1, '1637554788-Desain_tanpa_judul_(3).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentangkami`
--

CREATE TABLE `tentangkami` (
  `idtentangkami` int(10) UNSIGNED NOT NULL,
  `isi` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentangkami`
--

INSERT INTO `tentangkami` (`idtentangkami`, `isi`) VALUES
(1, '                    <p class=\"MsoNormal\" style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 16pt; font-family: &quot;Times New Roman&quot;, serif;\">Sebuah perusahaan hadir dengan program Berkah FTI\r\nUntuk Negeri 1000 Ponpes Yatim – Dhuafa dengan wasillah baitullah yaitu umrah 7\r\nfree 1 khusus mitra. Berkomitmen memberikan solusi mudah bagi sebanyak ]banyaknya\r\numat Islam bisa berangkat ke baitulllah secara gratis dan berkontribusi dalam\r\nmembantumeningkatkan taraf hidup , kesejahteraan dan keberkahan bagi umat\r\nmuslim melalui wasillah hafidz/hafidzullah yatim dhuafa. H. FERI FIRNANDO Head\r\nOffice : Grahananda Al Haramain, Jl. Raya Panemon Kecamatan Kudu, Kabupaten\r\nJombang, Jawa Timur CEO FTI GROUP DIREKTUR UTAMA PT. MUSTHAFAARY TOUR.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 16pt; font-family: &quot;Times New Roman&quot;, serif;\">Berkah FTI Untuk Negeri yang didalamnya terdapat\r\nProgram 1000 Pondok Pesantren Tahfidzul Qu’an Yatim Dhuafa dengan wasillah\r\nbaitullah. FTI Group (Berkah FTI Untuk Negeri) memiliki izin PPIU No.97 Tahun\r\n2020 atas nama PT Musthafa Ary Tour Program Berkah FTI Untuk Negeri hadir\r\nditengah masyarakat Indonesia dengan program 1000 pondok pesantren yatim dhuafa\r\nmelalui wasillah baitullah yaitu, umrah 7 free 1 khusus mitra dan mencetak\r\nsebanyak-banyaknya hafidz qur’an dan memuliakan yatim dhuafa diseluruh negeri\r\nmelalui Program Berkah FTI Untuk Negeri. Salah satu program keamanan dan\r\nkenyamanan layanan ibadah umrah dengan program “UMROH DULU BAYAR BELAKANGANGAN\r\nTANPA JAMINANN YANG BERSISTEM SYARIAH”.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 16pt; font-family: &quot;Times New Roman&quot;, serif;\">Berkah FTI Untuk Negeri memberikan layanan terbaik\r\nkepada jamaah umroh dan haji plus. Mulai dari saat pendaftaran,pengurusan\r\nberkas, pemberangkatan, proses ibadah di tanah suci, sampai saat kepulangan ke\r\ntanah air.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: justify; \">\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-size:16.0pt;line-height:107%;font-family:\r\n&quot;Times New Roman&quot;,serif\">&nbsp;</span></p>                      \r\n                                          \r\n                    ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indeks untuk tabel `hubungikami`
--
ALTER TABLE `hubungikami`
  ADD PRIMARY KEY (`idhubungikami`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idpaket`);

--
-- Indeks untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`idpromosi`),
  ADD KEY `promosi_FKIndex1` (`idadmin`);

--
-- Indeks untuk tabel `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`idtentangkami`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `hubungikami`
--
ALTER TABLE `hubungikami`
  MODIFY `idhubungikami` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `idpaket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `promosi`
--
ALTER TABLE `promosi`
  MODIFY `idpromosi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `idtentangkami` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD CONSTRAINT `promosi_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
