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
    <title>Thông tin giảng viên trường THCS</title>
    <style>
        .score th{
            border-right: none;
            justify-content: center;
            text-align:center;
        }
    </style>
</head>
<body>
    
    <br>
    <div class="container">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Thông tin Giảng Viên trường THCS </span>
    </div>


    <?php
        $sql = "SELECT * from thongtingiaovien ";

        $resultset = mysqli_query($conn,$sql);
        $list      = [];
        while ($row = mysqli_fetch_array($resultset,1)) {
            $list[] = $row;
        }
        ?>
<div class="container">


        <table class="score"  style="width:100%">
            <tr>
                <th>Mã số Giảng viên</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Lớp chủ nhiệm</th>
                <th>Môn 1</th>
                <th>Môn 2</th>
                <th>Môn 3</th>
                <th>Môn 4</th>
                <th>Môn 5</th>
            </tr>
        

        <?php
        foreach ($list as $std) {
            $ms = $std['maso'];
            $sql = "SELECT * FROM thongtingiaovien WHERE maso='$ms'";
            $query = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($query);


           echo ' <tr>
                <td>'.$data['maso'].'</td>
                <td>'.$data['ten'].'</td>
                <td>'.$data['ngaysinh'].'</td>
                <td>'.$data['diachi'].'</td>
                <td>'.$data['sodienthoai'].'</td>
                <td>'.$data['lopchunhiem'].'</td>
                <td>'.$data['subject1'].'</td>
                <td>'.$data['subject2'].'</td>
                <td>'.$data['subject3'].'</td>
                <td>'.$data['subject4'].'</td>
                <td>'.$data['subject5'].'</td>
                </tr>';
        }
?>
</table>
</div>
</body>
</html>