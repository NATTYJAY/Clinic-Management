$(document).ready(function(){

patient_fname = $("#pfname");
pmname		  = $("#pmname");
plname		  = $("#plname");
pblood		  = $("#pblood");
page		= $("#page");
telo1		= $("#telo1");
telo2		= $("#telo2");
nkoname		= $("#nkoname");
nkolname	= $("#nkolname");
ntel		= $("#ntel");
psex		= $("#psex");
pmessage	= $("#pmessage"); 

bTx_patient = $("#btn_patient");

/*Update patient record here*/

efname		=$("#efname");
emname		=$("#emname");
elname		=$("#elname");
ebg			=$("#ebg");
eage		=$("#eage");
ephone1		=$("#ephone1");
ephone2		=$("#ephone2");
efirst_name	=$("#efirst_name");
elast_name	=$("#elast_name");
enlast_name	=$("#enlast_name");
gen 		=$("#gen");
emessage	=$("#emessage");
idrr		=$("#idrr");
dte 		=$("#dte");

ebtX_btn	=$("#ebtX_btn");

error_pati  =$('#error_pati');



/*Error messages is here -----*/
patient_fname_e = $("#patient_fname_e");
pmname_e		= $("#pmname_e");
plname_e		= $("#plname_e");
pblood_e		= $("#pblood_e");
page_e			= $("#page_er");
telo1_e			= $("#telo1_e");
telo2_e     	= $("#telo2_e");
nkoname_e		= $("#nkonam_e");
nkolname_e		= $("#nkolnam_e");
ntel_e			= $("#ntel_e");
psex_e			= $("#psex_e");
pmessage_e		= $("#pmessage_e");



show_messagess  = $("#error_patient");


/*Flags*/
x1 = y1 = x2 = y2 = x3 = y3 = x4 = y4 = x5 = y5 = x6 = y6 = x7 = y7 = x8 = y8 = x9 = y9 = false;

yes1 = false;


add_p();
up();
add_treat();
viewp()
edit_pat();
delete_pat();
final_delete_pat_();


})



function add_p(){
	bTx_patient.on('click',function(){
		ajax_function_();
	})
}

function up(){
	ebtX_btn.on('click', function(){
		update_pat();
	})
}



function ajax_function_(){
			send_data = new FormData();
			send_data.append("joe", "boy");
			send_data.append("patient_fname", patient_fname.val());
			send_data.append("pmname", pmname.val());
			send_data.append("plname", plname.val());
			send_data.append("pblood", pblood.val());
			send_data.append("page", page.val());
			send_data.append("telo1", telo1.val());
			send_data.append("telo2", telo2.val());
			send_data.append("nkoname", nkoname.val());
			send_data.append("nkolname", nkolname.val());
			send_data.append("ntel", ntel.val());
			send_data.append("psex", psex.val());
			send_data.append("pmessage", pmessage.val());

			
		 $.ajax({
                          url: 'process/insert_patient.php',
                          type: 'POST',
                          data: send_data,
                          processData: false,
              			  contentType: false,
			              cache:false,
                           success: function(read){ 
                      		if(read == 1){
                      			yes1 = true;
                      			show_messagess.addClass("alert alert-success");
                      			show_messagess.html("Data inserted Successfully");
                      			if(yes1==true){
                      					setTimeout(function(){$("#add_patient").modal("hide")}, 100000);
                      					$("#myform10").trigger("reset");
                      				}
                      				location.reload();
                      		}if(read == 5){
                      			yes1 = true;
                      			show_messagess.addClass("alert alert-danger");
                      			show_messagess.html("User Already exits");
                      			// if(yes1==true){
                      			// 		setTimeout(function(){$("#add_patient").modal("hide")}, 100000);
                      			// 		$("#myform10").trigger("reset");
                      			// 		location.reload();
                      			// 	}
                      			// location.reload();
                      		}else if(read == 2){
                      			show_messagess.addClass("alert alert-danger");
                      			show_messagess.html("Error ! Data could not be inserted");
                      			// $("#myform10").trigger("reset");
                      		}else if(read == 4){
                      			show_messagess.addClass("alert alert-danger");
                      			show_messagess.html("Error ! Not set");
                      			// $("#myform10").trigger("reset");
                      		}
                      }
                    })
}
function add_treat(){
 	$(document).on('click', '.treatment', function(){
		 id_e = $(this).attr("id");
		 eurl = "add_treat.php?id="+id_e;
		location.assign(eurl);
		 });
}
function edit_pat(){
 	$(document).on('click', '.edit_p', function(){
		 id = $(this).attr("id");

		 	$.ajax({
				url:'process/edit_patient.php',
				method:'POST',
				data:{
					up  : "now",
					reid : id
				},
				dataType:"json",
				success: function(geit){
					efname.val(geit.fname);
					emname.val(geit.mname);
					elname.val(geit.lname);
					ebg.val(geit.blood_group);
					eage.val(geit.age);
					ephone1.val(geit.phone_one);
					ephone2.val(geit.phone_two);
					efirst_name.val(geit.Next_of_kin_FName);
					elast_name.val(geit.Next_of_kin_LName);
					enlast_name.val(geit.Nok_phone);
					gen.val(geit.gender);
					emessage.val(geit.address);
					dte.val(geit.date_created);
					idrr.val(geit.id);
					$("#edpat").val(geit.patient_ID);
					$('#edit_patient').modal('show').fadeIn('fast');
				}
				});
		 });
}

