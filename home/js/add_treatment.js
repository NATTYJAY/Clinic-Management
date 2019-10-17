$(document).ready(function(){
pat_ID 			=$("#pati_ID");
treatment_case	=$("#treatment_case");
costy			=$("#costy");
amt_paid		=$("#amt_paid");
doctor			=$("#doctor");
display_message =$("#display_message"); 
btX_btn			=$("#btX_btn");
id_pati			 =$("#id_pati");
pati_id          =$("#pati_id");
click_view      = $(".view_particular");
viewAll			=$(".view_all");
delete_treat	=$(".delete_treat");
Btx_editNow		=$("#editNow");
sym           =$('#sym');
/*Upd;ate now*/
edit_pat    =$("#edit_pat");
esym        = $('#esym');
edit_cost	=$("#edit_cost");
edit_treaty  =$("#edit_treat");
edit_amt    =$("#edit_amt");
edit_doctor	=$("#edit_doctor");
edit_idr		= $("#edit_id");
edit_date	=$("#edit_date");
/*Delete modal oooo details*/
modal_treat = $("#delete_treatment");
error_treat	=$("#delete_error_treat");
details		=$("#deletrr_treat");
delet_id_treat	=$("#delet_id_treat");
delet_patIDtreat=$("#delet_patIDtreat");
btn_deleted_treat	=$("#btn_deleted_treat");
/*Error messages goes here now*/
treatment_case_e =$("#treatment_case_e");
costy_e 		= $("#costy_e");
amt_paid_e		= $("#amt_paid_e");
doctor_e		= $("#doctor_e");
/*Error messages*/
error_edit 		= $("#error_edit");
add_treat();
send_now();
edit_treat();
overall();
final_delete_treat_();
view();
delete_t();
x1 = false;
yes11 = false;
no11 = false;
})
function add_treat(){
 	$(document).on('click', '.add_btn', function(){
 		treat_id = $(this).attr("id");
 		$("#add_treatment").modal('show');
 		pat_ID .val(treat_id);
		 });
}
function send_now(){
	btX_btn.on('click', function(){
		yes_send();
		// yes_send();
	});
}
function overall(){
	Btx_editNow.on('click', function(){
		update_treatment();
	})
}


function yes_send(){
	send_data = new FormData();
			send_data.append("joe", "boy");
			send_data.append("patID", pat_ID.val());
			send_data.append("treatment", treatment_case.val());
      send_data.append("sym", sym.val());
			send_data.append("costy", costy.val());
			send_data.append("amt_paid", amt_paid.val());
			send_data.append("doctor", doctor.val());
		 $.ajax({
                          url: 'process/insert_treatment.php',
                          type: 'POST',
                          data: send_data,
                          processData: false,
              			  contentType: false,
			              cache:false,
                           success: function(read){
                           	
                      		if(read == 1){
                      			display_message.addClass("alert alert-success");
                      			display_message.html("Data Inserted Successfully");
                      			$("#myform").trigger("reset");
                      			location.reload();
                      		}else if(read == 5){
                      			display_message.addClass("alert alert-danger");
                      			display_message.html("User Already Exits");
                      			$("#myform").trigger("reset");
                      		}else if(read == 2){
                      			display_message.addClass("alert alert-danger");
                      			display_message.html("Error ! Data could not be inserted");
                      			$("#myform").trigger("reset");
                      		}else if(read == 4){
                      			display_message.addClass("alert alert-danger");
                      			display_message.html("Error ! Not set");
                      			$("#myform").trigger("reset");
                      		}else{
                      			display_message.addClass("alert alert-danger");
                      			display_message.html("Something went wrong");
                      			$("#myform").trigger("reset");
                      		}
                        }

                   })
       
}

function edit_treat(){
 	$(document).on('click', '.edit_treat', function(){
		 id = $(this).attr("id");
		 	$.ajax({
				url:'process/edit_treatment.php',
				method:'POST',
				data:{
					up  : "now",
					eid : id
				},
				dataType:"json",
				success: function(data){
					edit_treaty.val(data.treatment_name);
					edit_cost.val(data.Cost);
          esym.val(data.symtoms);
					edit_amt.val(data.Amount_paid);
					edit_doctor.val(data.doctor);
					edit_pat.val(data.patient_ID);
					edit_date.val(data.date_of_treatement);
					edit_idr.val(data.id);
					$('#edit_treatment').modal('show').fadeIn('fast');
				}
				});
		 });
}

