﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets_admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets_admin/css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="assets_admin/css/prettyPhoto.css" rel="stylesheet" />
    <link href="assets_admin/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets_admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets_admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <style media="screen">
      .red{
        color: #ffffff!important;
        margin-right: 5px;
        background: #d9534f;
        padding: 3px 5px;
        border-radius: 3px;
      }
      .green{
        color: #ffffff!important;
        margin-right: 5px;
        background: #00ca79;
        padding: 3px 5px;
        border-radius: 3px;
      }
      th{
        text-align: center;
      }
      .mix_all img{
        height: 149.5px;
        margin: 0px auto;
      }
      #loader12{
         position: fixed;
         left: 0px;
         top: 0px;
         width: 100%;
         height: 100%;
         z-index: 9999;
         opacity:0.7;
         background: url("assets/images/loading.gif") center no-repeat #fbfbfb;
       }
    </style>
</head>
<body onload="<?php if($this->session->flashdata('el')=="true"){ echo "add_succ();"; }else{ } ?><?php if($this->session->flashdata('el_error')=="true"){ echo "add_succ_error();"; }else{ } ?>">
  <div id="loader12"></div>
    <div id="wrapper">
      <?php include 'header.php'; ?>
      <!-- /. NAV TOP  -->
      <?php include 'menu.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <h1 class="page-head-line">Events</h1>
              </div>
            </div>

            <!-- /. ROW  -->
              <div class="panel panel-default">
                <div class="panel-heading">
                    Add Event
                </div>
                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#add_img" data-toggle="tab">Add Event</a>
                    </li>
                    <li class="">
                      <a href="#event_tab" data-toggle="tab">Event List</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active in" id="add_img">
                      <hr>
                      <form role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_event" enctype="multipart/form-data">
                       <div class="col-md-6" style="border:1px solid #ddd;">

                       <div class="form-group">
                        <label style="width:100%;margin-top: 15px;">Event Title</label>
                         <input type="text" class="form-control" name="event_title" id="event_title">
                       </div>

                       <div class="form-group">
                        <label style="width:100%;margin-top: 15px;">Event Date</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control" name="event_date" id="event_date">
                        </div>
                        <div class="col-md-3">
                          <input type="time" class="form-control" name="event_time" id="event_time">
                        </div>
                        <div class="col-md-3">
                          <select class="form-control" name="event_time_suffix" id="event_time_suffix">
                            <option value="0">Select</option>
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                          </select>
                        </div>
                       </div>

                       <div class="form-group">
                        <label style="width:100%;margin-top: 15px;">Event Place</label>
                         <input type="text" class="form-control" name="event_place" id="event_place">
                       </div>

                       <div class="form-group">
                        <label style="width:100%;margin-top: 15px;">Event Image</label>
                        <div class="col-lg-4" style="padding-left:0px;">
                           <span class="btn btn-file btn-primary" style="width:100%;">
                             <span class="fileupload-new">Select File</span>
                             <input type="file" name="file1" id="file1">
                           </span>
                        </div>
                        <div class="col-md-8" style="padding-right:0px;">
                          <input type="text" id="file1_name" class="form-control" name="" value="" readonly>
                        </div>
                       </div>

                        <div class="form-group">
                         <label style="width:100%;margin-top: 15px;">Event Description</label>
                          <textarea class="form-control" name="event_desc" id="event_desc"></textarea>
                        </div>

                        <div class="form-group">
                          <button type="submit" onclick="return subm();" class="btn btn-info">Add Event</button>
                        </div>
                      </div>
                     </form>
                    </div>

                    <div class="tab-pane fade" id="event_tab">
                      <hr>
                      <?php
      			          if($event!=null){
      			          foreach($event as $ev){
      		            ?>
                      <div class="col-md-2 col-sm-3" id="<?php echo $ev->id; ?>">
                       <div class="portfolio-item awesome mix_all" data-cat="awesome" >
                        <img src="assets/images/events/<?php echo $ev->event_img; ?>" class="img-responsive " alt="" />
                        <div style="padding-bottom:3px;text-align:center;">
                          <a class="preview btn btn-success btn-xs" title="<?php  ?>" href="assets/images/events/<?php echo $ev->event_img; ?>">
                            <i class="fa fa-eye"></i>
                          </a>
                          <a data-delete="<?php echo $ev->id; ?>" class="btn delete_event btn-danger btn-xs" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                        </div>
                       </div>
                      </div>
                      <?php }} ?>
                    </div>
                  </div>
                </div>
              </div>

             <div class="row">

             </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets_admin/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets_admin/js/bootstrap.js"></script>

    <script src="assets_admin/js/jquery.prettyPhoto.js"></script>
    <script src="assets_admin/js/bootstrap-fileupload.js"></script>
    <script src="assets_admin/js/galleryCustom.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets_admin/js/jquery.metisMenu.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <!-- <script src="assets_admin/js/custom.js"></script> -->

</body>
</html>
<script>
       $(document).ready(function () {
          document.onreadystatechange = function () {
           var state = document.readyState
           if (state == 'complete') {
            setTimeout(function(){
             document.getElementById('interactive');
             //document.getElementById('loader12').style.display='none';
             $("#loader12").css("display", "none");
            },1000);
         }
         }
       });
</script>

<script type="text/javascript">
function subm(){
  if($('#file1_name').val()==''){
    sweetAlert("Error...", "File can't be blank !", "error");
    return false;
  }
}
$(document).ready(function() {

  // $("#file1").change(function (e) {
  //   var fileName = e.target.files[0].name;
  //           $('#file1_name').val(fileName);
  // });


  var _URL = window.URL;

  $("#file1").change(function (e) {
    var file, img;
    var fileName = e.target.files[0].name;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
            var wid=this.width;
            var hei=this.height;
            if (wid=='360' && hei=='585') {
              $('#file1_name').val(fileName);
            }else{
              $('#file1_name').val('');
              sweetAlert("Dimension Error...", "Image size must be Width : 360px and Height :585px !", "error");

            }

        };
        img.src = _URL.createObjectURL(file);
    }
  });

  $(".delete_event").click(function (e) {
              var x=$(this).data('delete');

                    swal({
                      title: "Are you sure?",

                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        $.ajax({
                                type: 'POST',
                                 url:"<?php echo base_url();?>Main_con/delete_event",
                                //url: '<?php echo base_url(); ?>index.php?Main_con/cce_parent_skills/',
                                data: {id:x},
                                success: function(data) {
                                   $('#'+x).remove();
                                   swal(
                                     'Deleted!',
                                     'Your file has been deleted.',
                                     'success'
                                   )
                                }
                            });
                      } else {
                        swal("Your imaginary file is safe!");
                      }
                });



      })

  $(".edit_slider").click(function (e) {
    var x=$(this).data('edit');

    $.ajax({
            type: 'POST',
             url:"<?php echo base_url();?>Main_con/fetch_slider",
            //url: '<?php echo base_url(); ?>index.php?Main_con/cce_parent_skills/',
            dataType:"json",
            data: {id:x},
            success: function(res) {

              console.log(res);
              console.log(res[0].id);
              $('#update').show();
              $('#add').hide();
              $('#header1').val(res[0].text1);
              $('#header2').val(res[0].text2);
              $('#hid').val(res[0].id);
              $('#file1_name').val(res[0].image);
              $('#description').val(res[0].description);




            }
        });

        })
})
function add_succ(){
  swal(
    'Inserted!',
    'Your Event has been Added.',
    'success'
  )
}
function add_succ_error(){
  swal(
    '',
    'Error in page !',
    'error'
  )
}
</script>
