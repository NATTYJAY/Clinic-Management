<?php session_start();
 include"../db/db_con.php";
if (isset($_POST['finish_']) && $_POST['finish_'] == "go_"){
	$id_ = 	$_POST['wipeid_'];
	$patIDtreat = $_POST['patIDtreat'];
		if(isset($id_)){
			$sql = "DELETE FROM treatments WHERE id= '".$id_."' AND patient_ID = '".$patIDtreat."' ";
			$query = mysqli_query($link,$sql);
			if($query){
				echo 1;
			}else{
				echo 2;
			}
		}else{
			echo 3;
		}
	
}else{
	echo 4;
}


?>