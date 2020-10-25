-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: tugaspbp
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `idadmin` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `idkategori` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (2,'Cerita Fabel'),(3,'Cerita Legenda'),(4,'Cerita Pendek Kehidupan');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `idkomentar` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idpost` bigint(20) unsigned NOT NULL,
  `idpenulis` bigint(20) unsigned NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`idkomentar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_10_04_084324_admin',1),(5,'2020_10_04_084627_kategori',1),(6,'2020_10_04_084712_penulis',1),(7,'2020_10_04_084834_post',1),(8,'2020_10_08_131138_tambah_nama_di_user',1),(9,'2020_10_08_131620_tambah_user_id_di_penulis',1),(10,'2020_10_08_131631_tambah_user_id_di_admin',1),(11,'2020_10_08_133329_hapus_kolom_di_user',1),(12,'2020_10_22_124805_tambah_tampilan_di_post',1),(13,'2020_10_23_084344_buat_tabel_komentar',1),(14,'2020_10_23_090954_default_nol_tampilan',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penulis`
--

DROP TABLE IF EXISTS `penulis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penulis` (
  `idpenulis` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idpenulis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penulis`
--

LOCK TABLES `penulis` WRITE;
/*!40000 ALTER TABLE `penulis` DISABLE KEYS */;
INSERT INTO `penulis` VALUES (1,'JL. tanah mas','Wonosobo','0888888888',2),(2,'gajahmungkur','Semarang','08223131434',3),(3,'Jl. Mulawarman 11','Pati','089898989',4);
/*!40000 ALTER TABLE `penulis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `idpost` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkategori` bigint(20) unsigned NOT NULL,
  `isipost` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_insert` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `idpenulis` bigint(20) unsigned NOT NULL,
  `tampilan` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (2,'Kancil dan Buaya',2,'ada suatu hari Kancil sedang berjalan-jalan di hutan. Tiba-tiba perutnya terasa lapar. Lalu ia melihat ada banyak buah segar yang ada di seberang sungai deras. Kancil pun bingung, bagaimana caranya ia dapat melewati sungai untuk mendapatkan makanan.\r\n\r\nAkhirnya, Kancil menemukan ide cemerlang untuk dapat menyeberangi sungai. Lalu Kancil pun memanggil seekor buaya yang tinggal di dalam sungai.\r\n\r\n\"Hey buaya keluarlah, aku punya kabar gembira\"\r\n\r\nMendengar suara Kancil, akhirnya seekor buaya keluar dan mendekati Kancil.\r\n\r\n\"Ada apa Kancil, kau mengganggu tidurku!\" sahut sang buaya.\r\n\r\n\"Aku akan membagikan banyak daging segar untuk kalian\" kata Kancil dengan wajah ceria.\r\n\r\n\"Di mana daging itu?\" jawab buaya dengan raut wajah buasnya.\r\n\r\n\"Sepertinya dagingnya cukup banyak, kau harus memanggil teman-temanmu untuk memakannya juga.\r\n\r\nAkhirnya buaya besar itu memanggil kawanan buaya yang lain. Setelah semua berkumpul, Kancil meminta mereka untuk berbaris rapi.\r\n\r\n\"Untuk apa kami harus berbaris?\" tanya sang buaya\r\n\r\n\"Aku harus menghitung berapa jumlah kalian untuk membagikan daging secara merata\"','public/post/l8To4UgQyugUploZ5kOoyAzqBKlZsWN5frhSRnZe.jpeg','2020-10-25 08:08:21','2020-10-25 08:08:21',1,0),(3,'Kancil dan Harimau',2,'ada suatu pagi Kancil terlihat sedang berjalan-jalan di pinggir hutan. Kancil bertemu dengan seekor harimau yang sedang kelaparan.\r\n\r\n\"Beruntung sekali diriku, saat sedang kelaparan, aku bertemu seekor kancil yang bisa aku jadikan makan siang\" kata harimau.\r\n\r\n\"Apakah kau ingin memangsaku?\" ucap Kancil\r\n\r\n\"Iya, kau akan kujadikan makan siang, perutku sudah lapar sekali\" jawab sang harimau.\r\n\r\nKancil mulai ketakutan, tetapi berkat kecerdikannya ia mencari cara agar bisa melarikan diri dari sang harimau.\r\n\r\n\"Tolong jangan santap aku, karena aku akan membocorkan rahasia besar untukmu\" pinta Kancil.\r\n\r\n\"Rahasia apa?\" tanya harimau\r\n\r\n\"Aku akan memberi tahumu tentang keberadaan sabuk dewa. Siapa saja yang menggunakan sabuk dewa tersebut akan bisa terbang dan punya kekuatan seperti dewa\" kata Kancil\r\n\r\nMendengar cerita Kancil, harimau pun tertarik yang membuat kesepakatan jika ia tak akan memakan Kancil dengan syarat Kancil harus menunjukan di mana letak sabuk dewa itu.\r\n\r\nAkhirnya Kancil menunjukan tempat di mana sabuk itu berada. Tepatnya di pinggir sungai. Sabuk itu terlihat tergantung di atas pohon.\r\n\r\nDengan penuh semangat, harimau pun hendak menggambil sabuk tersebut.\r\n\r\n\"Hei tunggu!\" Kancil mencoba menghentikan langkah harimau.\r\n\r\n\"Ada apa?\"\r\n\r\n\"Dewa sedang mandi di sungai, jangan sampai ketahuan jika kamu ingin mengambil sabuknya\" seru Kancil.\r\n\r\n\"Lalu bagaimana cara agar tidak ketahuan?\" tanya harimau\r\n\r\n\"Kamu harus berjalan mundur ke arah sabuk itu supaya dewa tidak melihat keberadaanmu\" jawab kancil\r\n\r\nHarimau itu akhirnya menuruti apa kata Kancil. Ia berjalan mundur ke arah pohon itu. Setelah mendekat, betapa kagetnya harimau saat seekor ular melilit lehernya. Ternyata itu bukanlah sabuk dewa, melainkan ular yang sedang kelaparan.\r\n\r\n\"Kurang ajar kau Kancil\" seru harimau yang terlihat menahan rasa sakit.\r\n\r\nAkhirnya Kancil berhasil melarikan diri dan berlari menjauh sambil melepaskan tawanya. Kancil pun bisa menyelamatkan dirinya dengan kecerdikan yang ia miliki.\r\n\r\nDari dongeng si Kancil ini kita bisa menyimpulkan dengan kecerdasan yang dimiliki, dapat menyelamatkan kita dari mara bahaya.','public/post/Whwq1vBm2mpfqJZyz9RlZFTq398Ree38vZkvuhqO.jpeg','2020-10-25 08:09:27','2020-10-25 08:09:27',1,0),(4,'Kancil dan Serigala',2,'Suatu hari, ada seekor Serigala yang sedang asik duduk di tepi sungai. Ia bersandar di akar pohon, kerena kelelahan mencari makanan. Akhirnya, ia pun tertidur. Namun, tiba-tiba ia mendengar suara Krakk…\r\n\r\nSang Serigala pun terbangun dari tidurnya. Ia melihat ke sekeliling. Ia pun segera mencari asal suara tersebut. Ternyata, suara tersebut berasal dari sebuah ranting yang jatuh dan terinjak oleh si cerdik Kancil. Melihat si Kancil, Serigala yang sedang kelaparan itu sangat senang. Ia pun perlahan mendekati Kancil.\r\n\r\nKancil mengetahui dirinya dalam bahaya, ia pun langsung melarikan diri dan bersembunyi di balik semak-semak. Serigala langsung mengejarnya. Karena Kancil terus berlari. Akhirnya, serigala memanggilnya.\r\n\r\n\"Kancil kemarilah! Ayo berhenti, aku tidak akan menyakitimu!.\" teriak Serigala.\r\n\r\nKancil tidak mendengarkan teriakan Serigala. Ia terus berlari sampai kelelahan. Akhirnya, Serigala sudah bisa menyusulnya. Melihat Serigala sudah berada di hadapannya, Kancil pun merasa ketakutan. Ia langsung mencari akal untuk mengelabui sang Serigala.\r\n\r\nKarena Kancil adalah binatang yang sangat cerdik. Ia pun segera mendapatkan akal untuk meloloskan diri dari Serigala.','public/post/P0S8AYDckvauuxQMO2ghykkGILz9eQ1HQ4VMlVZK.jpeg','2020-10-25 08:09:49','2020-10-25 08:09:49',1,0),(5,'Malin Kundang',3,'Di sebuah desa, hiduplah seorang perempuan miskin. Ia hidup bersama anak tunggalnya, namanya Malin Kundang. Sehari-hari perempuan itu bekerja sebagai nelayan. Namun, penghasilannya tak bisa mencukupi kebutuhan mereka sehari-hari sehingga hidup mereka selalu berkekurangan.\r\n\r\nSaat Malin Kundang mulai dewasa, ia memutuskan untuk pergi ke kota. Ia ingin mengadu nasibnya di sana.\r\n\r\n“Barangkali dengan pergi ke kota, aku bisa mengubah nasib kita, Ibu,” ucap Malin Kundang.\r\n\r\nDengan berat hati, ibunya pun mengizinkan. Kini, ibunya kembali menjadi perempuan tua yang kesepian. Setelah kepergian Malin, ibunya selalu memikirkan keadaan anaknya itu. Ia jadi sakit-sakitan, sementara Malin tak pernah mengirim kabar untuknya.\r\n\r\nHingga beberapa tahun kemudian, Malin berhasil mengubah nasib. Ia telah menjadi saudagar yang kaya raya. Malin memiliki banyal kapal. Hidup Malin tak lagi susah. Malin juga menikahi seorang perempuan bangsawan yang sangat cantik.\r\n\r\nSuatu hari, Malin ingin melihat keadaan desanya. Sudah lama sekali ia tak pulang. Malin pergi bersama istri dan banyak pekerjanya. Ia juga membawa banyak uang untuk dibagi-bagikan kepada para penduduk.\r\n\r\nSampailah Malin di desanya. Dengan sombong ia membagikan uang kepada penduduk. Penduduk di desanya sangat senang. Di antara mereka ada yang mengenali Malin, yakni tetangganya sendiri. Orang itu pun segera pergi ke rumah Malin, hendak memberikan kabar gembira tersebut kepada ibu Malin.\r\n\r\n“Ibu, apakah kau sudah tahu, anakmu Malin sekarang telah menjadi orang kaya.” seru tetangga itu.\r\n\r\n“Dari mana kau tahu itu? Selama ini aku tak pernah mendapat kabar darinya,” ucap ibu Malin, terkejut.\r\n\r\n“Sekarang pergilah ke dermaga. Anakmu Malin ada di sana. Dia terlihat sangat tampan, dan istrinya juga sangat rupawan,” ucap tetangganya.\r\n\r\nIbu Malin tak percaya. Matanya berkaca-kaca. Sungguh, ia sangat merindukan anaknya selama beberapa tahun ini. Maka ia pun segera berlari menuju dermaga. Benar saja, di sana terlihat Malin dengan istrinya yang sangat rupawan.\r\n\r\n“Malin, kau pulang, Nak,” seru ibunya.\r\n\r\nMalin mengenali ibunya. Namun, ia malu mengakui orangtua yang berpakaian sangat lusuh itu. Bagaimana ia akan menjelaskan kepada istrinya tentang semua ini?\r\n\r\n“Kau bilang ibumu sudah meninggal. Apa benar orangtua ini adalah ibumu?” tanya istri Malin, bingung.\r\n\r\n“Dia bukan ibuku, dia pengemis yang mengaku-ngaku sebagai ibuku.” seru Malin.\r\n\r\nSungguh sakit hati Ibunya mendengar perkataan Malin. Ibunya lalu mengutuk Malin.\r\n\r\n“Hatimu sungguh sekeras batu, Malin. Maka, kau aku kutuk menjadi batu. Kau anak yang durhaka.” ucap ibunya.\r\n\r\nMalin ketakutan. Ia memohon ampun kepada ibunya. Namun, ibunya sudah sangat sakit hati. Seketika hujan turun sangat lebat, dan petir menyambar. Saat itu pula Malin berubah menjadi batu.','public/post/TUrveQPKEZcn0S61e0bPHNatQLiZ944bynXxfgTA.jpeg','2020-10-25 08:10:51','2020-10-25 08:10:51',2,0),(6,'Sangkuriang',3,'Pada jaman dahulu kala, terdengarlah kisah dari salah satu putri di jawa berat bernama Dayang Sumbi yang mempunyai anak bernama sangkuriang,pada suatu hari sangkuriang pergi berburu di temani oleh seekor anjing bernama Tumang,tetapi Sangkuriang tidak tahu bahwa anjing itu adalah titisan dewa dan juga sekaligus Bapaknya.\r\nPeda saat berburu Sangkuriang bertemu dangan seekor rusa, Sangkuriang teringat bahwa Ibunya sangat senang hati rusa. Akhirnya Sangkuriang menyuruh Tumang untuk mengejar rusa tersebut, namun Tumang kehilangan jejak rusa tersebut dan Sangkuriang menjadi marah karena Sangkuriang sangat ingin memberikan hati rusa kepada ibunya maka Sangkuriang membunuh Tumang untuk mengambil hatinya dan kemudian ia pulang.\r\n\r\nSesampainya Sangkuriang di rumah ia memberikan hati didapatkanya dari berburu kepada Ibunya untuk di masak. Saat memakanya Dayang Sumbi teringat pada Tumang dan menanyakannya pada Sangkuriang, Sangkuriang menjawab dengan wajah ketakutan “Tumang mati” Dayang Sumbi marah bukan dan memukul kepala Sangkuriang dengan sendok nasi dan mengusirnya dari rumah.\r\n\r\nSetelah kejadian itu Dyang Sumbi sangat menyesalinya, ia selalu berdoa dan sangat tekun bertapa hingga suatu hari sang dewata memberikan anugerah kepada Dayang Sumbi yaitu berupa kecantikan abadi dan tidak pernah tua. Setelah di usir Ibunya Sangkuriang berkelana keberbagai tempat, akhirnya Sangkuriang kembali lagi ketempat Dayang Sumbi kemudian kedua orang tersebut pun bertemu.\r\n\r\nSangkuriang akhirnya jatuh hati kepada Dayang Sumbi, Sangkuriang pun melamar Dayang Sumbi dan Dayang Sumbi menerimanya. Pada saat sedang berduan Dayang Sumbi melihat bekas luka di kepala Sangkuriang dan menanyainya kepada Sangkuriang, Sangkuriang menjawab ini bekas luka akibat dipukul dengan sendok nasi oleh Ibunya “mendengar pernyataan tersebut Dayang Sumbi kaget dan memberi tahu sangkuriang bahwa dia adalah Ibunya namun sangkuriang tidak percaya dan tetap berniat menikahinya.\r\n\r\nDayang Sumbi mengajukan permintaan dia minta di buatkan perahu layar dalam sehari tidak buloh lebih, Sangkuriang menyanggupinya dan Sangkuriang membendung sungai Citarum untuk tempat perahunya dalam pembuatanya Sangkuriang mendapatkan bantuan dari jin hasil taklukanya dalam perantauanya, karena bantuan dari jin perahu itupun hampir selesai Dayang Sumbi memohon kepada Dewa. Dayang Sumbi membuat ayam jago berkokok lebih awal, dan akhirnya berhasil jin yang membantu sangkuriang lari ketakutan dan meninggalkan sangkuriang sendirian. Karena kesal perahu itu di tendangnya dan terjatuh diatas gunung dan menyatu dengan gunung dan bernama Gunung Tangkupan Perahu, Sangkuriang akhirnya meninggal karena terjatuh kedalam sungai Citarum.','public/post/HmiULgnlzrb7Vn87VIe3pDQoFNEsjJxrP0npk9X1.jpeg','2020-10-25 08:11:13','2020-10-25 08:11:13',2,0),(7,'Kisah Batu Menangis',3,'Dahulu kala, di sebuah bukit yang jauh dari Pedesaan. Hiduplah seorang Janda miskin bersama anak perempuannya. Anaknya dari Janda tersebut sangat cantik jelita, ia selalu membanggakan kecantikan yang ia miliki. Namun, kecantikannya tidak sama dengan sifat yang ia miliki. Ia sangat pemalas dan tidak pernah membantu ibunya.\r\n\r\nSelain pemalas, ia juga sangat manja. Segala sesuatu yang ia inginkan harus di turuti. Tanpa berpikir keadaan mereka yang miskin, dan ibu yang harus banting tulang meskipun sering sakit-sakitan. Setiap ibunya mengajaknya ke sawah, ia selalu menolak.\r\nSuatu hari, ibunya mengajak anaknya berbelanja ke pasar. Jarak pasar dari rumah mereka sangat jauh, untuk sampai ke pasar mereka harus berjalan kaki dan membuat putrinya kelelahan. Namun, anaknya berjalan di depan ibunya dan memakai baju yang sangat bagus. Semua orang yang melihatnya langsung terpesona dan mengaggumi kecantikannya, sedangkan ibunya berjalan di belakang membawa keranjang belanjaan, berpakaian sangat dekil layaknya pembantu.\r\nKarena letak rumah mereka yang jauh dari masyarakat, kehidupan mmereka tidak ada satu orang pun yang tahu. Akhirnya, mereka memasuki kedalam desa, semua mata tertuju kepada kecantikan Putri dari janda tersebut. Banyak pemuda yang menghampirinya dan memandang wajahnya. Namun, penduduk desa pun sangat penasaran, siapa perempuan tua di belakangnya tersebut.\r\n\r\n\"Hai, gadis cantik! Siapakah perempuan tua yang berada di belakangmu? Apakah dia ibumu?\" Tanya seorang Pemuda.\r\n\r\n\"Tentu saja bukan, ia hanya seorang pembantu!.\" Jawabnya dengan sinis.\r\n\r\nSepanjang perjalanan setiap bertemu dengan penduduk desa, mereka selalu bertanya hal yang sama. Namun, ia terus menjawab bahwa ibunya adalah pembantunya. Ibunya sendiri di perlakukan sebagai seorang pembantu.','public/post/i1tIxHAUODP0G1NozfgiTiLSD3JTOO221zxaMA4h.jpeg','2020-10-25 08:11:32','2020-10-25 08:11:32',2,0),(8,'Cerpen \"Dilarang Memukul Teman\"',4,'Di suatu sekolah dasar sedang terdapat hari yang penting. Hari dimana pemenang lomba Agustusan akan diumumkan. Saat itu para siswa kelas 2 SD pergi keluar keras sambil berlarian mencari tempat untuk mendengarkan pengumuman lomba. Tentunya mereka berharap menjadi pemenangnya.\r\n\r\nPara pemenang lomba Agustusan akan mendapatkan hadiah yang menarik yang telah disiapkan oleh panitia lomba. Begitu pula dengan Zahra, Zahra sangat antusias dan bersemangat mendengarkan pengumuman dari guru. Mengingat sebelumnya ia merupakan pemenang lomba dari makan kerupuk.\r\n\r\nZahra berdiri di barisan paling depan agar ia langsung bisa mendengar namanya disebut sebagai pemenang lomba. Saat anak-anak sedang bersiap, mendengarkan pemenang lomba, tiba-tiba saja Zahra terjatuh di dorong oleh Riris. Zahra yang tidak terima langsung memarahi Riris dan menanyakan alasan Riris mengapa mendorongnya.\r\n\r\nRiris mengatakan bahwa ia ingin berada pada barisan paling depan, Zahra pun tidak mau mengalah, karena ia yang telah lebih dahulu menempati barisan depan. Merasa tak senang, akhirnya Riris pun melabuhkan tamparkan pada pipi Zahra. Sehingga terjadi keributan.\r\n\r\nGuru yang melihat keributan, langsung menghampiri tempat keributan dan membawa Riris ke dalam BK untuk diberi penanganan lebih lanjut. Guru menanyakan pada Riris bagaimana ia bisa memukul temannya sendiri, Riris mengaku melihat tayangan di TV sehingga ia menirunya.\r\n\r\nAkhirnya guru memberi nasihat kepada Riris dengan menceritakan suatu kejadian yang membuat Rasulullah marah. Dimana pada saat itu, terdapat dua orang yang sedang berkelahi, mereka saling memukul dan menggigit satu sama lain. mengetahui hal tersebut Rasul pun menjadi marah.\r\n\r\nMendengar cerita tersebut, Riris menjadi menyesali perbuatan yang telah ia lakukan pada Zahra. Setelah keluar dari ruang BK, Riris mencari dan menghampiri Zahra. Riris meminta maaf kepada Zahra atas perbuatannya yang menyakiti Zahra. Zahra pun memaafkan Riris. Mereka berdua pun akhirnya berteman dan tidak lagi ada pertengkaran.','public/post/LlhVcSaNEefX5vRtkogxz7zdrZKDXu2m4jmwmSJX.jpeg','2020-10-25 08:14:09','2020-10-25 08:14:09',3,0),(9,'Cerpen \"Malas Belajar\"',4,'Hari Senin adalah hari dimana seluruh warga sekolah SD Tribakti Husada melakukan upacara bendera merah putih. Seusai upacara, para siswa beristirahat sejenak untuk kemudian belajar materi sekolah seperti biasanya.\r\n\r\nPada hari senin, siswa kelas 5 memiliki jadwal Matematika di jam pertama kemudian setelahnya Bahasa Indonesia, PKN dan jam terakhir adalah Bahasa Sunda. Setelah masa istirahat selesai, masuklah siswa kelas 5 untuk jam pelajaran pertama yaitu Matematika.\r\n\r\nPak guru langsung memasuki kelas dan menerangkan sebagian materi pada siswa kelas 5, setelah penyampaian materi, pak guru menyuruh siswa untuk mengerjakan halaman 5 dan halaman 6. Keadaan kelas menjadi sepi setelah pak guru menyuruh para siswa nya untuk mengerjakan soal.\r\n\r\nKemudian, sembari menunggu para siswanya mengerjakan soal, pak guru berkeliling di sekitar siswanya, hal tersebut dilakukan agar pak guru tahu siswa nya yang belum menguasai dan sudah menguasai.\r\n\r\nSetelah selesai mengerjakan soal, sebelum pak guru keluar untuk berganti jam pelajaran, terlebih dahulu pak guru memberikan pesan kepada seluruh siswanya, untuk giat belajar dan mengerjakan soal materi perkalian dan juga pembagian soal cerita. Karena ulangan harian bisa saja dilakukan secara mendadak.\r\n\r\nSetelah bel pulang berbunyi, para siswa pun pulang begitu juga dengan Ratna, Tiyas dan Desi. Mereka berjalan pulang karena memang tempat tinggal mereka tidak jauh dari sekolah dan rumah mereka berdekatan.\r\n\r\nPada saat perjalanan pulang, Desi yang baru saja mendapat hadiah boneka dari ibunya yang pulang dari Malang, langsung mengajak teman-temannya untuk bermain setelah pulang sekolah.\r\n\r\n“Ayo nanti main ke rumahku, aku baru saja di belikan boneka baru sama ibuku yang pulang dari Malang kemarin.” Pinta Tiyas.\r\n\r\n“Wah ,, Asyik. Nanti aku main ke rumahmu ya, ayo Ratna” jawab Desi.\r\n\r\n“Aku gak bisa ikut, soalnya kau mau belajar Matematika seperti pesan pak guru. Aku takut nanti tiba-tiba ada ulangan mendadak. Jadi nanti aku mau istirahat terus kemudian aku belajar pelajaran soal cerita Matematika besok.” Tolak Ratna.\r\n\r\nAkhirnya setelah mereka tiba di rumah, Desi dan Tiyas langsung makan dan berganti pakaian bersiap untuk bermain bersama, mereka bermain boneka bersama hingga larut malam, sehingga mereka tidak memiliki waktu untuk belajar.\r\n\r\nSebaliknya dilakukan oleh Ratna, sepulang sekolah, Ratna langsung berganti pakaian, makan kemudian sholat dan tidur siang. Hal tersebut bertujuan agar saat malam, Ratna bisa semangat belajar dan tidak mengantuk saat belajar. Kemudian Ratna pun belajar hingga larut malam.\r\n\r\nKeesokan harinya mereka bertiga berangkat bersama sambil berbincang pergi ke sekolah. Hingga tiba pada saat mata pelajaran matematika. ternyata benar, siang itu pak guru mengadakan ulangan secara mendadak. Ulangan diadakan tanpa pemberitahuan sebelumnya.\r\n\r\nRatna pun telah siap menghadapi ulangan, berbeda dengan Desi dan Tiyas yang terlihat sangat gugup ketika ulangan, karena mereka tidak belajar. Setelah selesai ulangan, hasil pun diumumkan, Desi dan Tiyas mendapatkan nilai yang buruk, sedangkan Ratna mendapatkan nilai yang paling bagus di kelasnya.\r\n\r\nMengetahui hal tersebut, pak guru pun meminta agar Desi dan Tiyas belajar bersama Matematika dengan Ratna. Akhirnya setiap malam, mereka bertiga belajar bersama agar mendapatkan nilai yang bagus saat ulangan.','public/post/nqtPO5xs1GWdKOIVbcaf0v1KLOtILON1czMD0PXD.jpeg','2020-10-25 08:16:00','2020-10-25 08:16:51',3,0),(10,'Cerpen \"Keluarga\"',4,'“Teman-teman, kalian mau kasih hadiah apa untuk hari ibu nanti,” ujar Tasya pada teman-temanya.\r\n\r\n“Kalau aku sih dompet” tambah Tasya.\r\n\r\n“Aku kemarin beli mawar, kata orangnya mau di antar pagi-pagi sekali” jawab Irma\r\n\r\nRina pun menyahut, “Ibu ku suka sekali buat kue, jadi aku mau ngasih buku resep tentang cup cakes buar ibuku bisa buat kue”\r\n\r\n“Kalau aku kemarin sama papa sudah beli kalung yang cantik khusus mama,” ucap Tika, \r\n\r\n“Kamu mau ngasih apa Ris” tanya Tika padaku.\r\n\r\nKetika semua mata tertuju ke arahku, aku belum sempat menjawab, bel pulang sudah berbunyi, aku pun langsung bergegas pulang tanpa menjawab pertanyaan yang mereka lontarkan padaku.\r\n\r\nSesampainya di rumah, aku langsung melihat isi celenganku, saat kuhitung ternyata semuanya belum genap seratus ribu. Aku ingin membelikan mama kerudung warna pink yang disukai mama. Tapi uang yang ku punya belum cukup. Akhirnya aku pun menyimpannya dan berusaha memperoleh tambahan uang dari uang jajan yang setiap hari diberikan mama padaku.\r\n\r\n“Ma, besok Riska mau bawa bekal lagi sama lauk telur” pintaku pada mama sebelum tidur.\r\n\r\n“Iya Ris” jawab mama.\r\n\r\nKeesokan harinya, aku mengeluarkan sepeda dari garasi untuk aku bawa pergi ke sekolah, mama menanyakan perihal kelayakan sepedaku, dan ku cek sepedaku masih layak untuk dipakai setelah kemarin di perbaiki oleh pak Diman.\r\n\r\nSetiap hari aku membawa bekal nasi dan telur, hal tersebut agar aku bisa menyisihkan seluruh uangku, dan aku tidak perlu jajan. Uang jajan ku bisa ku gunakan untuk membantu mama dan memberinya hadiah untuk hari ibu.\r\n\r\nSepulang sekolah aku dan mama melihat televisi bersama, betapa kagetnya mama ketika melihat berita di televisi yang mengabarkan rumah saudara mama ambruk. Malam itu setelah mendengar berita, mama tertidur dengan mata yang sembab setelah menangis.\r\n\r\nKeesokan harinya ketika aku bangun tidur, aku melihat mama telah duduk di depan mesin jahit kesayangannya. “Ris sini deh, cobalah songket sama baju kurung buatan mama, semoga cocok buat karnaval besok” pinta mama.\r\n\r\n“Iya ma” turutku.\r\n\r\n“Ma, Riska punya sesuatu buat mama” ku ucapkan sembari menyodorkan suatu amplop hadiah hari bu untuk mama. Aku sangat gugup, saat mama membuka amplop itu,\r\n\r\n“Ris, mam gak perlu hadiah. Riska adalah hadiah terbesar yang diberikan Allah untuk mama” kata mama sambil memelukku dengan mata yang berkaca-kaca. Aku pun langsung memeluk erat mama, \r\n\r\n“Ma bukan Riska, tapi mama adalah hadiah terindah yang diberikan Allah buat Riska” jawabku pada mama.','public/post/yKCj1usN9Iz5SwvWYhfEdC8mnbxUZW84vHyA6Glp.jpeg','2020-10-25 08:16:39','2020-10-25 08:16:39',3,0);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$mOopuH1.64cq28nYFT.HGOSvJB41a787CLnpFfJUK1RpZmZBtGuPK',NULL,'2020-10-25 02:52:59','2020-10-25 02:52:59'),(2,'Ranu Dwi Setiadi','ranu@gmail.com',NULL,'$2y$10$5KT/TJLzySwj9BTEZOC23e55hntyJWBaBDKO45MhwzVCaFU36u7WK',NULL,'2020-10-25 02:52:59','2020-10-25 08:02:43'),(3,'Dandi Arimansyah','dandi@gmail.com',NULL,'$2y$10$hsDl4dux6NOgl/Ecl7OJvepfL1f65Av8Cv9JY3Y7PeZ3leutJw8nO',NULL,'2020-10-25 08:05:26','2020-10-25 08:12:19'),(4,'Setiyoningsih','set@gmail.com',NULL,'$2y$10$zrmRXPuEys7F/6YKZuwJROHR2addUMJVokDbWRIZgC2eIN8..5O9C',NULL,'2020-10-25 08:13:30','2020-10-25 08:13:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-25  8:27:32
