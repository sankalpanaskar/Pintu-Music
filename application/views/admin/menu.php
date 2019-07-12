<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div text-center" style="min-height:83px;padding:10px 20px;">
                    <img src="<?php echo base_url();?>assets_admin/img/admin.jpg" class="img-thumbnail" />
                    <div class="inner-text">
                      <!--  Admin
                     <br />
                        <small>Last Login : <span>2 Weeks Ago</span> </small> -->
                    </div>
                </div>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'dashboard')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'slider')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>slider"><i class="fa fa-sliders"></i>Slider</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'biography')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>biography"><i class="fa fa-sliders"></i>Biography</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'gallery')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>gallery"><i class="fa fa-image "></i>Gallery</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'music')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>music"><i class="fa fa-music "></i>Music</a>
            </li>
             <li>
                <a class="<?php if(($_SESSION['p_name'] == 'video')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>video"><i class="fa fa-video-camera "></i>Video</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'social_link')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>social_link"><i class="fa fa-link "></i>Social Link</a>
            </li>
            <li>
                <a class="<?php if(($_SESSION['p_name'] == 'event')){ echo 'active-menu'; }else { echo '';  } ?>" href="<?php echo base_url();?>event"><i class="fa fa-calendar "></i>Events</a>
            </li>
        </ul>

    </div>

</nav>
