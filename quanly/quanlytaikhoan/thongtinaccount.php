<?php
    session_start();
    include '../../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 3){
        }
        else {
            header("Location: ../../login.php");
            exit();
        }
    }
    else{
        header("Location: ../../login.php"); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../style.css">
    <title>Thông tin Các Tài Khoản trong HT</title>
    <style>
        .score{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <br>
    <div class="container">
        <a class="buttonback" href="./quanlytaikhoan.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Thông tin Các tài khoản tồn tại trong hệ thống</span>
    </div>


    <?php
        $sql = "SELECT * from user_account ";

        $resultset = mysqli_query($conn,$sql);
        $list      = [];
        while ($row = mysqli_fetch_array($resultset,1)) {
            $list[] = $row;
        }
        ?>
<div class="container">


        <table class="score"  style="width:100%">
            <tr>
                <th>Mã số </th>
                <th>Tên</th>
                <th>Chức vụ</th>
            </tr>
        

        <?php
        foreach ($list as $std) {
            $ten = '';
            $maso = $std['maso'];
            if($std['lv'] == 1){
                $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $ten = $data['ten'];
                $lever = "Học Sinh";
            }
            else if ($std['lv'] == 2){
                $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $ten = $data['ten'];
                $lever = "Giáo Viên";
            }
            else if ($std['lv'] == 4){
                $sql = "SELECT * FROM thongtinphuhuynh WHERE maso='$maso'";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $ten = $data['ten'];
                $lever = "Phụ Huynh";
            }
            else if ($std['lv'] == 5){
                $ten = 'Hiệu Trưởng';
                $lever = "Hiệu Trưởng";
            }
            else{
                $ten = 'Quản Lý';
                $lever = "Quản Lý";
            }


           echo ' <tr>
                    <td>'.$std['maso'].'</td>
                    <td>'.$ten.'</td>
                    <td>'.$lever.'</td>
                </tr>';
        }
?>
</table>
</div>
</body>
</html>