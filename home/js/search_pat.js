$(document).ready(function(){

searchID = $(".idPat");

check 	= $("#checknow");

kill();
})

function kill(){
	check.on('click', function(){
		pat_auto_id = searchID.val();
		eurl = "total_patient_view.php?id="+pat_auto_id;
        location.assign(eurl);
	});

}