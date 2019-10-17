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
	valentine();
	})
}

function update_new(){
	btn_edit_admin.on('click',function(){
		update_admin();
		/*alert("eneter");*/

	})
}

function valentine(){
	if(fname.val() == ""){
		x1 = true;
		cssObj = { 'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		fname.css(cssObj);
		fname_write = "first Name cannot be Blank";
		fname_e.html("<p>" +fname_write +"</p>");
		fname_e.css(cssObj1);

	}else if(fname.val() != ""){
			fname_filter = /[^A-Za-z]/.test(fname.val());
		if(fname_filter==true){
			x1 = true;
		cssObj = {'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		fname.css(cssObj);
		fname_write = "Only alpahabets"
		fname_e.html("<p>" +fname_write +"</p>");
		fname_e.css(cssObj1);
		}else{
			x1 = false;
			cssObj = {'border' : '1px solid #90EE90'};
		cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
		fname.css(cssObj);
		fname_write = ""
		fname_e.html("<p>" +fname_write +"</p>");
		fname_e.css(cssObj1);

		}
	}


	if(lname.val() == ""){
		x1 = true;
		cssObj = { 'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		lname.css(cssObj);
		lname_write = "Last Name cannot be Blank"

		lname_e.html("<p>" +lname_write +"</p>");
		lname_e.css(cssObj1);

	}else if(lname.val() != ""){
			lname_filter = /[^A-Za-z]/.test(lname.val());
			
		if(lname_filter==true){
			x1 = true;
		cssObj = {'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		lname.css(cssObj);
		lname_write = "Only alpahabets"
		lname_e.html("<p>" +lname_write +"</p>");
		lname_e.css(cssObj1);
		}else{
			x1 = false;
			cssObj = {'border' : '1px solid #90EE90'};
		cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
		lname.css(cssObj);
		lname_write = ""
		lname_e.html("<p>" +lname_write +"</p>");
		lname_e.css(cssObj1);

		}
	}

	if(email.val() == ""){
		y2 = true;
		cssObj = { 'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		email.css(cssObj);
		email_write = "Email cannot be Blank"

		email_e.html("<p>" +email_write +"</p>");
		email_e.css(cssObj1);

	}else if(email.val() != ""){
			email_filter = /^[A-Za-z0-9\.]+@[A-Za-z0-9]{2,}\.[A-Za-z0-9]{2,3}$/.test(email.val());
		if(email_filter==false){
			y2 = true;
		cssObj = {'border' : '1px solid #F00'};
		cssObj1 = {'color' : '#F00', 'font-weight' : '5px', 'text-decoration' : 'underline'};
		email.css(cssObj);
		email_write = "Invalid Email"
		email_e.html("<p>" +email_write +"</p>");
		email_e.css(cssObj1);
		}else{
			y2 = false;
			cssObj = {'border' : '1px solid #90EE90'};
		cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
		email.css(cssObj);
		email_write = ""
		email_e.html("<p>" +email_write +"</p>");
		email_e.css(cssObj1);

		}
	}
		//phone
		if (tel1.val() == ""){
			y1 =true;
			cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
			s_tel1_write = "Phone1 cannot be Blank"
			s_tel1.html("<p>" +s_tel1_write +"</p>");
			s_tel1.css(cssObj1);
		}else{
			val_phone = /[^0-9]+/.test(tel1.val());
			if (!val_phone){
				if (tel1.val().length<=8){
					y1 = true;
					cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
					s_tel1_write = "Number is too short"
					s_tel1.html("<p>" +s_tel1_write +"</p>");
					s_tel1.css(cssObj1);
				}else{
					y1 = false;
					cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
					s_tel1_write = ""
					s_tel1.html("<p>" +s_tel1_write +"</p>");
					s_tel1.css(cssObj1);
				}
			}else{
					y1 = true;
					cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
					s_tel1_write = "only numbers is allowed"
					s_tel1.html("<p>" +s_tel1_write +"</p>");
					s_tel1.css(cssObj1);
			}
		}

		if(password.val()==""){
			y1 =true;
			cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
			s_pas1_write = "provide password";
			a_pass1.html("<p>" +s_pas1_write +"</p>");
			a_pass1.css(cssObj1);
		}else{
			if(password.val().length<=5){
				y1 = true;
					cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
					s_pas1_write = "password must be 6 or more";
					a_pass1.html("<p>" +s_pas1_write +"</p>");
					a_pass1.css(cssObj1);
			}else{
					y1 = false;
					cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
					s_pas1_writes_pas1_write = ""
					a_pass1.html("<p>" +s_pas1_writes_pas1_write +"</p>");
					a_pass1.css(cssObj1);
				}
		}

		if(password2.val()==""){
			y1 =true;
			cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
			s_pas2_write = "confirm password";
			a_pass2.html("<p>" +s_pas2_write +"</p>");
			a_pass2.css(cssObj1);
		}else{
			if(password.val() != password2.val()){
					y1 = true;
					cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
					s_pas2_write = "Password mismatch";
					a_pass2.html("<p>" +s_pas2_write +"</p>");
					a_pass2.css(cssObj1);
			}else if(password2.val().length<=5){
				y1 = true;
					cssObj1 = {'color' : '#F00', 'font-weight' : '5px'};
					s_pas2_write = "password must be 6 or more";
					a_pass2.html("<p>" +s_pas2_write +"</p>");
					a_pass2.css(cssObj1);
			}else{
					y1 = false;
					cssObj1 = {'color' : '#90EE90', 'font-weight' : '5px'};
					s_pas1_writes_pas2_write = ""
					a_pass2.html("<p>" +s_pas1_writes_pas2_write +"</p>");
					a_pass2.css(cssObj1);
				}
		}

		if (y1==false && y2==false && x1== false && yes11 ==false && yes1 == false) {
			ajax_function();
		}
		
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
		
	







