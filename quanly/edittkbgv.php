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
    $mess = '';
    $loi ='';
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
    <title>Chỉnh sửa thời khóa biểu Giáo Viên</title>
    <style>
    	.btnfindgv{
    		padding: 2px 20px 2px 20px;
    		background-color: #3366CC;
    		border : none;
    		border-radius: 5px;
    		color: white ;
    		outline: none;
    	}
    	.btnfindgv:hover{	
    		background-color: #3399FF;
    	}
    	.optiontkb{
    		width :100%;
    		
    	}
    	.tablethoikhoabieugv{
		    justify-content: center;
		    text-align: center;
		}
		
		.tablethoikhoabieugv th{
		    color: white;
		    background-color: #44c5e6;
		    border: 1px solid white;
		}
		.tablethoikhoabieugv td:hover{
		    background-color: #c0e6f0;
		}
    </style>
</head>
<body>
    <br>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Chỉnh sửa thời khóa biểu của Giáo Viên</span>
    </div>
    <br>
     <div style="width:100% " class="container thoikhoabieusinhvien">
        <form action="" method="POST">
        	Mã Số Giáo Viên &emsp;
        	<input type="text" value="" name="maso" required>
            <input class="btnfindgv" value="Tìm" type="submit" name="submitfindgv">
        </form>
        <br>
        <?php
        	if(isset($_POST['submitfindgv'])){
        		$maso = $_POST['maso'];
                $_SESSION['masogiaoviendangxem'] = $maso;
        		$sql = "SELECT * FROM thoikhoabieugv234 WHERE maso='$maso'";
	            $query = mysqli_query($conn,$sql);
	            $data = mysqli_fetch_assoc($query);
	            $sql = "SELECT * FROM thoikhoabieugv567 WHERE maso='$maso'";
	            $query = mysqli_query($conn,$sql);
	            $data1 = mysqli_fetch_assoc($query);
	            $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
	            $query = mysqli_query($conn,$sql);
	            $ten = mysqli_fetch_assoc($query);
                $check = mysqli_num_rows($query);
                if($check <= 0 ){
                    echo "Mã số giáo viên không chính xác !";
                }
                else{


	            //// Start display tkb
	            echo '
	            <p>Lịch dạy của Giáo Viên '.$ten['ten'].'</p>
	            	<form action="" method="POST">
        
        <table class="tablethoikhoabieugv" style="width:100%">
            <tr>
                <th>Buổi</th>
                <th>Tiết</th>
                <th>Thứ 2</th>
                <th>Thứ 3</th>
                <th>Thứ 4</th>
                <th>Thứ 5</th>
                <th>Thứ 6</th>
                <th>Thứ 7</th>
                <th>Chủ Nhật</th>
            </tr>
            <tr>
                <th rowspan="5" class="buoi">Sáng</th>
                <th>1</th>
                <td>
                    <select class="optiontkb" name="st2t1">
                        <option value="'.$data["st2t1"].'">'.$data["st2t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t1">
                        <option value="'.$data["st3t1"].'">'.$data["st3t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t1">
                        <option value="'.$data["st4t1"].'">'.$data["st4t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t1">
                        <option value="'.$data1["st5t1"].'">'.$data1["st5t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t1">
                        <option value="'.$data1["st6t1"].'">'.$data1["st6t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t1">
                        <option value="'.$data1["st7t1"].'">'.$data1["st7t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td>
                    <select class="optiontkb" name="st2t2">
                        <option value="'.$data["st2t2"].'">'.$data["st2t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t2">
                        <option value="'.$data["st3t2"].'"> '.$data["st3t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t2">
                        <option value="'.$data["st4t2"].'">'.$data["st4t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t2">
                        <option value="'.$data1["st5t2"].'">'.$data1["st5t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t2">
                        <option value="'.$data1["st6t2"].'">'.$data1["st6t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t2">
                        <option value="'.$data1["st7t2"].'">'.$data1["st7t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td>
                    <select class="optiontkb" name="st2t3">
                        <option value="'.$data["st2t3"].'">'.$data["st2t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t3">
                        <option value="'.$data["st3t3"].'"> '.$data["st3t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t3">
                        <option value="'.$data["st4t3"].'">'.$data["st4t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t3">
                        <option value="'.$data1["st5t3"].'">'.$data1["st5t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t3">
                        <option value="'.$data1["st6t3"].'">'.$data1["st6t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t3">
                        <option value="'.$data1["st7t3"].'">'.$data1["st7t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td>
                    <select class="optiontkb" name="st2t4">
                        <option value="'.$data["st2t4"].'">'.$data["st2t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t4">
                        <option value="'.$data["st3t4"].'">'.$data["st3t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t4">
                        <option value="'.$data["st4t4"].'">'.$data["st4t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t4">
                        <option value="'.$data1["st5t4"].'">'.$data1["st5t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t4">
                        <option value="'.$data1["st6t4"].'">'.$data1["st6t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t4">
                        <option value="'.$data1["st7t4"].'">'.$data1["st7t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td>
                    <select class="optiontkb" name="st2t5">
                        <option value="'.$data["st2t5"].'">'.$data["st2t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st3t5">
                        <option value="'.$data["st3t5"].'"> '.$data["st3t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="st4t5">
                        <option value="'.$data["st4t5"].'">'.$data["st4t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st5t5">
                        <option value="'.$data1["st5t5"].'">'.$data1["st5t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="st6t5">
                        <option value="'.$data1["st6t5"].'">'.$data1["st6t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="st7t5">
                        <option value="'.$data1["st7t5"].'">'.$data1["st7t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <td style="" colspan="9"><p></p></td>
            </tr>
            <tr>
                <th rowspan="5" class="buoi">Sáng</th>
                <th>1</th>
                <td>
                    <select class="optiontkb" name="ct2t1">
                        <option value="'.$data["ct2t1"].'">'.$data["ct2t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t1">
                        <option value="'.$data["ct3t1"].'">' .$data["ct3t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t1">
                        <option value="'.$data["ct4t1"].'">'.$data["ct4t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t1">
                        <option value="'.$data1["ct5t1"].'">'.$data1["ct5t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t1">
                        <option value="'.$data1["ct6t1"].'">'.$data1["ct6t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t1">
                        <option value="'.$data1["ct7t1"].'">'.$data1["ct7t1"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>2</th>
                <td>
                    <select class="optiontkb" name="ct2t2">
                        <option value="'.$data["ct2t2"].'">'.$data["ct2t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t2">
                        <option value="'.$data["ct3t2"].'"> '.$data["ct3t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t2">
                        <option value="'.$data["ct4t2"].'">'.$data["ct4t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t2">
                        <option value="'.$data1["ct5t2"].'">'.$data1["ct5t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t2">
                        <option value="'.$data1["ct6t2"].'">'.$data1["ct6t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t2">
                        <option value="'.$data1["ct7t2"].'">'.$data1["ct7t2"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>3</th>
                <td>
                    <select class="optiontkb" name="ct2t3">
                        <option value="'.$data["ct2t3"].'">'.$data["ct2t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t3">
                        <option value="'.$data["ct3t3"].'"> '.$data["ct3t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t3">
                        <option value="'.$data["ct4t3"].'">'.$data["ct4t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t3">
                        <option value="'.$data1["ct5t3"].'">'.$data1["ct5t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t3">
                        <option value="'.$data1["ct6t3"].'">'.$data1["ct6t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t3">
                        <option value="'.$data1["ct7t3"].'">'.$data1["ct7t3"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>4</th>
                <td>
                    <select class="optiontkb" name="ct2t4">
                        <option value="'.$data["ct2t4"].'">'.$data["ct2t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t4">
                        <option value=" '.$data["ct3t4"].'"> '.$data["ct3t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t4">
                        <option value="'.$data["ct4t4"].'">'.$data["ct4t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t4">
                        <option value="'.$data1["ct5t4"].'">'.$data1["ct5t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t4">
                        <option value="'.$data1["ct6t4"].'">'.$data1["ct6t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t4">
                        <option value="'.$data1["ct7t4"].'">'.$data1["ct7t4"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>
            <tr>
                <th>5</th>
                <td>
                    <select class="optiontkb" name="ct2t5">
                        <option value="'.$data["ct2t5"].'">'.$data["ct2t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct3t5">
                        <option value="'.$data["ct3t5"].'"> '.$data["ct3t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                   
                </td>
                <td>
                    <select class="optiontkb" name="ct4t5">
                        <option value="'.$data["ct4t5"].'">'.$data["ct4t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct5t5">
                        <option value="'.$data1["ct5t5"].'">'.$data1["ct5t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    
                </td>
                <td>
                    <select class="optiontkb" name="ct6t5">
                        <option value="'.$data1["ct6t5"].'">'.$data1["ct6t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                </td>
                <td>
                    <select class="optiontkb" name="ct7t5">
                        <option value="'.$data1["ct7t5"].'">'.$data1["ct7t5"].'</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        
                        <option value=" ">Nghỉ</option>
                    </select>
                    </td>
                <td></td>
            </tr>

        </table>
        <br>
            <button class="btnfindgv" type="submit" value="'.$maso.'" name="giaovien">Lưu thông tin </button>
        </form>
	            ';
            }
        	}



        ?>

       <!-- Xu li thong tin thoi khoa bieu</!-->

       <?php
            

       		if(isset($_POST['giaovien'])){
                $maso = $_POST['giaovien'];

           			$maso = $_POST['giaovien'];
           			$st2t1 = $_POST['st2t1'];
    		        $st3t1 = $_POST['st3t1'];
    		        $st4t1 = $_POST['st4t1'];
    		        $st5t1 = $_POST['st5t1'];
    		        $st6t1 = $_POST['st6t1'];
    		        $st7t1 = $_POST['st7t1'];

    		        $st2t2 = $_POST['st2t2'];
    		        $st3t2 = $_POST['st3t2'];
    		        $st4t2 = $_POST['st4t2'];
    		        $st5t2 = $_POST['st5t2'];
    		        $st6t2 = $_POST['st6t2'];
    		        $st7t2 = $_POST['st7t2'];

    		        $st2t3 = $_POST['st2t3'];
    		        $st3t3 = $_POST['st3t3'];
    		        $st4t3 = $_POST['st4t3'];
    		        $st5t3 = $_POST['st5t3'];
    		        $st6t3 = $_POST['st6t3'];
    		        $st7t3 = $_POST['st7t3'];

    		        $st2t4 = $_POST['st2t4'];
    		        $st3t4 = $_POST['st3t4'];
    		        $st4t4 = $_POST['st4t4'];
    		        $st5t4 = $_POST['st5t4'];
    		        $st6t4 = $_POST['st6t4'];
    		        $st7t4 = $_POST['st7t4'];
    		        
    		        $st2t5 = $_POST['st2t5'];
    		        $st3t5 = $_POST['st3t5'];
    		        $st4t5 = $_POST['st4t5'];
    		        $st5t5 = $_POST['st5t5'];
    		        $st6t5 = $_POST['st6t5'];
    		        $st7t5 = $_POST['st7t5'];

    		        $ct2t1 = $_POST['ct2t1'];
    		        $ct3t1 = $_POST['ct3t1'];
    		        $ct4t1 = $_POST['ct4t1'];
    		        $ct5t1 = $_POST['ct5t1'];
    		        $ct6t1 = $_POST['ct6t1'];
    		        $ct7t1 = $_POST['ct7t1'];

    		        $ct2t2 = $_POST['ct2t2'];
    		        $ct3t2 = $_POST['ct3t2'];
    		        $ct4t2 = $_POST['ct4t2'];
    		        $ct5t2 = $_POST['ct5t2'];
    		        $ct6t2 = $_POST['ct6t2'];
    		        $ct7t2 = $_POST['ct7t2'];

    		        $ct2t3 = $_POST['ct2t3'];
    		        $ct3t3 = $_POST['ct3t3'];
    		        $ct4t3 = $_POST['ct4t3'];
    		        $ct5t3 = $_POST['ct5t3'];
    		        $ct6t3 = $_POST['ct6t3'];
    		        $ct7t3 = $_POST['ct7t3'];

    		        $ct2t4 = $_POST['ct2t4'];
    		        $ct3t4 = $_POST['ct3t4'];
    		        $ct4t4 = $_POST['ct4t4'];
    		        $ct5t4 = $_POST['ct5t4'];
    		        $ct6t4 = $_POST['ct6t4'];
    		        $ct7t4 = $_POST['ct7t4'];
    		        
    		        $ct2t5 = $_POST['ct2t5'];
    		        $ct3t5 = $_POST['ct3t5'];
    		        $ct4t5 = $_POST['ct4t5'];
    		        $ct5t5 = $_POST['ct5t5'];
    		        $ct6t5 = $_POST['ct6t5'];
    		        $ct7t5 = $_POST['ct7t5'];

    		        $sql = "UPDATE thoikhoabieugv234 SET
    		        st2t1 ='$st2t1' , st3t1='$st3t1' ,st4t1 = '$st4t1',
    		        st2t2 ='$st2t2' , st3t2='$st3t2' ,st4t2 = '$st4t2',
    		        st2t3 ='$st2t3' , st3t3='$st3t3' ,st4t3 = '$st4t3',
    		        st2t4 ='$st2t4' , st3t4='$st3t4' ,st4t4 = '$st4t4',
    		        st2t5 ='$st2t5' , st3t5='$st3t5' ,st4t5 = '$st4t5',
    		        ct2t1 ='$ct2t1' , ct3t1='$ct3t1' ,ct4t1 = '$ct4t1',
    		        ct2t2 ='$ct2t2' , ct3t2='$ct3t2' ,ct4t2 = '$ct4t2',
    		        ct2t3 ='$ct2t3' , ct3t3='$ct3t3' ,ct4t3 = '$ct4t3',
    		        ct2t4 ='$ct2t4' , ct3t4='$ct3t4' ,ct4t4 = '$ct4t4',
    		        ct2t5 ='$ct2t5' , ct3t5='$ct3t5' ,ct4t5 = '$ct4t5'
    		        WHERE maso='$maso'";
    		        $query = mysqli_query($conn,$sql);

    		        $sql = "UPDATE thoikhoabieugv567 SET
    		        st5t1 ='$st5t1' , st6t1='$st6t1' ,st7t1 = '$st7t1',
    		        st5t2 ='$st5t2' , st6t2='$st6t2' ,st7t2 = '$st7t2',
    		        st5t3 ='$st5t3' , st6t3='$st6t3' ,st7t3 = '$st7t3',
    		        st5t4 ='$st5t4' , st6t4='$st6t4' ,st7t4 = '$st7t4',
    		        st5t5 ='$st5t5' , st6t5='$st6t5' ,st7t5 = '$st7t5',
    		        ct5t1 ='$ct5t1' , ct6t1='$ct6t1' ,ct7t1 = '$ct7t1',
    		        ct5t2 ='$ct5t2' , ct6t2='$ct6t2' ,ct7t2 = '$ct7t2',
    		        ct5t3 ='$ct5t3' , ct6t3='$ct6t3' ,ct7t3 = '$ct7t3',
    		        ct5t4 ='$ct5t4' , ct6t4='$ct6t4' ,ct7t4 = '$ct7t4',
    		        ct5t5 ='$ct5t5' , ct6t5='$ct6t5' ,ct7t5 = '$ct7t5'
    		        WHERE maso='$maso'";
    		        $query = mysqli_query($conn,$sql);
    		        echo '<p style="color:green;font-weight:900 ">Cập nhật thành công</p>';
       		   }
            else{
                
            
            }

        


       ?>
    </div>
    <br>

</body>
</html>