// console.log("hola");

const txtPassword = document.getElementById('txtPassword');

function handdlerPassword() {
    if(txtPassword.type === "password") {
        txtPassword.type = 'text';
    } else {
        txtPassword.type = 'password';
    }
}