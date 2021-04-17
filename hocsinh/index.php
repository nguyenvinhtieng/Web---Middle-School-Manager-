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
    if($_SESSION['pass'] == "4297f44b13955235245b2497399d7a93"){
        header("Location: ./doimatkhau.php");
        exit();
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

    <title>Giao diện học sinh</title>
    <style>
        
    </style>
</head>
<body>
    <div class="index_sinhvien_information">
        <div class="logout">
            <a href="../login.php" style="color:#c0392b;font-size:45px"><i class="fas fa-sign-out-alt"></i></a>
        </div>
        <div class="hethonghocsinh">
            Hệ thống học sinh
        </div>
        <br>
        <div>
            <span style="color:#34495e">Xin Chào  <?= $data["ten"] ?> </span> <a href="./doimatkhau.php">Đổi mật khẩu</a>
        </div>
            
                
    </div>
    <br>
    <div class="container">
        <div class="row rowsindexsv">
            <div class="col-sm-6 col-lg-3">
                <form  action="./thongbao.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/notifi.svg">   
                        <p class="link">Thông báo</p>
                    </button>
                </form>      
            </div>
            <div class="col-sm-6 col-lg-3 framediv">
                <form  action="./thongtin.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/infor.svg">
                        <p class="link">Xem thông tin</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3 framediv">
                <form  action="./yeucauthaydoithongtin.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/changeinformation.svg"> 
                        <p class="link">Yêu cầu thay đổi thông tin</p>
                    </button>
                </form>
            </div>
            <div  class="col-sm-6 col-lg-3 framediv">
                <form  action="./xemdiem.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/point.svg">   
                        <p class="link">Xem điểm</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3 framediv">
                <form  action="./xemthoikhoabieu.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/thoikhoabieu.svg">
                        <p class="link">Thời khóa biểu</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3 framediv">
                <form  action="./danhgiagiaovien.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/survay.svg"> 
                        <p class="link">Đánh giá giáo viên</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>