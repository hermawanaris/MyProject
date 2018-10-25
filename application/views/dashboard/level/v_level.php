
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Load view css disini-->
    <?php $this->load->view('dashboard/_mycss');?>
    <!-- Akhir Load view css -->

 </head>
 <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">
    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="<?php echo base_url();?>_assets/ablepro/assets/images/logo.png" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
        
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            
        <ul class="top-nav">
                <!--Notification Menu-->
                    
                
                <li class="dropdown notification-menu">
                    
                    <ul class="dropdown-menu">
                        
                        <li class="bell-notification">
                            
                            </li>
                            
                                
                            </ul>
                        </li>
                        <!-- chat dropdown -->
                        
                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                    </ul>

                    <!-- search -->
                   
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                
                <div class="user-panel">
                    <div class="f-left image"><img src="<?php echo base_url();?>_assets/ablepro/assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                        <p>John Doe</p>
                        <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="profile.html">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                            <span class="menu-text">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-logout"></i>
                            <span class="menu-text">Logout</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">Navigation</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="index.html">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>                
                    </li>
                    <?php $this->load->view('dashboard/v_menu');?>
                </ul>
            </section>
        </aside>
        <!-- Sidebar chat start -->
    </div>
</div>
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Master Level</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#!">Daftar Level </a>
                </li>
                <li class="breadcrumb-item"><a href="">Level</a>
                </li>
            </ol>
        </div>
        <div class="col-sm-12">
            <?php $this->load->view('dashboard/level/v_level_list');?>      
            <?php $this->load->view('dashboard/level/v_level_add');?>
        </div>
    </div>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<!-- 3-1-block end -->

<!-- 2-1 block start -->

<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->

</div>
</div>

<!-- Load view javascript disini -->
<?php $this->load->view('dashboard/_myjs.php'); ?>
<!-- Akhir Load view javascript -->

</body>
</html>
