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

    $err='';
    if(isset($_POST['user'])){
        $user = $_POST['user'];
        $sql = "SELECT * FROM user_account WHERE maso='$user'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $check = mysqli_num_rows($query);
        
        if($check < 1){
            $err = "Mã số không tồn tại !";
        }
        else{
            $lv = $data['lv'];
            if($lv == 5 || $lv == 3){
                $err = "Không thể xóa tài khoản này !";
            }
            else if($lv == 2){
                $sql = "DELETE FROM user_account WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieugv234 WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thongtingiaovien WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieugv567 WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $err = "Xóa tài khoản thành công !";
            }
            else if($lv == 4){
                $sql = "DELETE FROM user_account WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thongtinphuhuynh WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $user_chil =  substr($user, 2);
                $sql = "DELETE FROM user_account WHERE maso='$user_chil'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM diem WHERE maso='$user_chil'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieu234 WHERE maso='$user_chil'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieu567 WHERE maso='$user_chil'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thongtininhvien WHERE maso='$user_chil'";
                $err = "Xóa tài khoản thành công !";
                $query = mysqli_query($conn,$sql); 
            }
            else if($lv == 1){
                $sql = "DELETE FROM user_account WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thongtinsinhvien WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM diem WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieu234 WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thoikhoabieu567 WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);

                $user_parent =  'PH'.$user;
                $sql = "DELETE FROM user_account WHERE maso='$user_parent'";
                $query = mysqli_query($conn,$sql);
                $sql = "DELETE FROM thongtinphuhuynh WHERE maso='$user_parent'";
                $query = mysqli_query($conn,$sql); 
                $err = "Xóa tài khoản thành công !";
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
    <title>Xoa tai khoan</title>
</head>
<body>
    <p></p>
<div class="container" style="display:flex">
    <a class="buttonback" href="./quanlytaikhoan.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Xóa tài khoản khỏi hệ thống </span>
</div>
<br><p></p>
<div class="container">
    <p style="color:red;font-weight:500">Chú ý : Bạn sẽ không thể hoàn tác nếu xóa tài khoản</p>
    <form class="deleteacc" action="" method="POST">
        <div>
                Username
                <input type="text" id="username"  name="user" required>
        </div>
       <div>
           <input class="btndlt" value="Xóa tài khoản" type="submit" name="submit">
       </div>
       <div style="color:green;font-weight:500" class="err">
       <?php
               echo $err;
       ?>
</div>
    </form>
</div>

    
</body>
</html>