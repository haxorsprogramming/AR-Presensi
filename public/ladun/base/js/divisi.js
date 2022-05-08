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
            $('#modalTambahDivisi').appendTo("body").modal('show');
        },
        prosesTambahData : function()
        {
            let namaDivisi = document.querySelector("#txtNamaDivisi").value;
            // console.log(namaDivisi);
            console.log(namaDivisi);
            if(namaDivisi.length < 5){
                pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
            }else{
                let keterangan = document.querySelector("#txtKeterangan").value;
                let ds = {'nama':namaDivisi, 'keterangan':keterangan}
                axios.post(rProsesTambahDivisi, ds).then(function(res){
                    // pesanUmumApp('success', 'Sukses', 'Data divisi berhasil di tambahkan ...');
                    $('#modalTambahDivisi').appendTo("body").modal('hide');
                    setTimeout(function(){
                        renderPage('app/divisi', 'Data Divisi');
                    }, 1000);
                });
            }
        },
        editAtc : function(kdDivisi)
        {
            console.log(kdDivisi);
        }
    }
});
// inisialisasi 
$("#tblDataDivisi").dataTable();