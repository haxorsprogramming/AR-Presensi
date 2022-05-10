<div class="collapse navbar-collapse" id="topnav-menu-content">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="renderPage('main/beranda', 'Dashboard')">
                <i class="mdi mdi-storefront mr-2"></i>Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="renderPage('app/apriori/setup', 'Proses Apriori')">
                <i class="mdi mdi-equalizer-outline mr-2"></i>Monitoring Absensi
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-database mr-2"></i>Data Master <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-layout">
                <a href="javascript:void(0)" onclick="renderPage('app/karyawan', 'Data Karyawan')" class="dropdown-item">Data Karyawan</a>
                <a href="javascript:void(0)" onclick="renderPage('app/divisi', 'Data Divisi')" class="dropdown-item">Data Divisi</a>
                <a href="javascript:void(0)" class="dropdown-item">Kategori Absensi</a>
            </div>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="renderPage('app/laporan/data', 'Laporan Apriori')">
                <i class="mdi mdi-file-document-box-search mr-2"></i>Laporan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="renderPage('app/info-aplikasi', 'Informasi Aplikasi')">
                <i class="mdi mdi-information mr-2"></i>Info Aplikasi
            </a>
        </li>
    </ul>
</div>