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

    $err="";
    if(isset($_POST['maso'])){
        $maso = $_POST['maso'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        $lv = $_POST['lv'];
        if($lv == "HS"){
            $lv = 1;
        }
        else if ($lv == "GV"){
            $lv = 2;
        }
        else {
            $lv = 3;
        }
        
        $sql = "SELECT * FROM user_account WHERE maso='$maso'";
        $query = mysqli_query($conn,$sql);
        $check = mysqli_num_rows($query);
        if($check >= 1){
            $err = "Mã số đã tồn tại !";
        }
        else{
            
            if($lv == 1){
                $masoph = 'PH'.$maso;
                $sql = "INSERT INTO user_account(maso,user_password,lv) VALUES ('$maso','$pass',1);";
                $query = mysqli_query($conn,$sql);
                $sql = "INSERT INTO user_account(maso,user_password,lv) VALUES ('$masoph','$pass',4);";
                $query = mysqli_query($conn,$sql);

                $sql = "INSERT INTO thongtinsinhvien(maso) VALUES('$maso');";
                $query = mysqli_query($conn,$sql);
                $sql = "INSERT INTO thongtinphuhuynh(maso,masocon) VALUES('$masoph','$maso');";
                $query = mysqli_query($conn,$sql);

                $sql = "INSERT INTO diem(maso) VALUES('$maso');";
                $query = mysqli_query($conn,$sql);
                $err = "Tạo tài khoản thành công !";
            }
            else if ($lv == 2){
                $sql = "INSERT INTO user_account(maso,user_password,lv) VALUES ('$maso','$pass',2);";
                $query = mysqli_query($conn,$sql);
                $sql = "INSERT INTO thongtingiaovien(maso) VALUES('$maso');";
                $query = mysqli_query($conn,$sql);
                $sql = "INSERT INTO thoikhoabieugv234(maso) VALUES('$maso');";
                $query = mysqli_query($conn,$sql);
                $sql = "INSERT INTO thoikhoabieugv567(maso) VALUES('$maso');";
                $query = mysqli_query($conn,$sql);
                $err = "Tao tai khoan thanh cong ";
            }
            else if($lv == 3){
                $sql = "INSERT INTO user_account(maso,user_password,lv) VALUES ('$maso','$pass',3);";
                $query = mysqli_query($conn,$sql);
                $err = "Tao tai khoan thanh cong ";
            }
            else{
                $err = "Lỗi không xác định người dùng !";
            }
        }
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
    <link rel="stylesheet" href="../../style.css">
    <title>Tạo tài khoản cho hệ thống</title>
    <style>
        .thediv span{
            color: black;
        }
        .btncreateacc{
            color: white;
            background-color: #0040FF;
            border: none;
            border-radius: 5px;
        }
        .btncreateacc:hover{
            color: #424242;
            
        }
    </style>
</head>
<body>

<br>
    <div class="container">
    <a class="buttonback" href="./quanlytaikhoan.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Tạo tài khoản cho hệ thống</span>
    </div>
<br>

<p></p>
    <div class="container framechangepass">
        <form class="formchangepass" action="" method="POST">
                <div class="thediv" style="display:flex">
                        <span> Mã Số </span>
                        <input type="text" id="username"  name="maso" required>
                </div>
                <div class="thediv"  style="display:flex">
                        <span>Mật Khẩu   </span>
                        <input type="password" id="password" value="123123" name="pass" required>

                </div>
                <div class="thediv" style="display:flex">
                    <span></span>
                    <p style="color:blue;font-size:20px;font-weight :500">(Mật khẩu mặc định là 123123)</p>
                </div>
                
                <div class="thediv"  style="display:flex">
                        <span>Chức vụ </span>
                        <select name="lv">
                            <option value="HS">Học sinh</option>
                            <option value="GV">Giáo viên</option>
                            <option value="QL">Quản lý</option>
                        </select>
                </div>
                <br>
        <div class="thediv" style="display:flex" class="btnchangepass">
            <span>    </span>
                <input class="btncreateacc" value="Tạo" type="submit" name="submit">
        </div>
                
        </form>
        <div style="color:green;font-weight:500" class="err">
                <?php
                        echo $err;
                ?>
        </div>


    </div>
</body>
</html>