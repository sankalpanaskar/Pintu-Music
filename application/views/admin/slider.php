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

        .save_wait_anim {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          opacity: 0.7;
          background: url("assets/images/loading.gif") center no-repeat #fbfbfb;
      }
    </style>
</head>
<body class="no-skin" onload="<?php if($this->session->flashdata('sl')=="true"){ echo "add_succ();"; }else{ } ?><?php if($this->session->flashdata('sl_error')=="true"){ echo "add_succ_error();"; }else{ } ?><?php if($this->session->flashdata('sl_up')=="true"){ echo "add_succ_up();"; }else{ } ?><?php if($this->session->flashdata('sl_up_error')=="true"){ echo "add_succ_up_error();"; }else{ } ?>">
  <div id="loader12"></div>
  <div id="loader"></div>
    <div id="wrapper">
      <?php include 'header.php'; ?>
      <!-- /. NAV TOP  -->
      <?php include 'menu.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <h1 class="page-head-line">Image Slider</h1>
              </div>
            </div>
           <!-- /. ROW  -->
           <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Tabs
                </div>
                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li class="active" id="ad">
                      <a href="#add_slider_tab" data-toggle="tab" id="x">Add Image</a>
                    </li>
                    <li class="" id="gl">
                      <a href="#slider_list_tab" data-toggle="tab">Gallery</a>
                    </li>
                  </ul>

                <div class="tab-content">
                  <div class="tab-pane fade active in" id="add_slider_tab">
                    <hr>
                    <form role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_slider" enctype="multipart/form-data">
                      <div class="col-md-6" style="border:1px solid #ddd;">

                       <div class="form-group">
                        <label>1st Header</label>
                        <input class="form-control" type="text" name="header1" id="header1">
                        <p class="help-block hidden">Help text here.</p>
                       </div>

                       <div class="form-group">
                        <label>2nd Header</label>
                        <input class="form-control" type="text" name="header2" id="header2">
                        <p class="help-block hidden">Help text here.</p>
                       </div>

                       <div class="form-group">
                        <label style="width:100%;">Slider Image</label>
                        <div class="col-lg-4" style="padding-left:0px;">
                           <span class="btn btn-file btn-primary" style="width:100%;">
                             <span class="fileupload-new">Select image</span>
                             <input type="file" name="file1" id="file1">
                           </span>
                        </div>
                        <div class="col-md-8" style="padding-right:0px;">
                          <input type="text" id="file1_name" class="form-control" name="" value="" readonly required>
                        </div>
                       </div>

                       <div class="form-group">
                        <label style="width:100%;">Description</label>
                        <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                       </div>
                        <input type="text" name="hid" style="display:none;" id="hid" class="form-control" value="0">
                       <div class="form-group">
                        <button type="submit" class="btn btn-info" id="add" onclick="return subm();">Add Slider</button>
                        <button type="submit" class="btn btn-info" id="update" onclick="return subm();" style="display:none;">Update Slider</button>
                       </div>
                      </div>
                     </form>
                    </div>

                    <div class="tab-pane fade" id="slider_list_tab">
                      <hr>
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>1st Text</th>
                              <th>2nd Text</th>
                              <th>Image</th>
                              <th>Dsecribtion</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $s=1;
                            if($slider!=null){
                            foreach($slider as $sl){
                            ?>
                            <tr id="<?php echo $sl->id; ?>">
                              <td><?php echo $s; ?></td>
                              <td><?php echo $sl->text1; ?></td>
                              <td><?php echo $sl->text2; ?></td>
                              <td>
                                <a class="preview btn btn-success btn-xs" title="<?php echo $sl->description; ?>" href="assets/images/slider/<?php echo $sl->image; ?>">
                                  <i class="fa fa-eye"></i>
                                </a>
                              </td>
                              <td>
                                <p class="ellipsis"><?php echo $sl->description; ?></p>
                              </td>
                              <td>
                                <div class="action-buttons" style="width:60px;">
                                  <a data-edit="<?php echo $sl->id; ?>" class="green edit_slider" href="javascript:void(0);">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                  </a>
                                  <a data-delete="<?php echo $sl->id; ?>" class="red delete_slider" href="javascript:void(0);">
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
           </div>
          </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2019 | Design By : <a href="http://www.3ways.in/" target="_blank">3ways.in</a>
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
    function subm(){
      if($('#file1_name').val()==''){
        sweetAlert("Error...", "Image file can't be blank !", "error");
        return false;
      }
    }

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
                if (wid=='1920' && hei=='1000') {
                  //alert(fileName);
                  $('#file1_name').val(fileName);
                }else{
                  $('#file1_name').val('');
                  sweetAlert("Dimension Error...", "Image size must be Width : 1920px and Height : 1000px !", "error");
                  // swal("Image size must be Width : 1920px and Height : 1000px.");
                }

            };
            img.src = _URL.createObjectURL(file);
        }
      });



      $(".delete_slider").click(function (e) {
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
                                     url:"<?php echo base_url();?>Main_con/delete_slider",
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

        $('#gl').removeClass('active');
        $('#ad').addClass('active');
        $('#add_slider_tab').addClass('active in');
        $('#slider_list_tab').removeClass('active in');


        var x=$(this).data('edit');
        $('#loader').addClass('save_wait_anim');
        $.ajax({
                type: 'POST',
                 url:"<?php echo base_url();?>Main_con/fetch_slider",
                //url: '<?php echo base_url(); ?>index.php?Main_con/cce_parent_skills/',
                dataType:"json",
                data: {id:x},
                success: function(res) {
                  $('#loader').removeClass('save_wait_anim');
                //  console.log(res);
                //  console.log(res[0].id);
                  $('#update').show();
                  $('#add').hide();
                  $('#header1').val(res[0].text1);
                  $('#header2').val(res[0].text2);
                  $('#hid').val(res[0].id);
                  $('#file1_name').val(res[0].image);
                  $('#description').val(res[0].description);

                  $('#header1').focus();

                }
              });
            })
          })

          function add_succ(){
      			swal(
      				'Inserted!',
      				'Your Slider has been Added.',
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
          function add_succ_up(){
      			swal(
      				'Updated!',
      				'Your Slider has been updated.',
      				'success'
      			)
      		}
          function add_succ_up_error(){
      			swal(
      				'',
      				'Error in page !',
      				'error'
      			)
      		}
    </script>
</body>
</html>
