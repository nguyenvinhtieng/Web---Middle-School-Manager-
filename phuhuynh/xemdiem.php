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

    $sql = "SELECT * FROM diem WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query); 

    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
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
    <title>Xem điểm</title>
</head>
<body>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./solienlac.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Điểm số của học sinh <?= $data1['ten'] ?></span>
    </div>
    <br>
    <div class="container">
        <table class="liststd" style="width:100%">
        <tr>
            <th>Môn học</th>
            <th class="classscore">Lớp 6</th>
            <th class="classscore">Lớp 7</th>
            <th class="classscore">Lớp 8</th>
            <th class="class9 classscore">Lớp 9</th>
        </tr>
        <tr>
            <th>Toán</th>
            <td><?= $data["diemtoan6"] ?></td>
            <td><?= $data["diemtoan7"] ?></td>
            <td><?= $data["diemtoan8"] ?></td>
            <td><?= $data["diemtoan9"] ?></td>
        </tr>
        <tr>
            <th>Văn</th>
            <td><?= $data["diemvan6"] ?></td>
            <td><?= $data["diemvan7"] ?></td>
            <td><?= $data["diemvan8"] ?></td>
            <td><?= $data["diemvan9"] ?></td>
        </tr>

        <tr>
            <th>Anh</th>
            <td><?= $data["diemanh6"] ?></td>
            <td><?= $data["diemanh7"] ?></td>
            <td><?= $data["diemanh8"] ?></td>
            <td><?= $data["diemanh9"] ?></td>
        </tr>

        <tr>
            <th>Lí</th>
            <td><?= $data["diemli6"] ?></td>
            <td><?= $data["diemli7"] ?></td>
            <td><?= $data["diemli8"] ?></td>
            <td><?= $data["diemli9"] ?></td>
        </tr>
        <tr>
            <th>Hóa</th>
            <td><?= $data["diemhoa6"] ?></td>
            <td><?= $data["diemhoa7"] ?></td>
            <td><?= $data["diemhoa8"] ?></td>
            <td><?= $data["diemhoa9"] ?></td>
        </tr>
        <tr>
            <th>Thể dục</th>
            <td><?= $data["diemtheduc6"] ?></td>
            <td><?= $data["diemtheduc7"] ?></td>
            <td><?= $data["diemtheduc8"] ?></td>
            <td><?= $data["diemtheduc9"] ?></td>
        </tr>
        <tr>
            <th>Lịch Sử</th>
            <td><?= $data["diemlichsu6"] ?></td>
            <td><?= $data["diemlichsu7"] ?></td>
            <td><?= $data["diemlichsu8"] ?></td>
            <td><?= $data["diemlichsu9"] ?></td>
        </tr>
        <tr>
            <th>Địa lí</th>
            <td><?= $data["diemdiali6"] ?></td>
            <td><?= $data["diemdiali7"] ?></td>
            <td><?= $data["diemdiali8"] ?></td>
            <td><?= $data["diemdiali9"] ?></td>
        </tr>
        <tr>
            <th>Giáo dục công dân</th>
            <td><?= $data["diemgdcd6"] ?></td>
            <td><?= $data["diemgdcd7"] ?></td>
            <td><?= $data["diemgdcd8"] ?></td>
            <td><?= $data["diemgdcd9"] ?></td>
        </tr>

        <tr>
            <th>Công nghệ</th>
            <td><?= $data["diemcongnghe6"] ?></td>
            <td><?= $data["diemcongnghe7"] ?></td>
            <td><?= $data["diemcongnghe8"] ?></td>
            <td><?= $data["diemcongnghe9"] ?></td>
        </tr>
        <tr>
            <th>Điểm trung bình</th>
            <td><b><?= $data["diemtrungbinh6"] ?></b></td>
            <td><b><?= $data["diemtrungbinh7"] ?></b></td>
            <td><b><?= $data["diemtrungbinh8"] ?></b></td>
            <td><b><?= $data["diemtrungbinh9"] ?></b></td>
        </tr>
        <tr>
            <th>Học lực</th>
            <td><b><?= $data["hocluc6"] ?></b></td>
            <td><b><?= $data["hocluc7"] ?></b></td>
            <td><b><?= $data["hocluc8"] ?></b></td>
            <td><b><?= $data["hocluc9"] ?></b></td>
        </tr>
        <tr>
            <th>Hạnh kiểm</th>
            <td><b><?= $data["hanhkiem6"] ?></b></td>
            <td><b><?= $data["hanhkiem7"] ?></b></td>
            <td><b><?= $data["hanhkiem8"] ?></b></td>
            <td><b><?= $data["hanhkiem9"] ?></b></td>
        </tr>

        </table>
    </div>    
    
</body>
</html>