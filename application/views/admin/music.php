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
      audio{
        width: 100% !important;
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
<body onload="<?php if($this->session->flashdata('ml')=="true"){ echo "add_succ();"; }else{ } ?><?php if($this->session->flashdata('ml_error')=="true"){ echo "add_succ_error();"; }else{ } ?><?php if($this->session->flashdata('cl')=="true"){ echo "add_succ_caller();"; }else{ } ?><?php if($this->session->flashdata('cl_error')=="true"){ echo "add_succ_caller_error();"; }else{ } ?><?php if($this->session->flashdata('dl')=="true"){ echo "add_succ_down();"; }else{ } ?><?php if($this->session->flashdata('dl_error')=="true"){ echo "add_succ_down_error();"; }else{ } ?><?php if($this->session->flashdata('dl_up')=="true"){ echo "add_succ_up_down();"; }else{ } ?><?php if($this->session->flashdata('dl_up_error')=="true"){ echo "add_succ_up_down_error();"; }else{ } ?>">

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
                <h1 class="page-head-line">Music Album</h1>
              </div>
            </div>

            <!-- /. ROW  -->
            <div class="panel panel-default">
              <div class="panel-heading">
                  Music
              </div>
              <div class="panel-body">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#add_img" data-toggle="tab">Add Music</a>
                  </li>
                  <li class="">
                    <a href="#add_call" data-toggle="tab">Add CallerTune</a>
                  </li>
                  <li class="">
                    <a href="#add_d_l" data-toggle="tab">Add Download Link</a>
                  </li>
                  <li class="">
                    <a href="#gallery" data-toggle="tab">Music List</a>
                  </li>
                </ul>
                <div class="tab-content">

                  <div class="tab-pane fade active in" id="add_img">
                    <hr>
                    <form role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_music" enctype="multipart/form-data">
                      <div class="col-md-8">
                        <div class="form-group">
                         <label style="width:100%;">Thumbnail Image</label>
                         <div class="col-lg-4" style="padding-left:0px;">
                            <span class="btn btn-file btn-primary" style="width:100%;">
                              <span class="fileupload-new">Select Image</span>
                              <input type="file" name="file2" id="file2" accept="image/jpeg,image/png">
                            </span>
                         </div>
                         <div class="col-md-8" style="padding-right:0px;">
                           <input type="text" id="file1_name" class="form-control" name="" value="" readonly>
                         </div>
                        </div>

                       <div class="form-group">
                        <label style="width:100%;margin-top: 15px;">Upload File(.mp3)</label>
                        <div class="col-lg-4" style="padding-left:0px;">
                           <span class="btn btn-file btn-primary" style="width:100%;">
                             <span class="fileupload-new">Select File</span>
                             <input type="file" name="file3" id="file3" accept="audio/mp3">
                           </span>
                        </div>
                        <div class="col-md-8" style="padding-right:0px;">
                          <input type="text" id="file2_name" class="form-control" name="" value="" readonly>
                        </div>
                       </div>

                       <div class="form-group">
                        <label style="width:100%;margin-top:15px;">Artist Name</label>
                        <input type="text" class="form-control" name="artist_name" id="" />
                       </div>

                       <div class="form-group">
                        <label>Music Title</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                       </div>
                       <button type="submit" class="btn btn-info" onclick="return subm();">Add Music</button>
                     </div>
                    </form>
                   </div>

                  <div class="tab-pane fade in" id="add_call">
                    <hr>
                    <div class="col-md-4" style="border:1px solid #ddd;">
                      <form role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_caller_tune" enctype="multipart/form-data">
                        <div class="form-group">
                         <label style="width:100%;">Music</label>
                         <select class="form-control" name="music" id="music">
                           <option value="0">Select Music</option>
                           <?php if($music!=null){
                             foreach($music as $ms)
                             {  ?>
                               <option value="<?php echo $ms->id; ?>"><?php echo $ms->music_title; ?></option>
                           <?php }} ?>
                         </select>
                        </div>
                        <div class="form-group">
                         <label style="width:100%;">Provider</label>
                         <select class="form-control" name="provider" id="provider">
                           <option value="0">Select Provider</option>

                           <?php if($provider!=null){
                             foreach($provider as $pr)
                             {  ?>
                               <option value="<?php echo $pr->id; ?>"><?php echo $pr->name; ?></option>

                         <?php }} ?>
                         </select>
                        </div>
                        <div class="form-group">
                         <label style="width:100%;">CallerTune Code</label>
                         <input type="text" class="form-control" name="call_code" id="call_code" />
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-info">Add CallerTune</button>
                        </div>
                      </form>
                    </div>

                    <div class="col-md-8">
                     <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Music</th>
                            <th>Provider</th>
                            <th>Code</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if($caller!=null){
                            $s=1;
                            foreach($caller as $cl)
                            {
                              $c = $this->db->get_where('music_tbl', array('id' => $cl->music_id))->result();
                              $c1 = $this->db->get_where('provider', array('id' => $cl->provider))->result();
                              ?>
                          <tr id="<?php echo $cl->id; ?>">
                            <td><?php echo $s; ?></td>
                            <td><?php echo $c[0]->music_title; ?></td>
                            <td><?php echo $c1[0]->name; ?></td>
                            <td><?php echo $cl->caller_code; ?>/</td>
                            <td>
                              <div class="action-buttons" style="width:60px;margin:0px auto;">
                                <!-- <a data-edit="<?php echo $sl->id; ?>" class="green edit_slider" href="javascript:void(0);">
                                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a> -->
                                <a data-delete="<?php echo $cl->id; ?>" class="red delete_caller" href="javascript:void(0);">
                                  <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                        <?php $s++; }} ?>
                        </tbody>
                      </table>
                     </div>
                    </div>

                  </div>

                  <div class="tab-pane fade in" id="add_d_l">
                    <hr>
                     <div class="col-md-4" style="border:1px solid #ddd;">
                      <form id="add_down" role="form" method="post" action="<?php echo base_url(); ?>Main_con/add_download" enctype="multipart/form-data">
                        <div class="form-group">
                         <label style="width:100%;">Music</label>
                         <select class="form-control" name="music" id="music">
                           <option value="0">Select Music</option>
                           <?php if($music!=null){
                             foreach($music as $ms)
                             {  ?>
                               <option value="<?php echo $ms->id; ?>"><?php echo $ms->music_title; ?></option>
                           <?php }} ?>
                         </select>
                        </div>
                        <div class="form-group">
                         <label style="width:100%;">Website/ App Name</label>
                         <input type="text" class="form-control" name="app_name" id="app_name" />
                        </div>
                        <div class="form-group">
                         <label style="width:100%;">Link</label>
                         <input type="text" class="form-control" name="app_link" id="app_link" />
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-info">Add Download Link</button>
                        </div>
                       </form>
                       <form id="up_down" role="form" method="post" action="<?php echo base_url(); ?>Main_con/update_download" enctype="multipart/form-data" style="display:none;">
                         <div class="form-group">
                          <label style="width:100%;">Music</label>
                          <select class="form-control" name="music1" id="music1">
                            <option value="0">Select Music</option>
                            <?php if($music!=null){
                              foreach($music as $ms)
                              {  ?>
                                <option value="<?php echo $ms->id; ?>"><?php echo $ms->music_title; ?></option>
                            <?php }} ?>
                          </select>
                         </div>
                         <div class="form-group">
                          <label style="width:100%;">Website/ App Name</label>
                          <input type="text" class="form-control" name="app_name1" id="app_name1" />
                         </div>
                         <div class="form-group">
                          <label style="width:100%;">Link</label>
                          <input type="text" class="form-control" name="app_link1" id="app_link1" />
                         </div>
                         <div class="form-group">
                          <input type="hidden" class="form-control"  name="hid" id="hid"  />
                           <button type="submit" class="btn btn-info">Update Download Link</button>
                         </div>
                        </form>
                      </div>

                      <div class="col-md-8">
                       <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Music</th>
                              <th>Website/ App Name</th>
                              <th>Link</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php if($down!=null){
                              $s=1;
                              foreach($down as $dw)
                              {
                                $c = $this->db->get_where('music_tbl', array('id' => $dw->music_id))->result();
                                //$c1 = $this->db->get_where('provider', array('id' => $cl->provider))->result();
                                ?>
                            <tr id="<?php echo $dw->id; ?>">
                              <td><?php echo $s; ?></td>
                              <td><?php echo $c[0]->music_title; ?></td>
                              <td><?php echo $dw->app_name; ?></td>
                              <td><?php echo $dw->app_link; ?>/</td>
                              <td>
                                <div class="action-buttons" style="width:60px;margin:0px auto;">
                                  <a data-edit="<?php echo $dw->id; ?>" data-appname="<?php echo $dw->app_name; ?>" data-applink="<?php echo $dw->app_link; ?>" data-music="<?php echo $dw->music_id; ?>" class="green edit_download" href="javascript:void(0);">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                  </a>
                                  <a data-delete="<?php echo $dw->id; ?>" class="red delete_download" href="javascript:void(0);">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php $s++; }} ?>
                          </tbody>
                        </table>
                       </div>
                      </div>

                  </div>

                    <div class="tab-pane fade in" id="gallery">
                      <hr>
                      <div class="row">
                        <?php if($music!=null){
                          foreach($music as $ms)
                          {  ?>
                        <div class="col-md-3" id=<?php echo $ms->id; ?>>
                          <audio controls controlsList="nodownload">
                            <source src="assets/music/<?php echo $ms->mp3_file; ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                          </audio>
                          <div style="padding-bottom:3px;text-align:center;">
                            <a class="preview btn btn-success btn-xs" title="" href="assets/music/thumb/<?php echo $ms->thumb_img; ?>">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a data-delete="<?php echo $ms->id; ?>" class="btn delete_music btn-danger btn-xs" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </div>
                        </div>
                      <?php }} ?>

                      </div>
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
  if($('#file1_name').val()=='' || $('#file2_name').val()==''){
    sweetAlert("Error...", "File can't be blank !", "error");
    return false;
  }
}

