
CREATE TABLE `tbl_content_service` (
  `id_content_service` bigint(255) NOT NULL AUTO_INCREMENT,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `category_list` int(5) NOT NULL,
  PRIMARY KEY (`id_content_service`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_user` (
  `id_user` bigint(255) NOT NULL AUTO_INCREMENT,
  `nameuser` varchar(1024)  COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1024)  COLLATE utf8_unicode_ci NOT NULL,
  `id_pem` int(10)  COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_pemuser` (
  `id_pem` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_pem` varchar(1024)  COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pem`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category_list` int(5) NOT NULL,
  `subcate` int(255) NOT NULL,
  `active_menu` int(255) NOT NULL,
  `active` int(5) NOT NULL,
  PRIMARY KEY (`id_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_category_list` (
  `id_category_list` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category_list`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_customer_contact` (
  `id_customer_contact` bigint(255) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_customer_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_news` (
  `id_news` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
 
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` datetime COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_active` (
  `id_active` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_active`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_products` (
  `id_products` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_products` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `id_catelog` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_products`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_slishowes` (
  `id_slideshow` bigint(255) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_slideshow`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_active_menu` (
  `id_active_menu` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_active_menu` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_active_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





CREATE TABLE `tbl_emailrss` (
  `id_emailrss` bigint(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_emailrss`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_dethi` (
  `id_dethi` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_dethi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `idMenu` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_time` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dethi`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_dapantest` (
  `id_dapan` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_dapan` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dapan`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_contentthi` F  `id_contentthi` bigint(255) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answersone` text COLLATE utf8_unicode_ci NOT NULL,
  `answerstwo` text COLLATE utf8_unicode_ci NOT NULL,
  `answersthere` text COLLATE utf8_unicode_ci NOT NULL,
  `answersfor` text COLLATE utf8_unicode_ci NOT NULL,
  `correct_answer` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `idMenu` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_dethi` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_contentthi`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_timethi` (
  `id_time` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_time` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `valuetime` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_payment` (
  `id_payment` bigint(255) NOT NULL AUTO_INCREMENT,
  `money` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_expre` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `startur` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_slideshows` (
  `id_slideshows` bigint(255) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_slideshows`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_transition_user` (
  `id_xn` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_xacnhan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_xn`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_odercode` (
  `id_odercode` bigint(255) NOT NULL AUTO_INCREMENT,
  `UserID` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_odercode`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_oder` (
	`id_oder` bigint(255) NOT NULL AUTO_INCREMENT,
	`danh_dau` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`ten_shop` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`link_sanpham` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`hinh_anh` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`kichthuoc` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`mau_sac` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`so_luong_dat` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`so_luong_nha` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`so_luong_sc` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`gia` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`tien` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`shiptq` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`tongtien` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`tongsl` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`ppsvn` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`khachhangghi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`nvvn` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
	`phidichvu` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`shipvn` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`phuphi` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`chietkhau` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`phaitra` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`datra` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`thieu` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`xn` int(255) COLLATE utf8_unicode_ci NOT NULL,
	`fileid` int(255) NOT NULL,
  
  PRIMARY KEY (`id_oder`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_dangkituvan` (
  `id_dangkituvan` bigint(255) NOT NULL AUTO_INCREMENT,
  `content` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dangkituvan`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_naptien` (
  `id_naptien` bigint(255) NOT NULL AUTO_INCREMENT,
  `idUser` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailUser` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynap` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `seri` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `cardtype` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `sotiennap` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `phiennapthe` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_naptien`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_quangcao` (
  `id_quangcao` bigint(255) NOT NULL AUTO_INCREMENT,
  `img_quangcao` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `link_quangcao` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_quangcao`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



