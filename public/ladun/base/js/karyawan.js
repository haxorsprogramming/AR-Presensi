// route 
var rProsesTambahKaryawan = server + "app/karyawan/tambah/proses";
// vue object 
var appKaryawan = new Vue({
    el : '#appKaryawan',
    data : {
        statusForm : true
    },
    methods : {
        tambahKaryawanAtc : function()
        {
            $("#modalTambahKaryawan").modal("show");
        },
        simpanDataAtc : function()
        {
            prosesTambahKaryawan();
        }
    }
});

// inisialisasi 
$("#tblDataKaryawan").dataTable();

function prosesTambahKaryawan()
{
    let dField = ['txtNamaLengkap', 'txtUsername','txtTempatLahir','txtPassword','txtEmail','txtHp','txtNip','txtAlamat'];
    cekForm(dField);
    if(appKaryawan.statusForm === false){
        pesanUmumApp('warning', 'Fill field !!!', 'Harap isi seluruh field !!!');
    }else{
        
        axios.post(rProsesTambahKaryawan).then(function(res){
            console.log(res.data);
        });
    }
}

function cekForm(dField)
{
    for(let x = 0; x < dField.length; x++){
        let xForm = document.querySelector("#"+dField[x]).value;
        if(xForm.length === 0){
            appKaryawan.statusForm = false;
        }else{
            appKaryawan.statusForm = true;
        }
    }
}