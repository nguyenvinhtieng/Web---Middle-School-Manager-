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
<?php
    if(isset($_POST['deletedg'])){
        $id = $_POST['deletedg'];
        $sql = "DELETE FROM danhgiagiaovien WHERE id='$id' ";
        $query = mysqli_query($conn,$sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ thống quản lí trường học</title>
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
    <title>Xem Đánh giá giáo viên</title>
    <style>
        tr{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Danh sách các đánh giá</span>
    </div>
<br>
<div class="container">
    <table style="width:100%">
        <tr>
            <th>HS đánh giá<th>
            <th>GV được đánh giá</th>
            <th>Nội dung đánh giá</th>
            <th>Xóa</th>
        </tr>

        <?php
            $sql = "SELECT * FROM danhgiagiaovien";
            $resultset = mysqli_query($conn,$sql);
            $list      = [];
            while ($row = mysqli_fetch_array($resultset,1)) {
                $list[] = $row;
            }
            
            foreach ($list as $std) {
                echo '<tr>
                <td>'.$std['sender'].'<td>
                <td>'.$std['receiver'].'</td>
                <td>'.$std['noidung'].'</td>
                <td> <form action="" method="POST">
                <button class="btndelete" name="deletedg" type="submit" value="'.$std['id'].'">Xóa</button>
            </form>
            </td>
            </tr>';

            }
        ?>



    </table>


   
</div>
</body>
</html>