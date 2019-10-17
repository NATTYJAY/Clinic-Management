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
 		$pmessage =  ucfirst($_POST['pmessage']);
 		$date_created = date("m/d/Y H:i:s");
 		$pat_ID = getNumber();
 		
 			$check = "SELECT * FROM patients WHERE patient_ID = '".$pat_ID."' ";
 				$check_sql = mysqli_query($link,$check);
 				if(mysqli_num_rows($check_sql)>=1){
 					echo 5;
 				}else{
 	$sql_code = "INSERT INTO patients(patient_ID,fname,mname,lname,address,age,date_created,phone_one,phone_two,Next_of_kin_FName,Next_of_kin_LName,Nok_phone,blood_group,gender) VALUES('$pat_ID','$fname','$mname','$lname','$pmessage','$age','$date_created','$telo1','$telo2','$nkoname','$nkolname','$ntel','$blood','$psex')";
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