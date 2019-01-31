-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jan 2019 pada 12.01
-- Versi Server: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `tanggal_post`, `gambar`, `id_user`) VALUES
(4, 'Feeder BST Dilengkapi Sistem Navigasi', '<p><strong>Pelayanan&nbsp;</strong>prima moda transportasi umum massal memang menjadi salah satu prioritas Pemkot Surakarta. Sejak mengoperasikan bus Batik Solo Trans (BST) Koridor 1 pada 2010, angkutan umum terus dikembangkan agar pengguna kendaraan pribadi yang melintas di Kota Solo bisa terus ditekan.</p>\n\n<p>Tidak sebatas bus kota yang disulap Pemkot menjadi BST. Angkutan kota (angkuta) pun didesain sebagai kendaraan pengumpan (<em>feeder</em>), agar calon penumpang BST di daerah-daerah pinggiran atau kawasan permukiman bisa menjangkau layanan bus tersebut.</p>\n\n<p>Penataan ulang trayek, peremajaan sebagian kendaraan dan peluncuran operasional&nbsp;<em>feeder</em>&nbsp;pada Maret 2017 menjadi titik awal pembenahan layanan angkutan umum tersebut. Betapa tidak, sejak saat itu sederet&nbsp;<em>standart operational procedure&nbsp;</em>(SOP) wajib ditaati seluruh pengemudi. Mulai dilarang merokok selama mengemudikan angkuta, wajib menutup pintu dan jendela kendaraan, hingga mematuhi jam operasional yang sudah ditetapkan.</p>\n\n<p>Terkini, peningkatan layanan&nbsp;<em>feeder&nbsp;</em>itu kembali dilakukan Pemkot dengan memasang sistem navigasi berupa&nbsp;<em>Global Positioning System&nbsp;</em>(GPS)<em>.&nbsp;</em>&ldquo;Ada 30&nbsp;<em>feeder</em>&nbsp;baru yang akan dipasangi GPS. Kami sedang mengurus administrasinya, sekaligus mengkaji koridor mana saja yang akan menjadi jalur operasional&nbsp;<em>feeder</em>&nbsp;tersebut,&rdquo; terang Kepala Bidang (Kabid) Angkutan Dinas Perhubungan (Dishub) Taufiq Muhammad.</p>\n\n<p>Pemasangan alat navigasi itu, menurut Taufiq, penting agar salah satu SOP&nbsp;<em>feeder</em>&nbsp;BST bisa diimplementasikan pengemudi dengan baik. &ldquo;GPS itu membantu kami untuk mengetahui posisi&nbsp;<em>feeder&nbsp;</em>secara&nbsp;<em>real time</em>. Kalau terbukti pengemudi&nbsp;<em>ngetem</em>&nbsp;terlalu lama di suatu titik atau bahkan keluar dari jalur yang sudah ditetapkan, petugas yang berwenang bisa langsung menegur mereka.&rdquo;</p>\n\n<p>Waktu&nbsp;<em>ngetem</em>&nbsp;atau berhenti menunggu penumpang ini memang menjadi fokus Pemkot. Sebab hingga kini Pemkot masih kerap menerima aduan dari masyarakat, jika waktu tunggu itu dianggap terlalu lama.</p>\n\n<p>&ldquo;Waktu jeda&nbsp;<em>feeder</em>&nbsp;antara kendaraan satu dengan lainnya sudah ditetapkan sejak awal. Yaitu 10 menit saat waktu normal dan 5 menit pada jam sibuk. Puncak kepadatan lalu lintas juga sudah dibagi tiga, yakni pagi hari pukul 06.00-08.00, siang hari pukul 13.00-15.00, serta sore hari pukul 16.00-18.00. Jadi sejak awal pengemudi sudah kami batasi waktu&nbsp;<em>ngetem</em>-nya,&rdquo; tandas Taufiq.</p>\n\n<p>Adanya GPS juga membantu Pemkot mendeteksi kecepatan kendaraan, yang melebihi batas ketentuan. Sebab Pemkot sudah membatasi laju&nbsp;<em>feeder</em>&nbsp;maksimal 40 km/jam. &rdquo;Feeder yang berada di luar jalur, misalnya karena dicarter, juga akan ketahuan. Prinsipnya carter angkuta ini dilarang, meskipun kami masih menoleransi carter tersebut di luar jam operasional. Misalnya sore atau malam hari,&rdquo; imbuh Kepala Dishub Hari Prihatno.</p>\n\n<p>Meski terkesan membatasi ruang gerak dan kebebasan pengemudi, namun pemasangan alat navigasi itu juga bisa berguna bagi mereka. &ldquo;GPS ini bisa juga membantu pengemudi menemukan alternatif rute perjalanan, kalau situasi di lapangan memang mendesak. Jadi kalau perlu perubahan rute karena pembangunan infrastruktur di Solo misalnya, pengemudi bisa mengantisipasinya dengan baik,&rdquo; terang Taufiq.</p>\n\n<p>Meski baru dipasang di 30 armada, Pemkot berusaha melengkapi 71 armada lain yang sudah dioperasikan saat ini secara bertahap. &ldquo;Adanya pembaruan teknologi ini diharapkan bisa menyempurnakan pelayanan tranportasi massal di Kota Solo. Meski pengemudi masih mengeluh sehingga SOP yang sudah disepakati bersama dilanggar, tapi angkutan umum harus bisa menarik kembali minat masyarakat. Makanya transportasi publik yang sudah ada akan dimaksimalkan dulu,&rdquo; tandas Taufiq. (**)</p>\n', '2019-01-30', 'FeederBST.jpg', 1),
(5, 'Lintasi Jalan Kota, Angkutan Barang Wajib Berizin', '<p><strong>Solo&nbsp;</strong>merupakan kota yang terus berkembang. Letaknya yang strategis karena berada tak jauh dari pusat perdagangan di Jawa Tengah, Yogyakarta, dan Jawa Timur, menjadikan Kota Bengawan ini tak luput dari geliat aktivitas perekonomian.</p>\n\n<p>Meski hanya berukuran 44 km persegi, sebagian orang tetap menganggap Solo merupakan salah satu kota besar sekaligus penyangga ekonomi wilayah lain di eks Karesidenan Surakarta. Karenanya tidak usah heran, jika pusat-pusat ekonomi (<em>central bussiness district</em>) di berbagai titik terus menggeliat.</p>\n\n<p>Konsekuensinya, aktivitas distribusi berbagai komoditas terus menghampiri Solo. Berbagai angkutan barang kerap melintas di berbagau ruas jalan, baik sekadar lewat menuju kota lain atau memang bertujuan menaikturunkan barang.</p>\n\n<p>Ruas jalan kota pun tak luput dari lalu lintas distribusi komoditas tersebut. Padahal semestinya, hanya jalan provinsi dan nasional yang menjadi jalur kendaraan angkutan barang.</p>\n\n<p>&ldquo;Makanya mulai saat ini, kami mengharuskan pengemudi angkutan barang untuk mengajukan dispensasi melalui jalan kota. Sudah terbit Peraturan Wali Kota (Perwali) Nomor 22/B Tahun 2018 tentang Tata Cara Dispensasi Angkutan Barang Melalui Jalan Kota Surakarta, yang memayungi kebijakan tersebut,&rdquo; ungkap Kabid Angkutan Dinas Perhubungan (Dishub) Taufiq Muhammad.</p>\n\n<p>Menurut Taufiq, izin khusus itu wajib dikantungi pengemudi truk yang bisa memuat barang di atas 5,5 ton. Tanpa dispensasi, lanjut dia, pihak berwajib berwenang menilang pengemudi jika kedapatan melintas di ruas jalan kota.</p>\n\n<p>Saat ini Perwali Nomor 22B Tahun 2018 terus disosialisasikan Pemkot kepada pemangku kepentingan terkait, sebelum berlaku efektif mulai tahun depan. &ldquo;Perwali ini juga menguatkan Peraturan Daerah (Perda) Nomor 1 Tahun 2013 tentang Penyelenggaraan Perhubungan di Kota Surakarta. Sebab dalam Perda belum diatur detil terkait aktivitas angkutan barang di ruas jalan kota, karena sifat pengaturannya masih umum.&rdquo;</p>\n\n<p>Regulasi&nbsp;<em>anyar</em>&nbsp;itu, imbuh Taufiq, bahkan telah mengatur waktu dan syarat pengiriman barang. Ini bertujuan untuk menjaga kelancaran dan keamanan distribusi barang di Kota Solo.</p>\n\n<p>Tak hanya cuma-cuma, teknis pengajuan dispensasi pun dipermudah Pemkot. Selain menggunakan cara manual, yakni memohon izin di pos resmi yang terdapat di wilayah Mojosongo, Semanggi dan kantor Dishub, Pemkot juga menyediakan layanan&nbsp;<em>online</em>&nbsp;bagi pemrosesan dispensasi tersebut. Aplikasi berjuluk Sistem Izin Dispensasi Melalui Jalan Kota Surakarta atau disingkat Si Djaka, merupakan sarana bagi pengemudi untuk mengantungi izin melalui dunia maya.</p>\n\n<p>&ldquo;Perusahaan maupun perorangan yang memiliki kendaraan berat dan biasa mengirim barang melalui ruas jalan kota, bisa mengunduh aplikasi itu dari&nbsp;<em>Play Store</em>. Selanjutnya pemohon tinggal&nbsp;<em>login</em>&nbsp;dan regristrasi, mulai pengisian data jenis kendaraan, muatan yang diangkut, beban angkutan, dan lainnya,&rdquo; terang Kasi Angkutan Barang Dishub, Bambang Budhi Santosa.</p>\n\n<p>Usai seluruh data terisi, pemohon bakal mendapatkan izin rekomendasi yang mereka butuhkan. &ldquo;Selanjutnya tinggal memencet posisi kendaraan dan tujuan pengiriman, nanti akan tertera rute yang disarankan saat hendak memasuki area perkotaan.&rdquo;</p>\n\n<p>Bagi Pemkot, dispensasi itu vital demi menjaga kelancaran aktivitas ekonomi dan mencegah tersendatnya distribusi komoditas. &ldquo;Jika tidak diatur, maka ruas jalan kota berpotensi macet karena ukuran truk barang lebih besar dari kendaraan lain. Selain itu kami juga harus mengendalikan beban kendaraan di ruas jalan kota, agar infrastruktur tidak cepat rusak,&rdquo; tegas Bambang.</p>\n\n<p>Khusus pengurusan izin melalui aplikasi, Bambang memberi nilai plus dibanding metode manual. Selain menekan potensi pungutan liar (pungli), Si Djaka juga membantu pengemudi untuk menghindari pelanggaran tatkala mereka hendak mengurus dispensasi ke loket pelayanan.</p>\n\n<p>&ldquo;Misalnya pengemudi ingin mengurus izin ke kantor Dishub, dan melewati Jalan Adisucipto atau Jalan Menteri Supeno. Mereka justru melanggar aturan ini terlebih dahulu, karena kedua ruas jalan itu berstatus jalan kota,&rdquo; demikian ia mencontohkan.</p>\n\n<p>Apalagi praktek pungli pernah mencoreng Pemkot beberapa tahun lalu. &ldquo;Sebelumnya pengurusan izin melintas bagi angkutan berat ini memang dilayani manual di pos Kadipiro, Semanggi dan kantor Dishub. Tapi pada 2014, pos Kadipiro dan Semanggi pernah ditutup karena ada indikasi pungli oleh oknum petugas,&rdquo; bebernya. (**)</p>\n', '2019-01-30', '261118-ijin-angkutan-barang-4.jpg', 1),
(6, 'Cegah Kecelakaan, Pemkot Surakarta Bentuk Kader Keselamatan', '<p><strong>Kecelakaan&nbsp;</strong>lalu lintas masih menjadi momok bagi para pengguna jalan. Secara nasional, kecelakaan bahkan disebut sebagai faktor tertinggi penyebab kematian di Indonesia.</p>\n\n<p>&ldquo;Itu didasarkan kepada data hingga akhir Oktober 2018. Jika dirata-rata, terdapat tiga orang yang meninggal dunia karena kecelakaan lalu lintas,&rdquo; ungkap Kepala PT Jasa Raharja Persero Perwakilan Surakarta, Radito Risangadi.</p>\n\n<p>Problem tersebut juga terjadi di Solo. Kasatlantas Polresta Surakarta, Kompol Imam Safi&rsquo;i, mengatakan bahwa angka kecelakaan di Kota Bengawan tahun ini meningkat dibanding 2017. &ldquo;Sudah tercatat 720 kasus kecelakaan lalu lintas terjadi di Solo, hanya dalam kurun waktu Januari-November 2018. Jumlah itu naik sekitar 20 persen dibanding tahun lalu.&rdquo;</p>\n\n<p>Begitulah. Tidak bisa lagi dipungkiri jika maut siap mengintai siapapun di jalan raya. Lengah sedikit, nyawa menjadi taruhannya.</p>\n\n<p>Ketidakwaspadaan maupun pengabaian terhadap peraturan dan kaidah keselamatan berlalu lintas, disebut Imam, menjadi pemicu terjadinya kecelakaan. &ldquo;Misal lampu sein menyala kiri, tapi berbelok ke kanan, melawan arus, dan lainnya. Banyak juga pengendara yang celaka karena tidak mengenakan helm,&rdquo; katanya.</p>\n\n<p>Akibatnya fatal. Sebanyak 53 pengguna jalan telah meregang nyawa di atas aspal. &ldquo;Oleh sebab itu kami dan Pemkot Surakarta membutuhkan dukungan setiap elemen masyarakat, agar jumlah kecelakaan ini bisa ditekan.&rdquo;</p>\n\n<p>Gayung pun bersambut. Pemkot memutuskan membentuk kader keselamatan sebagai upaya preventif. Antisipasi dini terhadap kecelakaan kini juga membebani pundak para kader, agar jalan raya berubah menjadi ruang yang nyaman sekaligus aman bagi penggunanya.</p>\n\n<p>&ldquo;Para kader keselamatan itu bertugas mengedukasi masyarakat, terutama di lingkungan sekitar masing-masing kader, tentang pentingnya kewaspadaan dan keselamatan berlalu lintas,&rdquo; jelas Kepala Bidang (Kabid) Lalu Lintas Dinas Perhubungan (Dishub) Surakarta, Ari Wibowo.</p>\n\n<p>Sebagian dari orang-orang terpilih itu adalah 51 anggota Satuan Perlindungan Masyarakat (Satlinmas) kelurahan dan lima personel Satlinmas kecamatan. &ldquo;Sisanya adalah 14 pegiat Kelompok Masyarakat Sadar Keselamatan (KMSK) Solo.&rdquo;</p>\n\n<p>Sebagai ujung tombak dalam menyosialisasikan keselamatan berlalu lintas, para kader bakal diberikan pengarahan tentang regulasi-regulasi terkait. &ldquo;Tidak hanya dari Dishub, pengarahan itu juga akan melibatkan kepolisian, Dinas Kesehatan Kota (DKK) serta Jasa Raharja,&rdquo; terang Ari.</p>\n\n<p>Momentum Hari Kecelakaan Sedunia (yang diperingati setiap 16 November) dipilih Pemkot untuk melantik para kader keselamatan itu. Pelantikan dilakukan Wali Kota FX Hadi Rudyatmo di Koridor Ngarsapura, melalui penyematan pin kepada perwakilan kader, Minggu (18/11).</p>\n\n<p>Usai dibekali pengetahuan tentang keselamatan berlalu lintas, para kader diminta segera bertindak nyata. Mereka bisa memulai gerakan penyadaran dari lingkungan terdekat, yakni keluarga masing-masing. Dalam jangka panjang sosialisasi para kader itu diharapkan bisa menyentuh kalangan lain, sehingga harapan Pemkot akan&nbsp;<em>zero accident&nbsp;</em>(nol persen tingkat kecelakaan) bisa mulai direalisasikan.</p>\n\n<p>Para pengambil kebijakan pun siap berkoordinasi untuk tujuan serupa. Radito menyatakan, Jasa Raharja akan terus berkoordinasi dengan Dishub, Satlantas, maupun pemangku kepentingan terkait lain guna mengevaluasi setiap insiden kecelakaan lalu lintas.</p>\n\n<p>&ldquo;Bagi kami, asuransi bagi korban kecelakaan tidak lebih penting dari nyawa seseorang. Seluruh pihak, termasuk masyarakat, harus saling mengingatkan dan jangan berpikir bisa sembarangan di jalan raya hanya karena ada asuransi,&rdquo; tandasnya.</p>\n\n<p>Wali Kota FX Hadi Rudyatmo menekankan pentingnya para kader keselamatan menjadi panutan bagi pengguna jalan. &ldquo;Jangan sebaliknya, kader malah melanggar aturan,&rdquo; kata dia.</p>\n\n<p>Wali Kota pun menitipkan pesan kepada para kader, untuk ikut menyadarkan generasi muda agar tidak mengambil risiko di jalan raya. &ldquo;Sampai sekarang masih sering dijumpai remaja atau siswa-siswi yang mengendarai motor, padahal belum memiliki Surat Izin Mengemudi (SIM). Atau juga yang tidak mengenakan helm. Kami minta kader keselamatan menjadi subjek terdepan dalam menangani mereka,&rdquo; papar dia. (**)</p>\n', '2019-01-30', '221118-kader-keselamatan-1.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lain`
--

CREATE TABLE IF NOT EXISTS `lain` (
  `fax` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `web` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lain`
--

INSERT INTO `lain` (`fax`, `telp`, `email`, `web`) VALUES
('(0271) 717470', '(0271) 717470', 'dishub@surakarta.go.id', 'www.dishub.surakarta.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
