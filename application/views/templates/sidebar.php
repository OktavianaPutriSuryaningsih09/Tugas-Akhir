<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
                <div class="sidebar-brand-icon ">
                </div>
                <div class="sidebar-brand-text mx-3">SHUCAKE </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h5><strong>Kategori Produk</strong></h5>
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/kategori/sponge_cake'); ?>">
                    <i class="fas fa-birthday-cake"></i>
                    <span>SPONGE CAKE</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/kategori/butter_cake'); ?>">
                    <i class="fas fa-birthday-cake"></i>
                    <span>BUTTER CAKE</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/kategori/chiffon_cake'); ?>">
                    <i class="fas fa-birthday-cake"></i>
                    <span>CHIFFON CAKE</span></a>
            </li>
            <!-- Nav Item - Tables -->




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/profile/profile'); ?>">
                    <span>MY PROFILE</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/transaksi/riwayat_transaksi'); ?>">
                    <span>HISTORY TRANSAKSI</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/welcome/about_us'); ?>">
                    <span>ABOUT US</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/welcome/contact'); ?>">
                    <span>CONTACT</span></a>
            </li>
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



                        <!-- Dropdown-->


                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-light">
                                <li>
                                    <?php
                                    $keranjang = '<i class="fas fa-shopping-cart">&nbsp;</i>' . $this->cart->total_items() . ' items'
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-inline-block"></div>
                            <ul class="na navbar-nav navbar-light">
                                <li class="ml-2">
                                    <span><strong><?php if ($this->session->userdata('username')) {
                                                        echo "Hai, " . $this->session->userdata('username');
                                                    } ?></span></strong>
                                </li>
                            </ul>
                            <div class="topbar-divider d-none d-sm-inline-block"></div>

                            <ul class="na navbar-nav navbar-light">
                                <?php if ($this->session->userdata('username')) { ?>

                                    <?php echo anchor((base_url() . 'auth/logout'), '<div class="btn btn-sm btn-danger">Logout</div>') ?>
                                <?php } else { ?>

                                    <li class="ml-2"><a href="<?php echo base_url('auth/login') ?>" class="btn btn-sm btn-dark">Masuk</a>
                                    </li>

                                    <li class="ml-2"><a href="<?php echo base_url('registrasi') ?>" class="btn btn-sm btn-primary">Daftar</a></li>

                                <?php } ?>
                            </ul>
                        </div>



                    </ul>

                </nav>
                <!-- End of Topbar -->