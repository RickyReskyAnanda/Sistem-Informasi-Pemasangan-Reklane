
<div id="page-sidebar" class="gradient-2">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    <li class="header"><span>Overview</span></li>
    
    <li class="no-menu">
        <a href="<?=base_url('admin/dashboard')?>" title="Frontend template">
            <i class="glyph-icon icon-linecons-beaker"></i>
            <span>Beranda</span>
        </a>
    </li>
    <li class="no-menu">
        <a href="<?= base_url('admin/pengajuan');?>" title="Frontend template">
            <i class="glyph-icon icon-linecons-beaker"></i>
            <span>Daftar Pengajuan</span>
            
        </a>
    </li>
    <li class="header"><span>Halaman Persetujuan</span></li>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Daftar Persetujuan</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="<?= base_url('admin/persetujuan/diterima') ?>" title="Buttons"><span>Daftar di Setujui</span></a></li>
                <li><a href="<?= base_url('admin/persetujuan/ditolak')?>" title="Labels & Badges"><span>Daftar di Tolak</span></a></li>
                <li><a href="<?= base_url('admin/persetujuan/belum-lengkap')?>" title="Labels & Badges"><span>Daftar Belum Lengkap</span></a></li>
               
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    
    
   
    <li class="header"><span>Halaman Manajemen User</span></li>
    
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-mail"></i>
            <span>Manajemen User</span>
            <span class="bs-badge badge-danger">3</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="<?= base_url('admin/user/admin')?>" title="Inbox"><span>Manajemen Admin</span></a></li>
                <li><a href="<?= base_url('admin/user/user')?>" title="Compose message"><span>Manajemen User</span></a></li>
               
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
   
    </ul><!-- #sidebar-menu -->


    </div>
</div>