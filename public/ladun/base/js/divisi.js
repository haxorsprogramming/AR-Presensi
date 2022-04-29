// vue object 
var appDivisi = new Vue({
    el : '#divDivisi',
    data : {

    },
    methods : {
        tambahDivisiAtc : function()
        {
            $('#modalTambahDivisi').appendTo("body").modal('show');
        }
    }
});
// inisialisasi 
$("#tblDataDivisi").dataTable();