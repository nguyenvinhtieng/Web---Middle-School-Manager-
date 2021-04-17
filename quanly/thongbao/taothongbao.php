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
    <span class="word">Tạo thông báo </span>
    </div>

<br>
    <div class="container">
        <form class="formcreatentf" action="" method="POST">
            <p style="font-size: 20px;font-weight: 600;color: #268be9;" >Tiêu đề thông báo  <br>
            </p>
            <div>
                <textarea style="padding:5px;font-size:20px" name="title" id="title" cols="90" rows="2" required></textarea>
            </div>
            <br>
            <p style="font-size: 20px;font-weight: 600;color: #268be9;" >Nội dung thông báo <br>
            </p>
            <div>
                <textarea style="padding:5px;font-size:20px" name="noidung" id="thongbao" cols="90" rows="5" required></textarea>
            </div>
            <br>

            <span style="font-size: 20px;font-weight: 600;color: #268be9;">Chọn người nhận </span>
            <select name="nguoinhan">
                <option value=""></option>
                <option value="hocsinh">Tất Cả Học sinh</option>
                <option value="giaovien">Tất Cả Giáo viên</option>
                <option value="phuhuynh">Tất Cả Phụ huynh</option>
                <option value="tatca">Toàn bộ người dùng</option>
            </select>
            <br><p></p>
            <p style="font-size: 20px;font-weight: 600;color: #268be9;" >Người nhận cụ thể
                <span style="color:red">(Ghi liền nhau và cách nhau bởi dấu ',' vd:sv1,sv2,sv3...</span>
                <br>
            <input type="text" style="width:82%" name="receiver">
        <div>
            <input class="btncreatentf" style="font-size:20px;font-weight:600;color:#268be9;" value="Tạo" type="submit" name="submit">
        </div>
        <div style="color:green;font-weight:500" class="err">
            <?php
                echo $err;
            ?>
        </div>
        </form>
    </div>
    <br>
    <p>
        
    

</body>
</html>