function update_pat(){
		send_data = new FormData();
			send_data.append("joe", "boy");
			send_data.append("patient_fname", efname.val());
			send_data.append("pmname", emname.val());
			send_data.append("plname", emname.val());
			send_data.append("pblood", ebg.val());
			send_data.append("page", eage.val());
			send_data.append("telo1", ephone1.val());
			send_data.append("telo2", ephone1.val());
			send_data.append("nkoname", efirst_name.val());
			send_data.append("nkolname", elast_name.val());
			send_data.append("ntel", enlast_name.val());
			send_data.append("psex", gen.val());
			send_data.append("pmessage", emessage.val());
			send_data.append("idd", idrr.val());
			send_data.append("date", dte.val());
			send_data.append("epatid", $("#edpat").val());
		 $.ajax({
                          url: 'process/update_patient.php',
                          type: 'POST',
                          data: send_data,
                          processData: false,
              			  contentType: false,
			              cache:false,
                           success: function(read){ 
                      		if(read == 1){
                      			yes1 = true;
                      			error_pati.addClass("alert alert-success");
                      			error_pati.html("Data updated Successfully");
                      			if(yes1==true){
                      					setTimeout(function(){$("#add_patient").modal("hide")}, 100000);
                      					$("#myform10").trigger("reset");
                      				}
                      				location.reload();
                      		}else if(read == 2){
                      			error_pati.addClass("alert alert-danger");
                      			error_pati.html("Error ! Data could not be updated");
                      			// $("#myform10").trigger("reset");
                      		}else if(read == 4){
                      			error_pati.addClass("alert alert-danger");
                      			error_pati.html("Error ! Not set");
                      			// $("#myform10").trigger("reset");
                      		}
                      }
                    })
}
function viewp(){
	$(document).on('click', '.view_p', function(){
		pat_idr = $(this).attr("id");
		// patient_id = pati_id.attr("value");
		url = "view_patient.php?id="+pat_idr;
		location.assign(url);
	});
}
function delete_pat(){
 	$(document).on('click', '.delete_pati', function(){
		 adel_id = $(this).attr("id");
		 	$.ajax({
				url:'process/delete_pat.php',
				method:'POST',
				data:{
					deleted_user  : "yesget",
					dlid : adel_id
				},
				dataType:"json",
				success: function(receive){
					$("#deletrr_pat").html(receive.fname+'----'+receive.mname+'----'+receive.lname);
					// deletr_user_phone.html(receive.user_mobile_number);
					$("#delet_id_pat").val(receive.id);
					$("#pat_delete").modal('show');
				}
			});
	});
}
function final_delete_pat_(){
	$("#btn_deleted_pat").on('click',function(){
		delete_wipe_pat_();

	})
}
function delete_wipe_pat_(){
		wipee_id_ = $("#delet_id_pat").val();

					$.ajax({
				url:'process/delete_all_pat.php',
				method:'POST',
				data:{
					finish_  : "go_",
					wipeid_  : wipee_id_
				},
				dataType:"html",
				success: function(go){
					if(go == 1){
                      			yes1 = true;
                      			$("#delete_error_pat").addClass("alert alert-success");
                      			$("#delete_error_pat").html("Data deleted Successfully");
                      			if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      			location.reload();
                    }else if(go == 2){
                    	yes1 = true;
                      			$("#delete_error_pat").addClass("alert alert-danger");
                      			$("#delete_error_pat").html("Error ! Data could not be deleted");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 3){
                    	yes1 = true;
                      			$("#delete_error_pat").addClass("alert alert-danger");
                      			$("#delete_error_pat").html("Error ! Invalid selection");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 4){
                    	yes1 = true;
                      			$("#delete_error_pat").addClass("alert alert-danger");
                      			$("#delete_error_pat").html("Error ! Data is not set");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else{
                      			yes1 = true;
                      			$("#delete_error_pat").addClass("alert alert-danger");
                      			$("#delete_error_pat").html("Something went wrong");
                      			if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      	}
				}
			});
}
