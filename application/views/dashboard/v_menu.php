<?php $hal1 = $this->uri->segment(1);?>
<?php $hal2 = $this->uri->segment(2);?>

<li class="nav-level">Menu Utama</li>

<li class="<?=($hal1=='akses')?'active':'';?> treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-settings"></i><span> Pengaturan</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
    <ul class="treeview-menu">
        <li class="<?=($hal1=='akses')?'active':'';?>"><a class="waves-effect waves-dark" href="<?php echo site_url('akses');?>"><i class="icofont icofont-chart-flow-1"></i> Akses</a></li>
        <li><a class="waves-effect waves-dark" href="<?php echo site_url('akun/list');?>"><i class="icofont icofont-users"></i> Akun</a></li>
    </ul>
</li>
<li class="treeview">
    <a class="waves-effect waves-dark" href="<?php echo site_url('akun/list');?>">
        <i class="icon-list"></i><span> Table</span>
    </a>                
</li>

<li class="nav-level">More</li>

<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
    <ul class="treeview-menu">
        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                
                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
            </ul>
        </li>
        <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
        <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
    </ul>
</li>