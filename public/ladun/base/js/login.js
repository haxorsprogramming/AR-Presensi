// route 
var rToLoginProcess = server + "auth/login/process";
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
            console.log(res.data);
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