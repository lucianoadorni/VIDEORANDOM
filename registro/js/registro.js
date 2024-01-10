// console.log("hola");

const txtPassword = document.getElementById('txtPassword');

function handdlerPassword() {
    if(txtPassword.type === "password") {
        txtPassword.type = 'text';
    } else {
        txtPassword.type = 'password';
    }
}

function handdlerPassword2() {
    if(txtPassword2.type === "password") {
        txtPassword2.type = 'text';
    } else {
        txtPassword2.type = 'password';
    }
}

function validate() {
    'use strict';
    if (document.getElementById('pass1').value === document.getElementById('pass2').value) {
        return true;
    } else {
        document.getElementById('oculto').style.display = 'block';
        return false;
    }
}