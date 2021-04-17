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

    $err = "";
    if(isset($_POST['submit'])){
        $user = $_POST['maso'];
        $ten = $_POST['ten'];
        $ngaysinh = $_POST['date'];
        $diachi = $_POST['diachi'];
        $sodienthoai = $_POST['sodienthoai'];
        $lopchunhiem = $_POST['lopchunhiem'];
        $gioitinh = $_POST['gioitinh'];
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        $subject4 = $_POST['subject4'];
        $subject5 = $_POST['subject5'];
        $sql = "SELECT * FROM thongtingiaovien WHERE maso='$user'";
        $query = mysqli_query($conn,$sql);
        $check = mysqli_num_rows($query);

        if($check < 1){
            $err = "Mã số không tồn tại !";
        }
        else{


            if($ten != ""){
                $sql = "UPDATE thongtingiaovien SET ten='$ten' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($ngaysinh != ""){
                $sql = "UPDATE thongtingiaovien SET ngaysinh='$ngaysinh' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($diachi != ""){
                $sql = "UPDATE thongtingiaovien SET diachi='$diachi' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($sodienthoai != ""){
                $sql = "UPDATE thongtingiaovien SET sodienthoai='$sodienthoai' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($lopchunhiem != ""){
                $sql = "UPDATE thongtingiaovien SET lopchunhiem='$lopchunhiem' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            
            if($gioitinh != ""){
                $sql = "UPDATE thongtingiaovien SET gioitinh='$gioitinh' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($subject1 != ""){
                $sql = "UPDATE thongtingiaovien SET subject1='$subject1' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($subject2 != ""){
                $sql = "UPDATE thongtingiaovien SET subject2='$subject2' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($subject3 != ""){
                $sql = "UPDATE thongtingiaovien SET subject3='$subject3' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($subject4 != ""){
                $sql = "UPDATE thongtingiaovien SET subject4='$subject4' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($subject5 != ""){
                $sql = "UPDATE thongtingiaovien SET subject5='$subject5' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if(isset($_FILES['avatar'])){
                if ($_FILES['avatar']['error'] > 0){
                    
                }
                else{
                    $name = $user; 
                    $filename = $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'],'../../avatar/'.$filename);   
                    rename('../../avatar/'.$filename, "../../avatar/".$name.".jpg");
                }
                
            }
            $err =  "Cập nhật thông tin thành công";
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
    <title>Cập nhật thông tin giáo viên</title>
    <style>
        .btnupdate input{
            background-color: #2E64FE;
            border: none;
            padding: 5px 10px 5px 10px;
            border-radius: 3px;
            color: white;
        }
        .btnupdate input:hover{
            background-color: #58ACFA;
            
        }
    </style>
</head>
<body>
<div class="container" style="display:flex">
        <a class="buttonback" href="./quanlytaikhoan.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Cập nhật thông cho Giáo viên </span>
    </div>

    <br>

<div class="container">
        <form action="" method='POST'>
            Nhập Mã số Giáo Viên
            <input type="text" id="username"  name="masogv" required>
            <span class="btnupdate">
                 <input value="Tìm"type="submit" name="findgv">
            </span>
        </form>
</div>
<br>
<?php
    if(isset($_POST['findgv'])){
        $masogv = $_POST['masogv'];
        $sql = "SELECT * FROM thongtingiaovien WHERE maso='$masogv'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $check = mysqli_num_rows($query);
        if($check < 1){
            $err = "Không tìm thấy thông tin giáo viên!";
        }
        else {
            echo '
                <div class="container">
<form class="updateinfor" action="" method="POST" enctype="multipart/form-data">
    <table class="tableupdate">
        <tr style="width:100% ">
            <th style="width:30%">
            Mã số giáo viên
            </th>
            <td style="width:60%">
            <input type="text" id="username" value="'.$data['maso'].'" name="maso" required>
            </td>
        </tr>
        <tr>
            <th>
            Tên
            </th>
            <td>
            <input type="text" id="ten" value="'.$data['ten'].'" name="ten">
            </td>
        </tr>
        <tr>
            <th>
            Ngày sinh
            </th>
            <td>
            <input type="date" id="date" value="'.$data['ngaysinh'].'" name="date">
            </td>
        </tr>
        <tr>
            <th>
            Giới tính
            </th>
            <td>
            <select name="gioitinh">
                <option value="'.$data['gioitinh'].'">'.$data['gioitinh'].'</option>
                <option value="nam">Nam</option>
                <option value="nu">Nữ</option>
            </select>
            </td>
        </tr>
        <tr>
            <th>
            Địa chỉ
            </th>
            <td>
            <input type="text" id="diachi" value="'.$data['diachi'].'" name="diachi">
            </td>
        </tr>
        <tr>
            <th>
            Số điện thoại
            </th>
            <td>
            <input type="text" id="sodienthoai" value="'.$data['sodienthoai'].'" name="sodienthoai">
            </td>
        </tr>
        <tr>
            <th>
            Ảnh đại diện 
            </th>
            <td>
            <input type="file" id="avatar" value="" name="avatar">
            </td>
        </tr>
        <tr>
            <th>
            Lớp chủ nhiệm
            </th>
            <td>
                <select name="lopchunhiem">
                    <option value="'.$data['lopchunhiem'].'">'.$data['lopchunhiem'].'</option>
                    <option value="6A">6A</option>
                    <option value="6B">6B</option>
                    <option value="7A">7A</option>
                    <option value="7B">7B</option>
                    <option value="8A">8A</option>
                    <option value="8B">8B</option>
                    <option value="9A">9A</option>
                    <option value="9B">9B</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
            Môn 1
            </th>
            <td>
                <select name="subject1">
                    <option value="'.$data['subject1'].'">'.$data['subject1'].'</option>
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
                    <option value="'.$data['subject2'].'">'.$data['subject2'].'</option>
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
                    <option value="'.$data['subject3'].'">'.$data['subject3'].'</option>
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
                    <option value="'.$data['subject4'].'">'.$data['subject4'].'</option>
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
                    <option value="'.$data['subject5'].'">'.$data['subject5'].'</option>
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
            ';
            
        }
    }
?>

<div class="container">
    <div style="color:green;font-weight:500" class="err">
       <?php
               echo $err;
       ?>
    </div>
</div>

</body>
</html>