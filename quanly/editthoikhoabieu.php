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

    
    if(isset($_POST['lop'])){
        $lopdangxem =  $_POST['lop'];
        $_SESSION['lopdangxem'] = $lopdangxem;
    }
    else{
        $lopdangxem = $_SESSION['lopdangxem'] ;
    }
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Chỉnh sửa thời khóa biểu học sinh</title>
    <style>
        .optiontkb{
            width: 99%;
            height: 30px;
            justify-content:center;
            text-align: center;
            align-items: center;
        }
        .btnsaveif{
            background-color: #2E64FE;
            color: white ;
            border : none;
            padding: 5px 10px 5px 10px;
            border-radius: 3px;
        }
        .btnsaveif:hover{
            background-color: #A9E2F3;
            
        }
    </style>
</head>
<body>
    <br>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Chỉnh sửa thời khóa biểu của Lớp <?= $lopdangxem ?></span>
    </div>
    <br>
   
    <div style="width:100% " class="container thoikhoabieusinhvien">
        <form action="./updatetkb.php" method="POST">
        
        <?php
            $sql = "SELECT * FROM thoikhoabieu234 WHERE lop='$lopdangxem'";
            $query = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($query); 

            $sql = "SELECT * FROM thoikhoabieu567 WHERE lop='$lopdangxem'";
            $query = mysqli_query($conn,$sql);
            $data1 = mysqli_fetch_assoc($query); 
        ?>
        <table class="tablethoikhoabieu" style="width:100%">
            <tr>
                <th>Buổi</th>
                <th>Tiết</th>
                <th>Thứ 2</th>
                <th>Thứ 3</th>
                <th>Thứ 4</th>
                <th>Thứ 5</th>
                <th>Thứ 6</th>
                <th>Thứ 7</th>
                <th>Chủ Nhật</th>
            </tr>
            <tr>
                <th rowspan="5" class="buoi">Sáng</th>
                <th>1</th>
                <td>
                    <select class="optiontkb" name="st2t1">
                        <option value="<?= $data["st2t1"] ?>"><?= $data["st2t1"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t1">
                        <option value=" <?= $data["st3t1"] ?>"> <?= $data["st3t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t1">
                        <option value="<?= $data["st4t1"] ?>"><?= $data["st4t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t1">
                        <option value="<?= $data1["st5t1"] ?>"><?= $data1["st5t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t1">
                        <option value="<?= $data1["st6t1"] ?>"><?= $data1["st6t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t1">
                        <option value="<?= $data1["st7t1"] ?>"><?= $data1["st7t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td>
                    <select class="optiontkb" name="st2t2">
                        <option value="<?= $data["st2t2"] ?>"><?= $data["st2t2"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t2">
                        <option value=" <?= $data["st3t2"] ?>"> <?= $data["st3t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t2">
                        <option value="<?= $data["st4t2"] ?>"><?= $data["st4t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t2">
                        <option value="<?= $data1["st5t2"] ?>"><?= $data1["st5t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t2">
                        <option value="<?= $data1["st6t2"] ?>"><?= $data1["st6t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t2">
                        <option value="<?= $data1["st7t2"] ?>"><?= $data1["st7t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td>
                    <select class="optiontkb" name="st2t3">
                        <option value="<?= $data["st2t3"] ?>"><?= $data["st2t3"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t3">
                        <option value=" <?= $data["st3t3"] ?>"> <?= $data["st3t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t3">
                        <option value="<?= $data["st4t3"] ?>"><?= $data["st4t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t3">
                        <option value="<?= $data1["st5t3"] ?>"><?= $data1["st5t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t3">
                        <option value="<?= $data1["st6t3"] ?>"><?= $data1["st6t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t3">
                        <option value="<?= $data1["st7t3"] ?>"><?= $data1["st7t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td>
                    <select class="optiontkb" name="st2t4">
                        <option value="<?= $data["st2t4"] ?>"><?= $data["st2t4"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t4">
                        <option value=" <?= $data["st3t4"] ?>"> <?= $data["st3t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t4">
                        <option value="<?= $data["st4t4"] ?>"><?= $data["st4t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t4">
                        <option value="<?= $data1["st5t4"] ?>"><?= $data1["st5t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t4">
                        <option value="<?= $data1["st6t4"] ?>"><?= $data1["st6t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t4">
                        <option value="<?= $data1["st7t4"] ?>"><?= $data1["st7t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td>
                    <select class="optiontkb" name="st2t5">
                        <option value="<?= $data["st2t5"] ?>"><?= $data["st2t5"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t5">
                        <option value=" <?= $data["st3t5"] ?>"> <?= $data["st3t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t5">
                        <option value="<?= $data["st4t5"] ?>"><?= $data["st4t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t5">
                        <option value="<?= $data1["st5t5"] ?>"><?= $data1["st5t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t5">
                        <option value="<?= $data1["st6t5"] ?>"><?= $data1["st6t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t5">
                        <option value="<?= $data1["st7t5"] ?>"><?= $data1["st7t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <td style="" colspan="9"><p></p></td>
            </tr>
            <tr>
                <th rowspan="5" class="buoi">Sáng</th>
                <th>1</th>
                <td>
                    <select class="optiontkb" name="ct2t1">
                        <option value="<?= $data["ct2t1"] ?>"><?= $data["ct2t1"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t1">
                        <option value=" <?= $data["ct3t1"] ?>"> <?= $data["ct3t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t1">
                        <option value="<?= $data["ct4t1"] ?>"><?= $data["ct4t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t1">
                        <option value="<?= $data1["ct5t1"] ?>"><?= $data1["ct5t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t1">
                        <option value="<?= $data1["ct6t1"] ?>"><?= $data1["ct6t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t1">
                        <option value="<?= $data1["ct7t1"] ?>"><?= $data1["ct7t1"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td>
                    <select class="optiontkb" name="ct2t2">
                        <option value="<?= $data["ct2t2"] ?>"><?= $data["ct2t2"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t2">
                        <option value=" <?= $data["ct3t2"] ?>"> <?= $data["ct3t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t2">
                        <option value="<?= $data["ct4t2"] ?>"><?= $data["ct4t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t2">
                        <option value="<?= $data1["ct5t2"] ?>"><?= $data1["ct5t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t2">
                        <option value="<?= $data1["ct6t2"] ?>"><?= $data1["ct6t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t2">
                        <option value="<?= $data1["ct7t2"] ?>"><?= $data1["ct7t2"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td>
                    <select class="optiontkb" name="ct2t3">
                        <option value="<?= $data["ct2t3"] ?>"><?= $data["ct2t3"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t3">
                        <option value=" <?= $data["ct3t3"] ?>"> <?= $data["ct3t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t3">
                        <option value="<?= $data["ct4t3"] ?>"><?= $data["ct4t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t3">
                        <option value="<?= $data1["ct5t3"] ?>"><?= $data1["ct5t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t3">
                        <option value="<?= $data1["ct6t3"] ?>"><?= $data1["ct6t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t3">
                        <option value="<?= $data1["ct7t3"] ?>"><?= $data1["ct7t3"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td>
                    <select class="optiontkb" name="ct2t4">
                        <option value="<?= $data["ct2t4"] ?>"><?= $data["ct2t4"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t4">
                        <option value=" <?= $data["ct3t4"] ?>"> <?= $data["ct3t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t4">
                        <option value="<?= $data["ct4t4"] ?>"><?= $data["ct4t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t4">
                        <option value="<?= $data1["ct5t4"] ?>"><?= $data1["ct5t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t4">
                        <option value="<?= $data1["ct6t4"] ?>"><?= $data1["ct6t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t4">
                        <option value="<?= $data1["ct7t4"] ?>"><?= $data1["ct7t4"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td>
                    <select class="optiontkb" name="ct2t5">
                        <option value="<?= $data["ct2t5"] ?>"><?= $data["ct2t5"] ?></option>
                        <option value="ChaoCo">Chào cờ</option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t5">
                        <option value=" <?= $data["ct3t5"] ?>"> <?= $data["ct3t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t5">
                        <option value="<?= $data["ct4t5"] ?>"><?= $data["ct4t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t5">
                        <option value="<?= $data1["ct5t5"] ?>"><?= $data1["ct5t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t5">
                        <option value="<?= $data1["ct6t5"] ?>"><?= $data1["ct6t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t5">
                        <option value="<?= $data1["ct7t5"] ?>"><?= $data1["ct7t5"] ?></option>
                        <option value="Toan">Toán</option>
                        <option value="Van">Văn</option>
                        <option value="Anh">Anh</option>
                        <option value="Li">Lí</option>
                        <option value="Hoa">Hóa</option>
                        <option value="TheDuc">Thể Dục</option>
                        <option value="LichSu">Lịch Sử</option>
                        <option value="DiaLi">Địa Lí</option>
                        <option value="GDCD">GDCD</option>
                        <option value="GDCD">Công Nghệ</option>
                        <option value="Sinh">Sinh Học</option>
                        <option value="SHCN">SHCN</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>

        </table>
        <br>
            <button class="btnsaveif" type="submit" value="<?= $lopdangxem ?>" name="lop">Lưu thông tin </button>
        </form>
    </div>


    
    
</body>
</html>