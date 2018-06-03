// Close data-toggle collapse divs
var edit_user_id;
$(document).on('click',function(){
  $('[data-toggle="collapse"]').collapse('hide');
})

// Tab script
$('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href");
});

// Dynamically add active class to sidebar li
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Sidebar Menu Toggle Script
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

// Tooltip Script
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// Datepicker Script
$(document).on('focus', '.datepicker', function () {
  $(this).datepicker({
    startDate: "today",
    todayBtn: "linked"
  });
});


// Get data into editAccount Modal
// function editAccount() {
//   var accountId = $(".userId", $(input[type='hidden'])).val(); //cannot get id val
//   console.log(accountId);
//   $.ajax({
//     type: "POST",
//     url: base_url+"Users/getUserInfo",
//     dataType: 'json',
//     data: {"user_id": accountId},
//     error: function(xhr, ajaxOptions, thrownError) {
//               alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
//               alert("responseText: "+xhr.responseText);
//             },
//     success: function(data) {
//       $("#fname").val(data[0]['firstname']);
//       $("#lname").val(data[0]['lastname']);
//       $("#school").val(data[0]['office']);
//       $("#dept").val(data[0]['department']);
//       $("#org").val(data[0]['organization']);
//       $("#uname").val(data[0]['username']);
//       $("#pass").val(data[0]['password']);
//     }
//   });
// }

// $(document).ready(function () {
//   $("#editAccount").on("click", editAccount);
// });

// Datepicker Script
var start = new Date();
var end = new Date(new Date().setYear(start.getFullYear()+1));

$('#inclusive-date1').datepicker({
  startDate : start,
  endDate   : end
}).on('changeDate', function() {
  $('#inclusive-date2').datepicker('setStartDate', new Date($(this).val()));
});
$('#inclusive-date2').datepicker({
  startDate : start,
  endDate   : end
}).on('changeDate', function() {
  $('#inclusive-date1').datepicker('setEndDate', new Date($(this).val()));
});

$(document).on('focus', '.datepicker', function () {
  $(this).datepicker({
    startDate : start,
    endDate   : end,
  });
});

// DataTable Initialization
$('#proposal_logs').dataTable({
  "columnDefs": [ {
    "targets": 1,
    "orderable": false
    } ],
  "order": [[0, "desc"]],
  "paging": false,
  "info": false,
  "searching": false
});

$('#proposal_list').dataTable({
  "columnDefs": [ {
    "targets": 4,
    "orderable": false
    } ],
  "pagingType": "full_numbers"
});


$('#returned_proplist').dataTable({
  "pagingType": "full_numbers"
});

$('#draft_proplist').dataTable({
  "pagingType": "full_numbers"
});

$('#reportd').dataTable({
  "columnDefs": [ {
    "targets": 3,
    "orderable": false
    } ],
  "pagingType": "full_numbers"
});

$('#reporte').dataTable({
  "columnDefs": [ {
    "targets": 2,
    "orderable": false
    } ],
  "pagingType": "full_numbers"
});

/*$('#endorsed_proposal_list, #approved_proposal_list, #review_proposal_list, #recommendation_proposal_list, #my_proposal_list, #my_reportd_list, #my_reporte_list').dataTable({
  "pagingType": "full_numbers"
});*/

var active_accounts = $('#active_accounts').dataTable({
  // "pagingType": "full_numbers",
  destroy: true,
});

// setInterval(function() {
//     active_accounts.ajax.reload();
// }, 10000);

$('#pending_accounts').dataTable({
  "pagingType": "full_numbers"
});

// Departments on particular school choice
$(function(){
    $('#school').on('change', function(){
        var val = $(this).val();
        var sub = $('#department');
            sub.find('option').not(':first').hide();
            $('option', sub).filter(function() {
                if($(this).attr('data-group') == val)
                    $(this).show();
            });
        sub.val(0);
    });
});

