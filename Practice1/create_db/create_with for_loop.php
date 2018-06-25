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
for($i = 1; $i <= 1000; $i++) {
	$sql = "INSERT INTO user"."(`name`, `phone`) values('Full_name_".$i."', '".rand(1,2)."')";
	if(!(mysqli_query($con,$sql))){
		echo "Error".mysqli_error($con);
	}
}
$msc = microtime(true)-$msc;
echo "Thoi gian thuc hien: ";
echo $msc . ' s'."<br/>"; // in seconds
?>