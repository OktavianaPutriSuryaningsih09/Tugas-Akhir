<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard_admin') ?>">
                <div class="sidebar-brand-icon ">
                </div>
                <div class=" sidebar-brand-text mx-3">Admin SHUCAKE
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_produk') ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>DATA PRODUK</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>INVOICE PESANAN</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/user') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>DATA USER</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <h6 class="text-center mb-2"><strong>&copy; Shucake</strong></h6></br>
                <h4><a href="#"><i class="fa fa-facebook"></i></a></h4>
                <h4><a href="#"><i class="fa fa-twitter"></i></a></h4>
                <h4><a href="#"><i class="fa fa-instagram"></i></a></h4>


            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <ul class="na navbar-nav navbar-light">
                            </li>
                            <span><strong><?php if ($this->session->userdata('username')) {
                                                echo "Hai, " . $this->session->userdata('username');
                                            ?></strong></span>

                            <div class="topbar-divider d-none d-sm-inline-block"></div>

                            <?php echo anchor('auth/logout', '<div class="btn btn-sm btn-danger">Logout</div>') ?>

                        <?php } else { ?>

                            <li><?php echo anchor('auth/login', 'login'); ?></li>

                        <?php } ?>
                        </ul>


                    </ul>

                </nav>
                <!-- End of Topbar -->