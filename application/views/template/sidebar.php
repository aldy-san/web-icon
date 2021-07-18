        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Home</div>
            </a>

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Profil
            </div>
            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/edit'); ?>">
                    <i class="fas fa-edit"></i>
                    <span>Edit Profil</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pengadaan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pengadaan</span>
                </a>
                <div id="Pengadaan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pengadaan:</h6>
                        <a class="collapse-item text-wrap" href="<?= base_url('penerimaan')?>">Penerimaan</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('formasi')?>">Formasi</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('pengangkatan')?>">Pengangkatan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Mutasi"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mutasi</span>
                </a>
                <div id="Mutasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Mutasi:</h6>
                        <a class="collapse-item text-wrap" href="<?= base_url('kenPangkat')?>">Kenaikan Pangkat/Golongan</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('kenGaji')?>">Kenaikan Gaji Berkala</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('penyMasaKerja')?>">Penyesuaian Masa Kerja</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('penyTunj')?>">Penyesuaian Tunjangan Keluarga</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('alihtugas')?>">Alih Tugas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kesejahteraan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kesejahteraan</span>
                </a>
                <div id="Kesejahteraan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kesejahteraan:</h6>
                        <a class="collapse-item text-wrap" href="<?= base_url('kesehatan')?>">Kesehatan</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('bansos')?>">Bantuan Sosial</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('cuti')?>">Cuti</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pemberhentian"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pemberhentian</span>
                </a>
                <div id="Pemberhentian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pemberhentian:</h6>
                        <a class="collapse-item text-wrap" href="<?= base_url('pensiun')?>">Pensiun</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('pemSendiri')?>">Permintaan Sendiri</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('meninggal')?>">Meninggal Dunia</a>
                        <a class="collapse-item text-wrap" href="<?= base_url('instansi')?>">Keinginan Instansi</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Diklat"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Diklat</span>
                </a>
                <div id="Diklat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Diklat:</h6>
                        <a class="collapse-item text-wrap" href="<?= base_url('diklat')?>">Pendidikan dan Pelatihan</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 