$(document).ready(function() {
  //var _URL = window.URL;
  // $("#file2").change(function (e) {
  //   var fileName = e.target.files[0].name;
  //           $('#file1_name').val(fileName);
  // });
  var _URL = window.URL;

  $("#file3").change(function (e) {
    var fileName = e.target.files[0].name;
            //$('#file2_name').val(fileName);
            //alert(fileName);
             if(fileName.indexOf(' ') ==-1){
               $('#file2_name').val(fileName);
             }else {
               $('#file2_name').val('');
               //alert(blank);
               swal(
                 'Try again',
                 'File name must not contain any space !',
                 'error'
               )
             }


  });


  $("#file2").change(function (e) {
    var file, img;
    var fileName = e.target.files[0].name;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
            var wid=this.width;
            var hei=this.height;
            if (wid=='95' && hei=='95') {
              $('#file1_name').val(fileName);
            }else{
              $('#file1_name').val('');
              sweetAlert("Dimension Error...", "Image size must be Width : 95px and Height :95px !", "error");

            }

        };
        img.src = _URL.createObjectURL(file);
    }
  });

  $(".delete_music").click(function (e) {
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
                                 url:"<?php echo base_url();?>Main_con/delete_music",
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

  $(".delete_download").click(function (e) {
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
                                 url:"<?php echo base_url();?>Main_con/delete_download",
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
      $(".delete_caller").click(function (e) {
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
                                     url:"<?php echo base_url();?>Main_con/delete_caller",
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

  $(".edit_download").click(function (e) {
    $('#up_down').show();
    $('#add_down').hide();
    $('#hid').val($(this).data('edit'));
    $('#app_name1').val($(this).data('appname'));
    $('#app_link1').val($(this).data('applink'));
    $("#music1 option[value="+$(this).data('music')+"]").attr("selected", true);



        })
})
function add_succ(){
  swal(
    'Inserted!',
    'Your Music has been Added.',
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
function add_succ_caller(){
  swal(
    'Inserted!',
    'Your Caller Tune has been Added.',
    'success'
  )
}
function add_succ_caller_error(){
  swal(
    '',
    'Error in page !',
    'error'
  )

}
function add_succ_down(){
  swal(
    'Inserted!',
    'Your Link has been Added.',
    'success'
  )
}
function add_succ_down_error(){
  swal(
    '',
    'Error in page !',
    'error'
  )


}
function add_succ_up_down(){
  swal(
    'Updated!',
    'Your Link has been updated.',
    'success'
  )
}
function add_succ_up_down_error(){
  swal(
    '',
    'Error in page !',
    'error'
  )


}

</script>
