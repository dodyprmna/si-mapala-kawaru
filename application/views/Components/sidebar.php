<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= $this->session->userdata('nama_user')?>
                            <span class="user-level"><?= $this->session->userdata('nama_role')?></span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?= base_url('User/form_ubah_password')?>">
                                    <span class="link-collapse">Ubah Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <?php if(in_array('1', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'dashboard') echo'active'?>">
                    <a href="<?= base_url('Dashboard')?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('2', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'program kerja') echo'active'?>">
                    <a href="<?= base_url('Program_kerja')?>">
                        <i class="fas fa-file-alt"></i>
                        <p>Program Kerja</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('3', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'kegiatan') echo'active'?>">
                    <a href="<?= base_url('Kegiatan')?>">
                        <i class="fas fa-file-alt"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('6', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'prestasi') echo'active'?>">
                    <a href="<?= base_url('Prestasi')?>">
                        <i class="fas fa-file-alt"></i>
                        <p>Prestasi</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('12', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'budgeting') echo'active'?>">
                    <a href="<?= base_url('Budgeting')?>">
                        <i class="fas fa-money-bill"></i>
                        <p>Budgeting</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('9', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu) && $menu == 'capaian_kegiatan') echo'active'?>">
                    <a href="<?= base_url('Capaian_kegiatan')?>">
                        <i class="fas fa-trophy"></i>
                        <p>Capaian Kegiatan</p>
                    </a>
                </li>
                <?php endif;?>
                <?php if(in_array('10', explode(',', $this->session->userdata("akses"))) || in_array('11', explode(',', $this->session->userdata("akses")))):?>
                <li class="nav-item <?php if(isset($menu)){ if($menu == 'user' || $menu == 'role' || $menu == 'vendor'){ echo'active'; }} ?>">
                    <a data-toggle="collapse" href="#master" class="collapsed" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if($menu == 'user' || $menu == 'role') echo'show'?>" id="master">
                        <ul class="nav nav-collapse">
                            <?php if(in_array('10', explode(',', $this->session->userdata("akses")))):?>
                            <li class = "<?php if($menu == 'user') echo 'active'?>">
                                <a href="<?= base_url('User')?>">
                                    <span class="sub-item">User</span>
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(in_array('11', explode(',', $this->session->userdata("akses")))):?>
                            <li class = "<?php if($menu == 'role') echo 'active'?>">
                                <a href="<?= base_url('Role')?>">
                                    <span class="sub-item">Role</span>
                                </a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>