$("#form_a1").submit(function(e){
	e.preventDefault();
	//var data = JSON.stringify($('#form_a1').serialize());
	//var dataJSON=JSON.parse(data);
	//alert(dataJSON.title);

	var btn = document.activeElement.getAttribute('value');
	var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a1").append(button_type);
	console.log($('#form_a1').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  if((error = validationProposalFormA1()) === true)
  {
  	$.ajax({
  	 	type: "POST",
  	 	url: base_url + "Procedure_one/insertDraftProposal",
  	 	data:$('#form_a1').serialize(),
        success:function(data){
        alert("Successful in creating a PPA Form");
        setTimeout(window.location.replace("home"),5000);
      },
  	 	error: function(data) {
  	 		console.log(data);
  	 	}
  	 }).done(function(){
          console.log("done");
     });
  }else{
    $('#exit').modal('hide');
    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Error!</h4>');
    $('#success_modal .modal-body').html('<br><div>'+error+'!</div>');
    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>');
    $('#success_modal').modal('show');
  }
});


$("#save_a1").click(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a1").append(button_type);
  console.log($('#form_a1').serialize());
  //console.log(validationProposalFormA1());
  var error="";

    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a1').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Draft");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });

});

$("#form_a1_coord").submit(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a1_coord").append(button_type);
  console.log($('#form_a1_coord').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  if((error = validationProposalFormA()) === true)
  {
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a1_coord').serialize(),
        success:function(data){
           
        alert("Successful in creating a PPA Form");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });
  }else{
    $('#exit').modal('hide');
    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Error!</h4>');
    $('#success_modal .modal-body').html('<br><div>'+error+'!</div>');
    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>');
    $('#success_modal').modal('show');
  }

});

$("#save_a1_coord").click(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a1_coord").append(button_type);
  console.log($('#form_a1_coord').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a1_coord').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Draft");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });

});

$("#form_a_coord").submit(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a_coord").append(button_type);
  console.log($('#form_a_coord').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  if((error = validationProposalFormA()) === true)
  {
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a_coord').serialize(),
        success:function(data){
           
        alert("Successful in creating a PPA Form");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });
  }else{
    $('#exit').modal('hide');
    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Error!</h4>');
    $('#success_modal .modal-body').html('<br><div>'+error+'!</div>');
    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>');
    $('#success_modal').modal('show');
  }

});

$("#save_a_coord").click(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a_coord").append(button_type);
  console.log($('#form_a-coord').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a_coord').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Draft");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });

});

$("#form_a").submit(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a").append(button_type);
  console.log($('#form_a').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  if((error = validationProposalFormA()) === true)
  {
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Form");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });
  }else{
    $('#exit').modal('hide');
    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Error!</h4>');
    $('#success_modal .modal-body').html('<br><div>'+error+'!</div>');
    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>');
    $('#success_modal').modal('show');
  }

});

$("#save").click(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_a").append(button_type);
  console.log($('#form_a').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_a').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Draft");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });

});

$("#form_c").submit(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_c").append(button_type);
  console.log($('#form_c').serialize());
  //console.log(validationProposalFormA1());
  var error="";
  if((error = validationProposalFormC()) === true)
  {
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_c').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Form");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });
  }else{
    $('#exit').modal('hide');
    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Error!</h4>');
    $('#success_modal .modal-body').html('<br><div>'+error+'!</div>');
    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>');
    $('#success_modal').modal('show');
  }

});

$("#save_c").submit(function(e){
  e.preventDefault();
  //var data = JSON.stringify($('#form_a1').serialize());
  //var dataJSON=JSON.parse(data);
  //alert(dataJSON.title);

  var btn = document.activeElement.getAttribute('value');
  var button_type = "<input type='hidden' name='button_type' value='"+btn+"'/>";

  $("#form_c").append(button_type);
  console.log($('#form_c').serialize());
  //console.log(validationProposalFormA1());
  var error="";
    $.ajax({
      type: "POST",
      url: base_url + "Procedure_one/insertDraftProposal",
      data:$('#form_c').serialize(),
      success:function(data){
        alert("Successful in creating a PPA Draft");
        setTimeout(window.location.replace("home"),5000);
      },
      error: function(data) {
        console.log(data);
      }
     }).done(function(){
          console.log("done");
     });

});

$('#save_edit_profile_settings').submit(function(e) {
    e.preventDefault();
	//alert($('#save_edit_profile_settings').serialize());
	$.ajax({
      type: "POST",
      url: base_url + "Users/editPersonalProfile",
      data: $('#save_edit_profile_settings').serialize(),
      success: function(data) {
        //alert(data);
        $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
              <h4 class="modal-title">EDIT PROFILE</h4>');
        $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
              <strong>Edited Profile!</strong> You have successfully edited your user profile.</div>');
        $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
        $('#success_modal').modal('show');
      },
      error: function(data) {
        console.log(data);

      }
    }).done(function(){
       console.log("done");
    }); 
});
// Manage accounts processes and buttons
$('#edit_profile').submit(function(e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: base_url + "Users/editUserProfile",
      data: $('#edit_profile').serialize(),
      success: function(data) {
        $('#edit_profile_modal').modal('hide');
        $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
              <h4 class="modal-title">EDIT PROFILE</h4>');
        $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
              <strong>Edited Profile!</strong> You have successfully edited a user profile.</div>');
        $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
        $('#success_modal').modal('show');
      },
      error: function(data) {
        console.log(data);
      }
    }).done(function(){
        $('#active_accounts').load(document.URL + ' #active_accounts');
    });
});

