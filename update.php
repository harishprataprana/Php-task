<?php
include_once 'db.php';

$topic = $_POST['topic'];
$words = $_POST['words'];
$info = $_POST['info'];

$todaydate = date("Y-m-d");
$datetime = date_create($todaydate);
$datetime->modify('+1 day');
$tomorrow =$datetime->format('Y-m-d');

$arrdate = $todaydate;

while(true){
	$result = mysqli_query($con, "SELECT SUM(words) AS total FROM harish where arrdate='$todaydate' ");
	echo(mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$total = $row['total'];
	if(empty($total) || $total+$words<=1000){
		$q = mysqli_query($con, "INSERT INTO harish VALUES(NULL,'$topic','$words','$info','$arrdate','$tomorrow')");
		echo(mysqli_error($con));
		break;
	}else{
		$todaydate = $tomorrow;
		$datetime = date_create($todaydate);
		$datetime->modify('+1 day');
		$tomorrow =$datetime->format('Y-m-d');	

	}
}


        header("location:index.php");

?>
