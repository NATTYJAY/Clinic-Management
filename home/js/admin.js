$(document).ready(function(){

	fname      = $("#afkname");
	lname      = $("#alname");
	tel1       = $("#aphone");
	email      = $("#aemail");
	password    = $("#pass");
	password2    = $("#pass2");
	btn_admin = $("#btn_admin");

	 /* Error messages */
	fname_e       =     $("#a_fname");
	lname_e       =     $("#a_lname");
	s_tel1        =     $("#a_tel1");
	email_e       =     $("#a_mail"); 
	a_pass1       =     $("#a_pass1"); 
	a_pass2       = 	$("#a_pass2");
	eerror_admin_ =		$("#error_amessages_");
	/*This is the panel for doctor edit*/

	ffname          = $("#e_name");
	llname          = $("#e_lname");
	ttel1           = $("#e_phone");
	eemail          = $("#e_email");
	pass            = $("#e_pass");
	id_p            = $("#idp");
	btn_edit_admin = $("#edit_adminn");

	// alert("yes");
	delete__modal          = $("#delete_add");
	err_delete		       = $("#delete_error_add");
	show_message_		   = $("#deletrr_add");
	delet_id		       = $("#delet_id_add");
	btn_deleted_p	       = $("#btn_deleted_added");

	delete_user();
	delete_user();
	final_delete_admin_p();
	/* flages for error messages*/
	y1 = false;
	x1 = false;
	y2 = false;
	yes11 = false;
	yes1 = false;
	validate();
	update_new();
	edit_doc();

});

function validate(){
	btn_admin.on('click',function(){
	ajax_function();
	})
}

function update_new(){
	btn_edit_admin.on('click',function(){
		update_admin();
		/*alert("eneter");*/

	})
}



function ajax_function(){
	send_data = new FormData();
			send_data.append("joe", "boy");
			send_data.append("fname", fname.val());
			send_data.append("lname", lname.val());
			send_data.append("phone", tel1.val());
			send_data.append("email", email.val());
			send_data.append("password", password.val());
		 $.ajax({
                          url: 'process/insert_admin.php',
                          type: 'POST',
                          data: send_data,
                          processData: false,
              			  contentType: false,
			              cache:false,
                           success: function(read){
                      		if(read == 1){
                      			eerror_admin_.addClass("alert alert-success");
                      			eerror_admin_.html("Data Inserted Successfully");
                      			$("#myform").trigger("reset");
                      			location.reload();
                      		}else if(read == 5){
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("User Already Exits");
                      			$("#myform").trigger("reset");
                      		}else if(read == 2){
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Error ! Data could not be inserted");
                      			$("#myform").trigger("reset");
                      		}else if(read == 4){
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Error ! Not set");
                      			$("#myform").trigger("reset");
                      		}else{
                      			eerror_admin_.addClass("alert alert-danger");
                      			eerror_admin_.html("Something went wrong");
                      			$("#myform").trigger("reset");

                      		}
                      }
                    })
}
function edit_doc(){
 	$(document).on('click', '.edit_admin', function(){
		 id = $(this).attr("id");

		 	$.ajax({
				url:'process/edit_admin.php',
				method:'POST',
				data:{
					up  : "now",
					eid : id
				},
				dataType:"json",
				success: function(geit){
					ffname.val(geit.fname);
					llname.val(geit.lname);
					ttel1.val(geit.phone);
					eemail.val(geit.email);
					pass.val(geit.password);
					id_p.val(geit.id);
					$('#updateadmin_').modal('show').fadeIn('fast');
				}
				});
		 });
}



function update_admin(){
				send_ = new FormData();
				send_.append("joe", "girl");
				send_.append("fname", ffname.val());
				send_.append("lname", llname.val());
				send_.append("email", eemail.val());
				send_.append("ttel1", ttel1.val());
				send_.append("password", pass.val());
				send_.append("id", id_p.val());
	$.ajax({
                          url: 'process/update_admin.php',
                          type: 'POST',
                          data: send_,
                          processData: false,
              			  contentType: false,
			              cache:false,
                      success: function(respond){
                      		if(respond == 1){
                      			yes11 = true;
                      			$("#e_admin_").addClass("alert alert-success");
                      			$("#e_admin_").html("Data Updated Successfully");
                      			if(yes11==true){
                      					setTimeout(function(){$("#updateadmin_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      			location.reload();
                      		}else if(respond == 2){
                      			yes11 = true;
                      			$("#e_admin_").addClass("alert alert-danger");
                      			$("#e_admin_").html("Error ! Data could not be updated");
                      				if(yes11==true){
                      					setTimeout(function(){$("#updateadmin_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      		}else if(respond == 4){
                      			yes11 = true;
                      			$("#e_admin_").addClass("alert alert-danger");
                      			$("#e_admin_").html("Error ! Not set");
                      			if(yes11==true){
                      					setTimeout(function(){$("#updateadmin_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}
                      		}else{
                      			yes11 = true;
                      			$("#e_admin_").addClass("alert alert-danger");
                      			$("#e_admin_").html("Something went wrong");
                      			if(yes11==true){
                      					setTimeout(function(){$("#updateadmin_").modal("hide")}, 2000);
                      					$("#myform").trigger("reset");
                      					location.reload();
                      				}

                      		}
                      		
                      }
                    })
}

function delete_user(){
 	$(document).on('click', '.delete_admin', function(){
		 adel_id = $(this).attr("id");
		 	$.ajax({
				url:'process/delete_user.php',
				method:'POST',
				data:{
					deleted_user  : "yesget",
					dlid : adel_id
				},
				dataType:"json",
				success: function(receive){
					show_message_.html(receive.fname+'----'+receive.lname);
					// deletr_user_phone.html(receive.user_mobile_number);
					delet_id.val(receive.id);
					delete__modal.modal('show');
				}
			});
	});
}
function final_delete_admin_p(){
	btn_deleted_p.on('click',function(){
		delete_wipe_admin_p();
		

	})
}
function delete_wipe_admin_p(){
		wipe_id_ = delet_id.val();

					$.ajax({
				url:'process/delete_all_admin.php',
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
                      					setTimeout(function(){$("#delete_add").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      			location.reload();
                    }else if(go == 2){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Data could not be deleted");
                      				if(yes1==true){
                      					setTimeout(function(){$("#delete_add").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 3){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Invalid selection");
                      				if(yes1==true){
                      					setTimeout(function(){$("#delete_add").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else if(go == 4){
                    	yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Error ! Data is not set");
                      				if(yes1==true){
                      					setTimeout(function(){$("#delete_add").modal("hide")}, 2000);
                      					location.reload();
                      				}
                    }else{
                      			yes1 = true;
                      			err_delete.addClass("alert alert-danger");
                      			err_delete.html("Something went wrong");
                      			if(yes1==true){
                      					setTimeout(function(){$("#delete_add").modal("hide")}, 2000);
                      					location.reload();
                      				}
                      	}
				}
			});
}
		
	







