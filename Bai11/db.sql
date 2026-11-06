create database netflix;
-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

-- nguoi_dung
CREATE TABLE nguoi_dung (
	id int AUTO_INCREMENT PRIMARY KEY,
	ten_dang_nhap varchar(30) NOT NULL,
	mat_khau varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	ho_ten varchar(50) NOT NULL,
	ngay_sinh date NOT NULL,
	so_dien_thoai varchar(10) NOT NULL,
	gioi_tinh boolean NOT NULL
	);

-- the_loai
CREATE TABLE the_loai (
	id int AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai varchar(255) NOT NULL
);
-- dien_vien
CREATE TABLE dien_vien (
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL
);
-- phim
CREATE TABLE phim (
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_phim varchar(255) NOT NULL,
    quoc_gia varchar(100) NOT NULL,
    dao_dien_id int NOT NULL,
    nam datetime NOT NULL,
    do_tuoi int NOT NULL,
    mo_ta varchar(255) NOT NULL
);
-- phim_the_loai
CREATE TABLE phim_the_loai (
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    the_loai_id int NOT NULL
);
-- phim_dien_vien
CREATE TABLE (
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    dien_vien_id int NOT NULL
);
-- dao_dien
CREATE TABLE dao_dien (
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL
)



-- dao_dien
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Đình Huy','2006-07-17');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Trần Thị Thu Hằng','2006-06-12');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Trần Ngọc Huyền','2006-06-23');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Thanh Tùng','2006-06-12');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nghiêm Vũ Hoàng Long','2006-06-23')

-- phim
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Doremon','Nhật Bản',1,'2018-1-1','8');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Thỏ ơi','Việt Nam',2,'2026-2-4','1');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Bố già','Việt Nam',3,'2017-5-6','9');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Mưa Đỏ','Việt Nam',2,'2026-2-4','1');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Mắt Biếc','Việt Nam',3,'2017-5-6','9');


-- phim_the_loai
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (1,1);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (1,5);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (2,1);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (2,4);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (3,1);

-- phim_dien_vien
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (1,1);
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (2,2);
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (3,3);

-- nguoi_dung
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('Dhuy','123','admin@gmail.com','Nguyễn Đình Huy','2006-08-24','0123456789',1);
