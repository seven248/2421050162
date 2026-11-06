<?php
    //Nội dung php đặt ở vị trí này
    echo "Hello World! <br>";
    //Biến: $Tên biến = giá trị biến
    $hoTen = "Đình Huy";
    $tuoi = 20;
    
    //Để nối chuỗi trong php dùng dấu "."
    echo $hoTen . " " . $tuoi . "<br>";

    //strlen() Độ dài chuỗi
    echo strlen($hoTen) . "<br>";

    //Đếm số từ
    echo str_word_count($hoTen) . "<br>";

    //Tìm kiếm kí tự trong chuỗi
    echo strpos($hoTen, "y") . "<br>";

    //Thay thế kí tự trong chuổi
    echo str_replace("Đình", "Nguyễn", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;

    //Phép cộng
    echo $soThuNhat + $soThuHai . "<br>";

    //Phép trừ 
    echo $soThuNhat - $soThuHai . "<br>";

    //Phép nhân
    echo $soThuNhat * $soThuHai . "<br>";

    //Phép chia
    echo $soThuNhat / $soThuHai . "<br>";

    //Toán từ gán
    # +=, -=, *=, /=, %=
    $soThuNhat += $soThuHai;
    echo $soThuNhat . "<br>";

    echo $soThuHai % $soThuNhat . "<br>";

    //Phép so sánh: ==, !=, >, <, >=, <=, ===
    echo $soThuNhat == $soThuHai . "<br>";

    // Câu điều kiện
    // if ("điều kiện"){
    //  logic
    // }
    // elseif("điều kiện"){
    // logic
    // }
    // else{
    //     logic
    // };
    // $tong = $soThuNhat + $soThuHai;
    // if ( $tong < 15){
    //     echo "Nhỏ hơn 15";
    // }
    // elseif ($tong == 15){
    //     echo "= 15";
    // }
    // else ($tong >15){
    //     echo "Lớn hơn 15";
    // };


    //Switch case
    $color = "red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
            break;
        default:
            echo "<br>";
            echo "no color";
            break;
    }

    //for
    for ($i = 0; $i < 100 ; $i++){
        echo $i . "<br>";
    }

    //Mảng
    echo "<br>";

    $mang = ["Huy", "Hằng", "Huyền"];

    //Đếm phần tử mảng
    echo count ($mang) . "<br>";
    echo $mang[1] . "<br>";

    $mang[] = "Seen";
    print_r($mang);

    echo "<br>";

    //Xóa phần tử trong mảng
    unset($mang[3]);
    print_r ($mang);
     
?>