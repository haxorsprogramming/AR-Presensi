// route 
var rToLoginProcess = server + "auth/login/process";
var rToDashboard = server + "main/dashboard";
// vue object 
var loginApp = new Vue({
    el : '#loginApp',
    data : {

    },
    methods : {
        loginAtc : function()
        {
            loginProses();
        }
    }
});
// inisialisasi 
document.querySelector("#txtUsername").focus();

function loginProses()
{
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;

    if(username.length < 5 || password.length < 5){
        pesanUmumApp('warning', 'Fill field !!!', 'Harap lengkapi field !!!');
    }else{
        let ds = {'username':username, 'password':password}
        axios.post(rToLoginProcess, ds).then(function(res){
            if(res.data.status === 'NO_USER'){
                pesanUmumApp('warning', 'No user !!!', 'Tidak ada user terdaftar !!!');
            }else if(res.data.status === 'WRONG_PASSWORD'){
                pesanUmumApp('warning', 'Wrong password !!!', 'Username / password salah !!!');
            }else{
                window.location.assign(rToDashboard);
            }
        });
    }

}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}