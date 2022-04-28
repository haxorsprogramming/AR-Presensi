<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <p>© 2022 AR-Presensi – Sistem Presensi Simpel Terbaik | Develop by
                    <a href="http://tukanglemari.com" class="link link--gray">Aditia Darma Nst</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('ladun/lexa/') }}/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('ladun/lexa/') }}/assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('ladun/lexa/') }}/assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<!--Morris Chart-->
<script src="{{ asset('ladun/lexa/') }}/assets/libs/morris.js/morris.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/raphael/raphael.min.js"></script>

<!-- Required datatable js -->
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/jszip/jszip.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('ladun/lexa/') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


<script src="{{ asset('ladun/lexa/') }}/assets/js/app.js"></script>

<script>
    const server = "{{ url('') }}/";
</script>

<script src="{{ asset('ladun/base/') }}/js/mainApp.js"></script>

</body>

</html>