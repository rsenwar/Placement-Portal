<?php
session_start();

include_once("../includes/connection.php");
if(isset($_POST['action'])) {
	$s_id = mysqli_real_escape_string($db,$_POST['action']);
	$sql = "delete from student_login where s_id = '$s_id'";
	$db->query($sql);
	header("location: students.php");
}
