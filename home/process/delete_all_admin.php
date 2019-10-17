<?php session_start();
 include"../db/db_con.php";
if (isset($_POST['finish_']) && $_POST['finish_'] == "go_"){
	$id_ = 	$_POST['wipeid_'];
		if(isset($id_)){
			$sql = "DELETE FROM admin WHERE id= '".$id_."' ";
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