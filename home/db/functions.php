<?php
function getNumber($len = 8) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}


function userID($email){
		global $link;
		$s = "SELECT id FROM users WHERE email = '{$email}'";
		$sq = mysqli_query($link, $s);
		if($sq){
			$ex = mysqli_fetch_assoc($sq);
			$val = $ex['id'];
			return $val;
		}
	}

	function clean($data){
	global $link;
	    $data = stripslashes($data);
        $data = htmlentities( $data, ENT_QUOTES, 'utf-8' );
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = mysqli_real_escape_string($link, $data);

        return $data;

}

	

?>