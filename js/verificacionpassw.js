function verificarPasswords() {
 
    pass1 = document.getElementById('pass1');
    pass2 = document.getElementById('pass2');
 
    if (formulario.pass1.value != formulario.pass2.value ) {
        
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> contraseñas ingresadas no coinciden. </div>';
        formulario.pass1.value = "";
        formulario.pass2.value = "";
        formulario.pass1.focus();
        return false;
    } else {
 
        document.getElementById("alerta").innerHTML = "";
 
        setTimeout(function() {
            location.reload();
        }, 3000);
 
        return true;
    }
 
}