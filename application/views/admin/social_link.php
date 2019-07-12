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
    <!-- PAGE LEVEL STYLES -->
    <link href="assets_admin/css/prettyPhoto.css" rel="stylesheet" />
    <link href="assets_admin/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets_admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets_admin/css/custom.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
      th, td{
        text-align: center;
      }
      .mix_all img{
        height: 149.5px;
        margin: 0px auto;
      }
      .pp_description{
        font-size: 13px !important;
      }
      .ellipsis {
        overflow:hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 100px;
      }
      .pp_expand{
        display: none !important;
      }
      #image_upload_preview img{ height:100px;width:100px; }
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
<body  onload="<?php if($this->session->flashdata('so')=="true"){ echo "add_succ();"; }else{ } ?><?php if($this->session->flashdata('so_error')=="true"){ echo "add_succ_error();"; }else{ } ?><?php if($this->session->flashdata('so_up')=="true"){ echo "add_up_succ();"; }else{ } ?><?php if($this->session->flashdata('so_up_error')=="true"){ echo "add_up_succ_error();"; }else{ } ?>">
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
                <h1 class="page-head-line">Social Link</h1>
              </div>
            </div>
           <!-- /. ROW  -->
           <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                   Add Social Link
                </div>
                <div class="panel-body">
                  <form id="add_link" role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_social_link" enctype="multipart/form-data">

                   <div class="form-group">
                    <label>Social Title</label>
                    <input class="form-control" type="text" name="header1" id="header1">
                    <p class="help-block hidden">Help text here.</p>
                   </div>

                   <div class="form-group">
                    <label>Social Link</label>
                    <input class="form-control" type="text" name="header2" id="header2">
                    <p class="help-block hidden">Help text here.</p>
                   </div>

                   <div class="form-group">
                    <label style="width:100%;">Social Icon</label>
                    <div class="col-lg-4" style="padding-left:0px;">
                       <span class="btn btn-file btn-primary" style="width:100%;">
                         <span class="fileupload-new">Select image</span>
                         <input type="file" name="file1" id="file1">
                       </span>
                    </div>
                    <div class="col-md-8" style="padding-right:0px;">
                      <input type="text" id="file1_name" class="form-control" name="" value="" readonly>
                    </div>
                   </div>


                   <div class="form-group">
                     <button type="submit" class="btn btn-info" id="" style="margin-top:15px;">Add Link</button>

                   </div>
                  </form>
                  <form id="up_link" role="form" method="post" action="<?php echo base_url(); ?>Main_con/update_social_link" enctype="multipart/form-data" style="display:none;">

                   <div class="form-group">
                    <label>Social Title</label>
                    <input class="form-control" type="text" name="header3" id="header3">
                    <p class="help-block hidden">Help text here.</p>
                   </div>

                   <div class="form-group">
                    <label>Social Link</label>
                    <input class="form-control" type="text" name="header4" id="header4">
                    <p class="help-block hidden">Help text here.</p>
                   </div>

                   <div class="form-group">
                    <label style="width:100%;">Social Icon</label>
                    <div class="col-lg-4" style="padding-left:0px;">
                       <span class="btn btn-file btn-primary" style="width:100%;">
                         <span class="fileupload-new">Select image</span>
                         <input type="file" name="file2" id="file2">
                       </span>
                    </div>
                    <div class="col-md-8" style="padding-right:0px;">
                      <input type="text" id="file2_name" class="form-control" name="file2_name" value="" readonly>
                      <input type="hidden" id="hid" class="form-control" name="hid">
                    </div>
                   </div>


                   <div class="form-group">
                     <button type="submit" class="btn btn-info" id="" style="margin-top:15px;">Update Link</button>

                   </div>
                  </form>
                 </div>
                </div>
               </div>

               <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Slider List
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Social Title</th>
                            <th>Social Link</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $s=1;
              	          if($social_link!=null){
              	          foreach($social_link as $sl){
                          ?>
                          <tr id="<?php echo $sl->id; ?>">
                            <td><?php echo $s; ?></td>
                            <td><?php echo $sl->title1; ?></td>
                            <td><?php echo $sl->title2; ?></td>

                            <td>
                              <img style="width:39px;height:39px;" src="assets/images/social_icon/<?php echo $sl->link1_img;?>" class="img-circle" alt="">
                            </td>
                            <td>
                              <div class="action-buttons" style="width:60px;">
                                <a data-edit="<?php echo $sl->id; ?>" data-title1="<?php echo $sl->title1; ?>" data-title2="<?php echo $sl->title2; ?>" data-img="<?php echo $sl->link1_img; ?>" class="green edit_link" href="javascript:void(0);">
                                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>
                                <a data-delete="<?php echo $sl->id; ?>" class="red delete_link" href="javascript:void(0);">
                                  <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <?php $s++; ?>
                          <?php }} ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>

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
    <!-- <script src="assets_admin/js/bootstrap-fileupload.js"></script> -->
    <script src="assets_admin/js/galleryCustom.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets_admin/js/jquery.metisMenu.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <!-- <script src="assets_admin/js/custom.js"></script> -->
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
    $(document).ready(function() {

      var _URL = window.URL;
      $("#file1").change(function (e) {
        var file, img;
        var fileName = e.target.files[0].name;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
                var wid=this.width;
                var hei=this.height;
                if (wid=='48' && hei=='48') {
                  //alert(fileName);
                  $('#file1_name').val(fileName);
                }else{
                  $('#file1_name').val('');
                  sweetAlert("Dimension Error...", "Image size must be Width : 39px and Height : 39px !", "error");
                  // swal("Image size must be Width : 1920px and Height : 1000px.");
                }

            };
            img.src = _URL.createObjectURL(file);
        }
      });

      $("#file1").change(function (e) {
        var fileName = e.target.files[0].name;
                $('#file1_name').val(fileName);
      });
      $("#file2").change(function (e) {
        var fileName = e.target.files[0].name;
                $('#file2_name').val(fileName);
      });
      $(".delete_link").click(function (e) {
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
                                     url:"<?php echo base_url();?>Main_con/delete_link",
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

          $(".edit_link").click(function (e) {
            $('#up_link').show();
            $('#add_link').hide();
            $('#hid').val($(this).data('edit'));
            $('#header3').val($(this).data('title1'));
            $('#header4').val($(this).data('title2'));
            $('#file2_name').val($(this).data('img'));



                })
    })
    function add_succ(){
      swal(
        'Inserted!',
        'Your Social Link has been Added.',
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
    function add_up_succ(){
      swal(
        'Updated!',
        'Your Social Link has been Added.',
        'success'
      )
    }
    function add_up_succ_error(){
      swal(
        '',
        'Error in page !',
        'error'
      )
    }
    </script>
</body>
</html>
