<?php
session_start();
require("../includes/connection.php");
if (isset($_POST["upd_status"])){
	$s_id = $_POST['upd_status'];
	$p1 = mysqli_real_escape_string($db,$_POST['st_time']);
	$p2 = mysqli_real_escape_string($db,$_POST['end_time']);
	
	$sql = "update student_info set p1='$p1',p2='$p2' where s_id='$s_id'";
	$results = $db->query($sql);
	header('location: home.php');
}
