<?php
 require"../home/db/db_con.php";
 	
 	function set($email){
 		global $link;
 		if(isset($_SESSION['email'])==$email){
 			   return true;
 		}else{
 			return false;
 		}
 	}

 	

?>