<?php session_start();
		include"../db/db_con.php";
 		require"../db/functions.php";

		if(isset($_POST['joe']) && $_POST['joe'] == "boy"){
			$patID      =  $_POST['patID'];
			$treatment  = clean(ucfirst($_POST['treatment']));
			$sym        = clean($_POST['sym']);
			$cost		= clean($_POST['costy']);
			$amt_paid	= clean($_POST['amt_paid']);
			$doctor		= clean($_POST['doctor']);
			$date       = date("m/d/Y");
			$balance = $cost - $amt_paid;
				if(isset($patID)){
					$query = "INSERT INTO treatments SET treatment_name = '".$treatment."',
														symtoms 		= '".$sym."',
														date_of_treatement = '".$date."',
														Cost 			= '".$cost."',
														Amount_paid		= '".$amt_paid."',
														Amount_balance = '".$balance."',
														doctor         = '".$doctor."',
														patient_ID		= '".$patID."'


					";
					$result = mysqli_query($link,$query);
						if($result){
							echo 1;
						}else{
							echo 2;
						}
				}



		}





?>