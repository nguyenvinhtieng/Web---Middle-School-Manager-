<?php
   session_start();
    include '../../connect.php';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Quản lý tài khoản</title>
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
</head>
<body>
    <div class="container">
    <a class="buttonback" href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Quản lý thông báo</span>
    </div>

    <div class="container">
        <div class="row rowsindexsv">
        <div class="col-sm-6 col-lg-3">
                <form  action="./taothongbao.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../../image/point.svg">  
                        <p class="link">Tạo Thông báo</p>
                    </button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-3">
                <form  action="./xemxoathongbao.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../../image/point.svg">  
                        <p class="link">Xem/Xóa Thông báo</p>
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>