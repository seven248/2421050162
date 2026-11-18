<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width: 100%;
    }
    tr, th, td{
        border: 1px solid black;
    }
    .dangki{
        background-color: pink;
        border: 1px solid black;
        border-radius: 10px;
    }
</style>
<body>
    <h1>Tài khoản</h1>
    <a class="dangki" href="index.php?page_layout=dangki">Đăng kí</a>
<?php
    $sql = "select * from nguoi_dung";
    $result = mysqli_query($conn,$sql);
    
?>
<table>
    <tr>
        <th>ID</th>
        <th>Tên đăng nhập</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Ngày sinh</th>
        <th>Số điện thoại</th>
        <th>Giới tính</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_dang_nhap']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['ngay_sinh']?></td>
        <td><?php echo $row['so_dien_thoai']?></td>
        <td><?php echo $row['gioi_tinh']?></td>
    </tr>
</table>
<?php
        }
?>
</body>
</html>