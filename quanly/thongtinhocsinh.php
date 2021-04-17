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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
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
    <style>
        .listclass button {
            height: 200px;
            width : 30%;
            margin: 10px;
            background-color: #E0F2F7;
            border-radius: 5px;
            font-size: 30px;
            color: 
        }
    </style>
</head>
<body>
<br>
<div class="container" style="display:flex">
    <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Thông tin Học sinh trường THCS </span>
</div>

<br><p></p>
    <div class="container">
        <form class="listclass" action="./thongtintheolop.php" method="POST">
            <button type="submit" value="6A" name="lop">Lớp 6A</button>
            <button type="submit" value="6B" name="lop">Lớp 6B</button>
            <button type="submit" value="7A" name="lop">Lớp 7A</button>
            <button type="submit" value="7B" name="lop">Lớp 7B</button>
            <button type="submit" value="8A" name="lop">Lớp 8A</button>
            <button type="submit" value="8B" name="lop">Lớp 8B</button>
            <button type="submit" value="9A" name="lop">Lớp 9A</button>
            <button type="submit" value="9B" name="lop">Lớp 9B</button>
        </form> 
    </div>
    
    
</body>
</html>