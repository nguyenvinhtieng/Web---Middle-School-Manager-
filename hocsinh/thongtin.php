<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 1){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
    }

    $maso = $_SESSION['maso'];
    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'" ;
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query); 
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
    <title>Thông tin học sinh</title>
</head>
<body>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Thông tin của sinh viên <?= $data['ten'] ?></span>
    </div>
    <br>
    <div style="width:70%;" class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <p style="text-align:left;font-size:20px;color:#7d5fff;font-weight:bold">avatar </p>
                <div class="imageavatarusername">
                    <?=
                        $abc =  '<img class="imageuser" src="../avatar/'.$data['maso'].'.jpg"  alt="">';  
                    ?>
                </div>
                
            </div>
            <div class="col-sm-6 col-lg-9 inforstudent">
                <p><span>Họ tên : </span><?= $data['ten'] ?></p>
                <p><span>Giới tính : </span><?= $data['gioitinh'] ?></p>
                <p><span>Ngày sinh : </span><?= $data['ngaysinh'] ?></p>
                <p><span>Lớp : </span><?= $data['lop'] ?></p>
                <p><span>Địa chỉ : </span><?= $data['diachi'] ?></p>
                <p><span>Số điện thoại : </span><?= $data['sodienthoai'] ?></p>
                <p><span>Tên bố : </span><?= $data['tenbo'] ?></p>
                <p><span>Năm sinh của bố : </span><?= $data['namsinhbo'] ?></p>
                <p><span>Tên mẹ : </span><?= $data['tenme'] ?></p>
                <p><span>Năm sinh của mẹ : </span><?= $data['namsinhme'] ?></p>
            </div>
        </div>
    </div>
    
    

    
</body>
</html>