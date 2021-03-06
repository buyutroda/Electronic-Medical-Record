<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>E-</b>MR</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>E-</b>Medical Record</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ URL::asset('assets/admin-lte/dist/img/user8-128x128.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <!--<a href="{{ url('admin/profile') }}">-->
                            <img src="{{ URL::asset('assets/admin-lte/dist/img/user8-128x128.jpg') }}" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::user()->name }}
                                <small>
                                    Admin Master
                                </small>
                            </p>
                            <!--</a>-->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('admin/profile') }}" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-danger" style="color: #FFF" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Keluar
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::asset('assets/admin-lte/dist/img/user8-128x128.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="{{ url('admin/profile') }}"><i class="fa fa-circle text-red"></i> Admin Master</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGASI UTAMA</li>
            <li class="active treeview">
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-stethoscope"></i>
                    <span>Pemeriksaan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/checkup/add') }}"><i class="fa fa-circle-o"></i> Tambahkan Pasien</a></li>
                    <li><a href="{{ url('admin/checkup/search') }}"><i class="fa fa-circle-o"></i> Cari Pemeriksaan</a></li>
                    <li><a href="{{ url('admin/checkup/history') }}"><i class="fa fa-circle-o"></i> Pemeriksaan Terdahulu</a></li>
                    <li><a href="{{ url('admin/checkup/future') }}"><i class="fa fa-circle-o"></i> Pemeriksaan Mendatang</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span>Dokter</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/doctor/add') }}"><i class="fa fa-circle-o"></i> Tambahkan Dokter</a></li>
                    <li><a href="{{ url('admin/doctor/manage') }}"><i class="fa fa-circle-o"></i> Manajemen Dokter</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hospital-o"></i>
                    <span>Laboratorium</span>
                    <span class="pull-right-container">
                        <span class="fa fa-angle-left pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/lab/add') }}"><i class="fa fa-circle-o"></i> Tambahkan Laboratorium</a></li>
                    <li><a href="{{ url('admin/lab/manage') }}"><i class="fa fa-circle-o"></i> Manajemen Laboratorium</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-medkit"></i>
                    <span>Farmasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/pharmacy/add') }}"><i class="fa fa-circle-o"></i> Tambahkan Farmasi</a></li>
                    <li><a href="{{ url('admin/pharmacy/manage') }}"><i class="fa fa-circle-o"></i> Manajemen Farmasi</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Pasien</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/patient/add') }}"><i class="fa fa-circle-o"></i> Tambahkan Pasien</a></li>
                    <li><a href="{{ url('admin/patient/manage') }}"><i class="fa fa-circle-o"></i> Manajemen Pasien</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Petunjuk Dokumentasi</span></a></li>
            <li class="header">LABEL</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>