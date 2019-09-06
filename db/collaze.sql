/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 5.5.16 : Database - collaze
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`collaze` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `collaze`;

/*Table structure for table `bendico` */

DROP TABLE IF EXISTS `bendico`;

CREATE TABLE `bendico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text,
  `upload_form` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `bendico` */

insert  into `bendico`(`id`,`desc`,`upload_form`,`status`,`upload_date`) values 
(2,'Bendico Cocoa Powder\nCokelat bubuk dengan rasa dan aroma yang kuat. Cocok untuk aplikasi campuran dan dekorasi kue, pudding, cookies, minuman, krim dan donut. Dapat  juga dibuat untuk minuman hot chocolate dengan melarutkan bendico cocoa powder dan gula dalam sedikit susu panas, kemudian tambahkan dengan air panas.','20181109075312.png','0','2018-11-09 07:53:12'),
(3,'Bendico Natural Dark\nCocoa Powder with natural dark color suitable for many cookies and cake application','20181109075346.png','0','2018-11-09 07:53:46'),
(4,'Bendico Extra Dark\nCocoa powder with extra dark color suitable for high intensity application.','20181109075407.png','0','2018-11-09 07:54:07');

/*Table structure for table `colatta` */

DROP TABLE IF EXISTS `colatta`;

CREATE TABLE `colatta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text,
  `upload_form` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `colatta` */

insert  into `colatta`(`id`,`desc`,`upload_form`,`status`,`upload_date`) values 
(5,'Colatta Chocochip\n\nCocok sebagai hiasan untuk taburan/dekorasi diatas whipped cream, ice cream, kue dan sebagai campuran adonan kue sebelu proses pemangganganseperti choco chips cookies, brownies, dan lain-lain.','20181108073438.jpg','0','2018-11-08 09:00:17'),
(6,'Colatta Dark Compound\n\nCokelat masak jenis compound yang sangat cocok untuk hiasan kue, dicetak, diserut, serta dibuat sebagai bahan isian / filling dan bahkan bisa langsung dimakan.','20181108073558.jpg','0','2018-11-08 08:58:38'),
(7,'Colatta Milk Compound\n\nCokelat masak jenis compound yang sangat cocok untuk hiasan kue, dicetak, diserut, serta dibuat sebagai bahan isian / filling dan bahkan bisa langsung dimakan.','20181108082537.jpg','0','2018-11-08 08:59:48'),
(8,'Colatta Spread Chocolate\n\nSelai cokelat dengan rasa cokelat yang lezat dan tekstur lembut. Cocok untuk olesan pada roti dan campuran kue. Praktis dan mudah digunakan dengan harga yang ekonomis.','20181108083220.jpg','0','2018-11-08 08:59:17'),
(12,'Colatta Spread Hazelnut\n\nSelai cokelat dengan rasa cokelat yang lezat dan tekstur lembut. Cocok untuk olesan pada roti dan campuran kue. Praktis dan mudah digunakan dengan harga yang ekonomis.','20181108090108.jpg','0','2018-11-08 09:01:08'),
(13,'Colatta Strawberry Compound\nCokelat masak jenis compound yang sangat cocok untuk hiasan kue, dicetak, diserut, serta dibuat sebagai bahan isian / filling dan bahkan bias langsung dimakan.','20181108090131.jpg','0','2018-11-08 09:01:31'),
(14,'Colatta White Compound\n\nCokelat masak jenis compound yang sangat cocok untuk hiasan kue, dicetak, diserut, serta dibuat sebagai bahan isian / filling dan bahkan bisa langsung dimakan.','20181108090148.jpg','0','2018-11-08 09:01:48'),
(15,'Colatta Chocolate Coating\nCokelat masak jenis compound yang digunakan untuk menutup permukaan donut, mencelup serta menyiram permukaan kue atau cookies agar terlihat menarik dan bervariasi.','20181108090246.jpg','0','2018-11-08 09:02:46');

/*Table structure for table `haan` */

DROP TABLE IF EXISTS `haan`;