function update_treatment(){
				send_ = new FormData();
				send_.append("joe", "girl");
				send_.append("edit_doctor", edit_doctor.val());
				send_.append("edit_amt", edit_amt.val());
				send_.append("edit_treaty", edit_treaty.val());
        send_.append("esym", esym.val());
				send_.append("cost", edit_cost.val());
				send_.append("edit_date", edit_date.val());
				send_.append("id", edit_pat.val());
				send_.append("edit_idr", edit_idr.val());
	$.ajax({
                          url: 'process/update_treatment.php',
                          type: 'POST',
                          data: send_,
                          processData: false,
              			  contentType: false,
			              cache:false,
                      success: function(respond){
                      		if(respond == 1){
                      			yes11 = true;
                      			error_edit.addClass("alert alert-success");
                      			error_edit.html("Data Updated Successfully");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_treatment").modal("hide")}, 2000);
                      					$("#myform12").trigger("reset");
                      					location.reload();
                      				}
                      			location.reload();
                      		}else if(respond == 2){
                      			yes11 = true;
                      			error_edit.addClass("alert alert-danger");
                      			error_edit.html("Error ! Data could not be updated");
                      				if(yes11==true){
                      					setTimeout(function(){$("#edit_treatment").modal("hide")}, 2000);
                      					$("#myform12").trigger("reset");
                      					location.reload();
                      				}
                      		}else if(respond == 4){
                      			yes11 = true;
                      			error_edit.addClass("alert alert-danger");
                      			error_edit.html("Error ! Not set");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_treatment").modal("hide")}, 2000);
                      					$("#myform12").trigger("reset");
                      					location.reload();
                      				}
                      		}else{
                      			yes11 = true;
                      			error_edit.addClass("alert alert-danger");
                      			error_edit.html("Something went wrong");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_treatment").modal("hide")}, 2000);
                      					$("#myform12").trigger("reset");
                      					location.reload();
                      				}

                      		}
                      		
                      }
                    })
}
function view(){
	click_view.on('click', function(){
		pat_auto_id = id_pati.attr("value");
		// patient_id = pati_id.attr("value");
		url = "view_treatment.php?id="+pat_auto_id;
		location.assign(url);
	});

	viewAll.on('click', function(){
		patient_tbl_idr = $("#patient_tbl_id").attr("value");
		url = "viewAlltreatments.php?idre="+patient_tbl_idr;
		location.assign(url);
			})
 	
}
function delete_t(){
	delete_treat.on('click', function(){
		treatID = $("#id_pati").attr("value");
		patientiD = $("#pati_id").attr("value");
		 	$.ajax({
				url:'process/delete_treat.php',
				method:'POST',
				data:{
					deleted_user  : "yesget",
					dlid : treatID,
					patid : patientiD
				},
				dataType:"json",
				success: function(receive){
					details.html(receive.treatment_name);
					// deletr_user_phone.html(receive.user_mobile_number);
					delet_id_treat.val(receive.id);
					delet_patIDtreat.val(receive.patient_ID);
					modal_treat.modal('show');
				}
			});

		 })
}	
function final_delete_treat_(){
	btn_deleted_treat.on('click',function(){
		delete_wipe_treat_();

	})
}
function delete_wipe_treat_(){
		treat_id_ = delet_id_treat.val();
		delet_patIDtreat = $("#delet_patIDtreat").val();
					$.ajax({
				url:'process/delete_all_treat.php',
				method:'POST',
				data:{
					finish_  : "go_",
					wipeid_  : treat_id_,
					patIDtreat : delet_patIDtreat
				},
				dataType:"html",
				success: function(go){
					if(go == 1){
                      			yes1 = true;
                      			error_treat.addClass("alert alert-success");
                      			error_treat.html("Data deleted Successfully");
                      			if(yes1==true){
                      					setTimeout(function(){modal_treat.modal("hide")}, 2000);
                      					location.reload();
                      				}
                      			location.reload();
                    }else if(go == 2){
                    	yes1 = true;
                      			error_treat.addClass("alert alert-danger");
                      			error_treat.html("Error ! Data could not be deleted");
                      				if(yes1==true){
                      					setTimeout(function(){modal_treat.modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 3){
                    	yes1 = true;
                      			error_treat.addClass("alert alert-danger");
                      			error_treat.html("Error ! Invalid selection");
                      				if(yes1==true){
                      					setTimeout(function(){modal_treat.modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 4){
                    	yes1 = true;
                      			error_treat.addClass("alert alert-danger");
                      			error_treat.html("Error ! Data is not set");
                      				if(yes1==true){
                      					setTimeout(function(){modal_treat.modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else{
                      			yes1 = true;
                      			error_treat.addClass("alert alert-danger");
                      			error_treat.html("Something went wrong");
                      			if(yes1==true){
                      					setTimeout(function(){modal_treat.modal("hide")}, 2000);
                      					location.reload();
                      				}
                      	}
				}
			});
}






