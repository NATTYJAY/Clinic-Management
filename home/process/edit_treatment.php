<?php session_start();
 require"../db/db_con.php";

 	if (isset($_POST['up']) && $_POST['up'] == "now")
{
	$patid = $_POST['eid'];
	$sqi = "SELECT t1.* FROM treatments AS t1 WHERE t1.id = '".$patid."'";
	$result = mysqli_query($link,$sqi);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
	
}

	?>