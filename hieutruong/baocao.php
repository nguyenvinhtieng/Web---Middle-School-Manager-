<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 3){
            header("Location: ../admin/index.php");
            exit();
        }
        else if($_SESSION['lv'] == 2){
            header("Location: ../giaovien/index.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php");
        
    }
    $maso = $_SESSION['maso'];

    
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

    <title>Xem báo cáo thông kê</title>
    


    <style>
    </style>
</head>
<body>
   <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Xem báo cáo thống kê</span>
    </div>
    <br>
    <div class="container">
        <div class="row rowsindexsv">
            <div class="col-sm-6 col-lg-3">
                <form  action="./baocaotheohk.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/notifi.svg">
                        <p class="link">Xem báo cáo theo học kì</p>
                    </button>
                </form> 
            </div>
            <div  class="col-sm-6 col-lg-3 framediv">
                <form  action="./baocaotheonam.php">
                    <button class="framedivsv" type="submit">
                    <img  class="anhthongbbao1"  src="../image/point.svg"> 
                        <p class="link">Xem báo cáo theo năm</p>
                    </button>
                </form> 
            </div>
            
        </div>
    </div>
   
</body>
</html>