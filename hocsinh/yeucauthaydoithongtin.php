<?php
    session_start();
    include '../connect.php';
    $err= '';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 2){
            header("Location: ../giaovien/index.php");
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
    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso' ";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
    $sql = "SELECT * FROM thongtinphuhuynh WHERE masocon='$maso' ";
    $query = mysqli_query($conn,$sql);
    $data1 = mysqli_fetch_assoc($query);
?>
<?php

if(isset($_POST['submit'])){
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
    $sdt = $_POST['sodienthoaiph'];

    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);

    $sql = "SELECT * FROM thongtinphuhuynh WHERE masocon='$maso'";
    $query = mysqli_query($conn,$sql);
    $data1 = mysqli_fetch_assoc($query);

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
    if($lop != $data['lop']){
        $sql = "UPDATE yeucau SET lop='$lop' WHERE id ='$id'";
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
    
    if($tenbo != $data['tenbo']){
        $sql = "UPDATE yeucau SET tenbo='$tenbo' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($namsinhbo != $data['namsinhbo']){
        $sql = "UPDATE yeucau SET namsinhbo='$namsinhbo' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($tenme != $data['tenme']){
        $sql = "UPDATE yeucau SET tenme='$tenme' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($namsinhme != $data['namsinhme']){
        $sql = "UPDATE yeucau SET namsinhme='$namsinhme' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if($sdt != $data1['sdt']){
        $sql = "UPDATE yeucau SET sdt='$sdt' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);
        $count = $count + 1;
    }
    if(isset($_FILES['avatar'])){
        if ($_FILES['avatar']['error'] > 0){
            
        }
        else{
            $name = $maso; 
            $filename = $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'],'../avatar_temp/'.$filename);   
            rename('../avatar_temp/'.$filename, "../avatar_temp/".$name.".jpg");
            $sql = "UPDATE yeucau SET avatar='change' WHERE id ='$id'";
            $query = mysqli_query($conn,$sql);
            $count = $count + 1;
        }
    }
    if($count == 0){
        $sql = "DELETE FROM yeucau WHERE id ='$id'";
        $query = mysqli_query($conn,$sql); 
        $err = "Kh??ng c?? th??ng tin c???n thay ?????i!";
    }
    else{
        $err = "T???o y??u c???u th??nh c??ng!";
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
    <title>Thay ?????i th??ng tin</title>
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
    <span class="word">Y??u c???u thay ?????i th??ng tin</span>
    </div>

<br>
<div class="container">
        <?php
                    echo $err;
        ?>
<form action="" method="POST" enctype="multipart/form-data">
    <table class="tableupdate">
        <tr style="width:100% ">
            <th style="width:30%">
            M?? s??? sinh vi??n
            </th>
            <td style="width:60%">
                <span> <b><?= $data['maso'] ?></b></span>
            </td>
        </tr>
        <tr>
            <th>
            T??n
            </th>
            <td>
            <input type="text" id="ten" value="<?= $data['ten'] ?>" name="ten">
            </td>
        </tr>
        <tr>
            <th>
            Gi???i t??nh
            </th>
            <td>
            <select name="gioitinh">
                <option value="<?= $data['gioitinh'] ?>"><?= $data['gioitinh'] ?></option>
                <option value="nam">Nam</option>
                <option value="nu">N???</option>
            </select>
            </td>
        </tr>
        <tr>
            <th>
                L???p
            </th>
            <td>
            <input type="text" id="lop" value="<?= $data['lop'] ?>" name="lop">
            </td>
        </tr>
        <tr>
            <th>
            Ng??y sinh
            </th>
            <td>
            <input type="date" id="date" value="<? $data['ngaysinh'] ?>" name="date">
            </td>
        </tr>
        <tr>
            <th>
            ?????a ch??? 
            </th>
            <td>
            <input type="text" id="diachi" value="<?= $data['diachi'] ?>" name="diachi"> 
            </td>
        </tr>
        <tr>
            <th>
            S??? ??i???n tho???i
            </th>
            <td>
            <input type="text" id="sodienthoai" value="<?= $data['sodienthoai'] ?>" name="sodienthoai">
            </td>
        </tr>
        <tr>
            <th>
            ???nh ?????i di???n 
            </th>
            <td>
            <input type="file" id="avatar" value="" name="avatar"> 
            </td>
        </tr>
        <tr>
            <th>
            T??n b???
            </th>
            <td>
            <input type="text" id="tenbo" value="<?= $data['tenbo'] ?>" name="tenbo">
            </td>
        </tr>
        <tr>
            <th>
            N??m sinh c???a b???
            </th>
            <td>
            <input type="text" id="namsinhbo" value="<?= $data['namsinhbo'] ?>" name="namsinhbo">
            </td>
        </tr>
        <tr>
            <th>
            T??n m???
            </th>
            <td>
            <input type="text" id="tenme" value="<?= $data['tenme'] ?>"  name="tenme">
            </td>
        </tr>
        <tr>
            <th>
            n??m sinh c???a m???
            </th>
            <td>
            <input type="text" id="namsinhme" value="<?= $data['namsinhme'] ?>" name="namsinhme">
            </td>
        </tr>
        <tr>
            <th>
            S??? ??i???n tho???i ph??? huynh
            </th>
            <td>
            <input type="text" id="sodienthoai" value="<?= $data1['sdt'] ?>" name="sodienthoaiph">
            </td>
        </tr>

    </table>
    <div class="btnupdate">
           <input value="C???p Nh???t "type="submit" name="submit">
    </div>
</form>

       

</div>
<br>
<p></p>

<?php
    $thongbao = '<div class="container">
    <span class="word">C??c y??u c???u ??ang ???????c ph?? duy???t <span style="float:right;color:#0040FF">Tr???ng Th??i </span></span>';
     $sql = "SELECT * FROM yeucau WHERE maso='$maso'";
     $resultset = mysqli_query($conn,$sql);
     $list      = [];
     while ($row = mysqli_fetch_array($resultset,1)) {
         $list[] = $row;
     }
     foreach ($list as $std) {
        $thongbao = $thongbao.'<div>';
        $thongbao = $thongbao.'<span style="float:right;color:#6E6E6E">'.$std['trangthai'].'</span>';
        $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $sql = "SELECT * FROM thongtinphuhuynh WHERE masocon='$maso'";
        $query = mysqli_query($conn,$sql);
        $data1 = mysqli_fetch_assoc($query);
        if($std['ten'] != NUll ){
            $thongbao = $thongbao.'<p>T??n: '.$data['ten'].'--->'.$std['ten'].'</p>';
        } 
        if($std['lop'] != NUll ){
            $thongbao = $thongbao.'<p>L???p: '.$data['lop'].'--->'.$std['lop'].'</p>';
        } 
        if($std['ngaysinh'] != NUll ){
            $thongbao = $thongbao.'<p>Ng??y Sinh: '.$data['ngaysinh'].'--->'.$std['ngaysinh'].'</p>';
        } 
        if($std['diachi'] != NUll ){
            $thongbao = $thongbao.'<p>?????a Ch???: '.$data['diachi'].'--->'.$std['diachi'].'</p>';
        } 
        if($std['sodienthoai'] != NUll ){
            $thongbao = $thongbao.'<p>S??? ??i???n Tho???i: '.$data['sodienthoai'].'--->'.$std['sodienthoai'].'</p>';
        } 
        if($std['avatar'] != NUll ){
            $thongbao = $thongbao.'<p>Avatar: '.$data['avatar'].'--->'.$std['avatar'].'</p>';
        } 
        if($std['tenbo'] != NUll ){
            $thongbao = $thongbao.'<p>T??n B???: '.$data['tenbo'].'--->'.$std['tenbo'].'</p>';
        } 
        if($std['namsinhbo'] != NUll ){
            $thongbao = $thongbao.'<p>N??m Sinh B???: '.$data['namsinhbo'].'--->'.$std['namsinhbo'].'</p>';
        } 
        if($std['tenme'] != NUll ){
            $thongbao = $thongbao.'<p>T??n M???: '.$data['tenme'].'--->'.$std['tenme'].'</p>';
        } 
        if($std['namsinhme'] != 0 or $std['namsinhme'] != '0'){
            $thongbao = $thongbao.'<p>N??m Sinh M???: '.$data['namsinhme'].'--->'.$std['namsinhme'].'</p>';
        } 
        if($std['sdt'] != NUll ){
            $thongbao = $thongbao.'<p>S??? ??i???n Tho???i Ph??? Huynh: '.$data1['sdt'].'--->'.$std['sdt'].'</p>';
        } 
        $thongbao=$thongbao.'<hr>';
        $thongbao = $thongbao.'</div>';
     }
     $thongbao = $thongbao.'</div>';
     echo $thongbao;
?>

    
<p></p>
</body>
</html>
