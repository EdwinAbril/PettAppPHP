$(document).ready(function(){
    
    $("#boton").click(function(){

    var formulario = document.addForm;

    if (formulario.usuario.value == ""){
        alert("Ingrese Nombre de Usuario");
    }

    formulario.submit();
});
}); 