
function validaForm(){

    if(document.form.nombre.value.length==0){
        alert("Debe ingresar su nombre");
        document.form.nombre.focus();
        return 0;
    }else if(document.form.nombre.value.length<3){
        alert("El nombre es muy pequeño");
        document.form.nombre.focus();
        return 0;
    }

    var mail=/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;
    if((mail.test(document.form.email.value)==0) || (document.form.email.value.length=0)){
        alert("Ingrese un correo electronico valido")
        document.form.email.focus();
        return 0;
    }else{
        var c_email=true;
    }

    if(document.form.telefono.value.length==0){
        alert("Ingrese su numero telefonico por favor!!");
        document.form.telefono.focus();
        return 0;
    }

    valor=document.form.telefono.value;
    if(!(/^\d{9}$/.test(valor))){
        alert("Ingrese un número de teléfono móvil valido");
        document.form.telefono.focus();
        return 0;
    }

    if(document.form.asunto.value.length==0){
        alert("Debe describir el asunto por el que nos contacta");
        document.form.nombre.focus();
        return 0;
    }
    if(document.form.Textarea1.value.length==0){
        alert("Comentenos por que nos escribe por favor!!");
        document.form.nombre.focus();
        return 0;
    }

    var elemento=document.forms["form"]["terminos"].checked;

    if(elemento==false){
        alert("Debes aceptar los términos y condiciones");
        return 0;
    }


    alert("Muchas Gracias, nos estaremos comunicando con usted muy pronto");

    document.form.submit();
}