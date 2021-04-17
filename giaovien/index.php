<?php
   session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 2){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
    }
    if($_SESSION['pass'] == "4297f44b13955235245b2497399d7a93" ){
        echo '<script> alert("Bạn cần đổi mật khẩu trong lần đăng nhập đầu tiên"); </script>';
        header("Location: ./doimatkhau.php");
        exit();
    }
    $maso = $_SESSION['maso'];

    $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
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
    <title>Giao diện Giáo viên</title>
    <style>
        .framedivsv{
            background-color: #4B088A;
        }
        .framedivsv:hover{
            background-color: #9A2EFE;
        }
        
    </style>
</head>
<body>
    <div class="index_sinhvien_information">
        <div class="logout">
            <a href="../login.php" style="color:#c0392b;font-size:45px"><i class="fas fa-sign-out-alt"></i></a>
        </div>
        <div class="hethonghocsinh">
            Hệ thống Quản lí của giáo viên
        </div>
        <br>
        <div>
            <span style="color:#34495e">Xin Chào Thầy/Cô : <?= $data["ten"] ?> </span> <a href="./doimatkhau.php">Đổi mật khẩu</a>
        </div>
                     
    </div>
    
    <br>
    <div class="container">
        <div class="row rowsindexsv">
            <div class="col-sm-6 col-lg-3 ">
                <form  action="./thongbao.php">
                    <button class="framedivsv" type="submit">
                    <img  class="anhthongbbao1"  src="../image/notifi.svg"> 
                        <p class="link">Thông báo</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./thongtin.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/infor.svg">
                        <p class="link">Xem thông tin</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./capnhatdiem.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/diem.svg">
                        <p class="link">Cập Nhật Điểm HS</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./yeucauthaydoithongtin.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/changeinformation.svg">
                        <p class="link">Yêu cầu thay đổi thông tin</p>
                    </button>
                </form>
            </div>
            <div  class="col-sm-6 col-lg-3">
                <form  action="./caclopday.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/point.svg">
                        <p class="link">Các lớp dạy</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./xemthoikhoabieu.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/thoikhoabieu.svg">
                        <p class="link">Thời khóa biểu</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>