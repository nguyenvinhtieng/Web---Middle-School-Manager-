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
    $err='';
    $errs = '';
    $maso = $_SESSION['maso'];
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $user = $_POST['user'];
        $opass = $_POST['opass'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];


        $sql = "SELECT * FROM user_account WHERE maso='$maso' AND user_password='$opass'";
        
        $query = mysqli_query($conn,$sql);
        $check = mysqli_num_rows($query);
                if($user != $maso){
                    $err = "Mã số không hợp lệ";
                }
                else if($check >= 1){
                        if($pass != $rpass){
                                $err="Sai repassword ";
                        }
                        else{
                                $sql = "UPDATE user_account SET user_password = '$pass' WHERE maso='$maso'";
                                $query = mysqli_query($conn,$sql);
                                $errs="Đổi mật khẩu thành công";
                        }
                        
                }
                else{
                        $err="Sai tên tài khoản hoặc mật khẩu";
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
    <link rel="stylesheet" href="../style.css">
    <title>Đổi mật khẩu</title>
</head>
<body>
        <br>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Đổi mật khẩu của Quản Lý</span>
    </div>
    <br>
    <br>
    <div class="container framechangepass">
        <form class="formchangepass" action="" method="POST">
                <div class="thediv" style="display:flex">
                        <span> Mã Số&emsp;&emsp;&emsp;</span>
                        <input value="<?= $_SESSION['maso'] ?>" type="text" id="username"  name="user" required>
                </div>
                <div class="thediv"  style="display:flex">
                        <span>Mật Khẩu Cũ    &emsp;&emsp;&emsp;&emsp;&ensp;</span>
                        <input type="password" id="password"  name="opass" required>
                </div>
                <div class="thediv"  style="display:flex">
                        <span>Mật Khẩu Mới    &emsp;&emsp;&emsp;&emsp;</span>
                        <input type="password" id="password"  name="pass" required>
                </div>
                <div class="thediv"  style="display:flex">
                        <span>Nhập Lại Mật Khẩu &emsp;&ensp;&nbsp;</span>
                        <input type="password" id="rpassword"  name="rpass" required>
                </div>
                <br>
        <div class="btnchangepass">
                <input value="Đổi" type="submit" name="submit">
        </div>
                
        </form>
        <div class="err">
                <?php
                        echo $err;
                ?>
        </div>
        <div class="errs">
                <?php
                        echo $errs;
                ?>
        </div>


    </div>

</body>
</html>