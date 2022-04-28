// vue object 
var appDivisi = new Vue({
    el : '#divDivisi',
    data : {

    },
    methods : {
        tambahDivisiAtc : function()
        {
            $("#myModal").modal("show");
        }
    }
});
// inisialisasi 
$("#tblDataDivisi").dataTable();