function launch_edit_profile_modal(id) {
	$("#edit_profile_modal").modal('show');
    $.ajax({
        type: "POST",
        url: base_url + "Users/getUserInfo",
        data: {id:id},
        success: function(data){
            var info = $.parseJSON(data);
            $('#edit_profile_modal #user_id').val(info[0].user_id);
            $('#edit_profile_modal #firstname').val(info[0].firstname);
            $('#edit_profile_modal #lastname').val(info[0].lastname);
            $('#edit_profile_modal #office').val(info[0].office);
            $('#edit_profile_modal #department').val(info[0].department);
            $('#edit_profile_modal #organization').val(info[0].organization);
            $('#edit_profile_modal #username').val(info[0].username);
            $('#edit_profile_modal #old_password').val(info[0].password);
            $('#edit_profile_modal').modal('show', {backdrop: 'static'});
        },
        error: function(data) {
            console.log('Something is wrong');
            console.log(data);
        }
    });
}

function launch_delete_profile(id) {
    $('#confirm_delete_modal').modal('show');
    $('#confirm_delete_modal').on('click', '.btn-ok', function() {
        $.ajax({
            type: "POST",
            url: base_url + "Users/deleteUserProfile",
            data: {id: id},
            success: function(data) {
                $('#confirm_delete_modal').modal('hide');
                $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <h4 class="modal-title">DELETED PROFILE</h4>');
                $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
                                        <strong>Deleted Profile!</strong> You have successfully deleted a user profile.</div>');
                $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
                $('#success_modal').modal('show');
            },
            error: function(data) {
                console.log('Something is wrong');
                console.log(data);
            }
        }).done(function(){
            $('#active_accounts').load(document.URL + ' #active_accounts');
            });
    });
}

// User information of proposal submitter
function launch_submitted_user_profile(id) {
            $.ajax({
                type: "POST",
                url: base_url + "Users/getUserInfo",
                data: {id: id},
                success: function (data) {
                    var info = $.parseJSON(data);

                    $('#submitted_by_modal').modal('show');

                    $('#submitted_by_modal .modal-body').html('<div class="container">\
                        <div class="row">\
                            <div class="col-md-3">\
                                <label>Full Name</label>\
                            </div>\
                            <div class="col-md-1">\
                                <label>:</label>\
                            </div>\
                            <div class="col-md-8-push">'
                                 + info[0].firstname + ' ' + info[0].lastname +
                            '</div>\
                        </div>\
                        <div class="row">\
                            <div class="col-md-3">\
                                <label>Office/Unit</label>\
                            </div>\
                            <div class="col-md-1">\
                                <label>:</label>\
                            </div>\
                            <div class="col-md-8-push">'
                                + info[0].office + ' - ' + info[0].department +
                            '</div>\
                        </div>\
                        <div class="row">\
                            <div class="col-md-3">\
                                <label>E-mail Address</label>\
                            </div>\
                            <div class="col-md-1">\
                                <label>:</label>\
                            </div>\
                            <div class="col-md-8-push">'
                                 + info[0].email +
                            '</div>\
                        </div>\
                        <div class="row">\
                            <div class="col-md-3">\
                                <label>Contact #</label>\
                            </div>\
                            <div class="col-md-1">\
                                <label>:</label>\
                            </div>\
                            <div class="col-md-8-push">'
                                 + info[0].contact_num +
                            '</div>\
                        </div>\
                        </div>');
                },
                error: function () {

                }
            });
        }

// Accept Pending Users
function accept_pending_user(id) {

    $.ajax({
            type: "POST",
            url: base_url + "Users/acceptUserApplication",
            data: {id: id},
            success: function(data) {
                $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <h4 class="modal-title">ACCEPT ACCOUNT APPLICATION</h4>');
                $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
                                        <strong>User Accepted!</strong>You have successfully accepted user registration application.</div>');
                $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
                $('#success_modal').modal('show');
            },
            error: function(data) {
                console.log('Something is wrong');
                console.log(data);
            }
        }).done(function(){
            $('#pending_accounts').load(document.URL + ' #pending_accounts');
            });
}

