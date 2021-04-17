<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 1){
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
    $sql = "SELECT * FROM thongtinsinhvien WHERE maso='$maso'" ;
    $query = mysqli_query($conn,$sql);
    $sinhvien = mysqli_fetch_assoc($query); 
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
    <style>
        .score{
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
    <title>Đánh giá Giáo Viên</title>
</head>
<body>
    <br>
<div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Đánh giá giáo viên </span>
    </div>

    <br>

<div class="container">
<form action="" method="POST">
        Mã số giáo viên
        <input type="text" name="maso" required>   
        <input class="danhgiagv" type="submit" name="submit">
    </form>
</div>
<br>
<?php
	if(isset($_POST['submit'])){
		$masogv = $_POST['maso'];
		$sql = "SELECT * FROM thongtingiaovien WHERE maso='$masogv' ";
		$query = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($query); 
		$check = mysqli_num_rows($query);
		if($check < 1){
			echo '<div class="container">
			<p>Mã số giáo viên không hợp lệ</p>
			</div';
		}
		else{
			echo '<div class="container">
			<p>Giáo viên : '.$data['ten'].'</p>
			
		<form action="" method="POST">
			Nội dung đánh giá</br>
			<input type="text" name="masogv" value="'.$masogv.'" style="display:none">
			<textarea  name="noidung" id="noidung" cols="90" rows="2" required></textarea> </br>
			<button class="danhgiagv" type="submit" value="abc" name="danhgia">Hoàn tất</button>
		</form>
	</div>
			';
			
		}

	}
	
	if(isset($_POST['danhgia'])){
		$masogv = $_POST['masogv'];
		$noidung = $_POST['noidung'];
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id =  substr(str_shuffle($permitted_chars), 0, 15);
		$sql = "INSERT INTO danhgiagiaovien(id,sender,receiver,noidung) VALUES
		('$id','$maso','$masogv','$noidung');";
		$query = mysqli_query($conn,$sql);
		echo '<div class="container">
			<p>Đánh giá thành công</p>
			</div';

	}
?>
	
    

</body>
</html>