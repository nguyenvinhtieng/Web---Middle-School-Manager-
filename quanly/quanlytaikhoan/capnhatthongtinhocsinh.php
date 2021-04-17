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
    $err='';
    if(isset($_POST['submit'])){
        $user = $_POST['maso'];
        $ten = $_POST['ten'];
        $lop = $_POST['lop'];
        $ngaysinh = $_POST['date'];
        $diachi = $_POST['diachi'];
        $sodienthoai = $_POST['sodienthoai'];
        $tenbo = $_POST['tenbo'];
        $namsinhbo = $_POST['namsinhbo'];
        $tenme = $_POST['tenme'];
        $namsinhme = $_POST['namsinhme'];
        $lop = $_POST['lop'];
        $gioitinh = $_POST['gioitinh'];
        $sodienthoaiph = $_POST['sodienthoaiph'];
        $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$user'";
        $query = mysqli_query($conn,$sql);
        $check = mysqli_num_rows($query);
        if($check < 1){
            $err = "Mã số không tồn tại !";
        }
        else{

            if($ten != ""){
                $sql = "UPDATE thongtinsinhvien SET ten='$ten' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($gioitinh != ""){
                if($gioitinh == 'nam'){
                    $gioitinh = "Nam";
                }
                else{
                    $gioitinh = "Nữ";
                }
                $sql = "UPDATE thongtinsinhvien SET gioitinh='$gioitinh' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($ngaysinh != ""){
                $sql = "UPDATE thongtinsinhvien SET ngaysinh='$ngaysinh' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($diachi != ""){
                $sql = "UPDATE thongtinsinhvien SET diachi='$diachi' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($sodienthoai != ""){
                $sql = "UPDATE thongtinsinhvien SET sodienthoai='$sodienthoai' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            
            if($tenme != ""){
                $sql = "UPDATE thongtinsinhvien SET tenme='$tenme' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "UPDATE thongtinphuhuynh SET ten='$tenme' WHERE masocon='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($tenbo != ""){
                $sql = "UPDATE thongtinsinhvien SET tenbo='$tenbo' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
                $sql = "UPDATE thongtinphuhuynh SET ten='$tenbo' WHERE masocon='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($sodienthoaiph != ""){
                $sql = "UPDATE thongtinphuhuynh SET sdt='$sodienthoaiph' WHERE masocon='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($namsinhbo != ""){
                $sql = "UPDATE thongtinsinhvien SET namsinhbo='$namsinhbo' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($namsinhme != ""){
                $sql = "UPDATE thongtinsinhvien SET namsinhme='$namsinhme' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($lop != ""){
                $sql = "UPDATE thongtinsinhvien SET lop='$lop' WHERE maso='$user'";
                $query = mysqli_query($conn,$sql);
            }
            if($gioitinh != ""){
                $sql = "UPDATE user_account SET gioitinh='$gioitinh' WHERE maso='$user'";
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
            
            $err = "Cập nhật thông tin thành công";
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
    <title>Cập nhật thông tin học sinh</title>
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
    <span class="word">Cập nhật thông cho Sinh Viên </span>
</div>


    <div class="container">
        <form action="" method='POST'>
            Nhập Mã số sinh viên
            <input type="text" id="username"  name="masosv" required>
            <span class="btnupdate">
                 <input value="Tìm"type="submit" name="findhs">
            </span>
        </form>
    </div>
    <br>
<?php
    if(isset($_POST['findhs'])){
        $masosv = $_POST['masosv'];
        $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$masosv'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $check = mysqli_num_rows($query);
        if($check < 1){
            $err = "Không tìm thấy thông tin sinh viên!";
        }
        else {

            $sql = "SELECT * FROM thongtinphuhuynh WHERE masocon='$masosv'";
            $query = mysqli_query($conn,$sql);
            $data1 = mysqli_fetch_assoc($query);
            echo '
                <div class="container">
<form action="" method="POST" enctype="multipart/form-data">
    <table class="tableupdate">
        <tr style="width:100% ">
            <th style="width:30%">
            Mã số sinh viên
            </th>
            <td style="width:60%">
                <input type="text" value="'.$data['maso'].'" id="username"  name="maso" required>
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
            Lớp
            </th>
            <td>
            <input type="text" id="lop" value="'.$data['lop'].'" name="lop">
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
            Tên bố
            </th>
            <td>
            <input type="text" id="tenbo" value="'.$data['tenbo'].'" name="tenbo">
            </td>
        </tr>
        <tr>
            <th>
            Năm sinh của bố
            </th>
            <td>
            <input type="text" id="namsinhbo" value="'.$data['namsinhbo'].'" name="namsinhbo">
            </td>
        </tr>
        <tr>
            <th>
            Tên mẹ
            </th>
            <td>
            <input type="text" id="tenme" value="'.$data['tenme'].'"  name="tenme">
            </td>
        </tr>
        <tr>
            <th>
            năm sinh của mẹ
            </th>
            <td>
            <input type="text" id="namsinhme" value="'.$data['namsinhme'].'" name="namsinhme">
            </td>
        </tr>
        <tr>
            <th>
            Số điện thoại phụ huynh
            </th>
            <td>
            <input type="text" id="sodienthoai" value="'.$data1['sdt'].'" name="sodienthoaiph">
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