<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets_admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets_admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />

    <style media="screen">
      .cus_div{
        box-shadow: 15px 15px 5px #aaaaaa;
        border: 1px solid #aaa;
      }
    </style>
</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="background-image: url(./assets_admin/img/art.png);">
                <h2>Suparna Biswas</h2>
            </div>
        </div>
         <div class="row ">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 cus_div">
            <div class="panel-body">
              <form role="form" id="login_form">
                <hr />
                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="text" id="email" class="form-control" placeholder="Your Username" />
                 </div>
                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" id="password" class="form-control"  placeholder="Your Password" />
                 </div>
                 <div class="form-group">
                  <label class="checkbox-inline">
                   <input type="checkbox" /> Remember me
                  </label>
                  <span class="pull-right">
                   <a href="javascript:void(0);" id="forgot_pass">Forget password ? </a>
                  </span>
                 </div>

                 <a href="javascript:void(0);" class="btn btn-primary " id="login">Login</a>
                 <a href="javascript:void(0);" class="btn btn-primary " id="change_pass">Change Password</a>
                <hr />
                <!-- Not register ? <a href="index-2.html" >click here </a> or go to <a href="index-2.html">Home</a> -->
              </form>

              <form role="form" id="forgot_form" style="display:none;">
                <hr />
                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="text" id="email_1" class="form-control" placeholder="Enter Your Email ID" />
                 </div>
                 <a href="javascript:void(0);" class="btn btn-primary" id="for_save">Submit</a>
                 <a href="javascript:void(0);" class="btn btn-primary" onclick="back();" id="back">Back</a>
                <hr />
              </form>

              <form role="form" id="change_pass_form" style="display:none;">
                <hr />
                <div class="form-group input-group">
                 <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                 <input type="text" id="confirm_code" class="form-control" placeholder="Enter Verification Code" />
                </div>
                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="password" id="re_password" class="form-control" placeholder="Enter New Password" />
                 </div>
                 <!-- <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" id="re_password" class="form-control"  placeholder="Confirm New Password" />
                 </div> -->

                 <a href="javascript:void(0);" class="btn btn-primary" id="pass_change">Change</a>
                 <a href="javascript:void(0);" class="btn btn-primary" onclick="back();" id="back">Back</a>
                <hr />
                <!-- Not register ? <a href="index-2.html" >click here </a> or go to <a href="index-2.html">Home</a> -->
              </form>

            </div>
          </div>
        </div>
    </div>




    <div id="myModal" class="modal fade" role="dialog" style="pointer-events:none;">
      <div class="modal-dialog" style="pointer-events:auto;">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">Verify Your Mail</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" id="mail" placeholder="Enter Your Email">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="mail_ver">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="back();">Close</button>
          </div>
        </div>

      </div>
    </div>
</body>
</html>
<script src="assets_admin/js/jquery-1.10.2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#change_pass').click(function(){
    $("#change_pass_form").show();
    $("#forgot_form").hide();
    $("#login_form").hide();
    $("#myModal").modal();
  })

  $('#forgot_pass').click(function(){
    $("#forgot_form").show();
    $("#change_pass_form").hide();
    $("#login_form").hide();
  })

  $('#login').click(function(){

            var email=$("#email").val();
            var password=$("#password").val();

            $.ajax({
                     type:"POST",
                     url:"<?php echo base_url();?>/Main_con/login_check",
                     data:{email:email,password:password},
                     dataType:"html",
                     success:function(res)
                      {
                        //alert(res);
                           if(res==1)
                           {
                             window.location="<?php echo base_url();?>dashboard";
                           }
                           else{

                             swal(
                               '',
                               'Login Unsuccessfull !',
                               'error'
                             )

                           }

                      }

                   });

          })


    //       $('#login').click(function(){

    //         var email=$("#email").val();
    //         var password=$("#password").val();

    //         $.ajax({
    //            type:"POST",
    //            url:"<?php echo base_url();?>/Main_con/login_check",
    //            data:{email:email,password:password},
    //            dataType:"html",
    //            success:function(res)
    //             {
    //               //alert(res);
    //                  if(res==1)
    //                  {
    //                    window.location="<?php echo base_url();?>dashboard";
    //                  }
    //                  else{

    //                    swal(
    //                      '',
    //                      'Login Unsuccessfull !',
    //                      'error'
    //                    )

    //                  }

    //             }

    //          });

    // })


    $('#for_save').click(function(){

    var email=$("#email_1").val();
		if(email=='')
		{
			swal('Email field must not empty !')
		}else if(email=='nsuparna@yahoo.com')
		{
			$.ajax({
							type: 'POST',
							url:"<?php echo base_url();?>Main_con/send_mailpass",
							data: $('#contact_info').serialize(),
							success: function(data) {
								//alert('hii');
								if(data!='0'){
									swal(
	 								 'Sent!',
	 								 'Your Password sent to your email !.',
	 								 'success'
	 							 )
						 		$('#email_1').val('');
							 }else{
								 swal(
									'Failed!',
									'Mail sent failure !',
									'error'
								)
							 }

							}
					});
		}else{
      swal('Email does not match !')
    }

	});


  $('#mail_ver').click(function(){

    var email=$("#mail").val();
		if(email=='')
		{
			swal('Email field must not empty !')
		}else if(email=='nsuparna@yahoo.com')
		{
      $("#myModal").modal('hide');
      $.ajax({
							type: 'POST',
							url:"<?php echo base_url();?>Main_con/send_verification_code",
							data: $('#contact_info').serialize(),
							success: function(data) {
								//alert('hii');
								if(data!='0'){
									swal(
	 								 'Sent!',
	 								 'Your Password sent to your email !.',
	 								 'success'
	 							 )
						 		//$('#email_1').val('');
							 }else{
								 swal(
									'Failed!',
									'Mail sent failure !',
									'error'
								)
							 }

							}
					});

		}else{
      swal('Email does not match !')
    }

	});

  $('#pass_change').click(function(){

    var c_code=$("#confirm_code").val();
    var re_pass=$("#re_password").val();

		if(c_code=='')
		{
			swal('Please Enter Verification Code !')
		}else{

        $.ajax({
							type: 'POST',
							url:"<?php echo base_url();?>Main_con/change_pass1",
							data: {c_code:c_code,re_pass:re_pass},
              dataType:'html',
							success: function(data) {
								alert(data);
								if(data=='1'){
									swal(
	 								 'Sent!',
	 								 'Your Password sent to your email !.',
	 								 'success'
	 							 )
						 		//$('#email_1').val('');
							 }else{
								 swal(
									'Failed!',
									'Mail sent failure !',
									'error'
								)
							 }

							}
					});
    }

	});


})
function back(){
  document.getElementById("login_form").style.display='block';
  document.getElementById("forgot_form").style.display='none';  document.getElementById("change_pass_form").style.display='none';
}
</script>
