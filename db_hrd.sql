-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 08:52 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(3) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `daerah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `customer`, `daerah`) VALUES
(1, 'PT PEMBANGUNAN JAYA ANCOL', ''),
(2, 'PT ERICSSON INDONESIA', ''),
(3, 'FIRST MEDIA', ''),
(4, 'ARYADUTA TUGUTANI', ''),
(5, 'ARYADUTA SEMANGGI', ''),
(6, 'BANK INTERNATIONAL INDONESIA', ''),
(7, 'GRAMEDIA CIPINANG', ''),
(8, 'KOMPAS', ''),
(9, 'BANK BTPN', ''),
(10, 'CSUL FINANCE', ''),
(11, 'JOTUN', ''),
(12, 'PT. BTMU - BRI FINANCE', ''),
(13, 'PT. DENTSU INDONESIA', ''),
(14, 'PT. COLORPAK INDONESIA, Tbk', ''),
(15, 'PLAZA KALIBATA', ''),
(16, 'WOM FINANCE', ''),
(17, 'WATERBOOM', 'CIKARANG'),
(18, 'PT. Dentsu Inter Admark', 'PT. Dentsu Indonesia'),
(19, 'PT. DENTSU STRAT', ''),
(21, 'PT. Allianz Life Indonesia', ''),
(22, 'STAR', ''),
(23, 'Femina Group', ''),
(24, 'BNI', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(5) NOT NULL,
  `id_kandidat` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id_kabupaten` int(10) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `id_provinsi` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9273 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `id_provinsi`) VALUES
