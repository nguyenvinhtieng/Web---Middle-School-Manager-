<?php
    session_start();
    include 'connect.php';
    $err='';
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        $sql = "SELECT * FROM user_account WHERE maso='$user' AND user_password='$pass'";

        $query = mysqli_query($conn,$sql);
        $a = mysqli_fetch_assoc($query); 
        $check = mysqli_num_rows($query);

        if($check >= 1){
            $maso = $a['maso'];
            $lv = $a['lv'];
            $_SESSION['pass'] = $a['user_password'];
            $_SESSION['maso'] = $a['maso'];
            $_SESSION['lv'] = $lv;
            if($lv == 1){
                header("Location: ./hocsinh/index.php");
                exit();
            }
            else if($lv == 2){
                header("Location: ./giaovien/index.php");
                exit();
            }
            else if($lv == 3){
                header("Location: ./quanly/index.php");
                exit();
            }
            else if($lv == 4){
                header("Location: ./phuhuynh/index.php");
                exit();
            }
            else if($lv == 5){
                header("Location: ./hieutruong/index.php");
                exit();
            }
            else{
                $err = "Tài khoản chưa được cấp quyền !";
            }
        
        }        
        else {
            $err = "Sai tài khoản hoặc mật khẩu";
        }
        
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="login_body" >
        <img class="wave" src="./image/default.png">
        <div class="container-login">
            <div class="img-login">
                <img src="image/undraw_professor_8lrt.svg">
            </div>
            <div class="login-content">
                <form action="" method="post" class="form_login">
                    <img style="height:200px" src="image/dataperson.svg">
                    <h3 class="title">Hệ thống</h3>
                    <h3 class="title" style="margin-bottom:20px">Quản lí trường THCS</h3>
                    <div class="input-div one">
                        <div class="i_login">
                            <i style="color:#2E9AFE" class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <input type="text" class="input_login" name="user" required>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i_login">
                            <i style="color:#2E9AFE" class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5></h5>
                            <input type="password" class="input_login" name="pass" required>
                        </div>
                    </div>
</br>
                    <div class="err">
                        <?php
                            echo $err;
                        ?>
                    </div>
                    
                    <input name="submit" type="submit" class="btn_login" value="Login">
                </form>
            </div>
        </div>
</body>




</html>
