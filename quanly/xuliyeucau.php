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

$err ="";
?>
    <?php
        if(isset($_POST['submityc'])){
            $xuli = $_POST['submityc'];
            if($xuli == "xoa"){
                $id = $_POST['id'];
                $sql = "UPDATE yeucau SET trangthai = 'Bị từ chối' WHERE id='$id' ";
                $query = mysqli_query($conn,$sql);
                $err = "Xóa thành công!";
            }
            else if($xuli == "ok"){
                $maso = $_POST['maso'];
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $ngaysinh = $_POST['ngaysinh'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $avatar = $_POST['avatar'];
                $gioitinh = $_POST['gioitinh'];
                $sql = "SELECT * FROM user_account WHERE maso='$maso' ";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                if($data['lv'] == 1){
                    $lop = $_POST['lop'];
                    $tenbo = $_POST['tenbo'];
                    $namsinhbo = $_POST['namsinhbo'];
                    $sdt = $_POST['sdt'];
                    $tenme = $_POST['tenme'];
                    $namsinhme = $_POST['namsinhme'];
                    if($ten != "" && $ten != NULL){
                        $sql = "UPDATE thongtinsinhvien SET ten = '$ten' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($ngaysinh != "" && $ngaysinh != NULL){
                        $sql = "UPDATE thongtinsinhvien SET ngaysinh = '$ngaysinh' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($diachi != "" && $diachi != NULL){
                        $sql = "UPDATE thongtinsinhvien SET diachi = '$diachi' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($sodienthoai != "" && $sodienthoai != NULL){
                        $sql = "UPDATE thongtinsinhvien SET sodienthoai = '$sodienthoai' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($gioitinh != "" && $gioitinh != NULL){
                        $sql = "UPDATE thongtinsinhvien SET gioitinh = '$gioitinh' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($lop != "" && $lop != NULL){
                        $sql = "UPDATE thongtinsinhvien SET lop = '$lop' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($tenme != "" && $tenme != NULL){
                        $sql = "UPDATE thongtinsinhvien SET tenme = '$tenme' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                        $sql = "UPDATE thongtinphuhuynh SET ten = '$tenme' WHERE masocon='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($tenbo != "" && $tenbo != NULL){
                        $sql = "UPDATE thongtinsinhvien SET tenbo = '$tenbo' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                        $sql = "UPDATE thongtinphuhuynh SET ten = '$tenbo' WHERE masocon='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($namsinhbo != "" && $namsinhbo != NULL){
                        $sql = "UPDATE thongtinsinhvien SET namsinhbo = '$namsinhbo' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($namsinhme != 0 && $namsinhme != NULL){
                        $sql = "UPDATE thongtinsinhvien SET namsinhme = '$namsinhme' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($sdt != "" && $sdt != NULL){
                        $sql = "UPDATE thongtinphuhuynh SET sdt = '$sdt' WHERE masocon='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    /*if($avatar == "change"){
                        if(isset($_FILES['avatar'])){
                            if ($_FILES['avatar']['error'] > 0){
                                
                            }
                            else{
                                move_uploaded_file($_FILES['avatar']['tmp_name'],'../avatar/'.$filename);   
                                rename('../avatar/'.$filename, "../avatar/".$name.".jpg");
                            }
                            
                        }
                    }*/
                    $sql = "UPDATE yeucau SET trangthai = 'Hoàn tất' WHERE id='$id' ";
                    $query = mysqli_query($conn,$sql);
                    $err = "Cập nhật thành công";
                }
                else if($data['lv'] == 2){
                    $lopchunhiem = $_POST['lopchunhiem'];
                    $subject1 = $_POST['subject1'];
                    $subject2 = $_POST['subject2'];
                    $subject3 = $_POST['subject3'];
                    $subject4 = $_POST['subject4'];
                    $subject5 = $_POST['subject5'];
                    if($ten != "" && $ten != NULL){
                        $sql = "UPDATE thongtingiaovien SET ten = '$ten' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($ngaysinh != "" && $ngaysinh != NULL){
                        $sql = "UPDATE thongtingiaovien SET ngaysinh = '$ngaysinh' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($diachi != "" && $diachi != NULL){
                        $sql = "UPDATE thongtingiaovien SET diachi = '$diachi' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($sodienthoai != "" && $sodienthoai != NULL){
                        $sql = "UPDATE thongtingiaovien SET sodienthoai = '$sodienthoai' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($avatar != "" && $avatar != NULL){
                        $sql = "UPDATE thongtingiaovien SET avatar = '$avatar' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($gioitinh != "" && $gioitinh != NULL){
                        $sql = "UPDATE thongtingiaovien SET gioitinh = '$gioitinh' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($lopchunhiem != "" && $lopchunhiem != NULL){
                        $sql = "UPDATE thongtingiaovien SET lopchunhiem = '$lopchunhiem' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($subject1 != "" && $subject1 != NULL){
                        $sql = "UPDATE thongtingiaovien SET subject1 = '$subject1' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($subject2 != "" && $subject2 != NULL){
                        $sql = "UPDATE thongtingiaovien SET subject2 = '$subject2' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($subject3 != "" && $subject3 != NULL){
                        $sql = "UPDATE thongtingiaovien SET subject3 = '$subject3' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($subject4 != "" && $subject4 != NULL){
                        $sql = "UPDATE thongtingiaovien SET subject4 = '$subject4' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    if($subject5 != "" && $subject5 != NULL){
                        $sql = "UPDATE thongtingiaovien SET subject5 = '$subject5' WHERE maso='$maso' ";
                        $query = mysqli_query($conn,$sql);
                    }
                    
                    $sql = "UPDATE yeucau SET trangthai = 'Hoàn tất' WHERE id='$id' ";
                    $query = mysqli_query($conn,$sql);
                    $err = "Cập nhật thành công";
                }
                else{
                    $err = "Lỗi không xác định người dùng!";
                }                
                
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
            background-color: #3399CC;
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
    <span class="word">Tiếp nhận các yêu cầu thay đổi thông tin </span>
    </div>

<br>
    <div class="container">
        <p><?=  $err; ?></p>
            <p style="font-size: 30px;font-weight: 600;color: #268be9;" >Danh sách các yêu cầu<br>
            <?php
            $sql = "SELECT * from yeucau WHERE trangthai='Đang xử lí...'";
            $resultset = mysqli_query($conn,$sql);
            $list      = [];
            while ($row = mysqli_fetch_array($resultset,1)) {
                $list[] = $row;
            }
            
            foreach ($list as $std) {
                $chucvu = $std['maso'];
                $sql = "SELECT * FROM user_account WHERE maso='$chucvu' ";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $lever = $data['lv'];
                $thongbao = "<div style='width:100%'>";
                if($lever == 1){
                    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$chucvu' ";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $chucvu = "Học Sinh";
                    
                    $thongbao = $thongbao.'<p><b>Yêu cầu từ '.$chucvu.' có mã số '.$std['maso'].' </b></p>';
                    if($std['ten'] != NUll ){
                        $thongbao = $thongbao.'<p>Tên: '.$data['ten'].'--->'.$std['ten'].'</p>';
                    } 
                    if($std['lop'] != NUll ){
                        $thongbao = $thongbao.'<p>Lớp: '.$data['lop'].'--->'.$std['lop'].'</p>';
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
                    if($std['tenbo'] != NUll ){
                        $thongbao = $thongbao.'<p>Tên Bố: '.$data['tenbo'].'--->'.$std['tenbo'].'</p>';
                    } 
                    if($std['namsinhbo'] != NUll ){
                        $thongbao = $thongbao.'<p>Năm Sinh Bố: '.$data['namsinhbo'].'--->'.$std['namsinhbo'].'</p>';
                    } 
                    if($std['tenme'] != NUll ){
                        $thongbao = $thongbao.'<p>Tên Mẹ: '.$data['tenme'].'--->'.$std['tenme'].'</p>';
                    } 
                    if($std['namsinhme'] != NUll ){
                        $thongbao = $thongbao.'<p>Năm Sinh Mẹ: '.$data['namsinhme'].'--->'.$std['namsinhme'].'</p>';
                    } 
                    if($std['sdt'] != NUll ){
                        $thongbao = $thongbao.'<p>Số Điện Thoại Phụ Huynh: '.$data1['sdt'].'--->'.$std['sdt'].'</p>';
                    } 
                    if($std['avatar'] == "change" ){
                        $thongbao = $thongbao.'<p>Avatar: 
                        <div style="display:flex">
                        <div class="imageavatarusername">
                            <img class="imageuser" src="../avatar/'.$std['maso'].'.jpg" >
                        </div>
                        <div>-></div>
                        <div class="imageavatarusername">
                            <img class="imageuser" src="../avatar_temp/'.$std['maso'].'.jpg" >
                        </div>
                        </div>
                        </p>';
                    } 
                }
                else if($lever == 2) {
                    $sql = "SELECT * FROM thongtingiaovien WHERE maso='$chucvu' ";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $chucvu = "Giáo Viên";
                    
                    $thongbao = $thongbao.'<p><b>Yêu cầu từ '.$chucvu.' có mã số '.$std['maso'].' </b></p>';
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
                    
                }
                else{
                    echo "Lỗi người nhận";
                }

               
                $thongbao = $thongbao.'<form action="" method="POST" enctype="multipart/form-data">
                <input style="display:none" value="'.$std['id'].'" name ="id" type="text">
                <input style="display:none" value="'.$std['maso'].'" name ="maso" type="text">
                <input style="display:none" value="'.$std['ten'].'" name ="ten" type="text">
                <input style="display:none" value="'.$std['ngaysinh'].'" name ="ngaysinh" type="text">
                <input style="display:none" value="'.$std['diachi'].'" name ="diachi" type="text">
                <input style="display:none" value="'.$std['sodienthoai'].'" name ="sodienthoai" type="text">
                <input style="display:none" value="'.$std['avatar'].'" name ="avatar" type="text">
                <input style="display:none" value="'.$std['gioitinh'].'" name ="gioitinh" type="text">
                <input style="display:none" value="'.$std['lop'].'" name ="lop" type="text">
                <input style="display:none" value="'.$std['tenbo'].'" name ="tenbo" type="text">
                <input type="number" style="display:none" value="'.$std['namsinhbo'].'" name ="namsinhbo" type="text">
                <input style="display:none" value="'.$std['tenme'].'" name ="tenme" type="text">
                <input type="number" style="display:none" value="'.$std['namsinhme'].'" name ="namsinhme" type="text">
                <input style="display:none" value="'.$std['sdt'].'" name ="sdt" type="text">
                <input style="display:none" value="'.$std['lopchunhiem'].'" name ="lopchunhiem" type="text">
                <input style="display:none" value="'.$std['subject1'].'" name ="subject1" type="text">
                <input style="display:none" value="'.$std['subject2'].'" name ="subject2" type="text">
                <input style="display:none" value="'.$std['subject3'].'" name ="subject3" type="text">
                <input style="display:none" value="'.$std['subject4'].'" name ="subject4" type="text">
                <input style="display:none" value="'.$std['subject5'].'" name ="subject5" type="text">
                <button class="btnxoa" type="submit" value="xoa" name="submityc">Xóa</button>
                <button class="btnok" type="submit" value="ok" name="submityc">Đồng ý</button>
                ';
                $thongbao = $thongbao.'</form>';
                $thongbao = $thongbao.'</div>';
                echo $thongbao;
                echo '<hr>';
            }
        ?>

    </div>
    <br>
    <p>
    </p>


</body>
</html>