(1101, 'KABUPATEN ACEH SELATAN', 11),
(1102, 'KABUPATEN ACEH TENGGARA', 11),
(1103, 'KABUPATEN ACEH TIMUR', 11),
(1104, 'KABUPATEN ACEH TENGAH', 11),
(1105, 'KABUPATEN ACEH BARAT', 11),
(1106, 'KABUPATEN ACEH BESAR', 11),
(1107, 'KABUPATEN PIDIE', 11),
(1108, 'KABUPATEN ACEH UTARA', 11),
(1109, 'KABUPATEN SIMEULUE', 11),
(1110, 'KABUPATEN ACEH SINGKIL', 11),
(1111, 'KABUPATEN BIREUEN', 11),
(1112, 'KABUPATEN ACEH BARAT DAYA', 11),
(1113, 'KABUPATEN GAYO LUES', 11),
(1114, 'KABUPATEN ACEH JAYA', 11),
(1115, 'KABUPATEN NAGAN RAYA', 11),
(1116, 'KABUPATEN ACEH TAMIANG', 11),
(1117, 'KABUPATEN BENER MERIAH', 11),
(1171, 'KOTA BANDA ACEH', 11),
(1172, 'KOTA SABANG', 11),
(1173, 'KOTA LHOKSEUMAWE', 11),
(1174, 'KOTA LANGSA', 11),
(1201, 'KABUPATEN TAPANULI TENGAH', 12),
(1202, 'KABUPATEN TAPANULI UTARA', 12),
(1203, 'KABUPATEN TAPANULI SELATAN', 12),
(1204, 'KABUPATEN NIAS', 12),
(1205, 'KABUPATEN LANGKAT', 12),
(1206, 'KABUPATEN KARO', 12),
(1207, 'KABUPATEN DELI SERDANG', 12),
(1208, 'KABUPATEN SIMALUNGUN.', 12),
(1209, 'KABUPATEN ASAHAN', 12),
(1210, 'KABUPATEN LABUHAN BATU', 12),
(1211, 'KABUPATEN DAIRI', 12),
(1212, 'KABUPATEN TOBA SAMOSIR', 12),
(1213, 'KABUPATEN MANDAILING NATAL', 12),
(1214, 'KABUPATEN NIAS SELATAN', 12),
(1215, 'KABUPATEN PAKPAK BHARAT', 12),
(1216, 'KABUPATEN HUMBANG HASUNDUTAN', 12),
(1217, 'KABUPATEN SAMOSIR', 12),
(1218, 'KABUPATEN SERDANG BEDAGAI', 12),
(1271, 'KOTA MEDAN', 12),
(1272, 'KOTA PEMATANG SIANTAR', 12),
(1273, 'KOTA SIBOLGA', 12),
(1274, 'KOTA TANJUNG BALAI', 12),
(1275, 'KOTA BINJAI', 12),
(1276, 'KOTA TEBING TINGGI', 12),
(1277, 'KOTA PADANG SIDIMPUAN', 12),
(1301, 'KABUPATEN PESISIR SELATAN', 13),
(1302, 'KABUPATEN SOLOK', 13),
(1303, 'KABUPATEN SAWAHLUNTO/SIJUNJUNG', 13),
(1304, 'KABUPATEN TANAH DATAR', 13),
(1305, 'KABUPATEN PADANG PARIAMAN', 13),
(1306, 'KABUPATEN AGAM', 13),
(1307, 'KABUPATEN LIMA PULUH KOTA', 13),
(1308, 'KABUPATEN PASAMAN', 13),
(1309, 'KABUPATEN KEPULAUAN MENTAWAI.', 13),
(1310, 'KABUPATEN DHARMASRAYA', 13),
(1311, 'KABUPATEN SOLOK SELATAN', 13),
(1312, 'KABUPATEN PASAMAN BARAT', 13),
(1371, 'KOTA PADANG', 13),
(1372, 'KOTA SOLOK', 13),
(1373, 'KOTA SAWAHLUNTO', 13),
(1374, 'KOTA PADANG PANJANG', 13),
(1375, 'KOTA BUKIT TINGGI', 13),
(1376, 'KOTA PAYAKUMBUH', 13),
(1377, 'KOTA PARIAMAN', 13),
(1401, 'KABUPATEN KAMPAR', 14),
(1402, 'KABUPATEN INDRAGIRI HULU', 14),
(1403, 'KABUPATEN BENGKALIS', 14),
(1404, 'KABUPATEN INDRAGIRI HILIR', 14),
(1405, 'KABUPATEN PELALAWAN', 14),
(1406, 'KABUPATEN ROKAN HULU', 14),
(1407, 'KABUPATEN ROKAN HILIR', 14),
(1408, 'KABUPATEN SIAK', 14),
(1409, 'KABUPATEN KUANTAN SINGINGI', 14),
(1471, 'KOTA PEKANBARU', 14),
(1472, 'KOTA DUMAI', 14),
(1501, 'KABUPATEN KERINCI', 15),
(1502, 'KABUPATEN MERANGIN', 15),
(1503, 'KABUPATEN SAROLANGUN', 15),
(1504, 'KABUPATEN BATANG HARI', 15),
(1505, 'KABUPATEN MUARO JAMBI', 15),
(1506, 'KABUPATEN TANJUNG JABUNG BARAT', 15),
(1507, 'KABUPATEN TANJUNG JABUNG TIMUR', 15),
(1508, 'KABUPATEN BUNGO', 15),
(1509, 'KABUPATEN TEBO', 15),
(1571, 'KOTA JAMBI', 15),
(1601, 'KABUPATEN OGAN KOMERING ULU', 16),
(1602, 'KABUPATEN OGAN KOMERING ILIR', 16),
(1603, 'KABUPATEN MUARA ENIM', 16),
(1604, 'KABUPATEN LAHAT', 16),
(1605, 'KABUPATEN MUSI RAWAS', 16),
(1606, 'KABUPATEN MUSI BANYUASIN', 16),
(1607, 'KABUPATEN BANYUASIN', 16),
(1608, 'KABUPATEN OGAN KOMERING ULU TIMUR', 16),
(1609, 'KABUPATEN OGAN KOMERING ULU SELATAN', 16),
(1610, 'KABUPATEN OGAN ILIR', 16),
(1671, 'KOTA PALEMBANG', 16),
(1672, 'KOTA PAGAR ALAM', 16),
(1673, 'KOTA LUBUK LINGGAU', 16),
(1674, 'KOTA PRABUMULIH', 16),
(1701, 'KABUPATEN BENGKULU SELATAN', 17),
(1702, 'KABUPATEN REJANG LEBONG', 17),
(1703, 'KABUPATEN BENGKULU UTARA', 17),
(1704, 'KABUPATEN MUKOMUKO', 17),
(1705, 'KABUPATEN SELUMA', 17),
(1706, 'KABUPATEN KAUR', 17),
(1707, 'KABUPATEN LEBONG', 17),
(1708, 'KABUPATEN KEPAHIANG', 17),
(1771, 'KOTA BENGKULU', 17),
(1801, 'KABUPATEN LAMPUNG SELATAN', 18),
(1802, 'KABUPATEN LAMPUNG TENGAH', 18),
(1803, 'KABUPATEN LAMPUNG UTARA', 18),
(1804, 'KABUPATEN LAMPUNG BARAT', 18),
(1805, 'KABUPATEN TULANG BAWANG', 18),
(1806, 'KABUPATEN TANGGAMUS', 18),
(1807, 'KABUPATEN LAMPUNG TIMUR', 18),
(1808, 'KABUPATEN WAY KANAN', 18),
(1871, 'KOTA BANDAR LAMPUNG', 18),
(1872, 'KOTA METRO', 18),
(1901, 'KABUPATEN BANGKA', 19),
(1902, 'KABUPATEN BELITUNG', 19),
(1903, 'KABUPATEN BANGKA SELATAN', 19),
(1904, 'KABUPATEN BANGKA TENGAH', 19),
(1905, 'KABUPATEN BANGKA BARAT', 19),
(1906, 'KABUPATEN BELITUNG TIMUR', 19),
(1971, 'KOTA PANGKALPINANG', 19),
(2101, 'KABUPATEN KEPULAUAN RIAU', 21),
(2102, 'KABUPATEN KARIMUN', 21),
(2103, 'KABUPATEN NATUNA', 21),
(2104, 'KABUPATEN LINGGA', 21),
(2171, 'KOTA BATAM', 21),
(2172, 'KOTA TANJUNG PINANG', 21),
(3171, 'KOTA JAKARTA PUSAT', 31),
(3172, 'KOTA JAKARTA UTARA', 31),
(3173, 'KOTA JAKARTA BARAT', 31),
(3174, 'KOTA JAKARTA SELATAN', 31),
(3175, 'KOTA JAKARTA TIMUR', 31),
(3176, 'KABUPATEN KEPULAUAN SERIBU', 31),
(3201, 'KABUPATEN BOGOR', 32),
(3202, 'KABUPATEN SUKABUMI', 32),
(3203, 'KABUPATEN CIANJUR', 32),
(3204, 'KABUPATEN BANDUNG', 32),
(3205, 'KABUPATEN GARUT', 32),
(3206, 'KABUPATEN TASIKMALAYA', 32),
(3207, 'KABUPATEN CIAMIS', 32),
(3208, 'KABUPATEN KUNINGAN', 32),
(3209, 'KABUPATEN CIREBON', 32),
(3210, 'KABUPATEN MAJALENGKA', 32),
(3211, 'KABUPATEN SUMEDANG', 32),
(3212, 'KABUPATEN INDRAMAYU', 32),
(3213, 'KABUPATEN SUBANG', 32),
(3214, 'KABUPATEN PURWAKARTA', 32),
(3215, 'KABUPATEN KARAWANG', 32),
(3216, 'KABUPATEN BEKASI', 32),
(3271, 'KOTA BOGOR', 32),
(3272, 'KOTA SUKABUMI', 32),
(3273, 'KOTA BANDUNG', 32),
(3274, 'KOTA CIREBON', 32),
(3275, 'KOTA BEKASI', 32),
(3276, 'KOTA DEPOK', 32),
(3277, 'KOTA CIMAHI', 32),
(3278, 'KOTA TASIKMALAYA', 32),
(3279, 'KOTA BANJAR', 32),
(3301, 'KABUPATEN CILACAP', 33),
(3302, 'KABUPATEN BANYUMAS', 33),
(3303, 'KABUPATEN PURBALINGGA', 33),
(3304, 'KABUPATEN BANJARNEGARA', 33),
(3305, 'KABUPATEN KEBUMEN', 33),
(3306, 'KABUPATEN PURWOREJO', 33),
(3307, 'KABUPATEN WONOSOBO', 33),
(3308, 'KABUPATEN MAGELANG', 33),
(3309, 'KABUPATEN BOYOLALI', 33),
(3310, 'KABUPATEN KLATEN', 33),
(3311, 'KABUPATEN SUKOHARJO', 33),
(3312, 'KABUPATEN WONOGIRI', 33),
(3313, 'KABUPATEN KARANGANYAR', 33),
(3314, 'KABUPATEN SRAGEN', 33),
(3315, 'KABUPATEN GROBOGAN', 33),
(3316, 'KABUPATEN BLORA', 33),
(3317, 'KABUPATEN REMBANG', 33),
(3318, 'KABUPATEN PATI', 33),
(3319, 'KABUPATEN KUDUS', 33),
(3320, 'KABUPATEN JEPARA', 33),
(3321, 'KABUPATEN DEMAK', 33),
(3322, 'KABUPATEN SEMARANG', 33),
(3323, 'KABUPATEN TEMANGGUNG', 33),
(3324, 'KABUPATEN KENDAL', 33),
(3325, 'KABUPATEN BATANG', 33),
(3326, 'KABUPATEN PEKALONGAN', 33),
(3327, 'KABUPATEN PEMALANG', 33),
(3328, 'KABUPATEN TEGAL', 33),
(3329, 'KABUPATEN BREBES', 33),
(3371, 'KOTA MAGELANG', 33),
(3372, 'KOTA SURAKARTA', 33),
(3373, 'KOTA SALATIGA', 33),
(3374, 'KOTA SEMARANG', 33),
(3375, 'KOTA PEKALONGAN', 33),
(3376, 'KOTA TEGAL', 33),
(3401, 'KABUPATEN KULONPROGO', 34),
(3402, 'KABUPATEN BANTUL', 34),
(3403, 'KABUPATEN GUNUNG KIDUL', 34),
(3404, 'KABUPATEN SLEMAN', 34),
(3471, 'KOTA YOGYAKARTA', 34),
(3501, 'KABUPATEN PACITAN', 35),
(3502, 'KABUPATEN PONOROGO', 35),
(3503, 'KABUPATEN TRENGGALEK', 35),
(3504, 'KABUPATEN TULUNGAGUNG', 35),
(3505, 'KABUPATEN BLITAR', 35),
(3506, 'KABUPATEN KEDIRI', 35),
(3507, 'KABUPATEN MALANG', 35),
(3508, 'KABUPATEN LUMAJANG', 35),
(3509, 'KABUPATEN JEMBER', 35),
(3510, 'KABUPATEN BANYUWANGI', 35),
(3511, 'KABUPATEN BONDOWOSO', 35),
(3512, 'KABUPATEN SITUBONDO', 35),
(3513, 'KABUPATEN PROBOLINGGO', 35),
(3514, 'KABUPATEN PASURUAN', 35),
(3515, 'KABUPATEN SIDOARJO', 35),
(3516, 'KABUPATEN MOJOKERTO', 35),
(3517, 'KABUPATEN JOMBANG', 35),
(3518, 'KABUPATEN NGANJUK', 35),
(3519, 'KABUPATEN MADIUN', 35),
(3520, 'KABUPATEN MAGETAN', 35),
(3521, 'KABUPATEN NGAWI', 35),
(3522, 'KABUPATEN BOJONEGORO', 35),
(3523, 'KABUPATEN TUBAN', 35),
(3524, 'KABUPATEN LAMONGAN', 35),
(3525, 'KABUPATEN GRESIK', 35),
(3526, 'KABUPATEN BANGKALAN', 35),
(3527, 'KABUPATEN SAMPANG', 35),
(3528, 'KABUPATEN PAMEKASAN', 35),
(3529, 'KABUPATEN SUMENEP', 35),
(3571, 'KOTA KEDIRI', 35),
(3572, 'KOTA BLITAR', 35),
(3573, 'KOTA MALANG', 35),
(3574, 'KOTA PROBOLINGGO', 35),
(3575, 'KOTA PASURUAN', 35),
(3576, 'KOTA MOJOKERTO', 35),
(3577, 'KOTA MADIUN', 35),
(3578, 'KOTA SURABAYA', 35),
(3579, 'KOTA BATU', 35),
(3601, 'KABUPATEN PANDEGLANG', 36),
(3602, 'KABUPATEN LEBAK', 36),
(3603, 'KABUPATEN TANGGERANG', 36),
(3604, 'KABUPATEN SERANG', 36),
(3605, 'KOTA TANGGERANG', 36),
(3606, 'KOTA CILEGON', 36),
(3671, 'KOTA TANGGERANG', 36),
(3672, 'KOTA CILEGON', 36),
(5101, 'KABUPATEN JEMBRANA', 51),
(5102, 'KABUPATEN TABANAN', 51),
(5103, 'KABUPATEN BADUNG', 51),
(5104, 'KABUPATEN GIANYAR', 51),
(5105, 'KABUPATEN KLUNGKUNG', 51),
(5106, 'KABUPATEN BANGLI', 51),
(5107, 'KABUPATEN KARANG ASEM', 51),
(5108, 'KABUPATEN BULELENG', 51),
(5171, 'KOTA DENPASAR', 51),
(5201, 'KABUPATEN LOMBOK BARAT', 52),
(5202, 'KABUPATEN LOMBOK TENGAH', 52),
(5203, 'KABUPATEN LOMBOK TIMUR', 52),
(5204, 'KABUPATEN SUMBAWA', 52),
(5205, 'KABUPATEN DOMPU', 52),
(5206, 'KABUPATEN BIMA', 52),
(5207, 'KABUPATEN SUMBAWA BARAT', 52),
(5271, 'KOTA MATARAM', 52),
(5272, 'KOTA BIMA', 52),
(5301, 'KABUPATEN KUPANG', 53),
(5302, 'KABUPATEN TIMOR TENGAH SELATAN', 53),
(5303, 'KABUPATEN TIMOR TENGAH UTARA', 53),
(5304, 'KABUPATEN B E L U', 53),
(5305, 'KABUPATEN ALOR', 53),
(5306, 'KABUPATEN FLORES TIMUR', 53),
(5307, 'KABUPATEN SIKKA', 53),
(5308, 'KABUPATEN ENDE', 53),
(5309, 'KABUPATEN NGADA', 53),
(5310, 'KABUPATEN MANGGARAI', 53),
(5311, 'KABUPATEN SUMBA TIMUR', 53),
(5312, 'KABUPATEN SUMBA BARAT', 53),
(5313, 'KABUPATEN LEMBATA.', 53),
(5314, 'KABUPATEN ROTE NDAO', 53),
(5315, 'KABUPATEN MANGGARAI BARAT', 53),
(5371, 'KOTA KUPANG', 53),
(6101, 'KABUPATEN SEKADAU', 61),
(6102, 'KABUPATEN PONTIANAK', 61),
(6103, 'KABUPATEN SANGGAU', 61),
(6104, 'KABUPATEN KETAPANG', 61),
(6105, 'KABUPATEN SINTANG', 61),
(6106, 'KABUPATEN KAPUAS HULU', 61),
(6107, 'KABUPATEN BENGKAYANG', 61),
(6108, 'KABUPATEN LANDAK', 61),
(6109, 'KABUPATEN MELAWI', 61),
(6171, 'KOTA PONTIANAK', 61),
(6172, 'KOTA SINGKAWANG', 61),
(6201, 'KABUPATEN KOTA WARINGIN BARAT', 62),
(6202, 'KABUPATEN KOTA WARINGIN TIMUR', 62),
(6203, 'KABUPATEN KAPUAS', 62),
(6204, 'KABUPATEN BARITO SELATAN', 62),
(6205, 'KABUPATEN BARITO UTARA', 62),
(6206, 'KABUPATEN KATINGAN', 62),
(6207, 'KABUPATEN SERUYAN', 62),
(6208, 'KABUPATEN SUKAMARA', 62),
(6209, 'KABUPATEN LAMANDAU', 62),
(6210, 'KABUPATEN GUNUNG MAS', 62),
(6211, 'KABUPATEN PULANG PISAU', 62),
(6212, 'KABUPATEN MURUNG RAYA', 62),
(6213, 'KABUPATEN BARITO TIMUR', 62),
(6271, 'KOTA PALANGKARAYA', 62),
(6301, 'KABUPATEN TANAH LAUT', 63),
(6302, 'KABUPATEN KOTA BARU', 63),
(6303, 'KABUPATEN BANJAR', 63),
(6304, 'KABUPATEN BARITO KUALA', 63),
(6305, 'KABUPATEN TAPIN', 63),
(6306, 'KABUPATEN HULU SUNGAI SELATAN', 63),
(6307, 'KABUPATEN HULU SUNGAI TENGAH', 63),
(6308, 'KABUPATEN HULU SUNGAI UTARA', 63),
(6309, 'KABUPATEN TABALONG', 63),
(6310, 'KABUPATEN TANAH BUMBU', 63),
(6311, 'KABUPATEN BALANGAN', 63),
(6371, 'KOTA BANJARMASIN', 63),
(6372, 'KOTA BANJAR BARU', 63),
(6401, 'KABUPATEN PASIR', 64),
(6402, 'KABUPATEN KUTAI KARTANEGARA', 64),
(6403, 'KABUPATEN BERAU', 64),
(6404, 'KABUPATEN BULUNGAN', 64),
(6405, 'KABUPATEN NUNUKAN', 64),
(6406, 'KABUPATEN MALINAU', 64),
(6407, 'KABUPATEN KUTAI BARAT', 64),
(6408, 'KABUPATEN KUTAI TIMUR', 64),
(6409, 'KABUPATEN PENAJAM PASER UTARA', 64),
(6471, 'KOTA BALIKPAPAN', 64),
(6472, 'KOTA SAMARINDA', 64),
(6473, 'KOTA TARAKAN', 64),
(6474, 'KOTA BONTANG', 64),
(7101, 'KAB. BOLOANG MONGONDOW', 71),
(7102, 'KAB. MINAHASA', 71),
(7103, 'KAB. KEPULAUAN SANGIHE', 71),
(7104, 'KAB. KEPULAUAN TALAUD', 71),
(7105, 'KAB. MINAHASA SELATAN', 71),
(7171, 'KOTA MANADO', 71),
(7172, 'KOTA BITUNG', 71),
(7173, 'KOTA TOMOHON', 71),
(7201, 'KABUPATEN BANGGAI', 72),
(7202, 'KABUPATEN POSO', 72),
(7203, 'KABUPATEN DONGGALA', 72),
(7204, 'KABUPATEN TOLI TOLI', 72),
(7205, 'KABUPATEN BANGGAI KEPULAUAN', 72),
(7206, 'KABUPATEN MOROWALI', 72),
(7207, 'KABUPATEN BUOL', 72),
(7208, 'KABUPATEN PARIGI MOUTONG', 72),
(7209, 'KABUPATEN TOJO UNA UNA', 72),
(7271, 'KOTA PALU', 72),
(7301, 'KABUPATEN SELAYAR', 73),
(7302, 'KABUPATEN BULUKUMBA', 73),
(7303, 'KABUPATEN BANTAENG', 73),
(7304, 'KABUPATEN JENEPONTO', 73),
(7305, 'KABUPATEN TAKALAR', 73),
(7306, 'KABUPATEN GOWA', 73),
(7307, 'KABUPATEN SINJAI', 73),
(7401, 'KABUPATEN KOLAKA', 74),
(7402, 'KABUPATEN KENDARI', 74),
(7403, 'KABUPATEN MUNA', 74),
(7404, 'KABUPATEN BUTON', 74),
(7405, 'KABUPATEN KONAWE SELATAN', 74),
(7406, 'KABUPATEN BOMBANA', 74),
(7407, 'KABUPATEN WAKATOBI', 74),
(7408, 'KABUPATEN KOLAKA TIMUR', 74),
(7471, 'KOTA KENDARI', 74),
(7472, 'KOTA BAU BAU', 74),
(7501, 'KABUPATEN GORONTALO', 75),
(7502, 'KABUPATEN BOALEMO', 75),
(7503, 'KABUPATEN BONE BOLANGO', 75),
(7504, 'KABUPATEN POHUWATO', 75),
(7571, 'KOTA GORONTALO', 75),
(8101, 'KABUPATEN MALUKU TENGGARA BARAT', 81),
(8102, 'KABUPATEN MALUKU TENGGARA', 81),
(8103, 'KABUPATEN MALUKU TENGAH', 81),
(8104, 'KABUPATEN BURU', 81),
(8105, 'KABUPATEN SERAM BAGIAN BARAT', 81),
(8106, 'KABUPATEN SERAM BAGIAN TIMUR', 81),
(8107, 'KABUPATEN KEPULAUAN ARU', 81),
(8171, 'KOTA AMBON', 81),
(8201, 'KABUPATEN MALUKU UTARA', 82),
(8202, 'KABUPATEN HALMAHERA TENGAH', 82),
(8203, 'KABUPATEN HALMAHERA UTARA', 82),
(8204, 'KABUPATEN HALMAHERA SELATAN', 82),
(8205, 'KABUPATEN KEPULAUAN SULA', 82),
(8206, 'KABUPATEN HALMAHERA TIMUR', 82),
(8207, 'KOTA TIDORE KEPULAUAN', 82),
(8271, 'KOTA TERNATE', 82),
(9101, 'KABUPATEN PUNCAK JAYA', 91),
(9102, 'KABUPATEN WAROPEN', 91),
(9103, 'KABUPATEN JAYAPURA', 91),
(9104, 'KABUPATEN NABIRE', 91),
(9105, 'KABUPATEN FAK FAK', 91),
(9106, 'KABUPATEN SORONG', 91),
(9107, 'KABUPATEN MANOKWARI', 91),
(9108, 'KABUPATEN YAPEN WAROPEN', 91),
(9109, 'KABUPATEN BIAK NUMFOR', 91),
(9111, 'KABUPATEN PANIAI', 91),
(9112, 'KABUPATEN MIMIKA', 91),
(9113, 'KABUPATEN SARMI', 91),
(9114, 'KABUPATEN KEEROM', 91),
(9115, 'KABUPATEN SORONG SELATAN', 91),
(9116, 'KABUPATEN RAJA AMPAT', 91),
(9117, 'KABUPATEN PEGUNUNGAN BINTANG', 91),
(9118, 'KABUPATEN YAHUKIMO', 91),
(9119, 'KABUPATEN TOLIKARA', 91),
(9121, 'KABUPATEN KAIMANA', 91),
(9122, 'KABUPATEN BOVEN DIGUL', 91),
(9123, 'KABUPATEN MAPPI', 91),
(9124, 'KABUPATEN ASMAT', 91),
(9125, 'KABUPATEN SUPIORI', 91),
(9126, 'KABUPATEN TELUK WONDAMA', 91),
(9171, 'KOTA JAYAPURA', 91),
(9172, 'KOTA SORONG', 91),
(9205, 'KABUPATEN FAK FAK', 92),
(9206, 'KABUPATEN SORONG', 92),
(9207, 'KABUPATEN MANOKWARI', 92),
(9215, 'KABUPATEN SORONG SELATAN', 92),
(9216, 'KABUPATEN RAJA AMPAT', 92),
(9221, 'KABUPATEN KAIMANA', 92),
(9225, 'KABUPATEN TELUK BINTUNI', 92),
(9226, 'KABUPATEN TELUK WONDAMA', 92),
(9272, 'KOTA SORONG', 92);

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE IF NOT EXISTS `kandidat` (
  `id_kandidat` int(8) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` varchar(11) DEFAULT NULL,
  `usia` varchar(10) NOT NULL,
  `alamat` text,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `jenkel` varchar(7) DEFAULT NULL,
  `hijab` varchar(10) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `status_kawin` varchar(20) DEFAULT NULL,
  `t_bdn` varchar(7) DEFAULT NULL,
  `b_bdn` varchar(7) DEFAULT NULL,
  `kebangsaan` varchar(30) DEFAULT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `jns_perusahaan` varchar(50) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `periode` varchar(40) DEFAULT NULL,
  `deskripsi1` text,
  `deskripsi2` text,
  `deskripsi3` text,
  `gaji_terakhir` varchar(30) DEFAULT NULL,
  `gaji_diinginkan` varchar(50) DEFAULT NULL,
  `kualifikasi` text NOT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `jurusan` varchar(40) DEFAULT NULL,
  `nama_sekolah` varchar(40) DEFAULT NULL,
  `thn_lulus` varchar(5) DEFAULT NULL,
  `ipk` varchar(4) DEFAULT NULL,
  `dilamar` text,
  `no_aplikasi` varchar(20) DEFAULT NULL,
  `interviewer` varchar(30) DEFAULT NULL,
  `sumber` varchar(25) DEFAULT NULL,
  `ket` text,
  `date` varchar(12) DEFAULT NULL,
  `status_pengiriman` varchar(50) DEFAULT NULL,
  `cabang` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `tgl_pengiriman` varchar(12) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `tgl_efektif` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan`
--

CREATE TABLE IF NOT EXISTS `kelengkapan` (
  `id_lengkap` int(5) NOT NULL,
  `id_kandidat` int(5) NOT NULL,
  `ijazah` varchar(2) DEFAULT NULL,
  `sertifikat` varchar(2) DEFAULT NULL,
  `surat_ket_kerja` varchar(2) DEFAULT NULL,
  `skkb` varchar(2) DEFAULT NULL,
  `surat_ket_sehat` varchar(2) DEFAULT NULL,
  `photo` varchar(2) DEFAULT NULL,
  `tes_kepribadian` varchar(2) DEFAULT NULL,
  `tes_iq` varchar(2) DEFAULT NULL,
  `tes_eq` varchar(2) DEFAULT NULL,
  `lain` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerja`
--

CREATE TABLE IF NOT EXISTS `kerja` (
  `id_kerja` int(5) NOT NULL,
  `id_kandidat` int(5) NOT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `jns_perusahaan` varchar(50) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `periode` varchar(40) DEFAULT NULL,
  `deskripsi1` text,
  `deskripsi2` text,
  `deskripsi3` text,
  `gaji_terakhir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kunci`
--

CREATE TABLE IF NOT EXISTS `kunci` (
  `id_kunci` int(4) NOT NULL,
  `nama_tes` varchar(50) NOT NULL,
  `jumlah_soal` varchar(3) NOT NULL,
  `kunci_jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_biji` int(5) NOT NULL,
  `id_kandidat` int(5) NOT NULL,
  `kategori_tes` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `id_nilai` int(8) NOT NULL,
  `id_kandidat` int(8) NOT NULL,
  `tgl_periksa` varchar(11) DEFAULT NULL,
  `tgl_interview` varchar(11) DEFAULT NULL,
  `tgl_psikotes` varchar(11) DEFAULT NULL,
  `penampilan` varchar(2) DEFAULT NULL,
  `komunikasi` varchar(2) DEFAULT NULL,
  `sikap` varchar(2) DEFAULT NULL,
  `pemahaman` varchar(2) DEFAULT NULL,
  `komitmen` varchar(2) DEFAULT NULL,
  `pengalaman` varchar(2) DEFAULT NULL,
  `komputer` varchar(15) DEFAULT NULL,
  `inggris` varchar(15) DEFAULT NULL,
  `kl1` text,
  `kl2` text,
  `kl3` text,
  `kl4` text,
  `kl5` text,
  `kr1` text,
  `kr2` text,
  `kr3` text,
  `kr4` text,
  `kr5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id_posisi` int(3) NOT NULL,
  `nama_posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(10) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(11, 'Nanggroe Aceh Darussalaam'),
(12, 'Sumatra Utara'),
(13, 'Sumatra Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatra Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kep. Bangka Belitung'),
(21, 'Kep. Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua'),
(92, 'Irian Jaya Barat');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cabang`
--

CREATE TABLE IF NOT EXISTS `sub_cabang` (
  `id_cabang` int(4) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cabang`
--

INSERT INTO `sub_cabang` (`id_cabang`, `id_customer`, `nama_cabang`) VALUES
(1, 3, 'depok'),
(2, 11, 'Bekasi'),
(3, 25, 'jakarta selatan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_posisi`
--

CREATE TABLE IF NOT EXISTS `sub_posisi` (
  `id_sub_posisi` int(4) NOT NULL,
  `id_posisi` int(3) NOT NULL,
  `nama_sub_posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_customer`
--

CREATE TABLE IF NOT EXISTS `tmp_customer` (
  `id_tmp_customer` int(10) NOT NULL,
  `id_kandidat` int(5) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `cabang` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `tgl_pengiriman` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(3, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `kelengkapan`
--
ALTER TABLE `kelengkapan`
  ADD PRIMARY KEY (`id_lengkap`);

--
-- Indexes for table `kerja`
--
ALTER TABLE `kerja`
  ADD PRIMARY KEY (`id_kerja`);

--
-- Indexes for table `kunci`
--
ALTER TABLE `kunci`
  ADD PRIMARY KEY (`id_kunci`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_biji`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `sub_cabang`
--
ALTER TABLE `sub_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `sub_posisi`
--
ALTER TABLE `sub_posisi`
  ADD PRIMARY KEY (`id_sub_posisi`);

--
-- Indexes for table `tmp_customer`
--
ALTER TABLE `tmp_customer`
  ADD PRIMARY KEY (`id_tmp_customer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9273;
--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelengkapan`
--
ALTER TABLE `kelengkapan`
  MODIFY `id_lengkap` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kerja`
--
ALTER TABLE `kerja`
  MODIFY `id_kerja` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kunci`
--
ALTER TABLE `kunci`
  MODIFY `id_kunci` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_biji` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `sub_cabang`
--
ALTER TABLE `sub_cabang`
  MODIFY `id_cabang` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_posisi`
--
ALTER TABLE `sub_posisi`
  MODIFY `id_sub_posisi` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp_customer`
--
ALTER TABLE `tmp_customer`
  MODIFY `id_tmp_customer` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
