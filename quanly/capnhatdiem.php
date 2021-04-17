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
    <title>Cập Nhật Điểm Học Sinh</title>
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
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Xem và cập nhật điểm học sinh </span>
    </div>

<p></p>
    <div class="container">
        <form action="" method="POST">
            Mã Số Sinh Viên <input type="text" value="" name="maso">
            <input class="find" value="Tìm" type="submit" name="submitfindsv">
        </form>
         <?php
            if(isset($_POST['submitfindsv']) && isset($_POST['maso'])){
                $maso = $_POST['maso'];
                $_SESSION['sinhviendangxet']  = $maso;
                $sql = "SELECT * from diem WHERE maso ='$maso'";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query); 
                $check = mysqli_num_rows($query);
                if($check >= 1){
                    ?>
                    <div class='container'>
                    <form action="./xulidiem.php" method='POST'>               
        <table class='liststd' style='width:100%'>
        <tr>
            <th>Môn học</th>
            <th class='classscore'>Lớp 6</th>
            <th class='classscore'>Lớp 7</th>
            <th class='classscore'>Lớp 8</th>
            <th class='class9 classscore'>Lớp 9</th>
        </tr>
        <?php
        echo ' 
        <tr>
            <th>Toán</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtoan6'].'" name="diemtoan6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtoan7'].'" name="diemtoan7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtoan8'].'" name="diemtoan8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtoan9'].'" name="diemtoan9"></td>
        </tr>
        <tr>
            <th>Văn</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemvan6'].'" name="diemvan6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemvan7'].'" name="diemvan7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemvan8'].'" name="diemvan8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemvan9'].'" name="diemvan9"></td>
        </tr>

        <tr>
            <th>Anh</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemanh6'].'" name="diemanh6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemanh7'].'" name="diemanh7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemanh8'].'" name="diemanh8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemanh9'].'" name="diemanh9"></td>
            
        </tr>

        <tr>
            <th>Lí</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemli6'].'" name="diemli6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemli7'].'" name="diemli7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemli8'].'" name="diemli8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemli9'].'" name="diemli9"></td>
            
        </tr>
        <tr>
            <th>Hóa</th>
            <td><lable  value="None" name="diemhoa6"></td>
            <td><lable value="None" name="diemhoa7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemhoa8'].'" name="diemhoa8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemhoa9'].'" name="diemhoa9"></td>
    
        </tr>
        <tr>
            <th>Thể dục</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtheduc6'].'" name="diemtheduc6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtheduc7'].'" name="diemtheduc7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtheduc8'].'" name="diemtheduc8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemtheduc9'].'" name="diemtheduc9"></td>

        </tr>
        <tr>
            <th>Lịch Sử</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemlichsu6'].'" name="diemlichsu6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemlichsu7'].'" name="diemlichsu7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemlichsu8'].'" name="diemlichsu8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemlichsu9'].'" name="diemlichsu9"></td>
        
        </tr>
        <tr>
            <th>Địa lí</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemdiali6'].'" name="diemdiali6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemdiali7'].'" name="diemdiali7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemdiali8'].'" name="diemdiali8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemdiali9'].'" name="diemdiali9"></td>
            
            
        </tr>
        <tr>
            <th>Giáo dục công dân</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemgdcd6'].'" name="diemgdcd6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemgdcd7'].'" name="diemgdcd7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemgdcd8'].'" name="diemgdcd8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemgdcd9'].'" name="diemgdcd9"></td>
            
        </tr>

        <tr>
            <th>Công nghệ</th>
            <td><input type="number" min="0" max ="10" value="'.$data['diemcongnghe6'].'" name="diemcongnghe6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemcongnghe7'].'" name="diemcongnghe7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemcongnghe8'].'" name="diemcongnghe8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['diemcongnghe9'].'" name="diemcongnghe9"></td>
           
        </tr>
        <tr>
            <th>Sinh học</th>
            <td><input type="number" min="0" max ="10" value="'.$data['sinhhoc6'].'" name="sinhhoc6"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['sinhhoc7'].'" name="sinhhoc7"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['sinhhoc8'].'" name="sinhhoc8"></td>
            <td><input type="number" min="0" max ="10" value="'.$data['sinhhoc9'].'" name="sinhhoc9"></td>
            
        </tr>
        <tr>
            <th>Điểm trung bình</th>
            <td>'.$data['diemtrungbinh6'].'</td>
            <td>'.$data['diemtrungbinh7'].'</td>
            <td>'.$data['diemtrungbinh8'].'</td>
            <td>'.$data['diemtrungbinh9'].'</td>
        </tr>
        <tr>
            <th>Học Lực</th>
            <td>'.$data['hocluc6'].'</td>
            <td>'.$data['hocluc7'].'</td>
            <td>'.$data['hocluc8'].'</td>
            <td>'.$data['hocluc9'].'</td>
        </tr>
        <tr>
            <th>Hạnh kiểm</th>
            <td>
                <select name="hanhkiem6">
                    <option value="'.$data['hanhkiem6'].'">'.$data['hanhkiem6'].'</option>
                    <option value="Tốt">Tốt</option>
                    <option value="Khá">Khá</option>
                    <option value="Trung Bình">trung Bình</option>
                    <option value="Yếu">Yếu</option>
                </select>
            </td>
            <td>
                <select name="hanhkiem7">
                    <option value="'.$data['hanhkiem7'].'">'.$data['hanhkiem7'].'</option>
                    <option value="Tốt">Tốt</option>
                    <option value="Khá">Khá</option>
                    <option value="Trung Bình">trung Bình</option>
                    <option value="Yếu">Yếu</option>
                </select>
            </td>
            <td>
                <select name="hanhkiem8">
                    <option value="'.$data['hanhkiem8'].'">'.$data['hanhkiem8'].'</option>
                    <option value="Tốt">Tốt</option>
                    <option value="Khá">Khá</option>
                    <option value="Trung Bình">trung Bình</option>
                    <option value="Yếu">Yếu</option>
                </select>
            </td>
            <td>
                <select name="hanhkiem9">
                    <option value="'.$data['hanhkiem9'].'">'.$data['hanhkiem9'].'</option>
                    <option value="Tốt">Tốt</option>
                    <option value="Khá">Khá</option>
                    <option value="Trung Bình">trung Bình</option>
                    <option value="Yếu">Yếu</option>
                </select>
            </td>
        </tr>            


        </table>
        <p></p>
        <input  class="find" value=" Cập Nhật " type="submit" name="submit">
        </form>
    </div> ';
                }
                else{
                    echo "Sai MSSV";
                }
            }
         
         ?>

    </div><p></p>
</body>
</html>

