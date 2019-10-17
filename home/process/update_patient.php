<?php session_start();
 require"../db/db_con.php";
 require"../db/functions.php";
 	if(isset($_POST['joe']) && $_POST['joe'] == "boy"){
 		$fname = clean(ucfirst($_POST['patient_fname']));
 		$mname = clean(ucfirst($_POST['pmname']));
 		$lname = clean(ucfirst($_POST['plname']));
 		$blood = clean($_POST['pblood']);
 		$age   = clean($_POST['page']);
 		$telo1 = clean($_POST['telo1']);
 		$telo2 = clean($_POST['telo2']);
 		$nkoname =  clean(ucfirst($_POST['nkoname']));
 		$nkolname = clean(ucfirst($_POST['nkolname']));
 		$ntel = clean($_POST['ntel']);
 		$psex = clean($_POST['psex']);
 		$pmessage =  clean(ucfirst($_POST['pmessage']));
 		$date_created = $_POST['date'];
 		$idd = $_POST['idd'];
 		$pat_ID  = $_POST['epatid'];
 		
 	$sql_code = "UPDATE patients SET patient_ID = '$pat_ID',
 									 fname = '$fname',
 									 mname = '$mname',
 									 lname = '$lname',
 									 address = '$pmessage',
 									 age = '$age',
 									 date_created = '$date_created',
 									 phone_one = '$telo1',
 									 phone_two = '$telo2',
 									 Next_of_kin_FName = '$nkoname',
 									 Next_of_kin_LName = '$nkolname',
 									 Nok_phone = '$ntel',
 									 blood_group = '$blood',
 									 gender = '$psex' 

 									 WHERE id = '$idd' AND patient_ID = '$pat_ID'


 									 ";
 			$query = mysqli_query($link,$sql_code);
 				if($query){
 				echo 1;
 				}else{
 					echo 2;
 				}
 				
 	}else{
 		echo 4;
 	}

?>