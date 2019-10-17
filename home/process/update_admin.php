<?php session_start();
 require"../db/db_con.php";
 require"../db/functions.php";


if (isset($_POST['joe']) && $_POST['joe'] == "girl"){

		$fname = clean(ucfirst($_POST['fname']));
 		$lname = clean(ucfirst($_POST['lname']));
 		$email = clean(strtolower($_POST['email']));
 		$tel1 =  clean($_POST['ttel1']);
 		$password = clean($_POST['password']);
 		$id = $_POST['id'];

			$queri = "UPDATE admin SET fname   ='$fname', 
							 		   lname    		='$lname',
							 		   phone 		='$tel1',
							 		   email   			='$email',
							 		   password 		    ='$password'
					WHERE id='".$id."' ";
			$sqli = mysqli_query($link,$queri);
				if($sqli){
					echo 1;
				}else{
					echo 2;
				}
		
}else{
	echo 4;
}


?>