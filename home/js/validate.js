$(document).ready(function(){

	fname      = $("#fkname");
	lname      = $("#lname");
	tel1       = $("#tel1");
	tel2       = $("#tel2");
	email      = $("#email");
	address    = $("#address");
	btn_doctor = $("#btn_doctor");

	 /* Error messages */
	fname_e       =     $("#s_fname");
	lname_e       =     $("#s_lname");
	s_tel1        =     $("#s_tel1");
	s_tel2        =     $("#s_tel2");
	email_e       =     $("#s_mail"); 
	s_address     =     $("#s_address"); 
	error_admin_  = 	$("#error_admin_");
	eerror_admin_ =		$("#eerror_admin_");
	/*This is the panel for doctor edit*/

	ffname          = $("#ffname");
	llname          = $("#llname");
	ttel1           = $("#ttel1");
	ttel2           = $("#ttel2");
	eemail          = $("#eemail");
	aaddress        = $("#aaddress");
	id_rr           = $("#id");
	btn_doctor_edit1 =  $("#edit_doctor1");

	// alert("yes");
	delete__modal          = $("#user_delete");
	err_delete		       = $("#delete_error_us");
	show_message_		   = $("#deletrr_user");
	delet_id		       = $("#delet_id_user");
	btn_deleted_	       = $("#btn_deleted_us");

	delete_user();
	final_delete_admin_();
	delete_user();
	final_delete_admin_();
	/* flages for error messages*/
	x1 = y1 = x2 = y2 = x3 = y3 = x4 = y4 = x5 = y5 = x6 = y6 = x7 = y7 = x8 = y8 = x9 = y9 = false;
	yes11 = false;
	yes1 = false;
	validate();
	update_p()
	edit_doc();
	view_doc();

});

function validate(){
	btn_doctor.on('click',function(){
	ajax_function();
	})
}

function update_p(){
	btn_doctor_edit1.on('click',function(){
		update_doctor();

	})
}


function ajax_function(){
	send_data = new FormData();
			send_data.append("joe", "boy");
			send_data.append("fname", fname.val());
			send_data.append("lname", lname.val());
			send_data.append("email", email.val());
			send_data.append("tel1", tel1.val());
			send_data.append("tel2", tel2.val());
			send_data.append("address", address.val());
		 $.ajax({
                          url: 'process/insert_doctor.php',
                          type: 'POST',
                          data: send_data,
                          processData: false,
              			  contentType: false,
			              cache:false,
                           success: function(read){

                      		if(read == 1){
                      			error_admin_.addClass("alert alert-success");
                      			error_admin_.html("Data Inserted Successfully");
                      			$("#myform").trigger("reset");
                      			location.reload();
                      		}else if(read == 5){
                      			error_admin_.addClass("alert alert-danger");
                      			error_admin_.html("User Already Exits");
                      			$("#myform").trigger("reset");
                      		}else if(read == 2){
                      			error_admin_.addClass("alert alert-danger");
                      			error_admin_.html("Error ! Data could not be inserted");
                      			$("#myform").trigger("reset");
                      		}else if(read == 4){
                      			error_admin_.addClass("alert alert-danger");
                      			error_admin_.html("Error ! Not set");
                      			$("#myform").trigger("reset");
                      		}else{
                      			error_admin_.addClass("alert alert-danger");
                      			error_admin_.html("Something went wrong");
                      			$("#myform").trigger("reset");

                      		}
                      }
                    })
}



function edit_doc(){
 	$(document).on('click', '.edit_r', function(){
		 id = $(this).attr("id");

		 	$.ajax({
				url:'process/edit_doctor.php',
				method:'POST',
				data:{
					up  : "now",
					eid : id
				},
				dataType:"json",
				success: function(geit){
					ffname.val(geit.name_of_doctor);
					llname.val(geit.lname);
					ttel1.val(geit.phone_one);
					ttel2.val(geit.phone_two);
					eemail.val(geit.email);
					aaddress.val(geit.address);
					id_rr.val(geit.id);
					$('#updatedit_').modal('show').fadeIn('fast');
				}
				});
		 });
}



function update_doctor(){
				send_ = new FormData();
				send_.append("joe", "girl");
				send_.append("fname", ffname.val());
				send_.append("lname", llname.val());
				send_.append("email", eemail.val());
				send_.append("address", aaddress.val());
				send_.append("ttel1", ttel1.val());
				send_.append("ttel2", ttel2.val());
				send_.append("id", id_rr.val());
	$.ajax({
                          url: 'process/update_doctor.php',
                          type: 'POST',
                          data: send_,
                          processData: false,
              			  contentType: false,
			              cache:false,
                      success: function(respond){
                      		if(respond == 1){
                      			yes11 = true;
                      			eerror_admin_.addClass("alert alert-success");
                      			eerror_admin_.html("Data Updated Successfully");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      			location.reload();
                      		}else if(respond == 2){
                      			yes11 = true;
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Error ! Data could not be updated");
                      				if(yes11==true){
                      					setTimeout(function(){$("#edit_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      		}else if(respond == 4){
                      			yes11 = true;
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Error ! Not set");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      		}else{
                      			yes11 = true;
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Something went wrong");
                      			if(yes11==true){
                      					setTimeout(function(){$("#edit_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}

                      		}
                      		
                      }
                    })
}


function view_doc(){
 	$(document).on('click', '.view', function(){
		 id_e = $(this).attr("id");
		 eurl = "view_doctor.php?id="+id_e;
		location.assign(eurl);
		 });
}



function delete_user(){
 	$(document).on('click', '.delete_reg', function(){
		 adel_id = $(this).attr("id");
		 	$.ajax({
				url:'process/delete_doc.php',
				method:'POST',
				data:{
					deleted_user  : "yesget",
					dlid : adel_id
				},
				dataType:"json",
				success: function(receive){
					show_message_.html(receive.name_of_doctor+'----'+receive.lname);
					// deletr_user_phone.html(receive.user_mobile_number);
					delet_id.val(receive.id);
					delete__modal.modal('show');
				}
			});
	});
}
function final_delete_admin_(){
	btn_deleted_.on('click',function(){
		delete_wipe_admin_();

	})
}
function delete_wipe_admin_(){
		wipe_id_ = delet_id.val();

					$.ajax({
				url:'process/delete_all_doc.php',
				method:'POST',
				data:{
					finish_  : "go_",
					wipeid_  : wipe_id_
				},
				dataType:"html",
				success: function(go){
					if(go == 1){
                      			yes1 = true;
                      			err_delete.addClass("alert alert-success");
                      			err_delete.html("Data deleted Successfully");
                      			if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      			location.reload();
                    }else if(go == 2){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Data could not be deleted");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 3){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Invalid selection");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 4){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Data is not set");
                      				if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else{
                      			yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Something went wrong");
                      			if(yes1==true){
                      					setTimeout(function(){$("#user_delete").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      	}
				}
			});
}
		
	







