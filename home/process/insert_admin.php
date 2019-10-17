<?php session_start();
 require"../db/db_con.php";
 require"../db/functions.php";

 	if(isset($_POST['joe']) && $_POST['joe'] == "boy"){
 		$fname = clean(ucfirst($_POST['fname']));
 		$lname = clean(ucfirst($_POST['lname']));
 		$phone = clean(ucfirst($_POST['phone']));
 		$email = clean(strtolower($_POST['email']));
 		$password = clean($_POST['password']);
 		// $name_of_doctor = $fname."----".$lname;
 			$check = "SELECT * FROM admin WHERE email = '".$email."' ";
 				$check_sql = mysqli_query($link,$check);
 				if(mysqli_num_rows($check_sql)>=1){
 					echo 5;
 				}else{
 		$sql_code = "INSERT INTO admin(fname,lname,phone,email,password) VALUES('".$fname."','".$lname."','".$phone."','".$email."','".$password."')";
 			$query = mysqli_query($link,$sql_code);
 				if($query){
 				echo 1;
 				}else{
 					echo 2;
 				}
 			}
 				
 	}else{
 		echo 4;
 	}

?>