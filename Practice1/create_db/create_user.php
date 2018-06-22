<?php
$servername = "localhost";
$username = "root";
$password = "sondt1610";
$dbname = "magento_training";
$con = mysqli_connect($servername,$username,$password,$dbname); 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}
$data = '';
for($i = 1; $i <= 1000; $i++) {
	$data.="('Full_name_".$i."', '".rand(1,2)."'),";
}
$data = substr($data, 0, strlen($data)-1);

	$sql = "INSERT INTO user"."(`name`, `phone`) values" . $data;
	$msc = microtime(true);
	if(mysqli_query($con,$sql)){
		$msc = microtime(true)-$msc;
		echo "Thoi gian thuc hien: ";
		echo $msc . ' s'."<br/>"; // in seconds
	}else
	{
		echo"Error".mysqli_error($con);
	}

	$sql_index = "INSERT INTO user_index"."(`name`, `phone`) values" . $data;
	$msc = microtime(true);
	if(mysqli_query($con,$sql_index)){
		$msc = microtime(true)-$msc;
		echo "Thoi gian thuc hien co index: ";
		echo $msc . ' s'."<br/>"; // in seconds
	}else
	{
		echo"Error".mysqli_error($con);
	}
 
?>