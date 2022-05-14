// route 
var rProsesTambahKaryawan = server + "app/karyawan/tambah/proses";
var rProseHapusKaryawan = server + "app/karyawan/hapus/proses";
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
        },
        deleteAtc : function(username)
        {
            confirmQuest('info', 'Konfirmasi', 'Delete divisi ...?', function (x) {deleteConfirm(username)});
        }
    }
});

// inisialisasi 
$("#tblDataKaryawan").dataTable();

function deleteConfirm(username)
{
    let ds = {'username':username}
    axios.post(rProseHapusKaryawan, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Data karyawan baru berhasil hapus ...'); 
            $("#modalEditDivisi").modal("hide");
            setTimeout(function(){
                renderPage('app/karyawan', 'Data Karyawan');
            }, 300);
    });
}

function prosesTambahKaryawan()
{
    let dField = ['txtNamaLengkap', 'txtUsername','txtTempatLahir','txtPassword','txtEmail','txtHp','txtNip','txtAlamat'];
    cekForm(dField);
    if(appKaryawan.statusForm === false){
        pesanUmumApp('warning', 'Fill field !!!', 'Harap isi seluruh field !!!');
    }else{
        let nama = document.querySelector("#txtNamaLengkap").value;
        let tanggalLahir = document.querySelector("#txtTanggalLahir").value;
        let username = document.querySelector("#txtUsername").value;
        let tempatLahir = document.querySelector("#txtTempatLahir").value;
        let password = document.querySelector("#txtPassword").value;
        let email = document.querySelector("#txtEmail").value;
        let jk = document.querySelector("#txtJk").value;
        let hp = document.querySelector("#txtHp").value;
        let divisi = document.querySelector("#txtDivisi").value;
        let alamat = document.querySelector("#txtAlamat").value;
        let nip = document.querySelector("#txtNip").value;
        let ds = {
            'nama' : nama,
            'tanggalLahir' : tanggalLahir,
            'username' : username,
            'tempatLahir' : tempatLahir,
            'password' : password,
            'email' : email,
            'jk' : jk,
            'hp' : hp,
            'divisi' : divisi,
            'alamat' : alamat,
            'nip' : nip
        }
        axios.post(rProsesTambahKaryawan, ds).then(function(res){
            pesanUmumApp('success', 'Sukses', 'Data karyawan baru berhasil disimpan ...'); 
            $("#modalEditDivisi").modal("hide");
            setTimeout(function(){
                renderPage('app/karyawan', 'Data Karyawan');
            }, 300);
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