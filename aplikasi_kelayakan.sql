-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2017 at 12:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_kelayakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` int(50) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `umur` int(2) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `penghasilan` int(8) NOT NULL,
  `jml_ang_kel` int(2) NOT NULL,
  `status_rumah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_customer`
--

INSERT INTO `data_customer` (`id_customer`, `nama_cust`, `alamat`, `no_hp`, `umur`, `pekerjaan`, `penghasilan`, `jml_ang_kel`, `status_rumah`) VALUES
(2, 'Bu Amah', 'karawang', '085811501068', 3, '2', 2, 2, '2'),
(3, 'Bu Dedeh Kurniasih ', 'karawang', '081546905721', 3, '2', 3, 3, '3'),
(4, 'Teh Nia/mama jio', 'Karawang', '085745634712', 4, '1', 2, 2, '2'),
(5, 'Umi Nunu', 'Karawang', '085743721348', 3, '2', 2, 2, '2'),
(6, 'MAMA FIDA', ' perum mustika prakasa blok c8 no.11a karawang', '0858406785001', 3, '2', 2, 3, '3'),
(7, 'amel', ' buaran', '08986467125', 4, '2', 2, 3, '1'),
(8, 'Bu Hj.Rohmi', ' kp.babakan jati rt.02/03 desa pancawati kec.klari', '085756432678', 3, '2', 3, 3, '3'),
(23, 'Bu tia', 'Jakarta', '089567345243', 4, '2', 2, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alamat`
--

CREATE TABLE `tbl_alamat` (
  `kode_id` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alamat`
--

INSERT INTO `tbl_alamat` (`kode_id`, `kota`) VALUES
('31.75', 'Jakarta Timur'),
('32.15', 'Karawang'),
('32.15.01', 'karawang Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(8) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `descr` text NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga`, `satuan`, `descr`, `img`) VALUES
(1, 'Panci', 100000, 'dus', '1 set panci dengan tutupnya ', 'index.php'),
(2, 'kompor sugo', 1950000, 'dus', 'kompor gas dua tungku yang dilengkapi dengan bara infrared sehingga pemanasan lebih panas sempurna. Dengan Suggo Gas, makanan lebih cepat matang, lebih hemat waktu memasak, dan lebih hemat gas. ', 'kompor sugo.jpg'),
(3, 'Europa pot', 1300000, 'dus', ' konsep memasak 15 menit, fungsi tahan panas/ dingin selama 10 jam, hemat gas hingga 80%, tidak menggunakan listrik, hemat waktu dan biaya', 'europa pot.jpg'),
(4, 'sugo pot', 1600000, 'set', ' Dapat berfungsi sebagai pressure cooker, slow cooker, panci tim dan memasak makanan yang lain nyaKonsep memasak 15menit, Memasak dengan sangat cepat, Tidak menggunakan tenaga listrik, hemat waktu dan biaya, Vitamin pada makanan tetap utuh (tidak hilang dikarenakan proses memasak)', 'sugo pot.jpg'),
(5, '7 cooker', 1180000, 'set', ' merupakan peralatan masak multifungsi', '7 cooker.jpg'),
(6, 'Golden wok', 875000, 'pcs', ' bisa digunakan untuk wok penggorengan anti lengket hanya dengan seoles minyak , pada saat ditutup dengan penutup, maka panci ini bisa sekaligus digunakan untuk mengempukkan daging slow cooker seperti presto dengan cepat dan yang paling utama dapat menghemat waktu memasak dan gas.', 'panci golden wok.jpg'),
(7, 'panci water', 1200000, 'pcs', ' panci sebaguna untuk memasak, tahan panas.', 'panci water.jpg'),
(8, 'panci water', 1200000, 'pcs', ' panci sebaguna untuk memasak, tahan panas.', 'panci water.jpg'),
(9, 'panci water', 1200000, 'pcs', ' panci sebaguna untuk memasak, tahan panas.', 'panci water.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id_customer` int(50) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `jml_ang_kel` varchar(50) NOT NULL,
  `status_rumah` varchar(50) NOT NULL,
  `status_kelayakan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id_customer`, `nama_cust`, `alamat`, `no_hp`, `umur`, `pekerjaan`, `penghasilan`, `jml_ang_kel`, `status_rumah`, `status_kelayakan`) VALUES
