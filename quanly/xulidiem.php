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
    $mess = "";
    if(isset($_POST['submit'])){
        $diemtoan6 = $_POST['diemtoan6'];
        $diemtoan7 = $_POST['diemtoan7'];
        $diemtoan8 = $_POST['diemtoan8'];
        $diemtoan9 = $_POST['diemtoan9'];

        $diemvan6 = $_POST['diemvan6'];
        $diemvan7 = $_POST['diemvan7'];
        $diemvan8 = $_POST['diemvan8'];
        $diemvan9 = $_POST['diemvan9'];

        $diemanh6 = $_POST['diemanh6'];
        $diemanh7 = $_POST['diemanh7'];
        $diemanh8 = $_POST['diemanh8'];
        $diemanh9 = $_POST['diemanh9'];

        $diemli6 = $_POST['diemli6'];
        $diemli7 = $_POST['diemli7'];
        $diemli8 = $_POST['diemli8'];
        $diemli9 = $_POST['diemli9'];

        
        $diemhoa8 = $_POST['diemhoa8'];
        $diemhoa9 = $_POST['diemhoa9'];

        $diemtheduc6 = $_POST['diemtheduc6'];
        $diemtheduc7 = $_POST['diemtheduc7'];
        $diemtheduc8 = $_POST['diemtheduc8'];
        $diemtheduc9 = $_POST['diemtheduc9'];
        
        $diemlichsu6 = $_POST['diemlichsu6'];
        $diemlichsu7 = $_POST['diemlichsu7'];
        $diemlichsu8 = $_POST['diemlichsu8'];
        $diemlichsu9 = $_POST['diemlichsu9'];

        $diemdiali6 = $_POST['diemdiali6'];
        $diemdiali7 = $_POST['diemdiali7'];
        $diemdiali8 = $_POST['diemdiali8'];
        $diemdiali9 = $_POST['diemdiali9'];

        $diemgdcd6 = $_POST['diemgdcd6'];
        $diemgdcd7 = $_POST['diemgdcd7'];
        $diemgdcd8 = $_POST['diemgdcd8'];
        $diemgdcd9 = $_POST['diemgdcd9'];

        $diemcongnghe6 = $_POST['diemcongnghe6'];
        $diemcongnghe7 = $_POST['diemcongnghe7'];
        $diemcongnghe8 = $_POST['diemcongnghe8'];
        $diemcongnghe9 = $_POST['diemcongnghe9'];

        $sinhhoc6 = $_POST['sinhhoc6'];
        $sinhhoc7 = $_POST['sinhhoc7'];
        $sinhhoc8 = $_POST['sinhhoc8'];
        $sinhhoc9 = $_POST['sinhhoc9'];

        $hanhkiem6 = $_POST['hanhkiem6'];
        $hanhkiem7 = $_POST['hanhkiem7'];
        $hanhkiem8 = $_POST['hanhkiem8'];
        $hanhkiem9 = $_POST['hanhkiem9'];

        $maso = $_SESSION['sinhviendangxet'];

        $hocluc6 = "";
        $hocluc7 = "";
        $hocluc8 = "";
        $hocluc9 = "";
        



        $diemtrungbinh6 = ($diemtoan6 + $diemvan6 + $diemanh6 + $diemli6  + $diemtheduc6 + $diemlichsu6 +$diemgdcd6 + $diemcongnghe6 + $sinhhoc6)*1.0 / 9;

        $diemtrungbinh7 = ($diemtoan7 + $diemvan7 + $diemanh7 + $diemli7 +  + $diemtheduc7 + $diemlichsu7 +$diemgdcd7 + $diemcongnghe7 + $sinhhoc7)*1.0 / 9;

        $diemtrungbinh8 = ($diemtoan8 + $diemvan8 + $diemanh8 + $diemli8 + $diemhoa8 + $diemtheduc8 + $diemlichsu8 +$diemgdcd8 + $diemcongnghe8 + $sinhhoc8)*1.0 / 10;

        $diemtrungbinh9 = ($diemtoan9 + $diemvan9 + $diemanh9 + $diemli9 + $diemhoa9 + $diemtheduc9 + $diemlichsu9 +$diemgdcd9 + $diemcongnghe9 + $sinhhoc9)*1.0 / 10;
        
        ////làm tròn điểm
       $diemtrungbinh6 =  round( $diemtrungbinh6, 1, PHP_ROUND_HALF_EVEN);
       $diemtrungbinh7 =  round( $diemtrungbinh7, 1, PHP_ROUND_HALF_EVEN);
       $diemtrungbinh8 =  round( $diemtrungbinh8, 1, PHP_ROUND_HALF_EVEN);
       $diemtrungbinh9 =  round( $diemtrungbinh9, 1, PHP_ROUND_HALF_EVEN);

       if($diemtrungbinh6 >= 8 && $diemtoan6 >= 6.5 && $diemvan6 > 6.5 && $diemanh6 >= 6.5 && $diemli6 >= 6.5 &&$diemtheduc6 >= 6.5 && $diemlichsu6 >= 6.5 && $diemgdcd6 >= 6.5 && $diemcongnghe6 > 6.5 && $sinhhoc6 > 6.5 ){
      
            $hocluc6 = "Giỏi";
       }
       else if ($diemtrungbinh6 >= 6.5 && $diemtoan6 >= 5 && $diemvan6 >= 5 && $diemanh6 >= 5 
       && $diemli6 >= 5 && $diemtheduc6 >= 5 && $diemlichsu6 >= 5 && $diemgdcd6 >= 5 
          && $diemcongnghe6 > 5 && $sinhhoc6 > 5 ){
            $hocluc6 = "Khá";
          
       }
       else if($diemtrungbinh6 < 6.5 ){
            $hocluc6= "Trung bình";
            
       }
       else if($diemtrungbinh6 < 5){
            $hocluc6 = "Yếu";
       }
        
       ///// Lop 7
       if($diemtrungbinh7 >= 8 && $diemtoan7 >= 6.5 && $diemvan7 >= 6.5 && $diemanh7 >= 6.5 && $diemli7 >= 6.5 && $diemtheduc7 >= 6.5 && $diemlichsu7 >= 6.5 && $diemgdcd7 >= 6.5 && $diemcongnghe7 > 6.5 && $sinhhoc7 >= 6.5 ){
            $hocluc7 = "Giỏi";
       }
       else if ($diemtrungbinh7 >= 6.5 && $diemtoan7 >= 5 && $diemvan7 >= 5 && $diemanh7 >= 5 
       && $diemli7 >= 5 && $diemtheduc7 >= 5 && $diemlichsu7 >= 5 && $diemgdcd7 >= 5 
          && $diemcongnghe7 >= 5 && $sinhhoc7 >=5 ){
            $hocluc7 = "Khá";
       }
       else if($diemtrungbinh7 < 6.5 ){
            $hocluc7= "Trung bình";
       }
       else if($diemtrungbinh7 < 5){
            $hocluc7 = "Yếu";
       }
       ////Lop 8
       if($diemtrungbinh8 >= 8 && $diemtoan8 >= 6.5 && $diemvan8 >= 6.5 && $diemanh8 >= 6.5 
       && $diemli8 >= 6.5 && $diemtheduc8 >= 6.5 && $diemlichsu8 >= 6.5 && $diemgdcd8 >= 6.5 
          && $diemcongnghe8 >= 6.5 && $sinhhoc8 >= 6.5 && $diemhoa8 >= 6.5){
            $hocluc8 = "Giỏi";
       }
       else if ($diemtrungbinh8 >= 6.5 && $diemtoan8 >= 5 && $diemvan8 >= 5 && $diemanh8 >= 5 
       && $diemli8 >= 5 && $diemtheduc8 >= 5 && $diemlichsu8 >= 5 && $diemgdcd8 > 5 && $diemhoa8 >= 5
          && $diemcongnghe8 >= 5 && $sinhhoc8 >= 5 ){
            $hocluc8 = "Khá";
       }
       else if($diemtrungbinh8 < 6.5 ){
            $hocluc7= "Trung bình";
       }
       else if($diemtrungbinh8 < 5){
            $hocluc8 = "Yếu";
       }
       //Lop 9
       if($diemtrungbinh9 >= 9 && $diemtoan9 > 6.5 && $diemvan9 > 6.5 && $diemanh9 > 6.5 
       && $diemli9 > 6.5 && $diemtheduc9 > 6.5 && $diemlichsu9 > 6.5 && $diemgdcd9 > 6.5 
          && $diemcongnghe9 > 6.5 && $sinhhoc9 > 6.5 && $diemhoa9 >= 6.5 ){
            $hocluc9 = "Giỏi";
       }
       else if ($diemtrungbinh9 >= 6.5 && $diemtoan9 >= 5 && $diemvan9 >= 5 && $diemanh9 >= 5 
       && $diemli9 >= 5 && $diemtheduc9 >= 5 && $diemlichsu9 >= 5 && $diemgdcd9 >= 5 && $diemhoa9 >= 5
          && $diemcongnghe9 >= 5 && $sinhhoc9 >= 5 ){
            $hocluc9 = "Khá";
       }
       else if($diemtrungbinh9 < 6.5 && $diemtrungbinh9 >= 5){
            $hocluc7= "Trung bình";
       }
       else if($diemtrungbinh9 < 5 && $diemtrungbinh9 > 0){
            $hocluc9 = "Yếu";
       }


       ////Lớp 6
        $sql = " UPDATE diem SET diemdiali6='$diemdiali6' ,diemtoan6 = '$diemtoan6',diemvan6 = '$diemvan6' ,diemanh6 = '$diemanh6',diemli6 = '$diemli6',hocluc6='$hocluc6',hanhkiem6='$hanhkiem6' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        $sql = " UPDATE diem SET diemtheduc6 = '$diemtheduc6' , diemlichsu6 = '$diemlichsu6' , diemgdcd6 = '$diemgdcd6',diemcongnghe6 = '$diemcongnghe6' ,sinhhoc6 = '$sinhhoc6', diemtrungbinh6 = '$diemtrungbinh6' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        /////Lớp 7
        $sql = " UPDATE diem SET diemdiali7='$diemdiali7' , diemtoan7 = '$diemtoan7',diemvan7 = '$diemvan7' ,diemanh7 = '$diemanh7',diemli7 = '$diemli7', hocluc7='$hocluc7' ,hanhkiem7='$hanhkiem7'WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        $sql = " UPDATE diem SET diemtheduc7 = '$diemtheduc7' , diemlichsu7 = '$diemlichsu7' , diemgdcd7 = '$diemgdcd7',diemcongnghe7 = '$diemcongnghe7' ,sinhhoc7 = '$sinhhoc7', diemtrungbinh7 = '$diemtrungbinh7' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        /////Lớp 8
        $sql = " UPDATE diem SET diemdiali8='$diemdiali8' , diemtoan8 = '$diemtoan8',diemvan8 = '$diemvan8' ,diemanh8 = '$diemanh8',diemli8 = '$diemli8',diemhoa8 = '$diemhoa8',hocluc8='$hocluc8',hanhkiem8='$hanhkiem8' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        $sql = " UPDATE diem SET diemtheduc8 = '$diemtheduc8' , diemlichsu8 = '$diemlichsu8' , diemgdcd8 = '$diemgdcd8',diemcongnghe8 = '$diemcongnghe8' ,sinhhoc8 = '$sinhhoc8', diemtrungbinh8 = '$diemtrungbinh8' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        ////Lớp 9
        $sql = " UPDATE diem SET diemdiali9='$diemdiali9' , diemtoan9 = '$diemtoan9',diemvan9 = '$diemvan9' ,diemanh9 = '$diemanh9',diemli9 = '$diemli9',diemhoa9 = '$diemhoa9',hocluc9='$hocluc9',hanhkiem9='$hanhkiem9' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        $sql = " UPDATE diem SET diemtheduc9 = '$diemtheduc9' , diemlichsu9 = '$diemlichsu9' , diemgdcd9 = '$diemgdcd9',diemcongnghe9 = '$diemcongnghe9' ,sinhhoc9 = '$sinhhoc9', diemtrungbinh9 = '$diemtrungbinh9' WHERE maso ='$maso' ";
        $query = mysqli_query($conn,$sql);
        ///End
        $mess = "Cập Nhật Thành Công !";
        
        
    }
    else {
        $mess = "Lỗi";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàn Tất</title>
</head>
<body>
    <div class="container">
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
    </div>
</body>
<p></p>
<br>
<div class="container">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"><?= $mess ?></h4>
      <p></p>
      <p class="mb-0"></p>
    </div>
</div>
<div class="container">
    <a href="./index.php">Bấm vào đây để về trang chủ</a>
    <p>

    </p>
    <a href="./capnhatdiem.php">Bấm vào đây để tiếp tục cập nhật điểm</a>
</div>

</html>