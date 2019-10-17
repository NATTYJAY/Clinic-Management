<?php session_start();
 require"../db/db_con.php";
 require"../db/functions.php";


if (isset($_POST['joe']) && $_POST['joe'] == "girl"){

		$doctor = $_POST['edit_doctor'];
 		$edit_amt = $_POST['edit_amt'];
 		$edit_treaty = clean(ucfirst($_POST['edit_treaty']));
 		$esym         = $_POST['esym'];
 		$cost        = $_POST['cost'];
 		$idm         = $_POST['id'];
 		$edit_date   = $_POST['edit_date'];
 		$edit_idr	 = $_POST['edit_idr'];

 		$new_balance = $cost - $edit_amt;
			$queri   = "UPDATE treatments SET           treatment_name      = '$edit_treaty',
														date_of_treatement  = '$edit_date',
														Cost 			    = '$cost',
														symtoms 			= '$esym',
														Amount_paid		    = '$edit_amt',
														Amount_balance      = '$new_balance',
														doctor              = '$doctor',
														patient_ID		    = '$idm'
					WHERE id='$edit_idr' AND patient_ID = '$idm'

														 ";

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