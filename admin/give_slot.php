<?php
session_start();
require("../includes/connection.php");
if (isset($_POST["give_slot"])){
	list($s_id, $j_id) = explode('.', $_POST['give_slot']);
	$st_time = mysqli_real_escape_string($db,$_POST['st_time']);
	$en_time = mysqli_real_escape_string($db,$_POST['end_time']);
	$room = mysqli_real_escape_string($db,$_POST['room']);
	$j_id = mysqli_real_escape_string($db,$j_id);
	$s_id = mysqli_real_escape_string($db,$s_id);//echo $s_id.$j_id.$room.$st_time.$en_time;
	$sql = "select * from slots where s_id='$s_id' and j_id='$j_id'";
	$results = $db->query($sql);
	if(mysqli_num_rows($results) == 1) {
		$sql = "update slots set st_time = '$st_time',end_time = '$en_time',room_no = '$room' where s_id = '$s_id' and j_id = '$j_id'";	
	$db->query($sql);
	}
	else {
	$sql = "insert into slots values('$s_id','$j_id','$st_time','$en_time','$room')";
	$db->query($sql);
	}
	header('location: home.php');
}
