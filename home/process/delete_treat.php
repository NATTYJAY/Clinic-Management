<?php session_start();
 require"../db/db_con.php";
if (isset($_POST['deleted_user']) && $_POST['deleted_user'] == "yesget"){
	$id     = 	$_POST['dlid'];
	$patid	=   $_POST['patid'];
	$query = "SELECT * FROM treatments WHERE id = '".$id."' AND patient_ID = '".$patid."' ";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
}


?>