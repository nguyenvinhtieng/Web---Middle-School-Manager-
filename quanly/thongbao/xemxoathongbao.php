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

    $err = '';
    if(isset($_POST['submit']) && isset($_POST['noidung'])){
        $noidung = $_POST['noidung'];
        $nguoinhan = $_POST['nguoinhan'];
        $title = $_POST['title'];
        $receiver = $_POST['receiver'];
        
        if( $nguoinhan == "" && $receiver == ""){
            $err = "Lỗi không có người nhận phù hợp!";
        }
        else{
            $flag = true;
            while($flag){
                $flag = false;
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                $id =  substr(str_shuffle($permitted_chars), 0, 15);
                $sql = "SELECT * from thongbao ";
                $resultset = mysqli_query($conn,$sql);
                $list      = [];
                while ($row = mysqli_fetch_array($resultset,1)) {
                    $list[] = $row;
                }
                foreach ($list as $std) {
                    if($id == $std['id']){
                        $flag = true;
                    }
                }
            }

            
            if($nguoinhan == "hocsinh"){
                $sql = "INSERT INTO thongbao(id,title,nguoinhan,noidung)  VALUES 
                ('$id','$title','HS','$noidung');";
                $query = mysqli_query($conn,$sql);
                $err =  "Tạo thông báo thành công ";
            }
            else if($nguoinhan == "giaovien"){
                $sql = "INSERT INTO thongbao(id,title,nguoinhan,noidung)  VALUES 
                ('$id','$title','GV','$noidung');";
                $query = mysqli_query($conn,$sql);
                $err =  "Tạo thông báo thành công ";
            }
            else if ($nguoinhan == "phuhuynh"){
                $sql = "INSERT INTO thongbao(id,title,nguoinhan,noidung)  VALUES 
                ('$id','$title','PH','$noidung');";
                $query = mysqli_query($conn,$sql);
                $err =  "Tạo thông báo thành công ";
            }
            else if ($nguoinhan == "tatca"){
                $sql = "INSERT INTO thongbao(id,title,nguoinhan,noidung)  VALUES 
                ('$id','$title','ALL','$noidung');";
                $query = mysqli_query($conn,$sql);
                $err =  "Tạo thông báo thành công ";
            }
            
            if($receiver != ''){
                $rc = explode(",",$receiver);
                for($i = 0 ; $i < 100000000000 ; $i ++){
                    if(isset($rc[$i])){
                        $us = trim($rc[$i]);
                        $flag = true;
                        while($flag){
                            $flag = false;
                            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                            $id =  substr(str_shuffle($permitted_chars), 0, 15);
                            $sql = "SELECT * from thongbao ";
                            $resultset = mysqli_query($conn,$sql);
                            $list      = [];
                            while ($row = mysqli_fetch_array($resultset,1)) {
                                $list[] = $row;
                            }
                            foreach ($list as $std) {
                                if($id == $std['id']){
                                    $flag = true;
                                }
                            }
                        }
                        $err =  "Tạo thông báo thành công ";
                        $sql = "INSERT INTO thongbao(id,title,nguoinhan,noidung)  VALUES ('$id','$title','$us','$noidung');";
                        $query = mysqli_query($conn,$sql);
                        
                    }
                    else{
                        break;
                    }
                }
                
            }
        }

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
    <title>Tạo thông báo</title>
    <style>
        .btndelete{
            background-color: red;
            color: white ;
            border: none;
            padding: 5px 5px 5px 5px;
            border-radius: 3px;
        }
        .btnxem{
            background-color: #4876FF;
            color: white ;
            border: none;
            padding: 5px 5px 5px 5px;
            border-radius: 3px;
            
        }
        .abc{
            position: relative;
        }
    </style>
</head>
<body>
<br>
    <div class="container">
    <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Danh sách các thông báo</span>
    </div>     
    </p>
    <div class="container">
        <p style="font-size: 30px;font-weight: 600;color: #268be9;" ></p>
        <?php
            $sql = "SELECT * from thongbao ";

            $resultset = mysqli_query($conn,$sql);
            $list      = [];
            while ($row = mysqli_fetch_array($resultset,1)) {
                $list[] = $row;
            }
            
            foreach ($list as $std) {
                
            $nguoinhantb = $std['nguoinhan'];
            if($nguoinhantb == 'ALL'){
                $nguoinhantb = "Tất cả";
            }
            else if($nguoinhantb == 'HS'){
                $nguoinhantb = "Học Sinh";
            }
            else if($nguoinhantb == 'PH'){
                $nguoinhantb = "Phụ Huynh";
            }

            echo '<form action="xulithongbao.php" method="POST">
                    <div>
                        <span>'.$std['title'].'('.$nguoinhantb.')</span>

                        <button class="btndelete" style="float:right" value="'.$std['id'].'" name="btndeletetb">Xóa</button>
                        
                    <button class="btnxem" style="float:right" value="'.$std['id'].'" name="btnxemtb">Xem</button>
                    
                        
                    </div>
                </form>
                
                ';
            echo '<hr>';
            }
        ?>

    </div>

</body>
</html>