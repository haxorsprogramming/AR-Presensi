@include('layout.headerApp')
@include('layout.sideMenu')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content" >
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row" id="divDashboard">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>@{{ judulPage }}</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">AR Presensi</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@{{ judulPage }}</a></li>
                        </ol>
                    </div>
                </div>
                
            </div>
            <!-- end page title -->
            <div id="divUtama">
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layout.footerApp')