// Deny Pending Users
function deny_pending_user(id) {
  $('#confirm_deny_modal').modal('show');
    $('#confirm_deny_modal').on('click', '.btn-ok', function() {
        $.ajax({
            type: "POST",
            url: base_url + "Users/denyUserApplication",
            data: {id: id},
            success: function(data) {
                $('#confirm_deny_modal').modal('hide');
                $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                  <h4 class="modal-title">DENY ACCOUNT APPLICATION</h4>');
                $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
                                        <strong>Action Successful!</strong></div>');
                $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
                $('#success_modal').modal('show');
            },
            error: function(data) {
                console.log('Something is wrong');
                console.log(data);
            }
        }).done(function(){
            $('#pending_accounts').load(document.URL + ' #pending_accounts');
            });
    });
}

function validationProposalFormA1()
{
  if($("#inclusive-date1").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#inclusive-date2").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#venue").val().length === 0){

    return "Venue is required";

  } else if($("#rationale_and_contextualization").val().length === 0){
    //var test = $("#rationale_and_contextualization").get(0);
    return "Rationale and Contextualization is required";

  } else if($("#goal_objectives_and_outcomes").val().length === 0){

    return "Goal and Objectives is required";

  } else if($("#participants_partners_and_beneficiaries").val().length === 0){

    return "Participants are required";

  } else if($("input[name='unit_responsible[]']:checked").length === 0) {

    return "Unit responsible is required";

  } else if($("input[name='nature_of_the_program[]']:checked").length === 0 ) {
  
    return "Nature of program is required";
    
  } else if($("input[name='prelimasschoice_contextdimension[]']:checked").length == 0){

    return "Contextual Dimension is required";

  } else if($("input[name='hours_needed_to_prepare']").val().length === 0) {

    return "Number of hours to prepare the PPA is required";

  } else if($("textarea[name='preparation_expertise_needed_faculty_members']").val().length === 0){

    return "All Human resource implications are required";

  } else if($("textarea[name='preparation_expertise_needed_students']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='preparation_roles_faculty_members']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='preparation_roles_students']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='implementation_expertise_needed_faculty_members']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='implementation_expertise_needed_students']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='implementation_roles_faculty_members']").val().length === 0) {

    return "All Human resource implications are required";

  } else if($("textarea[name='implementation_roles_students']").val().length === 0) {

    return "All Human resource implications are required";

  } else if(!$("input:radio[name='semester']").is(":checked")) {
    
    return "Time frame for the proposal is required";

  } else {
    return true;
  }
}

function validationProposalFormA()
{
  if($("#inclusive-date1").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#inclusive-date2").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#venue").val().length === 0){

    return "Venue is required";

  } else if($("#rationale_and_contextualization").val().length === 0){
    //var test = $("#rationale_and_contextualization").get(0);
    return "Rationale and Contextualization is required";

  } else if($("#goal_objectives_and_outcomes").val().length === 0){

    return "Goal and Objectives is required";

  } else if($("#participants_partners_and_beneficiaries").val().length === 0){

    return "Participants are required";

  } else {
    return true;
  }

function validationProposalFormC()
{
  if($("#inclusive-date1").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#inclusive-date2").val().length === 0){

    return "Inclusive dates are required";

  } else if($("#venue").val().length === 0){

    return "Venue is required";

  } else if($("#rationale_and_contextualization").val().length === 0){
    //var test = $("#rationale_and_contextualization").get(0);
    return "Rationale and Contextualization is required";

  } else if($("#goal_objectives_and_outcomes").val().length === 0){

    return "Goal and Objectives is required";

  } else if($("#participants_partners_and_beneficiaries").val().length === 0){

    return "Participants are required";

  } else if($("input[name='requester[]']:checked").length === 0) {

    return "Requester is required";

  } else if($("input[name='mode_of_request[]']:checked").length === 0 ) {
  
    return "Mode of request is required";
    
  } else if($("input[name='nature_of_the_program[]']:checked").length == 0){

    return "Nature of the program is required";

  } else if($("input[name='proram_area[]']:checked").length === 0) {

    return "Program area is required";
  } else {
    return true;
  }
}

}