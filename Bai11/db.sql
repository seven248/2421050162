create database netflix;
-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

-- Table Người dùng
CREATE TABLE nguoi_dung (
	id int AUTO_INCREMENT PRIMARY KEY,
	ten_dang_nhap varchar(30) NOT NULL,
	mat_khau varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	ho_ten varchar(50) NOT NULL,
	ngay_sinh date NOT NULL,
	so_dien_thoai varchar(10) NOT NULL,
	gioi_tinh boolean NOT NULL
	)

-- the_loai
	id key AUTO_INCREMENT int,
    ten_the_loai varchar(255)

-- dien_vien
    id key AUTO_INCREMENT int,
    ho_ten varchar(100),
    ngay_sinh date

-- phim
    id key AUTO_INCREMENT int,
    ten_phim varchar(255),
    quoc_gia varchar(100),
    dao_dien_id int,
    nam datetime,
    do_tuoi int,
    mo_ta varchar(255)


-- phim_the_loai
    id key AUTO_INCREMENT int,
    phim_id int,
    the_loai_id int

-- phim_dien_vien
    id key AUTO_INCREMENT int,
    phim_id int,
    dien_vien_id int

-- dao_dien
    id key AUTO_INCREMENT int,
    ho_ten varchar(100),
    ngay_sinh date