CREATE TABLE `haan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text,
  `upload_form` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `haan` */

insert  into `haan`(`id`,`desc`,`upload_form`,`status`,`upload_date`) values 
(1,'Haan Pancake Mix Keju\n\nTepung pembuat pancake yang praktis dan mudah (cukup tambahkan 1 butir telur & air lalu aduk sampai rata). Haan pancake mix ini juga dapat dibuatkan waffle atau crepes sesuai resep pada kemasan.','20181108091703.jpg','0','2018-11-08 09:17:03'),
(2,'Haan Maizena\n100% tepung jagung murni berkualitas tinggi yang berfungsi sebagai bahan pengental untuk soup, vla dan campuran pembuat pudding, kue, pie dan lain-lain.','20181108091740.jpg','0','2018-11-08 09:17:40'),
(4,'Haan Cake Mix Brownies Kukus\nHaan cake mix adalah premix kue dengan tekstur yang lembut, lebih moist, sangat terasa cokelatnya, dan memiliki rasa yang lezat. Mudah dan praktis, cara membuatnya, lebih hemat serta pasti jadi.','20181108091840.jpg','0','2018-11-08 09:18:40'),
(5,'Haan Pancake Mix Cokelat\nTepung pembuat pancake yang praktis dan mudah (cukup tambahkan 1 butir telur & air lalu aduk sampai rata). Haan pancake mix ini juga dapat dibuatkan waffle atau crepes sesuai resep pada kemasan.','20181108091910.jpg','0','2018-11-08 09:19:10'),
(6,'Haan Pancake Vanilla\nTepung pembuat pancake yang praktis dan mudah (cukup tambahkan 1 butir telur & air lalu aduk sampai rata). Haan pancake mix ini juga dapat dibuatkan waffle atau crepes sesuai resep pada kemasan.','20181108091937.jpg','0','2018-11-08 09:19:37'),
(7,'Haan Pudding  Cokelat\nBubu pudding siap pakai yang sangat mudah dan praktis untuk membuat pudding yang disajiakan lengkap dengan bubuk saus/vla.','20181108092009.jpg','0','2018-11-08 09:20:09'),
(8,'Haan Pudding Strawberry\nBubu pudding siap pakai yang sangat mudah dan praktis untuk membuat pudding yang disajiakan lengkap dengan bubuk saus/vla.','20181108092029.jpg','0','2018-11-08 09:20:29'),
(9,'Haan Pudding Mangga\nBubu pudding siap pakai yang sangat mudah dan praktis untuk membuat pudding yang disajiakan lengkap dengan bubuk saus/vla.','20181108092049.jpg','0','2018-11-08 09:20:49'),
(10,'Haan Ice Cream Mix Vanilla\nBubu pudding siap pakai yang sangat mudah dan praktis untuk membuat pudding yang disajiakan lengkap dengan bubuk saus/vla.','20181108092139.jpg','0','2018-11-08 09:21:39'),
(11,'Haan Ice Cream Mix Cokelat\nBubuk es krim siap pakai yang mudah dan praktis hanya satu kali kocok, dengan hasil yang sangat lembut.','20181108092220.jpg','0','2018-11-08 09:22:20'),
(12,'Haan Ice Cream Mix Strawberry\nBubuk es krim siap pakai yang mudah dan praktis hanya satu kali kocok, dengan hasil yang sangat lembut.','20181108092244.jpg','0','2018-11-08 09:22:44');

/*Table structure for table `resep` */

DROP TABLE IF EXISTS `resep`;

CREATE TABLE `resep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `cara` text,
  `upload_form` varchar(50) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `resep` */

