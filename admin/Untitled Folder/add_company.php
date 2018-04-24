<?php
session_start();

include_once("../includes/connection.php");
if(isset($_POST['comp_add'])) {
	$c_id = mysqli_real_escape_string($db,$_POST['c_id']);
	$c_pass = mysqli_real_escape_string($db,$_POST['c_pass']);
	$sql = "INSERT INTO company_login values('$c_id','$c_pass')";
	$db->query($sql);
	header("location: company.php");
}
