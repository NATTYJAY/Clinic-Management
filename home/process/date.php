
<?php session_start();
      // include"../footer_date.php"; 
      include"../db/db_con.php";
        ?>
<?php

if(isset($_POST['isset']) && $_POST['isset'] == "check"){
    $search_text = $_POST['search_text'];
    $return = array();
    $hmm = array()
    $result = '[{"error":"nodata"}]';
$query = "SELECT treatments.*,patients.fname,patients.lname,patients.patient_ID AS patID FROM treatments INNER JOIN patients ON patients.patient_ID = treatments.patient_ID WHERE treatments.date_of_treatement = '$search_text' ORDER by treatments.id DESC";
          $compare = mysqli_query($link,$query);
          if($compare){
            if(mysqli_num_rows($compare)>=1){
                $okay = 'true';
                while($rows=mysqli_fetch_assoc($compare)){
                    $yp = $rows['id'];
                    $name = $rows['treatment_name'];
                    $cost = $rows['Cost'];

                    $re = array('id' => $yp,
                                  '$tname' => $name,
                                  '$tcost' => $cost
                                     );
                    array_push($return, $re);
                }
                echo json_encode(array("res"=>$return));
            }else{
              $okay = 'false';
            }
            $hmm = array('read' => $okay);
            echo json_encode($hmm);
            
          }
}
          // else{
          //   echo "Error occur. please try again later";
          // }

          // $ok = "SELECT count($yp) AS countID FROM treatments";
          // $count = mysqli_query($link,$ok);
          //   if($count){
          //    $pp = mysqli_fetch_assoc($count);
          //    $final = $pp['countID'];
          //    echo $final;
          //   }





?>