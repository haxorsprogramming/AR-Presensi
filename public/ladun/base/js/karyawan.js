// vue object 
var appKaryawan = new Vue({
    el : '#appKaryawan',
    data : {

    },
    methods : {
        tambahKaryawanAtc : function()
        {
            $("#modalTambahKaryawan").modal("show");
        }
    }
});

// inisialisasi 
$("#tblDataKaryawan").dataTable();