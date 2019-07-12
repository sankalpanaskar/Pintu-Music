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
      article iframe{
        width: 100% !important;
        height: 240px !important;
      }
      p{
        margin-bottom: 0 !important;
        padding: 0px 10px;
      }
      .desc_p{
        white-space: nowrap;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
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
<body  onload="<?php if($this->session->flashdata('vl')=="true"){ echo "add_succ();"; }else{ } ?><?php if($this->session->flashdata('vl_error')=="true"){ echo "add_succ_error();"; }else{ } ?>">
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
                <h1 class="page-head-line">Video</h1>
              </div>
            </div>
           <!-- /. ROW  -->
           <div class="panel panel-default">
             <div class="panel-heading">
                 Video
             </div>
             <div class="panel-body">
               <ul class="nav nav-tabs">
                 <li class="active"><a href="#add_img" data-toggle="tab">Add Video</a>
                 </li>
                 <li class="">
                   <a href="#gallery" data-toggle="tab">Video List</a>
                 </li>
               </ul>
               <div class="tab-content">
                 <div class="tab-pane fade active in" id="add_img">
                   <hr>
                   <form role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_video" enctype="multipart/form-data">
                     <div class="col-md-8">
                       <div class="form-group">
                        <label>Video Title</label>
                        <input class="form-control" name="title" type="text">
                        <p class="help-block hidden">Help text here.</p>
                       </div>
                       <div class="form-group">
                        <label>Video Link</label>
                        <input class="form-control" name="link" type="text" placeholder="Example : https://www.youtube.com/watch?v=_ASOXXCnt2U">
                        <p class="help-block hidden">Help text here.</p>
                       </div>

                       <div class="form-group">
                        <label>Date</label>
                        <input class="form-control" name="v_date" type="date" placeholder="dd-mm-yyy">
                        <p class="help-block hidden">Help text here.</p>
                       </div>

                       <div class="form-group">
                        <label>Category</label>
                        <input class="form-control" name="v_type" type="text">
                        <p class="help-block hidden">Help text here.</p>
                       </div>

                       <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                       </div>

                       <button type="submit" class="btn btn-info">Add Video</button>
                     </div>
                   </form>
                  </div>

                   <div class="tab-pane fade" id="gallery">
                     <hr>
                     <div class="row" >
                     <?php if($video!=null){
                       foreach($video as $vd)
                       {  ?>
                       <div class="col-md-3" id="<?php echo $vd->id; ?>">
                        <div class="" style="border:1px solid #ddd;">
                         <iframe width="100%" height="" src="<?php echo $vd->video_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         <!-- <span><?php echo $vd->video_link; ?></span> -->
                         <p><?php echo $vd->video_title; ?>  </p>
                         <p><?php echo $vd->video_date; ?></p>
                         <p class="desc_p"><?php echo $vd->description; ?></p>
                         <div style="padding-bottom:3px;text-align:center;">
                           <a data-delete="<?php echo $vd->id; ?>" class="btn delete_video btn-danger btn-xs" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                         </div>
                        </div>
                       </div>
                      <?php }} ?>
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

    <script src="assets_admin/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets_admin/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets_admin/js/custom.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      //var _URL = window.URL;


      $(".delete_video").click(function (e) {
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
                                     url:"<?php echo base_url();?>Main_con/delete_video",
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
        'Your Video has been Added.',
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

</body>
</html>
