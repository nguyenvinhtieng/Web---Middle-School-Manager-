<?php
    session_start();
    include '../connect.php';
    $err= '';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 1){
            header("Location: ../hocsinh/index.php");
            exit();
        }
        else if($_SESSION['lv'] == 3){
            header("Location: ../quanly/index.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php");
    }
    $err = '';
    $maso = $_SESSION['maso'];
    $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso' ";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
   


?>
<?php

if(isset($_POST['submit'])){
    $ten = $_POST['ten'];
    $ngaysinh = $_POST['date'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $avatar = $_POST['avatar'];
    $lopchunhiem = $_POST['lopchunhiem'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];

    $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);


    $flag = true;
    while($flag){
        $flag = false;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id =  substr(str_shuffle($permitted_chars), 0, 15);
        $sql = "SELECT * from yeucau ";
        $resultset = mysqli_query($conn,$sql);
        $list      = [];
        while ($row = mysqli_fetch_array($resultset,1)) {
            $list[] = $row;
        }
        foreach ($list as $std) {
            if($id == $std['id']){
                $flag = true;
            }
        }
    }
    $sql = "INSERT INTO yeucau(id,maso) VALUES ('$id','$maso');";
    $query = mysqli_query($conn,$sql);
    $count = 0;
    
    if($ten != $data['ten']){
        $sql = "UPDATE yeucau SET ten='$ten' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($ngaysinh != $data['ngaysinh'] && $ngaysinh != "" ){
        $sql = "UPDATE yeucau SET ngaysinh='$ngaysinh' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($diachi != $data['diachi']){
        $sql = "UPDATE yeucau SET diachi='$diachi' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($sodienthoai != $data['sodienthoai']){
        $sql = "UPDATE yeucau SET sodienthoai='$sodienthoai' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($avatar != $data['avatar']){
        $sql = "UPDATE yeucau SET avatar='$avatar' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($lopchunhiem != $data['lopchunhiem']){
        $sql = "UPDATE yeucau SET lopchunhiem='$lopchunhiem' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($subject1 != $data['subject1']){
        if($subject1 == ""){
            $subject1 == NULL;
        }
        $sql = "UPDATE yeucau SET subject1='$subject1' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($subject2 != $data['subject2']){
        if($subject2 == ""){
            $subject2 == NULL;
        }
        $sql = "UPDATE yeucau SET subject2='$subject2' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($subject3 != $data['subject3']){
        if($subject3 == ""){
            $subject3 == NULL;
        }
        $sql = "UPDATE yeucau SET subject3='$subject3' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($subject4 != $data['subject4']){
        if($subject4 == ""){
            $subject4 == NULL;
        }
        $sql = "UPDATE yeucau SET subject4='$subject4' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($subject5 != $data['subject5']){
        if($subject5 == ""){
            $subject5 == NULL;
        }
        $sql = "UPDATE yeucau SET subject5='$subject5' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($count == 0){
        $sql = "DELETE FROM yeucau WHERE id ='$id'";
        $query = mysqli_query($conn,$sql); 
        $err = "Không có thông tin cần thay đổi!";
    }
    else{
        $err = "Tạo yêu cầu thành công!";
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
    <link rel="stylesheet" href="../style.css">
    <title>Tạo thông báo</title>
    <style>
        .btndelete{
            background-color: red;
            color: white ;
            border: none;
            padding: 5px 5px 5px 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<br>
    <div class="container">
    <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
    <span class="word">Yêu cầu thay đổi thông tin</span>
    </div>

<br>
<div class="container">
        <?php
                    echo $err;
        ?>
<form action="" method="POST">
    <table class="tableupdate">
        <tr style="width:100% ">
            <th style="width:30%">
            Mã số sinh viên
            </th>
            <td style="width:60%">
                <span> <b><?= $data['maso'] ?></b></span>
            </td>
        </tr>
        <tr>
            <th>
            Tên
            </th>
            <td>
            <input type="text" id="ten" value="<?= $data['ten'] ?>" name="ten">
            </td>
        </tr>
        <tr>
            <th>
            Giới tính
            </th>
            <td>
            <select name="gioitinh">
                <option value="<?= $data['gioitinh'] ?>"><?= $data['gioitinh'] ?></option>
                <option value="nam">Nam</option>
                <option value="nu">Nữ</option>
            </select>
            </td>
        </tr>
        <tr>
            <th>
            Ngày sinh
            </th>
            <td>
            <input type="date" id="date" value="<? $data['ngaysinh'] ?>" name="date">
            </td>
        </tr>
        <tr>
            <th>
            Địa chỉ 
            </th>
            <td>
            <input type="text" id="diachi" value="<?= $data['diachi'] ?>" name="diachi"> 
            </td>
        </tr>
        <tr>
            <th>
            Số điện thoại
            </th>
            <td>
            <input type="text" id="sodienthoai" value="<?= $data['sodienthoai'] ?>" name="sodienthoai">
            </td>
        </tr>
        <tr>
            <th>
            Ảnh đại diện 
            </th>
            <td>
            <input type="file" id="avatar" value="<?= $data['avatar'] ?>" name="avatar"> 
            </td>
        </tr>
        <tr>
            <th>
                Lớp chủ nhiệm
            </th>
            <td>
            <select name="lopchunhiem" id="">
                <option value="<?= $data['lopchunhiem'] ?>"><?= $data['lopchunhiem'] ?></option>
                <option value="6A">6A</option>
                <option value="6B">6B</option>
                <option value="7A">7A</option>
                <option value="7B">7B</option>
                <option value="8A">8A</option>
                <option value="8B">8B</option>
                <option value="9A">9A</option>
                <option value="9B">9B</option>
                <option value=""></option>
            </select>
            </td>
        </tr>
        <tr>
            <th>
                Môn 1
            </th>
            <td>
            <select name="subject1">
                    <option value="<?= $data['subject1'] ?>"><?= $data['subject1'] ?></option>
                    <option value="Toan">Toán</option>
                    <option value="Van">Văn</option>
                    <option value="Anh">Anh</option>
                    <option value="Ly">Lý</option>
                    <option value="Hoa">Hóa</option>
                    <option value="Theduc">Thể Dục</option>
                    <option value="Lichsu">lịch Sử</option>
                    <option value="Dialy">Địa Lý</option>
                    <option value="GDCD">GDCD</option>
                    <option value="Congnghe">Công nghệ</option>
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                Môn 2
            </th>
            <td>
            <select name="subject2">
                    <option value="<?= $data['subject2'] ?>"><?= $data['subject2'] ?></option>
                    <option value="Toan">Toán</option>
                    <option value="Van">Văn</option>
                    <option value="Anh">Anh</option>
                    <option value="Ly">Lý</option>
                    <option value="Hoa">Hóa</option>
                    <option value="Theduc">Thể Dục</option>
                    <option value="Lichsu">lịch Sử</option>
                    <option value="Dialy">Địa Lý</option>
                    <option value="GDCD">GDCD</option>
                    <option value="Congnghe">Công nghệ</option>
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                Môn 3
            </th>
            <td>
            <select name="subject3">
                    <option value="<?= $data['subject3'] ?>"><?= $data['subject3'] ?></option>
                    <option value="Toan">Toán</option>
                    <option value="Van">Văn</option>
                    <option value="Anh">Anh</option>
                    <option value="Ly">Lý</option>
                    <option value="Hoa">Hóa</option>
                    <option value="Theduc">Thể Dục</option>
                    <option value="Lichsu">lịch Sử</option>
                    <option value="Dialy">Địa Lý</option>
                    <option value="GDCD">GDCD</option>
                    <option value="Congnghe">Công nghệ</option>
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                Môn 4
            </th>
            <td>
            <select name="subject4">
                    <option value="<?= $data['subject4'] ?>"><?= $data['subject4'] ?></option>
                    <option value="Toan">Toán</option>
                    <option value="Van">Văn</option>
                    <option value="Anh">Anh</option>
                    <option value="Ly">Lý</option>
                    <option value="Hoa">Hóa</option>
                    <option value="Theduc">Thể Dục</option>
                    <option value="Lichsu">lịch Sử</option>
                    <option value="Dialy">Địa Lý</option>
                    <option value="GDCD">GDCD</option>
                    <option value="Congnghe">Công nghệ</option>
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                Môn 5
            </th>
            <td>
            <select name="subject5">
                    <option value="<?= $data['subject5'] ?>"><?= $data['subject5'] ?></option>
                    <option value="Toan">Toán</option>
                    <option value="Van">Văn</option>
                    <option value="Anh">Anh</option>
                    <option value="Ly">Lý</option>
                    <option value="Hoa">Hóa</option>
                    <option value="Theduc">Thể Dục</option>
                    <option value="Lichsu">lịch Sử</option>
                    <option value="Dialy">Địa Lý</option>
                    <option value="GDCD">GDCD</option>
                    <option value="Congnghe">Công nghệ</option>
                    <option value=""></option>
                </select>
            </td>
        </tr>
    </table>
    <div class="btnupdate">
           <input value="Cập Nhật "type="submit" name="submit">
    </div>
</form>

       

</div>
<!-- Hiển thioj ds các yêu cầu-->
<br>
<p></p>


<?php
    $thongbao = '<div class="container">
    <span class="word">Các yêu cầu đang được phê duyệt <span style="float:right;color:#0040FF">Trạng Thái </span></span>';
     $sql = "SELECT * FROM yeucau WHERE maso='$maso'";
     $resultset = mysqli_query($conn,$sql);
     $list      = [];
     while ($row = mysqli_fetch_array($resultset,1)) {
         $list[] = $row;
     }
     foreach ($list as $std) {
        $thongbao = $thongbao.'<div>';
        $thongbao = $thongbao.'<span style="float:right;color:#6E6E6E">'.$std['trangthai'].'</span>';
        $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        
        if($std['ten'] != NUll ){
            $thongbao = $thongbao.'<p>Tên: '.$data['ten'].'--->'.$std['ten'].'</p>';
        } 
        if($std['ngaysinh'] != NUll ){
            $thongbao = $thongbao.'<p>Ngày Sinh: '.$data['ngaysinh'].'--->'.$std['ngaysinh'].'</p>';
        } 
        if($std['diachi'] != NUll ){
            $thongbao = $thongbao.'<p>Địa Chỉ: '.$data['diachi'].'--->'.$std['diachi'].'</p>';
        } 
        if($std['sodienthoai'] != NUll ){
            $thongbao = $thongbao.'<p>Số Điện Thoại: '.$data['sodienthoai'].'--->'.$std['sodienthoai'].'</p>';
        } 
        if($std['avatar'] != NUll ){
            $thongbao = $thongbao.'<p>Avatar: '.$data['avatar'].'--->'.$std['avatar'].'</p>';
        } 
        if($std['lopchunhiem'] != NUll ){
            $thongbao = $thongbao.'<p>Lớp Chủ Nhiệm: '.$data['lopchunhiem'].'--->'.$std['lopchunhiem'].'</p>';
        } 
        if($std['subject1'] != NUll ){
            $thongbao = $thongbao.'<p>Môn 1: '.$data['subject1'].'--->'.$std['subject1'].'</p>';
        } 
        if($std['subject2'] != NUll ){
            $thongbao = $thongbao.'<p>Môn 2: '.$data['subject2'].'--->'.$std['subject2'].'</p>';
        } 

        if($std['subject3'] != NUll ){
            $thongbao = $thongbao.'<p>Môn 3: '.$data['subject3'].'--->'.$std['subject3'].'</p>';
        } 

        if($std['subject4'] != NUll ){
            $thongbao = $thongbao.'<p>Môn 4: '.$data['subject4'].'--->'.$std['subject4'].'</p>';
        } 

        if($std['subject5'] != NUll ){
            $thongbao = $thongbao.'<p>Môn 5: '.$data['subject5'].'--->'.$std['subject5'].'</p>';
        } 



        
        $thongbao=$thongbao.'<hr>';
        $thongbao = $thongbao.'</div>';
     }
     $thongbao = $thongbao.'</div>';
     echo $thongbao;
?>
</body>
</html>


