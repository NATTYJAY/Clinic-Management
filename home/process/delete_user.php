<?php session_start();
 require"../db/db_con.php";

if (isset($_POST['deleted_user']) && $_POST['deleted_user'] == "yesget"){
	$id   = 	$_POST['dlid'];
	$query = "SELECT * FROM admin WHERE id = '".$id."' ";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
}


?>