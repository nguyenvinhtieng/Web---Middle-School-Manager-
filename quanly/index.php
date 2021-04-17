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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ thống quản lí trường học</title>
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
    <title>Giao diện Quản lý</title>
    <style>
        .logout > a{
            color: #0080FF;
            font-size:90px
        }
    
    </style>
</head>
<body>
    <br>
    <div class="container index_sinhvien_information">
        <div class="row" style="width:130%">
            
            <span class="hethonghocsinh" >
                Hệ thống Quản lí trường THCS
            </span>
            <div style="width:50%"></div>
            <div class="logout" >
                <a href="../login.php" style="color:#c0392b;font-size:45px"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div></div>
        </div>
        <div class="row">
            <div>
                <span style="color:#34495e">Xin Chào <b>Quản Lý </b>  </span> <a href="./doimatkhau.php">Đổi mật khẩu</a>
            </div>   
        </div>
                    
    </div>
    
    <style>
            .framedivsv{
                background-color: #D7DF01;
                
            }
            .framedivsv:hover{
                background-color: #F4FA58;
            }
            .link{
                color: black;
            }
            
    </style>

    <br>
    <div class="container">
        <div class="row rowsindexsv">
            <div class="col-sm-6 col-lg-3">
                <form  action="./thongbao/index.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/point.svg">  
                        <p class="link">Thông báo</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./quanlytaikhoan/quanlytaikhoan.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/taotk.svg">
                        <p class="link">Quản lý tài khoản</p>
                    </button>
                </form> 
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./danhsachlopcapnhattkb.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/tkb.svg"> 
                        <p class="link">Chỉnh sửa TKB HS</p>
                    </button>
                </form> 
            </div>
            <div class="col-sm-6 col-lg-3">
            <form  action="./edittkbgv.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/tkb.svg"> 
                        <p class="link">Chỉnh sửa TKB GV</p>
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
            <form  action="./xuliyeucau.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/request.svg"> 
                        <p class="link">Xử lí yêu cầu</p>
                    </button>
                </form>
            </div>
            <div  class="col-sm-6 col-lg-3">
            <form  action="./thongtingiaovien.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/infor.svg">
                        <p class="link">Thông tin giáo viên</p>
                    </button>
                </form> 
            </div>
            <div class="col-sm-6 col-lg-3">
            <form  action="./thongtinhocsinh.php">
                    <button class="framedivsv" type="submit">
                    <img  class="anhthongbbao1"  src="../image/inforstd.svg">  
                        <p class="link">Thông tin học sinh</p>
                    </button>
                </form> 
            </div>
            
            <div class="col-sm-6 col-lg-3">
            <form  action="./timthongtin.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/timkiem.svg">
                        <p class="link">Tìm thông tin tài khoản</p>
                    </button>
                </form> 
            </div>
            
            <div  class="col-sm-6 col-lg-3">
            <form  action="./xemdanhgiagv.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/infor.svg"> 
                        <p class="link">Xem đánh giá giáo viên</p>
                    </button>
                </form> 
            </div>
            
            
        </div>
    </div>



</body>
</html>