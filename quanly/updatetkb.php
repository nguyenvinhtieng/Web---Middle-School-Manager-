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

    
    if(isset($_POST['lop'])){
        $lopdangxem =  $_POST['lop'];
        $_SESSION['lopdangxem'] = $lopdangxem;
    }
    else{
        $lopdangxem = $_SESSION['lopdangxem'] ;
    }

    if(isset($_POST['lop'])){
        $st2t1 = $_POST['st2t1'];
        $st3t1 = $_POST['st3t1'];
        $st4t1 = $_POST['st4t1'];
        $st5t1 = $_POST['st5t1'];
        $st6t1 = $_POST['st6t1'];
        $st7t1 = $_POST['st7t1'];

        $st2t2 = $_POST['st2t2'];
        $st3t2 = $_POST['st3t2'];
        $st4t2 = $_POST['st4t2'];
        $st5t2 = $_POST['st5t2'];
        $st6t2 = $_POST['st6t2'];
        $st7t2 = $_POST['st7t2'];

        $st2t3 = $_POST['st2t3'];
        $st3t3 = $_POST['st3t3'];
        $st4t3 = $_POST['st4t3'];
        $st5t3 = $_POST['st5t3'];
        $st6t3 = $_POST['st6t3'];
        $st7t3 = $_POST['st7t3'];

        $st2t4 = $_POST['st2t4'];
        $st3t4 = $_POST['st3t4'];
        $st4t4 = $_POST['st4t4'];
        $st5t4 = $_POST['st5t4'];
        $st6t4 = $_POST['st6t4'];
        $st7t4 = $_POST['st7t4'];
        
        $st2t5 = $_POST['st2t5'];
        $st3t5 = $_POST['st3t5'];
        $st4t5 = $_POST['st4t5'];
        $st5t5 = $_POST['st5t5'];
        $st6t5 = $_POST['st6t5'];
        $st7t5 = $_POST['st7t5'];

        $ct2t1 = $_POST['ct2t1'];
        $ct3t1 = $_POST['ct3t1'];
        $ct4t1 = $_POST['ct4t1'];
        $ct5t1 = $_POST['ct5t1'];
        $ct6t1 = $_POST['ct6t1'];
        $ct7t1 = $_POST['ct7t1'];

        $ct2t2 = $_POST['ct2t2'];
        $ct3t2 = $_POST['ct3t2'];
        $ct4t2 = $_POST['ct4t2'];
        $ct5t2 = $_POST['ct5t2'];
        $ct6t2 = $_POST['ct6t2'];
        $ct7t2 = $_POST['ct7t2'];

        $ct2t3 = $_POST['ct2t3'];
        $ct3t3 = $_POST['ct3t3'];
        $ct4t3 = $_POST['ct4t3'];
        $ct5t3 = $_POST['ct5t3'];
        $ct6t3 = $_POST['ct6t3'];
        $ct7t3 = $_POST['ct7t3'];

        $ct2t4 = $_POST['ct2t4'];
        $ct3t4 = $_POST['ct3t4'];
        $ct4t4 = $_POST['ct4t4'];
        $ct5t4 = $_POST['ct5t4'];
        $ct6t4 = $_POST['ct6t4'];
        $ct7t4 = $_POST['ct7t4'];
        
        $ct2t5 = $_POST['ct2t5'];
        $ct3t5 = $_POST['ct3t5'];
        $ct4t5 = $_POST['ct4t5'];
        $ct5t5 = $_POST['ct5t5'];
        $ct6t5 = $_POST['ct6t5'];
        $ct7t5 = $_POST['ct7t5'];




        $sql = "UPDATE thoikhoabieu234 SET
        st2t1 ='$st2t1' , st3t1='$st3t1' ,st4t1 = '$st4t1',
        st2t2 ='$st2t2' , st3t2='$st3t2' ,st4t2 = '$st4t2',
        st2t3 ='$st2t3' , st3t3='$st3t3' ,st4t3 = '$st4t3',
        st2t4 ='$st2t4' , st3t4='$st3t4' ,st4t4 = '$st4t4',
        st2t5 ='$st2t5' , st3t5='$st3t5' ,st4t5 = '$st4t5',
        ct2t1 ='$ct2t1' , ct3t1='$ct3t1' ,ct4t1 = '$ct4t1',
        ct2t2 ='$ct2t2' , ct3t2='$ct3t2' ,ct4t2 = '$ct4t2',
        ct2t3 ='$ct2t3' , ct3t3='$ct3t3' ,ct4t3 = '$ct4t3',
        ct2t4 ='$ct2t4' , ct3t4='$ct3t4' ,ct4t4 = '$ct4t4',
        ct2t5 ='$ct2t5' , ct3t5='$ct3t5' ,ct4t5 = '$ct4t5'
        WHERE lop='$lopdangxem'";
        $query = mysqli_query($conn,$sql);

        $sql = "UPDATE thoikhoabieu567 SET
        st5t1 ='$st5t1' , st6t1='$st6t1' ,st7t1 = '$st7t1',
        st5t2 ='$st5t2' , st6t2='$st6t2' ,st7t2 = '$st7t2',
        st5t3 ='$st5t3' , st6t3='$st6t3' ,st7t3 = '$st7t3',
        st5t4 ='$st5t4' , st6t4='$st6t4' ,st7t4 = '$st7t4',
        st5t5 ='$st5t5' , st6t5='$st6t5' ,st7t5 = '$st7t5',
        ct5t1 ='$ct5t1' , ct6t1='$ct6t1' ,ct7t1 = '$ct7t1',
        ct5t2 ='$ct5t2' , ct6t2='$ct6t2' ,ct7t2 = '$ct7t2',
        ct5t3 ='$ct5t3' , ct6t3='$ct6t3' ,ct7t3 = '$ct7t3',
        ct5t4 ='$ct5t4' , ct6t4='$ct6t4' ,ct7t4 = '$ct7t4',
        ct5t5 ='$ct5t5' , ct6t5='$ct6t5' ,ct7t5 = '$ct7t5'
        WHERE lop='$lopdangxem'";
        $query = mysqli_query($conn,$sql);


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
    <link rel="stylesheet" href="../style.css">
    <title>Hoàn Tất</title>
    <style>
        p{
            font-size: 30px;
            font-weight: 900;
            color: #006600;
        }
    </style>
</head>
<body>
    <p></p>
    <div class="container">
            <p>Cập nhật thông tin thành công</p>
            <a href="./index.php">Bấm vào đây để về trang chủ</a> <br> <p></p>
        <a href="./danhsachlopcapnhattkb.php">Bấm vào đây để tiếp tục sửa đổi thời khóa biểu các lớp khác</a>
    </div>
    
</body>
</html>