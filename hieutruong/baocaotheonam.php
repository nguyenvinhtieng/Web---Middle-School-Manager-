<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 5){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
    }
    $maso = ""
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
    <title>Báo cáo theo năm</title>
    <style>
        .find{
            padding: 5px 30px 5px 30px ;
            border: none;
            border-radius: 3px;
            background-color: #0040FF;
            color: white ;
        }
        .find:hover{
            background-color: #2E64FE;
            
        }
    </style>
</head>
<body>
<div class="container" style="display:flex">    
        <a class="buttonback" href="./baocao.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Xem báo cáo thống kê theo Năm</span>
    </div>
<div class="container">
	<?php
	$count = 0;
    $count6 = 0;
    $count7 = 0;
    $count8 = 0;
    $count9 = 0;
    $dtb6 = 0;
    $dtb7 = 0;
    $dtb8 = 0;
    $dtb9 = 0;
	$sql = "SELECT * from thongtinsinhvien ";
    $resultset = mysqli_query($conn,$sql);
    $list      = [];
    while ($row = mysqli_fetch_array($resultset,1)) {
        $list[] = $row;
    }
    foreach ($list as $std) {
        $mssv = $std['maso'];
        $sql = "SELECT * from diem where maso='$mssv'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query); 
        $count = $count + 1;
        if($std['lop'] == "6A" || $std['lop'] == "6B" ){
            $count6 = $count6 + 1; 
            $dtb6 = $dtb6 + $data['diemtrungbinh6'];
        }
        else if($std['lop'] == "7A" || $std['lop'] == "7B" ){
            $count7 = $count7 + 1; 
            $dtb7 = $dtb7 + $data['diemtrungbinh7'];
        }
        else if($std['lop'] == "8A" || $std['lop'] == "8B" ){
            $count8 = $count8 + 1; 
            $dtb8 = $dtb8 + $data['diemtrungbinh8'];
        }
        else if($std['lop'] == "9A" || $std['lop'] == "9B" ){
            $count9 = $count9 + 1; 
            $dtb9 = $dtb9 + $data['diemtrungbinh9'];
        }
    }
    echo "<p>Số lượng học sinh của trường : ".$count."</p>";
    echo "<p>Số lượng học sinh lớp 6: ".$count6."</p>";
    echo "<p>Số lượng học sinh lớp 7: ".$count7."</p>";
    echo "<p>Số lượng học sinh lớp 8: ".$count8."</p>";
    echo "<p>Số lượng học sinh lớp 9: ".$count9."</p>";
    if($count6 != 0){
        $dtb6 =  round( $dtb6/$count6, 1, PHP_ROUND_HALF_EVEN);
    }
    if($count7 != 0){
        $dtb7 =  round( $dtb7/$count7, 1, PHP_ROUND_HALF_EVEN);
    }
    if($count8 != 0){
        $dtb8 =  round( $dtb8/$count8, 1, PHP_ROUND_HALF_EVEN);
    }
    if($count9 != 0){
        $dtb9 =  round( $dtb9/$count9, 1, PHP_ROUND_HALF_EVEN);
    }
    
    echo "<p>Điểm trung bình học sinh lớp 6: ".$dtb6."</p>";
    echo "<p>Điểm trung bình học sinh lớp 7: ".$dtb7."</p>";
    echo "<p>Điểm trung bình học sinh lớp 8: ".$dtb8."</p>";
    echo "<p>Điểm trung bình học sinh lớp 9: ".$dtb9."</p>";


    

	?>
</div>
  
        
</body>
</html>

