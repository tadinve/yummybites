
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <!-- <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div> -->
                        <div class="pull-left info">
                            <p>Hello,                                <?php echo $username;  ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo $this->config->base_url(); ?>index.php/welcome/admin_home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                                 <a href="<?php echo $this->config->base_url(); ?>index.php/welcome/change_password">
                                <i class="fa fa-dashboard"></i> <span>Change Password</span>
                            </a>
                        </li>
                     
                        </li> 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Gallery</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/gallery_form"><i class="fa fa-angle-double-right"></i> Gallery Images upload</a></li>
                                   
                            </ul>
                           
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Menu</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/menu_form"><i class="fa fa-angle-double-right"></i> Menu Images </a></li>
                        <li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/admin_galleryview"><i class="fa fa-angle-double-right"></i> View Menu</a></li>
<li class="treeview">
                            <a href="<?php echo $this->config->base_url(); ?>index.php/welcome/admin_galleryview">
                                <i class="fa fa-angle-double-right"></i>
                                <span>View category wise</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/gallery_form"><i class="fa fa-angle-double-right"></i> Flower Images </a></li>
                                   
                            </ul>
                           
                        </li>
                            </ul>
                           
                        </li>
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>