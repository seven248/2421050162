<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
        .khoi-dang-nhap{
            width:100%;
            height:85%;
        }
        form{
            width:80%;
            margin:10px auto;
        }
        .khoi-thong-tin{
            width:100%;
            margin-bottom:10px;
        }
        p{
            margin:0;
        }
        input{
            width:100%;
            padding:5px 0;
            border-radius:5px;
            background-color:#e8f0fe;
        }

</style>
<body>
    <div class="khoi-dang-nhap">
                <form action="dangnhap.php" method="POST">
                    <div class="khoi-thong-tin">
                        <h1>Đăng nhập</h1>
                    </div>
                    <div class="khoi-thong-tin">
                        <p>Tài khoản</p>
                        <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
                    </div>
                    <div class="khoi-thong-tin">
                        <p>Mật Khẩu</p>
                        <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
                    </div>
                    <div class="">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
<?php 
    //Sử dụng include để nối 2 file php
    include 'connect.php';
    session_start();
    if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau']) ){
        $tenDangNhap = $_POST['tenDangNhap'];
        $matKhau = $_POST['matKhau'];

        $sql = "SELECT * FROM `nguoi_dung` WHERE ten_dang_nhap = '$tenDangNhap' and mat_khau = '$matKhau'";

        $result = mysqli_query($conn,$sql);


        if(mysqli_num_rows($result) > 0){
            $_SESSION['dangnhap'] = "thanhcong";
            header("Location: index.php");
        }
        else{
            echo "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }
?>


</body>
</html>