-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 07:33 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sibumil`
--

-- --------------------------------------------------------

--
-- Table structure for table `anem_berat`
--

CREATE TABLE IF NOT EXISTS `anem_berat` (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `id_konsul` varchar(10) NOT NULL,
  `mb` varchar(3) NOT NULL,
  `md` varchar(3) NOT NULL,
  PRIMARY KEY (`id_diagnosa`),
  KEY `id_konsul` (`id_konsul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `anem_berat`
--

INSERT INTO `anem_berat` (`id_diagnosa`, `id_konsul`, `mb`, `md`) VALUES
(1, 'I2001', '0.8', '0.1'),
(2, 'I2002', '0.7', '0.1'),
(3, 'I2003', '0.7', '0.1'),
(4, 'I2005', '0.7', '0.1'),
(5, 'I2004', '0.7', '0.2'),
(6, 'I2006', '0.7', '0.2'),
(7, 'I2007', '0.8', '0.1'),
(8, 'I2008', '0.7', '0.2'),
(9, 'I2009', '0.7', '0.2'),
(10, 'I2010', '0.8', '0.1'),
(11, 'I2011', '0.7', '0.2'),
(12, 'I2012', '0.8', '0.1'),
(13, 'I2013', '0.7', '0.2'),
(14, 'I2014', '0.7', '0.2'),
(15, 'I2015', '0.8', '0.1'),
(16, 'I2016', '0.8', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `anem_ringan`
--

CREATE TABLE IF NOT EXISTS `anem_ringan` (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `id_konsul` varchar(10) NOT NULL,
  `mb` varchar(3) NOT NULL,
  `md` varchar(3) NOT NULL,
  PRIMARY KEY (`id_diagnosa`),
  KEY `id_konsul` (`id_konsul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `anem_ringan`
--

INSERT INTO `anem_ringan` (`id_diagnosa`, `id_konsul`, `mb`, `md`) VALUES
(1, 'I2001', '0.6', '0.2'),
(2, 'I2002', '0.7', '0.2'),
(3, 'I2003', '0.7', '0.2'),
(4, 'I2004', '0.6', '0.4'),
(5, 'I2005', '0.5', '0.3'),
(6, 'I2006', '0.6', '0.2'),
(7, 'I2007', '0.5', '0.3'),
(8, 'I2008', '0.5', '0.3'),
(9, 'I2009', '0.5', '0.3'),
(10, 'I2010', '0.6', '0.4'),
(11, 'I2011', '0.7', '0.3'),
(12, 'I2012', '0.6', '0.4'),
(13, 'I2013', '0.6', '0.4'),
(14, 'I2014', '0.4', '0.3'),
(15, 'I2015', '0.5', '0.4'),
(16, 'I2016', '0.7', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `anem_sedang`
--

CREATE TABLE IF NOT EXISTS `anem_sedang` (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `id_konsul` varchar(10) NOT NULL,
  `mb` varchar(3) NOT NULL,
  `md` varchar(3) NOT NULL,
  PRIMARY KEY (`id_diagnosa`),
  KEY `id_konsul` (`id_konsul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `anem_sedang`
--

INSERT INTO `anem_sedang` (`id_diagnosa`, `id_konsul`, `mb`, `md`) VALUES
(1, 'I2001', '0.5', '0.2'),
(2, 'I2002', '0.6', '0.2'),
(3, 'I2003', '0.6', '0.3'),
(4, 'I2004', '0.7', '0.3'),
(5, 'I2005', '0.8', '0.1'),
(6, 'I2006', '0.6', '0.2'),
(7, 'I2007', '0.6', '0.2'),
(8, 'I2008', '0.7', '0.2'),
(9, 'I2009', '0.6', '0.3'),
(10, 'I2010', '0.6', '0.4'),
(11, 'I2011', '0.7', '0.3'),
(12, 'I2012', '0.6', '0.4'),
(13, 'I2013', '0.6', '0.4'),
(14, 'I2014', '0.5', '0.3'),
(15, 'I2015', '0.7', '0.3'),
(16, 'I2016', '0.6', '0.3');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsul`
--

CREATE TABLE IF NOT EXISTS `hasil_konsul` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `y` varchar(4) NOT NULL,
  `m` varchar(4) NOT NULL,
  `d` varchar(4) NOT NULL,
  PRIMARY KEY (`id_hasil`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `hasil_konsul`
--

INSERT INTO `hasil_konsul` (`id_hasil`, `id_user`, `hasil`, `y`, `m`, `d`) VALUES
(2, 6, '0.55', '2016', '0', '3'),
(3, 6, '0.276', '2016', '0', '20'),
(4, 6, '0.288', '2016', '1', '2'),
(16, 8, '0.0072536639987711', '2016', '0', '15'),
(17, 6, '0.0069946147012608', '2016', '1', '15'),
(18, 2, '0.057063040853299', '2016', '0', '17'),
(19, 2, '0.057063040853299', '2016', '0', '17'),
(20, 2, '0.77', '2016', '0', '17'),
(21, 2, '0.0097086068785153', '2016', '0', '17'),
(22, 2, '0.0086719980478464', '2016', '0', '20');

-- --------------------------------------------------------

--
-- Table structure for table `home_tbl`
--

CREATE TABLE IF NOT EXISTS `home_tbl` (
  `id_home` int(11) NOT NULL AUTO_INCREMENT,
  `welcome_text` text NOT NULL,
  `anemia` text NOT NULL,
  PRIMARY KEY (`id_home`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home_tbl`
--

INSERT INTO `home_tbl` (`id_home`, `welcome_text`, `anemia`) VALUES
(1, 'Selamat Datang Di Web Sistem Informasi Anemia Pada Ibu Hamil', '<p>Anemia adalah kondisi dimana sel darah merah menurun atau menurunnya hemoglobin, sehingga kapasitas daya angkut oksigen untuk kebutuhan organ-organ vitalpada ibu dan janin menjadi berkurang.</p><p>Anemia dalam kandungan ialah kondisi ibu dengan kadar hb &lt; 11,00 gr% pada trimester I dan II atau kadar hb &lt; 10,50 gr5 pada trimester II.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `info_penyakit`
--

CREATE TABLE IF NOT EXISTS `info_penyakit` (
  `anemia_ibu_hamil` text NOT NULL,
  `selama_kehamilan` text NOT NULL,
  `saat_nifas` text NOT NULL,
  `saat_persalinan` text NOT NULL,
  `fetus_neonatus` text NOT NULL,
  `f_umur` text NOT NULL,
  `f_paritas` text NOT NULL,
  `f_usia` text NOT NULL,
  `penyebab` text NOT NULL,
  `pencagahan` text NOT NULL,
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info_penyakit`
--

INSERT INTO `info_penyakit` (`anemia_ibu_hamil`, `selama_kehamilan`, `saat_nifas`, `saat_persalinan`, `fetus_neonatus`, `f_umur`, `f_paritas`, `f_usia`, `penyebab`, `pencagahan`, `id_info`) VALUES
('<p class="bold">Tanda-tanda</p><ol><li class="text-home">HB lebih rendah &lt; 11 gr %</li><li class="text-home">Penderita mengeluh lemah</li><li class="text-home">Mudah pingsan sementara tekanan darah masih dan batas normal.</li><li class="text-home">Malnutrisi</li><li class="text-home">Pucat</li><li class="text-home">Sakit kepala</li><li class="text-home">Penglihatan kunang-kunang</li><li class="text-home">Mudah tersinggung</li></ol>', '<p class="readable-text text-home">Resiko Selama Kehamilan</p><ol style="list-style-type:lower-alpha"><li class="text-home">Partus Prematurus</li><li class="text-home">Mudah terjadi Infeksi</li><li class="text-home">HB Kurang dari 11 gr %</li><li class="text-home">Mola Hidatidosa</li><li class="text-home">Hiperemesis Grandarum</li><li class="text-home">Perdarahan Intra Partum, karena Abrupsio Plasenta</li><li class="text-home">KPD (Ketuban Pecah Dini) Abortus</li></ol>', '<p class="readable-text text-home">Resiko Saat Nifas</p><ol style="list-style-type:lower-alpha"><li class="text-home">Terjadi sub involasi uteri menimbulkan perdarahan</li><li class="text-home">Predisposisi terjadi infeksi puerpuralis</li><li class="text-home">Anemia kala nifas</li><li class="text-home">Mudah terjadi infeksi normal</li></ol>', '<p class="readable-text text-home">Resiko Saat Persalinan</p><ol style="list-style-type:lower-alpha"><li class="text-home">Gangguan his, ketelatan mengejen</li><li class="text-home">Kala I lama dan terjadi partus terlantar</li><li class="text-home">Kala II lama sehingga terjadi kelelahan dan berakhir dalam tindakan operasi kebidanan</li><li class="text-home">Kala III dapat diikuti Retencio Plasenta</li><li class="text-home">Kala IV dapat terjadi perdarahan post partum sekunder dan atonia uteri</li></ol>', '<p class="readable-text text-home">Bahaya Terjadi Fetus dan Neonatus</p><ol style="list-style-type:lower-alpha"><li class="text-home">IUFD (Intra Uteri Fetal Death)</li><li class="text-home">PJT (Pertumbuhan Janin Tertunda)</li><li class="text-home">Anemnia kala nifas</li><li class="text-home">Persalinan Prematuritas tinggi</li><li class="text-home">BBLR</li><li class="text-home">Kelahiran dengan anemia</li><li class="text-home">Bayi mudah mendapat infeksi sampai kematian prenatal</li></ol>', '<p class="readable-text text-home">- Umur Ibu</p><p class="readable-text text-home ttt">Kehamilan resiko tinggi dapat timbul pada keadaan empat terlalu (terlalu muda, terlalu tua, terlalu banyak, terlalu dekat). Pada kelompok umur beresiko yaitu &lt; 20 tahun &gt; 35 tahun dan kelompok umur tidak beresiko atau resiko ringan yaitu 20 tahun sampai 35 tahun. Pada kehamilan usia muda &lt; 20 tahun membutuhkan zat besi lebih banyak untuk keperluan pertambahan diri sendiri juga janin. Sedangkan kehamilan pada usia &gt; 35 tahun akan mengalami problem kesehatan seperti hipertensi.</p>', '<p class="readable-text text-home">- Paritas</p><p class="readable-text text-home ttt">Terdapat beberapa jenis paritas; paritas 1 (primipara), paritas lebih dari dua (multipara). Wanita memerlukan zat besi lebih tinggi dari laki-laki karena terjadi menstruasi dengan perdarahan sebanyak 50 sampai 80 cc setiap bulan dan kehilangan zat besi sebesar 30 sampai 40 mg. Di samping itu kehamilan memerlukan tambahan zat besi untuk meningkatkan jumlah sel darah merah dan membentuk sel darah merah janin dan plasenta. Makin sering seorang wanita mengalami kehamilan dan melahirkan (multipara) akan semakin banyak kehilangan zat besi serta menjadi makin anemis.</p>', '<p class="readable-text text-home">Usia Kehamilan</p><p class="readable-text text-home ttt">Kebutuhan zat besi meningkat sesuai bertambahnya umur kehamilan, meningginya kejadian anemia dengan bertambahnya umur kehamilan disebabkan terjadinya perubahan fisiologis pada kehamilan yang mulai pada trimester II atau umur kehamilan &gt; 12 minggu dan bertambahnya volume plasma mencapai puncaknya pada minggu ke-32.</p>', '<p class="readable-text text-home">Etiologi</p><p class="readable-text text-home ttt">Secara umum ada tiga penyebab anemia defisiensi zat besi yaitu,kehilangan darah kronis, sebagaimana dampak perdarahan kronis seperti pada penyakit ulkus peptikum, hemoroid, infestasi, parasit, dan proses keganasan.</p><p class="readable-text text-home ttt">Asupan zat besi tidak cukup dan penyerapan tidak adekuat,peningkatan kebutuhan akan zat besi, untuk membentuk sel darah merah yang lazim, berlangsung pada masa pertumbuhan bayi, masa pubertas,masa kehamilan dan menyusui.</p><p class="readable-text text-home">Penyebab Anemia Pada Umumnya</p><p class="readable-text text-home">1. Kurang Gizi (Mal nutrisi)</p><p class="readable-text text-home ttt">Karena pada umumnya gizi pada ibu hamil meningkat diantaranya:</p><p class="readable-text text-home ttt">Tambahan gizi yang di perlukan ibu hamil adalah energi 15 % (2300kkal/n) protein 68 % (769 / hr) vitamin A 25 % (800 mcg RE) Vitamin D 100 % (10 mcg) Vitamin E 25 % (10 mg TE) Vitamin C 33 % (70 mg) untuk Vitamin B kelompok 40 %, Vitamin 25 % vitamin B6 100 % kalsium 120 mg, atau 1,5 gr sehari sedangkan untuk pembentukan tulang dalam Trisemester III 30-40 gr, akan tetapi banyak yang kurang sehingga, banyak ibu yang kekurangan asupan gizi, dan menyebabkan kurang gizi mengalami mal nutrisi.</p><p class="readable-text text-home">2. Kekurangan Zat Besi dalam Diet</p><p class="readable-text text-home ttt">Para bidan harus menyarankan ibu untuk mengkomsumsi makanan dan diet yang sehat dan seimbang. Mempertahankan kesehatan tampaknya menjadi tugas jangka panjang bagi wanita dan keluarganya. Bagi beberapa wanita, mungkin kandungan diet perlu dijelaskan secara terinci, yang harus disesuaikan dengan budaya, pendapatan, gaya hidup dan keinginan untuk mengembalikan berat badan ibu ke bentuk semula.</p><p class="readable-text text-home ttt">Wanita yang menyusui tidak perlu memodifikasi makannya atau mengkonsumsi kalori tambahan untuk menambah laktasi. Namun, jika keluarga memiliki riwayat alergi beberapa makanan yang diberikan ibu selama laktasi mungkin akan menguntungkan bayi (Hendarson Jones,2005).</p>', '<p class="readable-text text-home">Pencegahan Anemia Menurut Para Ahli</p><p class="readable-text text-home ttt">Untuk mencegah terjadinya anemia sebaiknya ibu hamil melakukan pemeriksaan sebelum hamil sehingga dapat diketahui data dasar kesehatan ibu tersebut, dalam pemeriksaan kesehatan disertai pemeriksaan laboratorium termasuk pemeriksaan tinja sehingga diketahui adanya infeksi parasit.</p><p class="readable-text text-home ttt">Untuk daerah dengan frekuensi anemia kehamilan yang tinggi sebaiknya setiap wanita hamil diberi sulfas ferrosus atau glukonat ferrosus 1 tablet sehari.Selain itu, wanita dinasihatkan pula untuk:</p><ol><li class="text-home">Mengkonsumsi lebih banyak protein, mineral dan vitamin.</li><li class="text-home">Konsumsi Makanan yang kaya zat besi antara lain kuning telur, ikan segar dan kering, hati, daging, kacang-kacangan dan sayuran hijau.</li><li class="text-home">Konsumsi Makanan yang kaya akan asam folat yaitu daun singkon, bayam, sawi ijo, sedangkan</li><li class="text-home">Konsumsi makanan yang mengandung vitamin C adalah jeruk, tomat, mangga, pepaya dan lain-lain.</li></ol>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_gizi`
--

CREATE TABLE IF NOT EXISTS `kebutuhan_gizi` (
  `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT,
  `trimester_1` text NOT NULL,
  `trimester_2` text NOT NULL,
  `trimester_3` text NOT NULL,
  `faktor_pengaruh` text NOT NULL,
  PRIMARY KEY (`id_kebutuhan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kebutuhan_gizi`
--

INSERT INTO `kebutuhan_gizi` (`id_kebutuhan`, `trimester_1`, `trimester_2`, `trimester_3`, `faktor_pengaruh`) VALUES
(1, '<div class="card-panel card-2"><h4>Trimester I</h4><p class="readable-text text-home ttt">Trimester pertama kehamilan merupakan masa penyesuaian seorang perempuan terhadap kehamilannya. Karena pada tiga bulan pertama ini pertumbuhan janin masih lambat, penambahan kebutuhan zat-zat gizinya pun masih relatif kecil. Hanya saja, seluruh zat gizi yang dikonsumsinya harus memenuhi kebutuhan janin. Kekurangan gizi tertentu atau terkonsumsinya zat adiktif berbahaya bisa menyebabkan kegagalan pembentukan organ yang sempurna.</p><p class="readable-text text-home ttt">Pada trimester I ibu hamil memasuki masa anabolisme yaitu masa untuk menyimpan zat gizi sebanyak-banyaknya dari makanan yang disantap setiap hari untuk cadangan persediaan pada trimester berikutnya. Dalam keadaaan ini biasanya ibu hamil mengalami mual, muntah-muntah, dan tidak berselera makan, sehingga asupan makanan perlu diatur. Makanan sebaiknya diberikan dalam bentuk kering, porsi kecil, dan frekuensi pemberian yang sering.</p><p class="readable-text text-home">Menurut Karyadi (2010), zat gizi yang dibutuhkan ibu hamil trimester I, antara lain :</p><h4>Kalori</h4><p class="readable-text text-home ttt">Kalori dibutuhkan untuk perubahan dalam tubuh ibu hamil, meliputi pembentukan sel-sel baru, pengaliran makanan dari pembuluh darah ibu ke pembuluh darah janin melalui plasenta dan pembentukan enzim serta hormon yang mengatur pertumbuhan janin. Selama trimester pertama, wanita hamil perlu tambahan bobot badan sebanyak 0,5 kg setiap minggu. Berdasarkan Angka Kecukupan Gizi rata-rata yang dianjurkan ibu hamil perlu tambahan 285 Kkal setiap hari atau sama dengan 2.485 Kkal per hari. Kekurangan energi dalam asupan makanan yang dikonsumsi menyebabkan tidak tercapainya penambahan berat badan ideal dari ibu hamil yaitu sekitar 11 - 14 kg.</p></div><div class="card-panel card-2"><h4>Protein</h4><p>Untuk membangun sel-sel baru janin, termasuk sel darah, kulit, rambut, kuku, dan jaringan otot dibutuhkan protein. Protein juga diperlukan plasenta untuk membawa makanan ke janin dan juga pengaturan hormon sang ibu dan janin. Tambahan protein yang dibutuhkan setiap hari adalah 60 g atau 12 g lebih banyak ketimbang wanita dewasa tak hamil. Protein dapat diperoleh dari bahan makanan seperti daging, keju, ikan, telur, kacang-kacangan, tahu, tempe dan oncom.</p></div><div class="card-panel card-2"><h4>Serat</h4><p>Konsumsi serat banyak terdapat pada buah dan sayuran, berguna untuk membantu kerja sistem ekskresi sehingga mudah buang air besar.</p><div class="divider-line"><br></div><h4>Air</h4><p>Kekurangan air (dehidrasi) harus segera ditanggulangi, karena dalam masa kehamilan muda ada kalanya terjadi muntah-muntah sehingga banyak mengeluarkan cairan tubuh.</p></div><div class="card-panel card-2"><h4>Vitamin dan Mineral</h4><p>Diperlukan vitamin dan mineral yang merupakan zat gizi penting selama hamil. Vitamin A dalam jumlah optimal diperlukan untuk pertumbuhan janin. Tidak kalah penting vitamin B1 dan B2 serta niasin yang diperlukan dalam proses metabolisme tubuh. Sedangkan vitamin B6 dan B12 berguna untuk mengatur penggunaan protein oleh tubuh. Vitamin C penting untuk membantu penyerapan zat besi selama hamil untuk mencegah anemia.</p><p>Untuk pembentukan tulang serta persendian janin diperlukan vitamin D yang membantu penyerapan kalsium. Kalsium penting untuk pertumbuhan tulang dan gigi janin. Zat kapur ini banyak terdapat pada susu dan olahannya serta kacang-kacangan. Sementara itu vitamin E diperlukan untuk pembentukan sel-sel darah merah serta melindungi lemak dari kerusakan. Asam folat dan seng penting untuk pertumbuhan susunan saraf pusat sehingga konsumsi makanan yang banyak mengandung asam folat dapat mengurangi risiko kelainan susunan saraf pusat dan otak janin. Makanan yang kaya akan asam folat misalnya jeruk, pisang, brokoli, wortel, dan tomat. Pasokan zat besi juga tidak kalah penting karena pada masa hamil volume darah ibu akan meningkat 30%. Di samping itu, plasenta harus mengalirkan cukup zat besi untuk perkembangan janin.</p></div>', '<div class="card-panel card-2"><h4>Trimester II</h4><p>Memasuki trimester kedua, saat kehamilan berusia 4 - 6 bulan, janin mulai tumbuh pesat dibandingkan dengan sebelumnya. Kecepatan pertumbuhan itu mencapai 10 gram per hari. Tubuh ibu juga mengalami perubahan dan adaptasi, misalnya pembesaran payudara dan mulai berfungsinya rahim serta plasenta. Untuk itu, peningkatan kualitas gizi sangat penting karena pada tahap ini ibu mulai menyimpan lemak dan zat gizi lainnya untuk cadangan sebagai bahan pembentuk ASI (air susu ibu) saat menyusui nanti. Menurut Haryanto (2009), zat gizi yang dibutuhkan ibu hamil trimester II, antara lain :</p><div class="divider-line"><br></div><h4>Kalori</h4><p>Tubuh membutuhkan tambahan 285 kalori setiap hari dibandingkan dengan sebelum hamil. Konsumsi makanan ini setidaknya menghasilkan pertambahan bobot badan sekitar 8 - 15 kg sampai akhir trimester ketiga. Sejak trimester kedua ini, diusahakan untuk menambah bobot &frac12; kg setiap minggu. Di akhir bulan kehamilan, konsumsi karbohidrat (50 - 60% dari total kalori) diperlukan dalam takaran yang cukup untuk persiapan tenaga ibu dalam masa persalinan.</p></div><div class="card-panel card-2"><h4>Protein</h4><p>Protein penting untuk pertumbuhan janin dan plasenta, juga untuk memenuhi kebutuhan suplai darah merah. Kebutuhan protein didapat dari bahan makanan hewani seperti daging, ikan, telur, dan nabati seperti kacang-kacangan, tahu, dan tempe.</p></div><div class="card-panel card-2"><h4>Vitamin dan Mineral</h4><p>Pada trimester ketiga, tubuh membutuhkan vitamin B6 dalam jumlah banyak dibandingkan sebelum hamil. Vitamin ini dibutuhkan untuk membentuk protein dari asam amino, darah merah, saraf otak, dan otot-otot tubuh. Bila protein tercukupi, maka kebutuhan vitamin B6 akan tercukupi pula. Makanan yang banyak mengandung vitamin B6 ini antara lain ikan. Jangan lupa mengonsumsi substansi omega-3 yang banyak terkandung dalam daging ikan tuna dan salmon. Omega-3 juga berperan pada perkembangan otak dan retina janin.</p><p>Zinc dibutuhkan bagi sistem imunologi (kekebalan) tubuh. Konsumsi zinc juga dapat menghindari lahirnya janin prematur dan berperan dalam perkembangan otak janin, terutama pada trimester terakhir. Diduga, kekurangan seng menyebabkan bibir sumbing. Makanan yang kaya seng antara lain daging sapi dan ikan.</p><p>Kalsium diperlukan pada trimester pertama hingga trimester ketiga karena merupakan zat gizi penting selama kehamilan. Kebutuhan zat besi meningkat terutama pada awal trimester kedua kehamilan. Faktanya, hampir 70% ibu hamil di Indonesia menderita anemia. Sebab itu suplementasi pil besi diupayakan untuk diberikan selama kehamilan guna memenuhi kebutuhan zat besi itu.</p></div>', '<div class="card-panel card-2"><h4>Trimester III</h4><p>Sedangkan pada tahap terakhir atau trimester ketiga, ketika usia kehamilan mencapai 7 - 9 bulan, dibutuhkan vitamin dan mineral untuk mendukung pesatnya pertumbuhan janin dan pembentukan otak. Kebutuhan energi janin didapat dari cadangan energi yang disimpan ibu selama tahap sebelumnya.</p><p>Menurut Haryanto (2009), zat gizi yang dibutuhkan ibu hamil trimester III tidak berbeda dengan ibu hamil trimester II.</p></div>', '<div class="card-panel card-2"><h4>Faktor Penyakit Pada Ibu Hamil</h4><p>Penyakit kronis pada ibu hamil akan meningkatkan resiko terjadinya gangguan status gizi ibu dalam kehamilan, misalnya maag atau gastric ulcer yang menyebabkan ibu mengalami gangguan pola makan yang pada akhirnya akan mempengaruhi status gizi ibu selama kehamilan.</p></div>');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `no_konsul` int(11) NOT NULL AUTO_INCREMENT,
  `id_konsul` varchar(10) NOT NULL,
  `nama_konsul` text NOT NULL,
  PRIMARY KEY (`id_konsul`),
  UNIQUE KEY `no_konsul` (`no_konsul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`no_konsul`, `id_konsul`, `nama_konsul`) VALUES
(1, 'I2001', 'Kepala terasa pusing ?'),
(2, 'I2002', 'Jantung Berdebar-debar ?'),
(3, 'I2003', 'Tubuh terasa lemas dan lesu ?'),
(4, 'I2004', 'Mata berkunang-kunang ?'),
(5, 'I2005', 'Konjungtiva pucat ?'),
(6, 'I2006', 'Malnutrisi ?'),
(7, 'I2007', 'Mengalami perubahan jaringan epitel kuku ?'),
(8, 'I2008', 'Merasakan nyeri pinggang ?'),
(9, 'I2009', 'Terjadi mual dan muntah ?'),
(10, 'I2010', 'Konsentrasi hilang ?'),
(11, 'I2011', 'Nafas Pendek ?'),
(12, 'I2012', 'Rambut dan kuku terasa rapuh ?'),
(13, 'I2013', 'Terasa mengantuk ?'),
(14, 'I2014', 'Lidah terasa licin ?'),
(15, 'I2015', 'Merasakan sakit kepala ?'),
(16, 'I2016', 'Bibir tampak pucat ?');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `img_org` text NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `img_org`) VALUES
(1, 'organisasi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `id_tips` int(11) NOT NULL AUTO_INCREMENT,
  `isi_pakar` text NOT NULL,
  `isi_pasien` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tips`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id_tips`, `isi_pakar`, `isi_pasien`, `kategori`) VALUES
(1, 'Berikan kombinasi 60 mg/ hari zat besi dan 400 mg asam folat peroral sekali sehari.', 'Mengkonsumsi lebih banyak protein, mineral dan vitamin. Konsumsi Makanan yang kaya zat besi antara lain kuning telur, ikan segar dan kering, hati, daging, kacang-kacangan dan sayuran hijau. \r\nKonsumsi Makanan yang kaya akan asam folat yaitu daun singkon, bayam, sawi ijo dan  \r\nkonsumsi makanan yang mengandung vitamin C adalah jeruk, tomat, mangga, papaya\r\n', 'ringan'),
(2, 'Beri Pengobatan dengan kombinasi 120 mg zat besi dan 500 mg asam folat peroral sekali sehari.', 'Konsumsi Makanan yang kaya akan asam folat yaitu daun singkon, bayam, sawi ijo dan  \r\nkonsumsi makanan yang mengandung vitamin C adalah jeruk, tomat, mangga, papaya.\r\nkonsumsi lebih banyak protein, mineral dan vitamin. Konsumsi Makanan yang kaya zat besi antara lain kuning telur, ikan segar dan kering, hati, daging, kacang-kacangan dan sayuran hijau. \r\n', 'sedang'),
(3, 'Pemberian preparat dengan fero dextrin sebanyak 1000 mg  (20 ml) intravena atau 2x10 ml intramuskuler.', 'Rujuk ke rumah sakit terdekat untuk mendapatkan pemeriksaan lebih lanjut dan untuk mendapatkan transfusi darah jika diperlukan.', 'berat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `level` int(1) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` varchar(75) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `alamat`, `tgl_lahir`) VALUES
(2, 'admin', 'admin', 'Admin', 1, '', '0000-00-00'),
(6, '13.01.3185', 'ervan', 'Ervan', 0, 'Jaten RT 43, Argosari, Sedayu, Bantul', '23 September, 1994'),
(8, '123456', 'pasien', 'Pasienxxx', 0, '0', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anem_berat`
--
ALTER TABLE `anem_berat`
  ADD CONSTRAINT `anem_berat_ibfk_1` FOREIGN KEY (`id_konsul`) REFERENCES `konsultasi` (`id_konsul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `anem_ringan`
--
ALTER TABLE `anem_ringan`
  ADD CONSTRAINT `anem_ringan_ibfk_1` FOREIGN KEY (`id_konsul`) REFERENCES `konsultasi` (`id_konsul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `anem_sedang`
--
ALTER TABLE `anem_sedang`
  ADD CONSTRAINT `anem_sedang_ibfk_1` FOREIGN KEY (`id_konsul`) REFERENCES `konsultasi` (`id_konsul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil_konsul`
--
ALTER TABLE `hasil_konsul`
  ADD CONSTRAINT `hasil_konsul_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
