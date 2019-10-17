<?php session_start();
 require"../home/db/db_con.php";
 require"./set.php";
 	if(isset($_POST['up']) && $_POST['up'] == "now"){
 		$email = $_POST['email'];
 		$password = $_POST['pass'];
 		// $name_of_doctor = $fname."----".$lname;
 		if(set($email)==false){
 			$check = "SELECT * FROM admin WHERE email = '".$email."' AND password = '$password' ";
 				$check_sql = mysqli_query($link,$check);
 				if($check_sql){
 					if(mysqli_num_rows($check_sql)>=1){
 					echo 5;
 					$rows = mysqli_fetch_assoc($check_sql);
 					$_SESSION['email'] = $rows['email'];
 					$_SESSION['id']   = $rows['id'];
 				    }else{
 				    	echo 2;
 				    }
 				}
 				else{
 		           echo 1;
 			    }
 		}else if(set($email)==true){
 			echo 8;
 		}


 	}else{
 		echo 4;
 	}


 			   

?>