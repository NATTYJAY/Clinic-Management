<?php session_start();
 include"../db/db_con.php";
if (isset($_POST['finish_']) && $_POST['finish_'] == "go_"){
	$id_ = 	$_POST['wipeid_'];
		if(isset($id_)){
	$query_treat = "SELECT t1.*, t2.* FROM patients AS t1, treatments AS t2 WHERE t1.id = '$id_' AND t1.patient_ID = t2.patient_ID";
			$no = mysqli_query($link,$query_treat);
			if(mysqli_num_rows($no)>=1){
			$sql = "DELETE t1.*, t2.* FROM patients AS t1, treatments AS t2 WHERE t1.id = '$id_' AND t1.patient_ID = t2.patient_ID";
			$query = mysqli_query($link,$sql);
				if($query){
					echo 1;
				}else{
					echo 2;
				}
			}else{
				$mena = "DELETE t1.* FROM patients AS t1 WHERE t1.id = '$id_'";
			    $query22 = mysqli_query($link,$mena);
			    if($query22){
			    	echo 1;
			    }else{
			    	echo 2;
			    }
			}

		}else{
			echo 3;
		}
	
}else{
	echo 4;
}


?>