<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 4){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
    }
    
    $maso = $_SESSION['maso'];
    $maso = substr($maso , 2); 
    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $find = mysqli_fetch_assoc($query); 
    
    $lop = $find['lop'];

$sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $name = mysqli_fetch_assoc($query); 


    $sql = "SELECT * FROM thoikhoabieu234 WHERE lop='$lop'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query); 


    $sql = "SELECT * FROM thoikhoabieu567 WHERE lop='$lop'";
    $query = mysqli_query($conn,$sql);
    $data1 = mysqli_fetch_assoc($query); 

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
    <title>Thời khóa biểu </title>
</head>
<body>
    <br>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./solienlac.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Thời khóa biểu của học sinh <?= $name['ten'] ?></span>
    </div>
    <br>
    <div style="width:100% " class="container thoikhoabieusinhvien">
        <table class="tablethoikhoabieu" style="width:100%">
            <tr>
                <th>Buổi</th>
                <th>Tiết</th>
                <th>Thứ 2</th>
                <th>Thứ 3</th>
                <th>Thứ 4</th>
                <th>Thứ 5</th>
                <th>Thứ 6</th>
                <th>Thứ 7</th>
                <th>Chủ Nhật</th>
            </tr>
            <tr>
                <th rowspan="5" class="buoi">Sáng</th>
                <th>1</th>
                <td><?= $data["st2t1"] ?></td>
                <td><?= $data["st3t1"] ?></td>
                <td><?= $data["st4t1"] ?></td>
                <td><?= $data1["st5t1"] ?></td>
                <td><?= $data1["st6t1"] ?></td>
                <td><?= $data1["st7t1"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td><?= $data["st2t2"] ?></td>
                <td><?= $data["st3t2"] ?></td>
                <td><?= $data["st4t2"] ?></td>
                <td><?= $data1["st5t2"] ?></td>
                <td><?= $data1["st6t2"] ?></td>
                <td><?= $data1["st7t2"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td><?= $data["st2t3"] ?></td>
                <td><?= $data["st3t3"] ?></td>
                <td><?= $data["st4t3"] ?></td>
                <td><?= $data1["st5t3"] ?></td>
                <td><?= $data1["st6t3"] ?></td>
                <td><?= $data1["st7t3"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td><?= $data["st2t4"] ?></td>
                <td><?= $data["st3t4"] ?></td>
                <td><?= $data["st4t4"] ?></td>
                <td><?= $data1["st5t4"] ?></td>
                <td><?= $data1["st6t4"] ?></td>
                <td><?= $data1["st7t4"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td><?= $data["st2t5"] ?></td>
                <td><?= $data["st3t5"] ?></td>
                <td><?= $data["st4t5"] ?></td>
                <td><?= $data1["st5t5"] ?></td>
                <td><?= $data1["st6t5"] ?></td>
                <td><?= $data1["st7t5"] ?></td>
                <td></td>
            </tr>
            <tr>
                <td style="" colspan="9"><p></p></td>
            </tr>
            <tr>
                <th rowspan="5">Chiều</th>
                <th>1</th>
                <td><?= $data["ct2t1"] ?></td>
                <td><?= $data["ct3t1"] ?></td>
                <td><?= $data["ct4t1"] ?></td>
                <td><?= $data1["ct5t1"] ?></td>
                <td><?= $data1["ct6t1"] ?></td>
                <td><?= $data1["ct7t1"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td><?= $data["ct2t2"] ?></td>
                <td><?= $data["ct3t2"] ?></td>
                <td><?= $data["ct4t2"] ?></td>
                <td><?= $data1["ct5t2"] ?></td>
                <td><?= $data1["ct6t2"] ?></td>
                <td><?= $data1["ct7t2"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td><?= $data["ct2t3"] ?></td>
                <td><?= $data["ct3t3"] ?></td>
                <td><?= $data["ct4t3"] ?></td>
                <td><?= $data1["ct5t3"] ?></td>
                <td><?= $data1["ct6t3"] ?></td>
                <td><?= $data1["ct7t3"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td><?= $data["ct2t4"] ?></td>
                <td><?= $data["ct3t4"] ?></td>
                <td><?= $data["ct4t4"] ?></td>
                <td><?= $data1["ct5t4"] ?></td>
                <td><?= $data1["ct6t4"] ?></td>
                <td><?= $data1["ct7t4"] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td><?= $data["ct2t5"] ?></td>
                <td><?= $data["ct3t5"] ?></td>
                <td><?= $data["ct4t5"] ?></td>
                <td><?= $data1["ct5t5"] ?></td>
                <td><?= $data1["ct6t5"] ?></td>
                <td><?= $data1["ct7t5"] ?></td>
                <td></td>
            </tr>

        </table>
    </div>
    
</body>
</html>