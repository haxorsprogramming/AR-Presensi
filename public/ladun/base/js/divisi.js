// route 
var rProsesTambahDivisi = server + "app/divisi/tambah/proses";
var rProsesUpdateDivisi = server + "app/divisi/update/proses";
// vue object 
var appDivisi = new Vue({
    el : '#divDivisi',
    data : {
        kdDivisiEdit : ''
    },
    methods : {
        tambahDivisiAtc : function()
        {
            $("#modalTambahDivisi").modal("show");
        },
        prosesTambahData : function()
        {
            prosesTambahData();
        },
        editAtc : function(kdDivisi)
        {
            appDivisi.kdDivisiEdit = kdDivisi;
            editDivisi(kdDivisi);
        },
        prosesUpdateDivisi : function()
        {
            confirmQuest('info', 'Konfirmasi', 'Update divisi ...?', function (x) {updateConfirm(appDivisi.kdDivisiEdit)});
        }
    }
});
// inisialisasi & fungsi
$("#tblDataDivisi").dataTable();

function updateConfirm(kdDivisi)
{
    // let kdDivisi = appDivisi.kdDivisiEdit;
    let nama = document.querySelector("#txtNamaDivisiEdit").value;
    if(nama.length < 5){
        pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
    }else{
        let keterangan = document.querySelector("#txtKeterangan").value;
        let ds = {'nama':nama, 'keterangan':keterangan, 'kdDivisi':kdDivisi}
        axios.post(rProsesUpdateDivisi, ds).then(function(res){
            pesanUmumApp('success', 'Sukses', 'Data divisi berhasil di update ...'); 
            $("#modalEditDivisi").modal("hide");
            setTimeout(function(){
                renderPage('app/divisi', 'Data Divisi');
            }, 300);
            
        });
    }
}

function editDivisi(kdDivisi)
{
    axios.get(server + "app/divisi/"+kdDivisi+"/rest").then(function(res){
        console.log(res.data);
        document.querySelector("#txtNamaDivisiEdit").value = res.data.nama_divisi;
        document.querySelector("#txtKeteranganEdit").value = res.data.keterangan;
        $("#modalEditDivisi").modal("show");
    });
}

function prosesTambahData()
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
}