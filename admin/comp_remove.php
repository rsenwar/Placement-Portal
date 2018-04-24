<?php
session_start();

include_once("../includes/connection.php");
if(isset($_POST['action'])) {
	$c_id = mysqli_real_escape_string($db,$_POST['action']);
	$sql = "delete from company_login where c_id = '$c_id'";
	$db->query($sql);
	header("location: company.php");
}
