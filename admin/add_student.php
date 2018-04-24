<?php
session_start();

include_once("../includes/connection.php");
if(isset($_POST['stu_add'])) {
	$s_id = mysqli_real_escape_string($db,$_POST['s_id']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$sql1 = "select * from student_login where s_id='$s_id'";
	$results = $db->query($sql1);
	if(mysqli_num_rows($results) == 1)
		header("location: students.php");
	$sql = "INSERT INTO student_login values('$s_id','$password',0)";
	$db->query($sql);
	header("location: students.php");
}
