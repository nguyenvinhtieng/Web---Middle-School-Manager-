<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 3){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
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
    <link rel="stylesheet" href="../style.css">
    <style>
        .score{
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
    <title>Tìm thông tin</title>
</head>
<body>
    <br>
<div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Tìm thông tin người dùng của hệ thống </span>
    </div>

    <br>

<div class="container">
<form action="" method="POST">
        Mã số
        <input type="text" name="maso" required>
        
        <input type="submit" name="submit">
    </form>
</div>
<br>
<div class="container">
    
<?php

        
    $show ='';

        if(isset($_POST['submit'])){
                $maso = $_POST['maso'];
                $sql = "SELECT * FROM user_account WHERE maso = '$maso'";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $check = mysqli_num_rows($query);
                if($check >= 1){
                    $lv = $data['lv'];
                    if($lv == 1){
                        $sql = "SELECT * FROM thongtinsinhvien WHERE maso = '$maso'";
                        $query = mysqli_query($conn,$sql);
                        $find = mysqli_fetch_assoc($query);
                        $ten1 = $find['ten'];
                        $gioitinh1 =$find['gioitinh'];
                        $ngaysinh1 = $find['ngaysinh'];
                        $diachi1 = $find['diachi'];
                        $sodienthoai1 = $find['sodienthoai'];
        
                        echo  ' <table class="score" style="width:100%">
                                <tr>
                                    <th>Mã số</th>
                                    <th>Tên</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức vụ</th>
                                </tr>
                                <tr>
                                    <td>'.$maso.'</td>
                                    <td>'.$ten1.'</td>
                                    <td>'.$gioitinh1.'</td>
                                    <td>'.$ngaysinh1.'</td>
                                    <td>'.$diachi1.'</td>
                                    <td>'.$sodienthoai1.'</td>
                                    <td>Học Sinh</td>
                                </tr>
                        </table>';    
                }
                if($lv == 2){
                        $sql = "SELECT * FROM thongtingiaovien WHERE maso = '$maso'";
                        $query = mysqli_query($conn,$sql);
                        $find = mysqli_fetch_assoc($query);
                        $ten1 = $find['ten'];
                        $gioitinh1 =$find['gioitinh'];
                        $ngaysinh1 = $find['ngaysinh'];
                        $diachi1 = $find['diachi'];
                        $sodienthoai1 = $find['sodienthoai'];
        
                        echo  ' <table class="score" style="width:100%">
                                <tr>
                                    <th>Mã số</th>
                                    <th>Tên</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức vụ</th>
                                </tr>
                                <tr>
                                    <td>'.$maso.'</td>
                                    <td>'.$ten1.'</td>
                                    <td>'.$gioitinh1.'</td>
                                    <td>'.$ngaysinh1.'</td>
                                    <td>'.$diachi1.'</td>
                                    <td>'.$sodienthoai1.'</td>
                                    <td>Giáo Viên</td>
                                </tr>
                        </table>';    
                    }
                    if($lv == 4){
                        $sql = "SELECT * FROM thongtinphuhuynh WHERE maso = '$maso'";
                        $query = mysqli_query($conn,$sql);
                        $find = mysqli_fetch_assoc($query);
                        $ten1 = $find['ten'];
                        $sodienthoai1 = $find['sdt'];
        
                        echo  ' <table class="score" style="width:100%">
                                <tr>
                                    <th>Mã số</th>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức vụ</th>
                                </tr>
                                <tr>
                                    <td>'.$maso.'</td>
                                    <td>'.$ten1.'</td>
                                    <td>'.$sodienthoai1.'</td>
                                    <td>Phụ Huynh</td>
                                </tr>
                        </table>';    
                }
                if($lv == 5){

                        echo  ' <table class="score" style="width:100%">
                                <tr>
                                    <th>Mã số</th>
                                    
                                    <th>Chức vụ</th>
                                </tr>
                                <tr>
                                    <td>'.$maso.'</td>
                                    
                                    <td>Hiệu Trưởng</td>
                                </tr>
                        </table>';    
                }
                if($lv == 3){

                        echo  ' <table class="score" style="width:100%">
                                <tr>
                                    <th>Mã số</th>
                                    
                                    <th>Chức vụ</th>
                                </tr>
                                <tr>
                                    <td>'.$maso.'</td>
                                    
                                    <td>Quản Lý</td>
                                </tr>
                        </table>';    
                }

            }
                else{
                    $show = "Không tìm thấy thông tin";
                }
                
            }
             ///////Co ms


              
        
   ?>

</div>
   

</body>
</html>