<?php
$servername = "localhost";
$username = "root";
$password = "sondt1610";
$dbname = "magento_training";
$con = mysqli_connect($servername,$username,$password,$dbname); 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}
	$msc = microtime(true);
	$sql = "SELECT SQL_NO_CACHE * FROM user WHERE name='Full_name_800'";
	if(mysqli_query($con,$sql)){
		$msc = microtime(true)-$msc;
		echo "Thoi gian thuc hien: ";
		echo $msc . ' s'."<br/>"; // in seconds
	}else
	{
		echo"Error".mysqli_error($con);
	}

	$msc = microtime(true);
	$sql_index = "SELECT SQL_NO_CACHE * FROM user_index WHERE name='Full_name_800'";
	if(mysqli_query($con,$sql)){
		$msc = microtime(true)-$msc;
		echo "Thoi gian thuc hien khi co index: ";
		echo $msc . ' s'."<br/>"; // in seconds
	}else
	{
		echo"Error".mysqli_error($con);
	}
 
?>