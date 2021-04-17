<?php
    $dbhost = "localhost";
    $dbuser= "root";
    $dbpass ="";
    $dbname = "quanlytruonghoc";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn){
        mysqli_query($conn,"SET NAME 'utf8'");
    }
    else {
        echo "Bạn đã kêt nối thất bại".mysqli_connect_error();
    }
	
	
	
	
	function executeResult($sql) {
    //create connection toi database
    $conn = onpen_database();
    //query
    $resultset = mysqli_query($conn,$sql);
    $list      = [];
    while ($row = mysqli_fetch_array($resultset,1)) {
        $list[] = $row;
    }

    //dong connection
    mysqli_close($conn);

    return $list;
}
?>