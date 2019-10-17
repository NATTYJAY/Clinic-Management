<?php session_start();
 require"../db/db_con.php";

 	if (isset($_POST['up']) && $_POST['up'] == "now")
{
	$__id = $_POST['reid'];
	$query = "SELECT * FROM patients WHERE id = '".$__id."' ";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
}
?>