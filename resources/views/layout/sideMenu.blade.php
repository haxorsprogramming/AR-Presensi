<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="javascript:void(0)" onclick="renderPage('main/beranda', 'Dashboard')" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)" onclick="renderPage('main/beranda', 'Monitoring Presensi')" class=" waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Monitoring Presensi</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email-outline"></i>
                        <span>Data Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript:void(0)">Data Karyawan</a></li>
                        <li><a href="javascript:void(0)">Data Divisi</a></li>
                        <li><a href="javascript:void(0)">Kategori Absensi</a></li>
                    </ul>
                </li>

                <li class="menu-title">Laporan</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-buffer"></i>
                        <span>Statistik</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript:void(0)">Alerts</a></li>
                        <li><a href="javascript:void(0)">Buttons</a></li>
                    </ul>
                </li>

                <li class="menu-title">Keamanan</li>

                
                <li>
                    <a href="{{ url('/auth/logout') }}" class=" waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->