(1, 'bu amah ', 'karawang', '85745635456', '2', '2', '1', '3', '1', 0),
(2, 'bu dedeh', 'karawang', '85711567456', '2', '1', '2', '3', '1', 1),
(3, 'TEH NIA/MAMA JIO', 'karawang', '87924357235', '1', '1', '1', '3', '1', 0),
(4, 'UMI NUNU', 'karawang', '85811501068', '2', '2', '2', '3', '1', 1),
(5, 'MAMA FIDA', 'Karawang', '85898483878', '2', '2', '2', '3', '3', 1),
(6, 'BU AAT/ANITA(ANAK)', 'Karawang', '89678477487', '3', '3', '4', '3', '3', 1),
(7, 'BU LILIS(TEH YULI)', 'Karawang', '87837468286', '2', '2', '2', '3', '1', 1),
(8, 'BU DIAH', 'Karawang', '89657567456', '2', '2', '2', '3', '1', 1),
(9, 'HJ. SITI AISYAH/TEH TIA', 'Karawang', '85567453654', '3', '2', '3', '3', '1', 1),
(10, 'BU IKA/MAMA INA', 'Karawang', '87567456345', '2', '1', '2', '3', '1', 1),
(11, 'BU HJ. ROHMI', 'Karawang', '85711675837', '3', '2', '2', '3', '1', 1),
(12, 'BU RT HJ.ANIH/RT KARYA', 'Karawang', '87567356725', '3', '1', '2', '3', '1', 1),
(13, 'BU RT HJ.ANIS/ UMI EUIS', 'Karawang', '87847874887', '3', '1', '2', '3', '1', 1),
(14, 'BU RT HJ.ANIH/TEH WARSIH', 'Karawang', '87535676576', '4', '1', '2', '3', '1', 1),
(15, 'BU ATI', 'Karawang', '89785678756', '2', '1', '2', '3', '3', 1),
(16, 'BU ANIH', 'Karawang', '85711501068', '2', '3', '4', '3', '3', 1),
(17, 'BU CAWI', 'Karawang', '85786367657', '3', '2', '2', '3', '1', 1),
(18, 'SRI HARTI/PAK SUNGKONO', 'Karawang', '85677876255', '2', '2', '3', '3', '1', 1),
(19, 'IBU MALA', 'Karawang', '85711893957', '3', '1', '2', '3', '1', 1),
(20, 'BU ADE', 'Karawang', '85745624678', '3', '2', '2', '3', '1', 1),
(21, 'SITI SAHARA/MAMAH TIKA', 'Karawang', '82275687898', '2', '1', '1', '3', '1', 0),
(22, 'BP DANIL/WAWAN', 'Karawang', '89657556376', '2', '2', '3', '3', '2', 1),
(23, 'MARYAMAH', 'Karawang', '89657435654', '2', '2', '2', '3', '3', 1),
(24, 'LILIT LITIAWATI', 'Karawang', '87635267265', '2', '2', '3', '3', '3', 1),
(25, 'TEH OMAH', 'Karawang', '87546472546', '2', '3', '4', '3', '2', 1),
(26, 'BU ADA SUSANTI', 'Karawang', '85745376533', '2', '1', '2', '4', '2', 0),
(27, 'BU INEM', 'Karawang', '85711564567', '2', '2', '2', '3', '3', 1),
(28, 'BU AYATI', 'Karawang', '87636787366', '2', '1', '1', '2', '1', 0),
(29, 'BU MEGA AULIA', 'Karawang', '85711675676', '3', '2', '2', '2', '1', 0),
(30, 'BU SATRYA/BU DAENG', 'Karawang', '85764564378', '2', '2', '2', '3', '1', 0),
(31, 'BP DANIL/WAWAN', 'Karawang', '87654736746', '2', '2', '1', '3', '2', 0),
(32, 'MARYAMAH', 'Karawang', '85754326556', '3', '1', '1', '3', '3', 0),
(33, 'LILIT LITIAWATI', 'Karawang', '81367558675', '3', '2', '3', '3', '3', 1),
(34, 'TEH OMAH', 'Karawang', '82277743673', '2', '2', '2', '2', '1', 0),
(35, 'BU ADA SUSANTI', 'Karawang', '85765736537', '3', '2', '3', '3', '3', 1),
(36, 'BU INEM', 'Karawang', '81283848368', '2', '2', '3', '3', '3', 1),
(37, 'BU AYATI', 'Karawang', '87478467875', '3', '3', '3', '3', '1', 1),
(38, 'TRI WAHYUNI', 'Jakarta', '82289207590', '4', '2', '2', '3', '3', 1),
(39, 'MULYADI', 'Jakarta', '85790275902', '3', '3', '3', '3', '2', 1),
(40, 'BU MUTININGSIH/MB MUTIA', 'Karawang', '85738294874', '2', '2', '2', '2', '1', 0),
(41, 'MAMAH TIKA', 'Karawang', '85772647198', '3', '1', '1', '3', '1', 0),
(42, 'NURAINI/MAMAH ILHAM', 'Karawang', '82274842648', '3', '2', '2', '2', '1', 0),
(43, 'BU INDRI/MAMA ZIDAN', 'Karawang', '81272747483', '3', '2', '3', '3', '3', 1),
(44, 'BU NUNUNG', 'Karawang', '87372818368', '3', '1', '2', '3', '1', 0),
(45, 'DWI SUJARWATI/MAMA DAFA', 'Karawang', '81272846882', '3', '1', '2', '3', '2', 1),
(46, 'SUPIAH/MAMA ALIYA', 'Karawang', '85773286472', '3', '2', '3', '3', '3', 1),
(47, 'SANTIKA/IKAH', 'Karawang', '81782868565', '3', '2', '3', '3', '2', 1),
(48, 'IRA HARYANTI/TEGUH', 'Karawang', '85782979272', '3', '2', '3', '3', '1', 1),
(49, 'SUKAESIH', 'Karawang', '87724858298', '4', '1', '2', '3', '1', 0),
(50, 'SUKAESIH/GINA', 'Karawang', '85689398748', '3', '2', '3', '3', '2', 1),
(51, 'SOPIATI/TEH OMAH', 'Karawang', '87673823876', '3', '2', '3', '3', '1', 1),
(52, 'IBU YATI NURHAYATI/WARUNG', 'Karawang', '85783937298', '3', '2', '3', '3', '3', 1),
(53, 'BU ENTIN', 'Karawang', '87837638982', '3', '2', '2', '3', '2', 1),
(54, 'BU WIWIN/MAH WIWIN', 'Karawang', '85672827848', '3', '1', '2', '2', '1', 0),
(55, 'IBU TATI RAHMAWATI/TEH NYAI', 'Karawang', '87826828628', '3', '1', '2', '3', '1', 0),
(56, 'E. SITI ROBIAH/BU ENENG', 'Karawang', '85787286286', '2', '2', '3', '2', '3', 1),
(57, 'HJ SITI AISIAH', 'Karawang', '85728924782', '2', '2', '3', '3', '3', 1),
(58, 'IBU DUDEH UTIAH', 'Karawang', '85727636474', '3', '2', '2', '3', '3', 1),
(59, 'IBU AAH', 'Karawang', '87874837467', '2', '2', '3', '3', '3', 1),
(60, 'IBU KARWATI', 'Karawang', '85882479812', '3', '2', '3', '3', '3', 1),
(61, 'HJ EMAT', 'Karawang', '85782648257', '2', '2', '3', '3', '3', 1),
(62, 'WAWAN HERMAWAN', 'Karawang', '87937459229', '2', '2', '3', '3', '3', 1),
(63, 'BU NANI/PAK TOLE', 'Karawang', '82283846598', '2', '1', '2', '3', '1', 0),
(64, 'BU MARYATI/BU OMAH', 'Karawang', '87283865389', '3', '2', '2', '3', '1', 0),
(65, 'BU AI MARYAMI', 'Karawang', '86788367288', '3', '1', '2', '3', '1', 0),
(66, 'NURHAYATI/BP ANDI RT', 'Karawang', '85782811658', '2', '2', '3', '3', '3', 1),
(67, 'TIKA', 'Karawang', '85782782629', '4', '1', '2', '3', '3', 1),
(68, 'TINI', 'Karawang', '87383957923', '3', '2', '3', '3', '3', 1),
(69, 'SITI AMINAH (KOORD.TEH JUJU)', 'Karawang', '85692729675', '3', '2', '3', '3', '3', 1),
(70, 'SITI JUARIAH/TEH JUJU', 'Karawang', '85728958928', '3', '2', '3', '3', '1', 1),
(71, 'LAILA SARI(KOORD. TEH JUJU)', 'Karawang', '85789272928', '3', '2', '3', '3', '3', 1),
(72, 'BP TETENG SAHEPUDIN', 'Karawang', '87958945879', '2', '3', '3', '3', '3', 1),
(73, 'ELA/BP.SULAEMAN', 'Karawang', '85789275928', '3', '1', '2', '3', '1', 0),
(74, 'MAENA/TEH JUJUK', 'Karawang', '85782792932', '3', '2', '3', '3', '3', 1),
(75, 'TITIN RUSTINI', 'Karawang', '82281967958', '3', '1', '2', '3', '1', 0),
(76, 'IBU LATIP/WARUNG', 'Karawang', '86943759784', '2', '2', '3', '3', '3', 1),
(77, 'HERI SUSANTI', 'Karawang', '85789749438', '3', '2', '3', '3', '2', 1),
(78, 'BU ROMAH', 'Karawang', '85874875464', '2', '2', '3', '3', '3', 1),
(79, 'HJ. DIDO', 'Karawang', '85789589654', '3', '2', '4', '3', '3', 1),
(80, 'SRI SUMIATI', 'Karawang', '87398379376', '2', '2', '3', '3', '3', 1),
(81, 'HJ.ENGKA/KARDIAH/BU LURAH', 'Karawang', '85725789829', '2', '2', '3', '3', '3', 1),
(82, 'NENENG EMBUN', 'Karawang', '85784934784', '3', '1', '2', '3', '1', 0),
(83, 'LUSI', 'Karawang', '82284384383', '3', '2', '2', '3', '1', 0),
(84, 'BU RINCI/WARUNG', 'Karawang', '85782975942', '3', '2', '3', '3', '3', 1),
(85, 'BU WIWIN', 'Karawang', '81282929759', '3', '1', '2', '3', '1', 0),
(86, 'DANIS', 'Karawang', '85782789275', '3', '2', '3', '3', '2', 1),
(87, 'AAN RIWA WAHYUTI/BU ERIK', 'Karawang', '85799282785', '3', '2', '3', '3', '3', 1),
(88, 'RONI MAULANA', 'Karawang', '81292983383', '3', '2', '2', '3', '1', 0),
(89, 'DEWI RATNA SARI', 'Karawang', '85782974927', '3', '1', '2', '3', '2', 0),
(90, 'BU KIAH/BP ACE SAHRONI', 'Karawang', '82292729485', '2', '2', '3', '3', '1', 1),
(91, 'BU ECAH/NUMSAH', 'Karawang', '89749375489', '2', '2', '2', '3', '3', 1),
(92, 'BU OMI', 'Karawang', '81292782859', '3', '1', '2', '3', '1', 0),
(93, 'MAMA PARLIN/BU NURMA', 'Karawang', '87812976198', '3', '2', '3', '3', '3', 1),
(94, 'BU SUHERTI', 'Karawang', '85782978439', '3', '2', '3', '3', '3', 1),
(95, 'SRI MULYANI', 'Karawang', '81283294389', '3', '2', '3', '2', '3', 1),
(96, 'HJ. EMPAT PATIMAH', 'Karawang', '87728296238', '2', '2', '3', '3', '3', 1),
(97, 'BPK RAMBLI/BU RATNA', 'Karawang', '85798272975', '2', '2', '3', '3', '1', 1),
(98, 'BU UKI', 'Jakarta Timur', '87828754828', '3', '3', '4', '3', '1', 1),
(99, 'BU KUNI', 'Jakarta Timur', '85792729758', '3', '2', '3', '3', '3', 1),
(100, 'BU TERESIA/MAMA ALFEN', 'Jakarta Timur', '87837875898', '3', '2', '3', '3', '3', 1),
(101, 'IBU YANA', 'Jakarta Timur', '85798478875', '3', '2', '3', '3', '3', 1),
(102, 'BU SITI AMANAH', 'Jakarta Timur', '87767567987', '2', '2', '3', '3', '3', 1),
(103, 'MARGIANTI', 'Jakarta Timur', '85789837647', '3', '2', '3', '3', '3', 1),
(104, 'HJ MUSLIMAH', 'Jakarta Timur', '81273898758', '2', '3', '4', '3', '3', 1),
(105, 'BU YANTI/MAMAH BILA', 'Jakarta Timur', '85782984049', '3', '2', '3', '3', '3', 1),
(106, 'HJ MUSLIMAH', 'Jakarta Timur', '87827379874', '3', '2', '3', '3', '3', 1),
(107, 'SYAMSUL MA ARIF', 'Jakarta Timur', '87838748987', '2', '2', '4', '3', '3', 1),
(108, 'AGUS', 'Jakarta Timur', '85789867802', '2', '2', '3', '3', '2', 1),
(109, 'HERLINA', 'Jakarta Timur', '85784893758', '4', '2', '3', '3', '2', 1),
(110, 'JAMAL', 'Jakarta Timur', '85811501068', '3', '1', '2', '3', '1', 0),
(111, 'SUGIARTI', 'Jakarta Timur', '85748398449', '3', '1', '2', '3', '1', 0),
(112, 'IBU MITIH', 'Jakarta Timur', '85702984890', '2', '2', '3', '3', '3', 1),
(113, 'SELVI', 'Jakarta Timur', '85789287489', '3', '2', '3', '3', '1', 1),
(114, 'ESIH SUKAESIH', 'Jakarta Timur', '82283782974', '3', '2', '2', '3', '3', 1),
(115, 'KOKOM KONIAH', 'Jakarta Timur', '87667289737', '3', '1', '2', '3', '1', 0),
(116, 'BPK ATANG APANDI/BU NANCY', 'Karawang', '85782987479', '2', '2', '3', '3', '3', 1),
(117, 'IKAH SARTIKAH/YAYAH (RO)', 'Karawang', '82200874809', '3', '2', '3', '3', '3', 1),
(118, 'YANTI EDAH/ANAK BU YAYAH', 'Karawang', '85782729274', '3', '1', '2', '3', '1', 0),
(119, 'BU SUPIATI', 'Jakarta Timur', '82289173898', '2', '2', '3', '3', '3', 1),
(120, 'SITI AISAH', 'Jakarta Timur', '85782973499', '3', '2', '3', '3', '3', 1),
(121, 'BU RW DEDE', 'Jakarta Timur', '85792837580', '2', '2', '4', '3', '3', 1),
(122, 'BU SANTI/NURHAYATI', 'Jakarta Timur', '85793873498', '3', '2', '3', '3', '3', 1),
(123, 'BU CICIH', 'Jakarta Timur', '85783975947', '3', '2', '3', '3', '3', 1),
(124, 'BU SITI/BU RINI', 'Jakarta Timur', '86789317849', '3', '2', '3', '3', '3', 1),
(125, 'LILI AZAROH', 'Jakarta Timur', '85789398739', '3', '3', '4', '3', '3', 1),
(126, 'NIJAH SUSILA/BU SUSI', 'Jakarta Timur', '85793873985', '3', '2', '3', '3', '3', 1),
(127, 'BU ALIYAH/BP BANDI', 'Jakarta Timur', '81289427498', '3', '3', '4', '3', '3', 1),
(128, 'BU TARSIH', 'Jakarta Timur', '85782973987', '3', '2', '3', '3', '3', 1),
(129, 'BU RATNA/WARDANI', 'Jakarta Timur', '85678275782', '3', '3', '3', '3', '3', 1),
(130, 'BU AYAT/SURYATI', 'Jakarta Timur', '87994457689', '3', '2', '3', '3', '3', 1),
(131, 'BU RT ASIH/YULIASIH', 'Jakarta Timur', '85782975927', '3', '3', '4', '3', '3', 1),
(132, 'BU ERNI', 'Jakarta Timur', '85847498475', '3', '2', '3', '3', '3', 1),
(133, 'BU RT YAMIN', 'Jakarta Timur', '81289385579', '3', '3', '3', '3', '3', 1),
(134, 'HJ ROBYAH', 'Jakarta Timur', '85783984784', '3', '2', '4', '3', '3', 1),
(135, 'FITRI', 'Jakarta Timur', '86783497589', '3', '1', '2', '3', '2', 0),
(136, 'BU SAIDAH', 'Jakarta Timur', '85783965893', '3', '2', '2', '3', '1', 0),
(137, 'BU PIPIT', 'Jakarta Timur', '82282539875', '3', '2', '4', '3', '3', 1),
(138, 'BU ADE', 'Jakarta Timur', '86890385690', '3', '2', '3', '3', '3', 1),
(139, 'BU SULASTRI', 'Jakarta Timur', '85783578938', '3', '2', '3', '3', '3', 1),
(140, 'BU RT RAHMA', 'Jakarta Timur', '85772982378', '3', '2', '3', '3', '3', 1),
(141, 'BU EDAH', 'Jakarta Timur', '82282987548', '3', '3', '4', '3', '3', 1),
(142, 'BU IDA', 'Jakarta Timur', '85782085909', '3', '3', '4', '3', '3', 1),
(143, 'DEWI/MAMA RAIHAN', 'Jakarta Timur', '81293847944', '3', '2', '3', '3', '3', 0),
(144, 'DEVI/MAMA RAIHAN', 'Jakarta Timur', '85709285992', '3', '2', '3', '3', '3', 1),
(145, 'ENDAH ZUBAEDAH/KADER PKK', 'Jakarta Timur', '81282098498', '3', '2', '3', '3', '3', 1),
(146, 'BU KORI/BU SITI', 'Jakarta Timur', '85783848579', '2', '2', '3', '3', '3', 1),
(147, 'BP EKO', 'Jakarta Timur', '81289275980', '2', '2', '3', '3', '3', 1),
(148, 'BU EMI', 'Jakarta Timur', '85789857892', '2', '2', '4', '3', '3', 1),
(149, 'NURAINI AMIN', 'Jakarta Timur', '85782975892', '3', '2', '4', '3', '3', 1),
(150, 'BU YULI ROSMIKA/MAMA NESA', 'Karawang', '85782857828', '2', '2', '3', '3', '3', 1),
(151, 'BU ARISAH/IBU ENGKI', 'Karawang', '82289474987', '2', '2', '3', '3', '3', 1),
(152, 'BU HJ NINA HENDARSIH', 'Karawang', '81238497590', '2', '2', '4', '3', '3', 1),
(153, 'BU ROHAYATI/BU YATI', 'Karawang', '85792407580', '2', '2', '3', '3', '3', 1),
(154, 'BU POPON', 'Jakarta Timur', '85782985892', '3', '2', '4', '3', '3', 1),
(155, 'BU LINA', 'Jakarta Timur', '85782875892', '2', '2', '3', '3', '3', 1),
(156, 'AMINAH/MAMA DEVI', 'Jakarta Timur', '81284783975', '2', '2', '2', '3', '2', 0),
(157, 'MAMA EVA', 'Jakarta Timur', '82274958568', '3', '2', '2', '3', '1', 0),
(158, 'BU AFNI', 'Jakarta Timur', '81284857895', '3', '2', '3', '3', '3', 1),
(159, 'BU MARFUAH', 'Jakarta Timur', '85782759276', '3', '2', '3', '3', '2', 1),
(160, 'BU NAFSIAH', 'Jakarta Timur', '82287838658', '3', '2', '3', '3', '3', 1),
(161, 'HARIANI/UWAS', 'Jakarta Timur', '85792580927', '3', '2', '4', '3', '3', 1),
(162, 'BUNDA SANTI/IBU YANI', 'Jakarta Timur', '85789275893', '3', '2', '2', '3', '3', 1),
(163, 'IBU RENA', 'Jakarta Timur', '82274895789', '3', '2', '4', '3', '3', 1),
(164, 'IBU SANTI/MAMA NOVI', 'Jakarta Timur', '85792075087', '3', '2', '4', '3', '2', 1),
(165, 'IBU IDRIS/IBU YANA', 'Jakarta Timur', '85798275085', '3', '2', '3', '3', '3', 1),
(166, 'IBU JINEM', 'Jakarta Timur', '85782757898', '3', '2', '3', '3', '3', 1),
(167, 'SULARMI', 'Jakarta Timur', '82274892765', '3', '2', '3', '3', '3', 1),
(168, 'MARIA GELU', 'Jakarta Timur', '85702758858', '3', '3', '5', '3', '3', 1),
(169, 'B.A SUTINAH', 'Jakarta Timur', '81284738754', '2', '3', '5', '3', '3', 1),
(170, 'ROPIDAH SUDIANA', 'Jakarta Timur', '82284987590', '3', '2', '4', '3', '3', 1),
(171, 'NURHAYATI', 'Jakarta Timur', '81284975903', '2', '2', '4', '3', '3', 1),
(172, 'RUKILAH', 'Jakarta Timur', '86893768938', '2', '2', '4', '3', '3', 1),
(173, 'SRI WIDI', 'Jakarta Timur', '85782758924', '3', '2', '4', '3', '3', 1),
(174, 'YULIYANTI', 'Jakarta Timur', '81289794307', '3', '2', '4', '3', '3', 1),
(175, 'DESSY RUSTANTI', 'Jakarta Timur', '85784876893', '3', '2', '3', '3', '3', 1),
(176, 'DEVI JULIANTI', 'Jakarta Timur', '82278493578', '3', '2', '3', '3', '3', 1),
(177, 'BAPAK SANTOSO', 'Jakarta Timur', '85789876809', '2', '3', '4', '3', '3', 1),
(178, 'SATIYEM/TONI', 'Jakarta Timur', '85702850298', '3', '1', '2', '3', '2', 0),
(179, 'YANTI', 'Jakarta Timur', '85783084969', '3', '2', '2', '3', '2', 0),
(180, 'ACIH SUKAESIH', 'Jakarta Timur', '85783975494', '3', '2', '4', '3', '3', 1),
(181, 'B.ADE', 'Jakarta Timur', '87883987893', '2', '2', '4', '3', '3', 1),
(182, 'B.HASANAH', 'Jakarta Timur', '85782958784', '2', '2', '4', '3', '3', 1),
(183, 'NURSALLY.O/MAMA FIRA', 'Jakarta Timur', '85782957839', '3', '2', '3', '3', '3', 1),
(184, 'SHANTI/IBU AIRA', 'Jakarta Timur', '82285985837', '3', '3', '3', '3', '3', 1),
(185, 'KIYAMU BINAFSIH', 'Jakarta Timur', '87898275894', '3', '2', '4', '3', '3', 1),
(186, 'NURSALLY.O/MAMA FIRA', 'Jakarta Timur', '85792758648', '3', '2', '4', '3', '3', 1),
(187, 'ROPIDAH SUDIANA', 'Jakarta Timur', '85789374689', '3', '2', '4', '3', '3', 1),
(188, 'TRI WAHYUNI', 'Jakarta Timur', '82289207590', '3', '2', '4', '3', '3', 1),
(189, 'MULYADI', 'Jakarta Timur', '85790275902', '3', '2', '4', '3', '3', 1),
(190, 'IBU ROMLAH', 'Karawang', '82123306371', '2', '2', '4', '3', '3', 1),
(191, 'IBU EUIS', 'Karawang', '85693907351', '3', '2', '4', '3', '3', 1),
(192, 'IIS SUSILAWATI', 'Karawang', '85692744073', '3', '2', '3', '3', '2', 1),
(193, 'IBU EUIS/BP SENO', 'Karawang', '85772428564', '3', '2', '4', '3', '2', 1),
(194, 'IBU CIAH', 'Karawang', '8159541913', '3', '2', '4', '3', '2', 1),
(195, 'IBU YATI/SURYAMAH/BP KARTOLI', 'Karawang', '81299121700', '3', '2', '3', '3', '3', 1),
(196, 'IBU UUN M', 'Karawang', '85553445008', '3', '2', '4', '3', '3', 1),
(197, 'IBU EUIS K', 'Karawang', '82310189904', '3', '2', '3', '3', '3', 1),
(198, 'IBU RIYATI', 'Karawang', '85779045150', '3', '2', '3', '3', '3', 1),
(199, 'IBU ENI SUHENDARSIH', 'Karawang', '89501121391', '3', '2', '4', '3', '3', 1),
(200, 'NANI/MAMAH CIKAL', 'Karawang', '87879099522', '3', '1', '2', '3', '2', 0),
(201, 'MAMAH SABIL/BP MAHMUD', 'Karawang', '85215460151', '3', '2', '3', '3', '3', 1),
(202, 'IBU WIWI/BP WAKARSAMAN', 'Karawang', '85693251570', '2', '2', '4', '3', '3', 1),
(203, 'TEH YUYU', 'Karawang', '85773407340', '3', '2', '3', '3', '3', 1),
(204, 'YUANAH', 'Karawang', '85924213653', '3', '2', '3', '3', '3', 1),
(205, 'FIFIRIA APRILIA', 'Karawang', '81221757367', '3', '2', '3', '3', '3', 1),
(206, 'IBU KASNI/PIPIT', 'Karawang', '81288439160', '3', '2', '3', '3', '3', 1),
(207, 'BU RT ENUNG/BP RT WARYONO', 'Karawang', '85770045550', '2', '2', '3', '3', '3', 1),
(208, 'BU RITA', 'Karawang', '81584555030', '3', '2', '4', '3', '3', 1),
(209, 'BU DEDEH', 'Karawang', '85715964768', '3', '2', '4', '3', '3', 1),
(210, 'BU ENENG', 'Karawang', '8567993906', '3', '2', '4', '3', '3', 1),
(211, 'PAK ENDANG', 'Karawang', '85284199809', '2', '2', '4', '3', '3', 1),
(212, 'TEH ENENG/BP HENDANG', 'Karawang', '89507116321', '3', '2', '4', '3', '3', 1),
(213, 'IBU HERNAWATI', 'Karawang', '88809201090', '3', '2', '4', '3', '3', 1),
(214, 'BU IHAT/BP SANDIAS', 'Karawang', '88809201098', '2', '2', '3', '3', '3', 1),
(215, 'TEH NUR/BP LILI', 'Karawang', '81386054015', '2', '2', '4', '3', '3', 1),
(216, 'BP.WARMAN/IBU MIMIN', 'Karawang', '85692929533', '2', '2', '4', '3', '3', 1),
(217, 'IBU HELI HELMINAH', 'Karawang', '85778836204', '3', '2', '3', '3', '3', 1),
(218, 'MA TITI', 'Karawang', '85211850892', '3', '2', '3', '3', '3', 1),
(219, 'MA AUM/BP ENDIN', 'Karawang', '85331309462', '2', '2', '3', '3', '3', 1),
(220, 'BU AMIH/BP RASMAN', 'Karawang', '85710124648', '2', '2', '3', '3', '3', 1),
(221, 'BU EDAH/BP ABIN', 'Karawang', '85775108376', '2', '2', '4', '3', '3', 1),
(222, 'IBU RISA/MAMAH NELVI', 'Karawang', '81386054015', '3', '2', '4', '3', '3', 1),
(223, 'BU RIZAL', 'Karawang', '81517905798', '3', '2', '4', '3', '3', 1),
(224, 'IBU ELIT', 'Karawang', '85779258656', '3', '2', '4', '3', '3', 1),
(225, 'IBU HERTIN/BP RT AGUNG', 'Karawang', '85710788507', '2', '2', '3', '3', '3', 1),
(226, 'TEH OOM', 'Karawang', '85716422284', '3', '2', '3', '3', '3', 1),
(227, 'BP BASRI/IBU JUA', 'Karawang', '85716293142', '2', '2', '3', '3', '2', 1),
(228, 'TEH NONI', 'Karawang', '81284716179', '3', '2', '4', '3', '2', 1),
(229, 'IBU ASIH', 'Karawang', '83871885152', '3', '2', '3', '3', '3', 1),
(230, 'IBU MIRA', 'Karawang', '81389784519', '3', '2', '3', '3', '3', 1),
(231, 'IBU IRMAWATI/BP SUWARNO', 'Karawang', '81219696339', '2', '2', '4', '3', '3', 1),
(232, 'IBU MILAH/HALIM', 'Karawang', '81291624281', '2', '2', '4', '3', '3', 1),
(233, 'IBU NETI/BP DARNANO', 'Karawang', '81311546726', '2', '2', '3', '3', '3', 1),
(234, 'MA ICOT', 'Karawang', '85959343218', '2', '2', '3', '3', '3', 1),
(235, 'ENGKAR', 'Karawang', '81389784519', '3', '2', '4', '3', '3', 1),
(236, 'BP RT AGUNG/IBU ADE', 'Karawang', '87877056512', '2', '2', '3', '3', '3', 1),
(237, 'WARIS', 'Karawang', '81213503295', '2', '2', '3', '3', '3', 1),
(238, 'IBU LINA HERLINA', 'Karawang', '81388799606', '3', '2', '4', '3', '3', 1),
(239, 'WARDOYO/MAMAH QIQI', 'Karawang', '81289340452', '2', '2', '4', '3', '3', 1),
(240, 'IBU WARSIYATI', 'Karawang', '81218442733', '3', '2', '3', '3', '3', 1),
(241, 'IBU WATINI', 'Karawang', '85921424306', '3', '2', '3', '3', '3', 1),
(242, 'BP TATANG/IBU ENOK', 'Karawang', '81298583850', '2', '2', '4', '3', '3', 1),
(243, 'BP AIMAN/IBU FARIDA', 'Karawang', '85102102623', '2', '2', '4', '3', '3', 1),
(244, 'BP SUHARJONO/IBU EEN', 'Karawang', '85718355333', '2', '2', '4', '3', '3', 1),
(245, 'IBU ATTY ROHAYATI/H.DIDI', 'Karawang', '81320075856', '2', '2', '3', '3', '3', 1),
(246, 'BP.SHOUMA AHMADI/IBU ROJILAH', 'Karawang', '81389739022', '2', '2', '3', '3', '3', 1),
(247, 'MA EMAY', 'Karawang', '85813744259', '2', '2', '2', '3', '2', 0),
(248, 'BU IYET', 'Karawang', '87717968798', '3', '2', '4', '3', '3', 1),
(249, 'BU INTAN/ENJANG', 'Karawang', '81317527449', '3', '2', '3', '3', '3', 1),
(250, 'BU ACAH/BP.ZENAL', 'Karawang', '81519202311', '3', '2', '3', '3', '3', 1),
(251, 'BU BEDAH/BP MUHTAR', 'Karawang', '81319220109', '2', '2', '3', '3', '3', 1),
(252, 'ANDA JUANDA', 'Karawang', '81383431678', '2', '2', '3', '3', '3', 1),
(253, 'BP.SUBARDIAH', 'Karawang', '81298583850', '2', '2', '3', '3', '3', 1),
(254, 'BP CARDA', 'Karawang', '85691439663', '2', '2', '4', '3', '3', 1),
(255, 'BP NGATUROHMAN/IBU ROHMAN', 'Karawang', '87877293161', '2', '2', '4', '3', '3', 1),
(256, 'IBU SUBAEKAH/MAMAH IRMA', 'Karawang', '87710455172', '2', '2', '3', '3', '3', 1),
(257, 'IBU TARNINGSIH', 'Karawang', '85711159535', '2', '2', '4', '3', '3', 1),
(258, 'BU MINARTI/BP TOTOT', 'Karawang', '85710743699', '2', '2', '3', '3', '3', 1),
(259, 'BU DEWI/BP ADE TAGOR', 'Karawang', '85719859496', '2', '2', '3', '3', '3', 1),
(260, 'BU YATI/BP HERI', 'Karawang', '8158346796', '2', '2', '3', '3', '3', 1),
(261, 'BU SAIMAH/BP MIRTA', 'Karawang', '81290881134', '2', '2', '4', '3', '3', 1),
(262, 'BU WARSIH/BP ZAHRI', 'Karawang', '81387667979', '2', '1', '3', '3', '1', 0),
(263, 'BU IJAH/BP SUHENDAR', 'Karawang', '85218414446', '2', '2', '4', '3', '3', 1),
(264, 'BU ROSIH/BP SUHENDA', 'Karawang', '87877282013', '2', '1', '2', '2', '3', 0),
(265, 'BU YAYAN', 'Karawang', '87782235760', '2', '2', '4', '3', '3', 1),
(266, 'BU IYET', 'Karawang', '85777986436', '2', '2', '4', '3', '3', 1),
(267, 'BU SUMIATI', 'Karawang', '85776157604', '2', '2', '3', '3', '3', 1),
(268, 'BU IIS', 'Karawang', '81310584405', '3', '2', '3', '3', '3', 1),
(269, 'BU ETI/BP ENOH', 'Karawang', '82328436925', '2', '2', '4', '3', '3', 1),
(270, 'BU AAN/BP ECEP', 'Karawang', '85776157604', '3', '2', '4', '3', '3', 1),
(271, 'BU LASTRI/BP BONGSOR', 'Karawang', '81382652226', '3', '2', '3', '3', '3', 1),
(272, 'BU ENTIK', 'Karawang', '81284700178', '3', '2', '4', '3', '3', 1),
(273, 'TEH DEDE/BP ASEP MUSTOFA', 'Karawang', '85710788507', '3', '2', '3', '3', '3', 1),
(274, 'BU DEDEH/BP SAPRI', 'Karawang', '8577222823', '3', '2', '4', '3', '3', 1),
(275, 'BU MULYATI/BP DIDIN', 'Karawang', '88977705328', '2', '2', '3', '3', '3', 1),
(276, 'BU YUYUN', 'Karawang', '85719692120', '3', '2', '3', '3', '3', 1),
(277, 'SUSI NAHWAYANTI', 'Karawang', '8561206222', '3', '2', '3', '3', '3', 1),
(278, 'TEH WIWI/BP ATENG', 'Karawang', '85718693736', '3', '2', '4', '3', '3', 1),
(279, 'PA NANANG SUTRISNA/MAMA WACHID', 'Karawang', '85693986401', '2', '3', '4', '3', '3', 1),
(280, 'IBU METTI JUHAETI', 'Karawang', '8129858350', '3', '2', '4', '3', '3', 1),
(281, 'BP ROMLI/B INDAH', 'Karawang', '85710824247', '2', '2', '4', '3', '3', 1),
(282, 'IBU UCI SUSANAH', 'Jakarta Timur', '85710300361', '3', '2', '4', '3', '3', 1),
(283, 'SITI LESTARI LAPISAH', 'Jakarta Selatan', '81319124754', '3', '2', '4', '3', '3', 1),
(284, 'IBU MARLIN', 'Jakarta Timur', '81314213161', '3', '2', '3', '3', '3', 1),
(285, 'BP ADI SURYADI', 'Jakarta Timur', '85218179299', '2', '2', '3', '3', '3', 1),
(286, 'DRA SITTI MARYAM', 'Jakarta Selatan', '89637223762', '2', '3', '3', '3', '3', 1),
(287, 'IBU JAENAB(ZAINAB)/BP TETENG', 'Jakarta Timur', '8788460991', '2', '2', '4', '3', '3', 1),
(288, 'LESTARI/TARI', 'Tanjung Barat', '818653955', '3', '2', '2', '3', '1', 0),
(289, 'BP SUSANTO/IBU YUANA', 'Jakarta Timur', '85711516208', '2', '2', '4', '3', '1', 1),
(290, 'IBU DEA/DEWI PRISTIWATI', 'Jakarta Timur', '81290323239', '3', '2', '4', '3', '3', 1),
(291, 'IBU LINGGA/SITI AMINAH', 'Jakarta Timur', '85711119535', '3', '2', '4', '3', '3', 1),
(292, 'IBU RINA/HALIMAH', 'Jakarta Timur', '81219677404', '3', '2', '4', '3', '3', 1),
(293, 'HARIS/BANG GEMPLONG', 'Jakarta Selatan', '85885167938', '3', '2', '4', '3', '3', 1),
(294, 'MAS RIJAL/IBU MARNI', 'Jakarta Timur', '85924364865', '3', '2', '4', '3', '3', 1),
(295, 'IBU ZAHRA', 'Jakarta Timur', '81219677404', '3', '2', '4', '3', '3', 1),
(296, 'BU APIAH', 'Jakarta Selatan', '81908975774', '3', '2', '3', '3', '3', 1),
(297, 'IBU NURZAKIAH/BP DHONI CHANDRA', 'Jakarta Timur', '85725212380', '3', '2', '3', '3', '3', 1),
(298, 'BU IDA/UNI ELFI', 'Cikarang', '85319240925', '3', '2', '3', '3', '3', 1),
(299, 'IBU HERLIANDA YUNIASTUTI', 'Cikarang', '81287072993', '3', '2', '3', '3', '3', 1),
(300, 'WIWIK WIHARTI', 'Cikarang', '85319219554', '3', '2', '3', '3', '3', 1),
(301, 'YENI NURMELAWATI', 'Cikarang Utara', '85711613482', '3', '2', '3', '3', '3', 1),
(302, 'JUNAENI (TOKO)', 'Cikarang Utara', '85716458416', '3', '2', '3', '3', '3', 1),
(303, 'MEGA EKA LESTARI S.PD', 'Cikarang Utara', '85693315592', '3', '3', '4', '3', '3', 1),
(304, 'SUMARNI', 'Cikarang Utara', '85711277155', '3', '2', '4', '3', '3', 1),
(305, 'SANTI S.PD (KEPALA SEKOLAH)', 'Cikarang Utara', '81315122104', '3', '3', '4', '3', '3', 1),
(306, 'TARMILAH S.PD', 'Cikarang Utara', '81585893567', '3', '3', '5', '3', '3', 1),
(307, 'SUHAENAH', 'Cikarang Utara', '82111387816', '3', '2', '4', '3', '3', 1),
(308, 'H URIP SUJANA', 'Cikarang Utara', '85691858298', '2', '2', '4', '3', '3', 1),
(309, 'NINA RIYANI', 'Cikarang Utara', '81284848220', '3', '2', '3', '3', '3', 1),
(310, 'CUCUM UMUH KULSUM', 'Cikarang Utara', '85775628180', '3', '2', '3', '3', '3', 1),
(311, 'HERLINDA/MAMA SALSA', 'Cikarang Utara', '81574972066', '3', '2', '3', '3', '3', 1),
(312, 'MASDAH', 'Cikarang Utara', '85716740916', '3', '2', '3', '3', '3', 1),
(313, 'HJ.NANG WAWA KUSMIATI', 'Cikarang Utara', '87804488521', '2', '2', '4', '3', '3', 1),
(314, 'HENI RUSIANI', 'Cikarang Utara', '81287954192', '3', '2', '4', '3', '3', 1),
(315, 'IMAS SUNJAWATI', 'Bekasi', '81513559849', '3', '2', '4', '3', '3', 1),
(316, 'TIHAYA (KEPALA SEKOLAH)', 'Cikarang', '85313454263', '2', '3', '5', '3', '3', 1),
(317, 'DRS.EDI SURYADI PUKSI', 'Cikarang', '82124103133', '2', '3', '4', '3', '3', 1),
(318, 'SUSANTI', 'Cikarang', '818653955', '3', '2', '3', '3', '3', 1),
(319, 'LILY MUFLIHAH', 'Cikarang', '87783159850', '3', '2', '4', '3', '3', 1),
(320, 'ANIK WIDIASTUTI S.PD MM', 'Cikarang', '85711277155', '2', '2', '4', '3', '3', 1),
(321, 'MIMI KAMILAH', 'Cikarang', '81318837904', '2', '2', '4', '3', '3', 1),
(322, 'NGATIRAH (GURU)', 'Cikarang utara', '85692573917', '2', '3', '3', '3', '3', 1),
(323, 'HENDRAWATI', 'Cikarang', '87879362540', '3', '2', '4', '3', '3', 1),
(324, 'IBU TRI AMSIYAH', 'Jakarta Timur', '85716052448', '3', '2', '4', '3', '3', 1),
(325, 'IBU SUMIYATI', 'Jakarta Timur', '81291519692', '3', '2', '4', '3', '3', 1),
(326, 'IBU AULIA', 'Jakarta Timur', '85692573917', '3', '2', '4', '3', '3', 1),
(327, 'IBU KAYANIH', 'Jakarta Timur', '89656243537', '3', '2', '3', '3', '3', 1),
(328, 'IBU MASNI/ANAH', 'Jakarta Timur', '85778867514', '3', '2', '4', '3', '3', 1),
(329, 'IBU ALIA/ARDI', 'Jakarta Timur', '81219875582', '3', '2', '4', '3', '3', 1),
(330, 'BP.SULAM', 'Jakarta Timur', '81289307222', '2', '2', '4', '3', '3', 1),
(331, 'IBU MUSLIMAH', 'Jakarta Timur', '81314919588', '2', '2', '4', '3', '3', 1),
(332, 'IBU MUTMAINAH', 'Jakarta Timur', '85211897410', '2', '2', '4', '3', '3', 1),
(333, 'IBU SANIH', 'Jakarta Timur', '85214611555', '2', '2', '3', '3', '3', 1),
(334, 'IBU UMI/SITI SUMIATI/IJU', 'Jakarta Timur', '85695770154', '2', '2', '3', '3', '3', 1),
(335, 'IBU SUNARTI/BU RIAN', 'Jakarta Timur', '81361245272', '2', '2', '3', '3', '3', 1),
(336, 'BU UJU/BP LILI', 'Karawang', '85781948124', '2', '2', '3', '3', '3', 1),
(337, 'BU NANI', 'Karawang', '81385555279', '2', '1', '2', '3', '2', 0),
(338, 'IBU HERLIANI/BUDE', 'Karawang', '89648732227', '2', '2', '4', '3', '3', 1),
(339, 'BU RANI/BP EPUL', 'Karawang', '81213547125', '2', '2', '4', '3', '3', 1),
(340, 'TEH DEDE', 'Karawang', '8567315856', '3', '1', '2', '3', '1', 0),
(341, 'BP DAM AN', 'Karawang', '85694443071', '2', '2', '3', '3', '1', 1),
(342, 'TEH EVI', 'Karawang', '87882169330', '3', '2', '4', '3', '1', 1),
(343, 'BU ROSI', 'Karawang', '85694871653', '3', '2', '3', '3', '3', 1),
(344, 'TIARA', 'Karawang', '85693011326', '3', '2', '3', '3', '3', 1),
(345, 'BU ENOK', 'Karawang', '81281594518', '3', '2', '3', '3', '3', 1),
(346, 'BU TATI', 'Karawang', '8562233409', '3', '2', '4', '3', '3', 1),
(347, 'IBU ROKIYAH/MAMAH JAYA', 'Karawang', '8567315856', '3', '2', '4', '3', '3', 1),
(348, 'TEH ENUR', 'Karawang', '81389407719', '3', '2', '3', '3', '3', 1),
(349, 'IBU SUANAH/MAMH NUR', 'Karawang', '89668295968', '3', '2', '4', '3', '3', 1),
(350, 'BU KAFSAH', 'Karawang', '85717426113', '3', '2', '3', '3', '3', 1),
(351, 'BU ASIH', 'Karawang', '85780692396', '3', '2', '4', '3', '3', 1),
(352, 'TEH PUSPA/BP NURADIASO', 'Karawang', '85781640214', '3', '2', '3', '3', '3', 1),
(353, 'BU EVA/BP BAJURI', 'Karawang', '87804022229', '3', '2', '3', '3', '3', 1),
(354, 'IBU ICIH', 'Karawang', '89677624812', '3', '2', '3', '3', '3', 1),
(355, 'BU TATI/BP HASAN', 'Karawang', '8987872946', '3', '2', '4', '3', '3', 1),
(356, 'BU AISYAH', 'Karawang', '8986228738', '3', '2', '4', '3', '3', 1),
(357, 'TEH RITA/BP WIDI', 'Karawang', '85714535371', '3', '2', '3', '3', '3', 1),
(358, 'BU YANTI', 'Karawang', '89509202633', '3', '2', '3', '3', '3', 1),
(359, 'HERLINDA/MAMA SALSA', 'Cikarang Utara', '82812077651', '3', '2', '3', '3', '3', 1),
(360, 'YOUCHE ROSMIANTI', 'Cikarang Utara', '81282742223', '3', '2', '3', '3', '3', 1),
(361, 'NUNUNG FAROTUN', 'Cikarang Utara', '85716012812', '3', '2', '3', '3', '3', 1),
(362, 'SHINTA DWI RAHMAWATI', 'Cikarang Utara', '81213547125', '3', '2', '3', '3', '3', 1),
(363, 'ROHAYATI', 'Cikarang Utara', '81320705461', '3', '2', '3', '3', '3', 1),
(364, 'AMINUDIN (GURU)', 'Cikarang Utara', '82123826091', '3', '3', '4', '3', '3', 1),
(365, 'IDAH HIDAYATI (GURU)', 'Cikarang Utara', '82110566001', '3', '3', '4', '3', '1', 1),
(366, 'YATI HARYATI (GURU)', 'Cikarang Utara', '82113688580', '3', '3', '5', '3', '1', 1),
(367, 'YATI HARYATI/EMAR (GURU)', 'Cikarang Utara', '812110000000', '3', '3', '5', '3', '1', 1),
(368, 'IBU IDAH', 'Cikarang Utara', '85775781849', '3', '2', '4', '3', '3', 1),
(369, 'AGUSTINI S (GURU)', 'Cikarang Utara', '89637367135', '3', '3', '4', '3', '3', 1),
(370, 'IBU NURHAYATUN (GURU)', 'Cikarang Utara', '85328619277', '3', '3', '3', '3', '3', 1),
(371, 'IBU RIRIN RIYANI', 'Cikarang Utara', '85328619273', '3', '2', '3', '3', '3', 1),
(372, 'IBU BENA', 'Jakarta Timur', '81380556360', '3', '2', '3', '3', '3', 1),
(373, 'IBU NENENG', 'Jakarta Timur', '87885254651', '3', '2', '2', '3', '1', 0),
(374, 'SURAMI/BU RT UMAR', 'Jakarta Timur', '87779151472', '3', '2', '3', '3', '3', 1),
(375, 'IDA FITRIANI', 'Jakarta Timur', '81311362610', '3', '2', '2', '3', '2', 0),
(376, 'ADE FITRIANI', 'Jakarta Timur', '8561072863', '3', '2', '3', '3', '3', 1),
(377, 'SITI SAHARA', 'Jakarta Timur', '81586266828', '3', '1', '2', '3', '2', 0),
(378, 'DUDIK WAHYU AGUNG', 'Jakarta Timur', '8567225970', '3', '2', '3', '3', '3', 1),
(379, 'SYAIFIDA MURNI', 'Jakarta Timur', '85775775095', '3', '2', '4', '3', '3', 1),
(380, 'IBU YETI HADIYATI', 'Jakarta Timur', '87877480668', '3', '2', '4', '3', '3', 1),
(381, 'ATIKAH', 'Jakarta Timur', '81298289386', '3', '2', '4', '3', '3', 1),
(382, 'EMI ROCHANI/IBU EMI', 'Jakarta Timur', '8561072863', '3', '2', '3', '3', '3', 1),
(383, 'RAHAYU RIANTI', 'Jakarta Timur', '81385916585', '3', '2', '3', '3', '3', 1),
(384, 'IBU SULAMI', 'Jakarta Timur', '856694000000', '3', '2', '3', '3', '3', 1),
(385, 'IBU EMI', 'Jakarta Timur', '85210360964', '3', '2', '3', '3', '3', 1),
(386, 'KUSTIYAH', 'Jakarta Timur', '8128761632', '2', '2', '3', '3', '3', 1),
(387, 'NY PARTI/BUDE JAYA', 'Jakarta Timur', '85770958187', '2', '2', '3', '3', '3', 1),
(388, 'IBU RESMIATI', 'Jakarta Timur', '81572129997', '2', '2', '3', '3', '3', 1),
(389, 'IKA BAMBANG(IBU RW)', 'Jakarta Timur', '85770958187', '2', '2', '3', '3', '3', 1),
(390, 'TIHAYA (KEPALA SEKOLA)', 'Jakarta Timur', '81219340071', '2', '3', '4', '3', '3', 1),
(391, 'IBU IPONG (GURU)', 'Cikarang Utara', '85770166290', '2', '3', '4', '3', '3', 1),
(392, 'IBU AAN SUKMAWATI', 'Cikarang Utara', '81572129997', '3', '2', '4', '3', '3', 1),
(393, 'IBU AAS', 'Cikarang Utara', '85770958187', '3', '2', '4', '3', '3', 1),
(394, 'IBU IPONG', 'Cikarang Utara', '81315383435', '3', '2', '4', '3', '3', 1),
(395, 'SARHANI', 'Cikarang Utara', '85718397829', '3', '2', '4', '3', '3', 1),
(396, 'M SUNARNI', 'Cikarang Utara', '81219939385', '3', '2', '4', '3', '3', 1),
(397, 'HENI HIMAWATI', 'Cikarang Utara', '85781950699', '3', '2', '4', '3', '3', 1),
(398, 'SITI UMAYAH/MAMA FARIS/BU HERU', 'Cikarang Utara', '85693790418', '3', '2', '4', '3', '3', 1),
(399, 'SITI UMAYAH/MAMA FARIS', 'Cikarang Utara', '81210792324', '3', '2', '4', '3', '3', 1),
(400, 'MIRANTI PURWOREJO', 'Cikarang Utara', '81311031778', '3', '2', '4', '3', '3', 1),
(401, 'BU RT MARTINI/BP MULYANA', 'Karawang', '81283032969', '2', '2', '3', '3', '3', 1),
(402, 'SRI MULYANINGSIH', 'Karawang', '85773139319', '3', '2', '4', '3', '3', 1),
(403, 'BU HJ.UMI KULSUM', 'Karawang', '81212565704', '2', '2', '3', '2', '3', 1),
(404, 'BU IIS SULASTRI/BP SUGIH', 'Karawang', '82311996770', '2', '2', '4', '3', '3', 1),
(405, 'BP AHMAD ARIFIN/PA TUKUL', 'Karawang', '81387302252', '2', '2', '4', '3', '3', 1),
(406, 'IBU KAYAH ROKAYAH', 'Karawang', '85774374277', '2', '2', '4', '3', '3', 1),
(407, 'BU DEWI/BP ENJANG', 'Karawang', '85881586097', '2', '2', '4', '3', '3', 1),
(408, 'IBU ROHMAH', 'Karawang', '81319154066', '3', '2', '4', '3', '3', 1),
(409, 'BU SUKARMAH', 'Karawang', '85770958187', '2', '2', '4', '3', '3', 1),
(410, 'TALIA/TK JELITA', 'Cikarang Utara', '85778813330', '3', '2', '4', '3', '3', 1),
(411, 'AHMAD MUHTADI/BU ENCI', 'Cikarang Utara', '85716885589', '2', '2', '4', '3', '3', 1),
(412, 'OKI KRISTIANI/MAMA FAHMI', 'Cikarang Utara', '85691085132', '3', '2', '4', '3', '3', 1),
(413, 'IBU WINDI', 'Cikarang Utara', '85695704746', '3', '2', '4', '3', '3', 1),
(414, 'ARI RETNO SAFITRI/IBU KIRANA', 'Cikarang Utara', '81315338410', '3', '2', '4', '3', '3', 1),
(415, 'LIA NUR LIANI', 'Cikarang Utara', '85693331864', '3', '2', '4', '3', '3', 1),
(416, 'IBU ROSYATI', 'Cikarang Utara', '85697053600', '3', '2', '4', '3', '3', 1),
(417, 'RD.TITIN SUHARTINI (GURU)', 'Cikarang Utara', '81386615904', '3', '3', '3', '3', '3', 1),
(418, 'IAH BADIATUL JAMAL', 'Cikarang Utara', '8567644926', '3', '2', '3', '3', '3', 1),
(419, 'RINA ROSIANA SPD (KEPSEK)', 'Cikarang Utara', '83878669198', '2', '3', '3', '3', '3', 1),
(420, 'ELI HASTUTI', 'Cikarang Utara', '81287070355', '3', '2', '2', '3', '3', 0),
(421, 'SRI WAHYUNI/MAMAH KAFI', 'Cikarang Utara', '85711135573', '3', '1', '2', '3', '3', 0),
(422, 'DESIANA', 'Cikarang Utara', '81381911839', '3', '2', '4', '3', '3', 1),
(423, 'SRI DENTI (IBU EMI)', 'Jakarta Timur', '85811811445', '3', '2', '3', '2', '3', 1),
(424, 'VERA HARTINI MARGARET/IBU EMI', 'Jakarta Timur', '83878669198', '3', '2', '4', '3', '3', 1),
(425, 'INA CHRISANTINA (IBU EMI)', 'Jakarta Timur', '81584018692', '3', '2', '4', '3', '3', 1),
(426, 'IBU MINATUN/IBU ATUN', 'Jakarta Timur', '89675008091', '3', '2', '3', '3', '3', 1),
(427, 'NANI PUJI LESTARI', 'Jakarta Timur', '82125380660', '3', '2', '3', '3', '3', 1),
(428, 'GUNANTO (KETUA RT.12/08)', 'Jakarta Timur', '8567525512', '2', '2', '4', '3', '3', 1),
(429, 'BU ENER/BP OMA/RSUD', 'Karawang', '87804470188', '2', '2', '4', '3', '3', 1),
(430, 'BU PONISEM/BP ALI', 'Karawang', '82310871580', '2', '2', '4', '3', '3', 1),
(431, 'HJ.CUCU/BP ATO/RSUD', 'Karawang', '81584570178', '2', '2', '4', '3', '3', 1),
(432, 'CASRINTI/BP BARKAH/RSUD', 'Karawang', '87879107744', '2', '2', '4', '3', '3', 1),
(433, 'UNI CANIA/UDA/RSUD', 'Karawang', '85695704746', '2', '2', '4', '3', '3', 1),
(434, 'BU SUPRIANTI/BP IFAN', 'Karawang', '81315338410', '2', '2', '4', '3', '3', 1),
(435, 'IBU IPAH', 'Karawang', '8973768421', '2', '2', '3', '3', '3', 1),
(436, 'BU WOWO/BP MARIMAR', 'Karawang', '81315338410', '2', '2', '4', '3', '3', 1),
(437, 'BU OSIH/BP ABUN', 'Karawang', '81287505093', '2', '2', '4', '3', '3', 1),
(438, 'IBU HJ.NANI/BP.WAWAN', 'Karawang', '85695704746', '2', '2', '4', '3', '3', 1),
(439, 'BU.SUPRIANTI/BP BASIRAN', 'Karawang', '81315338410', '2', '2', '3', '3', '3', 1),
(440, 'TEH NONENG/BP OCHA', 'Karawang', '82123319082', '2', '2', '3', '3', '3', 1),
(441, 'BU TATI/BP ENJANG', 'Karawang', '81286736579', '2', '2', '4', '3', '3', 1),
(442, 'IBU ERAS', 'Karawang', '81315338410', '2', '2', '4', '3', '3', 1),
(443, 'PA USUP JUHARA', 'Karawang', '85777316775', '2', '2', '3', '3', '3', 1),
(444, 'BU IYAH TARWIYAH/BP ANENG T0K0', 'Karawang', '89625810886', '2', '2', '5', '3', '3', 1),
(445, 'MA ENIK WARUNG NASI', 'Karawang', '89644363233', '2', '2', '4', '3', '3', 1),
(446, 'BU MALA/BP TARMUJI', 'Karawang', '87765151878', '3', '2', '3', '3', '3', 1),
(447, 'BU SATI/BP KARTA', 'Karawang', '85697053600', '2', '2', '4', '3', '3', 1),
(448, 'DEWI FATIMAH', 'Cikarang', '85693331864', '3', '2', '4', '3', '3', 1),
(449, 'HJ.JUBAEDAH', 'Cikarang', '85697053600', '2', '2', '4', '3', '3', 1),
(450, 'RIKA PUSPITA SARI/BPK ADE', 'Cikarang', '89630103928', '2', '2', '4', '3', '3', 1),
(451, 'WIWIN SARININGSIH (GURU)', 'Cikarang', '85810864311', '3', '3', '4', '3', '3', 1),
(452, 'EUIS NURKHOLILAH(GURU)', 'Cikarang', '81287070355', '3', '3', '4', '3', '3', 1),
(453, 'SRI SULYANTI', 'Cikarang', '89681004077', '2', '1', '4', '3', '2', 0),
(454, 'SUHAROTONO S.PD(KEPSEK)', 'Cikarang', '81318454469', '2', '3', '5', '3', '3', 1),
(455, 'SITI AMINAH/BU NENENG', 'Cikarang', '813138000000', '3', '2', '4', '3', '3', 1),
(456, 'SITI AMINAH', 'Cikarang', '81317589649', '3', '2', '4', '3', '3', 1),
(457, 'YOLANDA DESTA SAFITRI', 'Cikarang', '81511264231', '3', '2', '4', '3', '3', 1),
(458, 'MARINI/IBU DIKA', 'Cikarang', '81289374897', '3', '2', '4', '3', '3', 1),
(459, 'HJ.NUNUNG', 'Cikarang', '81285165750', '2', '2', '4', '3', '3', 1),
(460, 'ARIANI DWI HASTUTI', 'Cikarang', '81364739954', '3', '2', '4', '3', '3', 1),
(461, 'EMBAY SAODAH S.PD', 'Cikarang', '81219852104', '2', '2', '3', '3', '3', 1),
(462, 'HJ.MAEMUNAH S.AG(GURU)', 'Cikarang', '81519377667', '2', '3', '3', '2', '3', 1),
(463, 'DINA SUYAMTI', 'Cikarang', '89675269738', '3', '2', '4', '3', '3', 1),
(464, 'LILIS JUBAEDAH', 'Cikarang', '85697189662', '3', '2', '4', '3', '3', 1),
(465, 'MARINI', 'Cikarang', '85711135573', '3', '2', '4', '3', '3', 1),
(466, 'ADE SUPRIYATI/IBU ADE', 'Cikarang', '85693331864', '3', '2', '4', '3', '3', 1),
(467, 'HJ ROBIATUL AL ADAWIYAH', 'Cikarang', '85216594210', '2', '2', '4', '2', '3', 1),
(468, 'BU RAHMA', 'Cikarang', '88158703192', '3', '2', '4', '3', '3', 1),
(469, 'HAYATUNASUHA', 'Cikarang', '87723762986', '3', '2', '4', '3', '3', 1),
(470, 'INA TASLIMA', 'Cikarang', '8927829889', '3', '2', '4', '3', '3', 1),
(471, 'BP WIJIANTO/BA SRI', 'Cikarang', '85789824470', '2', '2', '4', '3', '3', 1),
(472, 'BU NINING/BP SAMINA', 'Cikarang', '89623986894', '2', '2', '4', '3', '3', 1),
(473, 'IBU NURHAETI', 'Cikarang', '8979169187', '3', '2', '4', '3', '3', 1),
(474, 'TEH ENON', 'Cikarang', '85789267926', '3', '2', '4', '3', '3', 1),
(475, 'BP.IING SAEPUDIN/MAMAH NINING', 'Cikarang', '85892674825', '2', '2', '4', '3', '3', 1),
(476, 'IBU KARSITI/BP JAYA', 'Cikarang', '87892679295', '2', '2', '4', '3', '3', 1),
(477, 'IBU POPON', 'Cikarang', '89679592865', '3', '2', '4', '3', '3', 1),
(478, 'IBU ENDANG SUPRIATIN', 'Cikarang', '86789359658', '3', '2', '4', '3', '3', 1),
(479, 'IBU CUCU/BP OYEH', 'Cikarang', '86789363598', '3', '2', '4', '3', '3', 1),
(480, 'IBU NURHIKMAH/BP MARTA', 'Cikarang', '86903750982', '3', '2', '4', '3', '3', 1),
(481, 'IBU MURNI SURYANI/MAMA ZAFIAN', 'Cikarang', '85789275209', '3', '2', '4', '3', '3', 1),
(482, 'IBU ENDAH/BP UPAR', 'Cikarang', '85798027502', '3', '2', '4', '3', '3', 1),
(483, 'BU EVI YANTI', 'Cikarang', '89750275025', '3', '2', '4', '3', '3', 1),
(484, 'BU MIMI TRIANA ERNAWATI', 'Cikarang', '81290263257', '3', '2', '4', '3', '3', 1),
(485, 'IBU UYUH/BP SADE', 'Cikarang', '82291972975', '3', '2', '4', '3', '3', 1),
(486, 'IBU UUN UNARSIH/BP RASDI', 'Cikarang', '87908347935', '3', '2', '4', '3', '3', 1),
(487, 'MA ENIK/BP DALIH', 'Cikarang', '89186842582', '3', '2', '4', '3', '3', 1),
(488, 'IBU ETI/SARI RASA', 'Cikarang', '86798059272', '3', '2', '4', '3', '3', 1),
(489, 'BU ADEH', 'Cikarang', '85712478275', '3', '2', '4', '3', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(8) NOT NULL,
  `id_customer` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_barang` int(8) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'Baru',
  `lama_angsuran` int(8) NOT NULL,
  `jml_angs` int(8) NOT NULL,
  `tgl_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `id_customer`, `id_user`, `id_barang`, `status`, `lama_angsuran`, `jml_angs`, `tgl_pengajuan`) VALUES
(1, 4, 1, 3, 'Layak', 10, 130000, '2017-12-12'),
(2, 5, 1, 2, 'Layak', 10, 120000, '0000-00-00'),
(3, 8, 1, 7, 'Layak', 6, 120000, '2017-07-17'),
(7, 6, 1, 2, 'Baru', 10, 1000000, '2017-09-24'),
(34, 7, 1, 5, 'Baru', 10, 100000, '2017-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', 'admin', 'admin', 'kiki'),
(2, 'owner', 'owner', 'owner', 'owner'),
(3, 'su1', 'su1', 'surveyor', 'surveyor'),
(4, 'admin2', 'admin2', 'admin', 'Solehah'),
(5, 'admin', 'admin', 'admin', 'Tia'),
(6, 'owner2', 'maemunah', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  ADD PRIMARY KEY (`kode_id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id_customer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id_customer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=490;
--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
