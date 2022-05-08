// route 
var rProsesTambahDivisi = server + "app/divisi/tambah/proses";

// vue object 
var appDivisi = new Vue({
    el : '#divDivisi',
    data : {

    },
    methods : {
        tambahDivisiAtc : function()
        {
            $("#modalTambahDivisi").modal("show");
        },
        prosesTambahData : function()
        {
            let namaDivisi = document.querySelector("#txtNamaDivisi").value;

            if(namaDivisi.length < 5){
                pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
            }else{
                let keterangan = document.querySelector("#txtKeterangan").value;
                let ds = {'nama':namaDivisi, 'keterangan':keterangan}
                axios.post(rProsesTambahDivisi, ds).then(function(res){
                    pesanUmumApp('success', 'Sukses', 'Data divisi berhasil di tambahkan ...');  
                    $('#modalTambahDivisi').modal('hide');
                    setTimeout(function(){
                        renderPage('app/divisi', 'Data Divisi');
                    }, 300);
                });
            }
        },
        editAtc : function(kdDivisi)
        {
            axios.get(server + "app/divisi/"+kdDivisi+"/rest").then(function(res){
                console.log(res.data);
                $("#modalEditDivisi").modal("show");
            });
        }
    }
});
// inisialisasi 
$("#tblDataDivisi").dataTable();
