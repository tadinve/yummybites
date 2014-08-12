<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>YummyBites | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo $this->config->base_url(); ?>adminpanel/css/AdminLTE.css" rel="stylesheet" type="text/css" />
 
     <link href="<?php echo $this->config->base_url(); ?>assets/css/validationEngine.jquery.css" rel="stylesheet">
               <link href="<?php echo $this->config->base_url(); ?>assets/css/template.css" rel="stylesheet">
               <script src="<?php echo $this->config->base_url(); ?>assets/js/jquery-1.8.2.min.js" type="text/javascript"></script>
               <script src="<?php echo $this->config->base_url(); ?>assets/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
               <script src="<?php echo $this->config->base_url(); ?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  
   
           <script>
              jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#formid").validationEngine();
        });

       </script>
    <script>
        /**
        * 
        * @param {input[type=checkbox]} the checkbox to read
        * @param {input[type=textbox]} the field bound to the checkbox that gets enabled or disabled
        */
            function ToggleState(checkbox, field) {
                    if ($(checkbox).attr('checked'))
                        $(field).attr('disabled', 'disabled');
                    else
                        $(field).removeAttr('disabled');
            }
            </script>




        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>


    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index1" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                YummyBites
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>                               <?php echo $username;  ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                               <!-- <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li> -->
                                <!-- Menu Body -->
                             <!--   <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                   <!-- <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div> -->
                                    <div class="pull-right">
                                        <a href="<?php echo $this->config->base_url(); ?>index.php/welcome/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>