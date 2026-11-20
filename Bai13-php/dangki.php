<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .khoi{
            margin:auto;
            width: 15%;
            background-color: pink;
            padding:10px;
            border-radius:10px;
        }
        .the{
            display: block;
            width: 100%;
            margin: 5px auto;
            border-radius: 5px;
        }
        h1{
            text-align:center;
            color: pink;
            width: 100%;
        }
</style>
<body>
    <h1>ĐĂNG KÍ TÀI KHOẢN MỚI</h1>
    <form class="khoi" action="" method="POST">
        <div>
            <input class="the" type="text" name="tenDangNhap" id="" placeholder="Tên Đăng Nhập">
        </div>
        <div >
            <input class="the" type="password" name="matKhau" id="" placeholder="Mật khẩu">
        </div>
        <div >
            <input class="the" type="email" name="email" id="" placeholder="Email">
        </div>
        <div >
            <input class="the" type="text" name="hoten" id="" placeholder="Họ và Tên">
        </div>
        <div >
            <input class="the" type="date" name="ngaysinh" id="" placeholder="Ngày sinh">
        </div>
        <div >
            <input class="the" type="text" name="sdt" id="" placeholder="Số điện thoại">
        </div>
        <div class="gioiTinh">
            <input type="radio" name="gioitinh" id="" value="1">Nam
            <input type="radio" name="gioitinh" id="" value="0">Nữ
        </div>
        <button class="the">Thêm</button>
    </form>
    </form>
    <?php
        if(isset($_POST['tenDangNhap']) && 
           isset($_POST['matKhau']) && 
           isset($_POST['email']) && 
           isset($_POST['hoten']) &&
           isset($_POST['ngaysinh']) &&
           isset($_POST['sdt']) &&
           isset($_POST['gioitinh']))
        {
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $ngaysinh = $_POST['ngaysinh'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            if(!empty($tenDangNhap) && 
                !empty($matKhau) && 
                !empty($email) && 
                !empty($hoten) &&
                !empty($ngaysinh) &&
                !empty($sdt)
                ){
                //người dùng nhập đủ thông tin

                $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) 
                VALUES ('$tenDangNhap','$matKhau','$email','$hoten','$ngaysinh','$sdt','$gioitinh')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=taikhoan");
                }
                else{
                    echo "Thêm người dùng thất bại";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        
    ?>
</body>
</html>