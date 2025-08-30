class FormPersonas {
   
    constructor() {
        this.form = document.getElementById('formPersonas');
    }

    validoInputsIndividual() {
        let formValido = true; //booleano EN VERDADERO +
        const usuario = document.getElementById('user');  //constante info de usuario
        const password = document.getElementById('password'); //constante info de usuario
        const usuarioFeedback = usuario.nextElementSibling.nextElementSibling; // Obtiene el div invalid-feedback
        const passwordFeedback = password.nextElementSibling.nextElementSibling; // Obtiene el div invalid-feedback

        //VALIDACION PARA USUARIO 
        if (usuario.value.trim() === '') { //VACIO
            usuario.classList.add('is-invalid');
            usuario.classList.remove('is-valid');
            usuarioFeedback.textContent = 'El campo Usuario no puede estar vacío.';
            formValido = false;//-
        } else if (usuario.value.trim().length < 3) { //MINIMO 3 CARACTERES
            usuario.classList.add('is-invalid');
            usuario.classList.remove('is-valid');
            usuarioFeedback.textContent = 'El Usuario debe tener al menos 3 caracteres.';
            formValido = false;//-
        } else if (usuario.value.trim().length > 12) { //MAXIMO 12 CARACTERES USUARIO
            usuario.classList.add('is-invalid');
            usuario.classList.remove('is-valid');
            usuarioFeedback.textContent = 'El usuarrio debe tener un maximo de 12 caracteres.';
            formValido = false;//-
        }else {
            usuario.classList.add('is-valid'); //TODO VALIDO SI ENTRA EN ESTE else
            usuario.classList.remove('is-invalid');
            usuario.nextElementSibling.textContent = 'ingreso correctamente'; 
        }
        //VALIDACION DE LA CONTRASENIA
        if (password.value.trim() === '') {   //VACIO
            password.classList.add('is-invalid'); 
            password.classList.remove('is-valid');
            passwordFeedback.textContent = 'La contraseña no puede estar vacía.';
            formValido = false;//-
        } else if (password.value.trim().length < 5) { //MINIMO 5 CARACTERES
            password.classList.add('is-invalid');
            password.classList.remove('is-valid');
            passwordFeedback.textContent = 'La contraseña debe tener al menos 5 caracteres.';
            formValido = false;//-
        } else if (password.value.trim().length > 25) { //MAXIMO 25 CARACTERES PASSWORD
            password.classList.add('is-invalid');
            password.classList.remove('is-valid');
            passwordFeedback.textContent = 'La contraseña debe tener un maximo de 25 caracteres.';
            formValido = false;//-
        }else { 
            password.classList.add('is-valid');  //TODO VALIDO SI ENTRA EN ESTE else
            password.classList.remove('is-invalid');
            password.nextElementSibling.textContent = 'ingreso correctamente'; 
        }
        return formValido; //devuelve BOOl despues de verificar los casos
    }



    init() {

        this.form.addEventListener('submit', (event) => { //detecta que se toca el boton SUBMIT
            event.preventDefault();  //setea un evento default para cuando se toca el boton submit
            if ( this.validoInputsIndividual()==true ) {  //espera las validaciones
                
                this.form.submit();   //si es true la validacion, entra al if y manda el formulario.
            }
        });
    }

}

// Inicialización automática si el formulario existe
window.addEventListener('DOMContentLoaded', () => { //espera html
    if (document.getElementById('formPersonas')) {   //encuentra el formPersonas
        new FormPersonas().init();  //llama al init para validar formulario
    }
});