insert  into `resep`(`id`,`judul`,`cara`,`upload_form`,`upload_date`) values 
(2,'BANANA PANCAKE IN CUPS','Banana Caramel\n<br>\n<br>150 g pisang (iris)\n<br>100 g gula pasir\n<br>40 g butter\n<br>\n<br>• Panaskan gula pasir hingga menjadi caramel,\nkemudian masukan butter\n<br>• Setelah butter meleleh masukkan potongan\npisang, aduk selama 5 menit kemudian diamkan\nhingga dingin.\n<br>\n<br>Banana Pancake\n<br>\n<br>1 pak Haan Pancake mix\n<br>1 btr telur ayam\n<br>100 g air\n<br>150 g banana caramel\n<br>\n<br>• Panaskan oven dengan suhu 170?C, siapkan\ncetakan cupcake.\n<br>• Campur semua bahan, aduk hingga tercampur\nrata, tambahkan pisang, aduk rata.\n<br>• Tuang ke dalam cetakan, panggang\n<br>\n<br>Tuile Pancake\n<br>\n<br>20 g Haan Pancake Mix\n<br>75 g air\n<br>25 g minyak sayur\n<br>\n<br>• Campurkan semua bahan dalam wadah,\naduk rata.\n<br>• Panaskan pan (teflon) dengan api sedang,\nkemudian masukan adonan sebanyak 2 sendok\nmakan, biarkan mengering.\n<br>• Angkat dan gulung memanjang\n<br>\n<br>Dulce Coating\n<br>\n<br>200 g Colatta Glaze Dulce\n<br>100 g keju cheddar (potong dadu)\n<br>\n<br>Penyelesaian\n<br>\n<br>• Keluarkan cupcake dari cetakan, celup dengan glaze, taburkan keju di atasnya, kemudian siram\nkemballi dengan glaze.\n<br>• Hias dengan tuile pancake.','20181109094913.jpg','2018-11-09 10:19:46'),
(3,'CHOCOLATE WHEEL COOKIES','CHOCOLATE COOKIES\n<br>\n<br>\n<br>Colatta Choco Filling 300gram\n<br>Tepung protein rendah 125gram\n<br>Pistachio (cincang) 100gram\n<br>\n<br>\n• Campur semua bahan (sesuai variannya) jadi satu, lalu aduk hingga tercampur rata.\n<br>Simpan dalam lemari pendingin.\n<br>• Keluarkan adonan, tipiskan hingga ketebalan 2 – 3 mm, simpan kembali dalam chiller.\n<br>\n<br>Penyelesaian\n<br>\n<br>• Siapkan loyang untuk memanggang, panaskan oven pada suhu 170ºC, api atas dan bawah.\n<br>• Keluarkan adonan white cookies varian 1 dan adonan chocolate cookies varian 1, tumpuk\nmenjadi satu, lalu gulung hingga membentuk roll panjang, simpan di dalam lemari pendingin\nhingga mengeras (jangan sampai beku).\n<br>• Lakukan proses yang sama pada adonan variasi lainnya (adonan white cookies varian 2 dan\nchocolate cookies 2 serta white cookies 3 dengan chococolate cookies 3)\n<br>• Setelah adonan mengeras, potong tipis 3 mm. Lalu susun di atas loyang dan panggang\nselama 6-8 menit.\n<br>• Angkat dan dinginkan.\n','20181109100935.jpg','2018-11-09 10:15:39'),
(4,'STRAWBERRY SURPRISE COOKIES','Cookies Dough\n<br>\n<br>175 g unsalted butter (lembut)\n<br>50 g putih telur\n<br>100 g Haan Fiesta Icing Sugar\n<br>300 g tepung protein Sedang\n<br>50 g Haan Maizena\n<br>Secukupnya Vanilla\n<br>Secukupnya strawberry paste\n<br>Secukupnya garam\n<br>\n<br>• Aduk semua bahan menjadi satu dan diamkan di\n<br>lemari es beberapa saat\n<br>\n<br>Choclate filling 1\n<br>\n<br>100 g Colatta Chocolate Filling\n<br>25 g terigu\n<br>\n<br>• Aduk semua bahan menjadi satu.\n<br>• Pulung cokelat\n<br>\n<br>Chocolate filling 2\n<br>\n<br>150 gr Colatta Chocolate Filling\n<br>Premia\n<br>\n<br>Strawberry coating\n<br>\n<br>100 g Colatta Passionatta\n<br>Strawberry\n<br>50 g Colatta Glaze Strawberry\n<br>\n<br>• Lelehkan Colatta Passionatta, campur dengan\n<br>glaze, aduk rata.\n<br>\n<br>Penyelesaian\n<br>\n<br>• Buat adonan bulat @10 g dan tipiskan, lalu isi dengan chocolate filling @3 g filling, tutup dan roll\n<br>bulat.\n<br>• Panggang dengan suhu 200?C selama 10 menit, dinginkan\n<br>• Siram dengan strawberry coating, lumuri dengan kelapa parut kering.','20181109102212.jpg','2018-11-09 10:22:41');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`user`,`pass`,`name`) values 
(1,'admin','admin','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
