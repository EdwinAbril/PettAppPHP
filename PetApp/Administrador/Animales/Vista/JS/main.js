$(document).ready(function(){
    function Buscar(dato){
    	$.ajax({
    		url: "../Controlador/Controlador_Consultar2.php",
    		type: "POST",
    		dataType: "php",
    		data:{
    			dato:dato
    		},
    	})
    	.done(function(result){
    		$(".tabla").html(result);
    	})
    }
    $(document).on('keyup','.caja_busqueda',function(){
    	var dato=$(this).val();
    	if (dato !="") {
    		Buscar(dato);
    	}
    	else{
    		dato="";
    		Buscar(dato);
    	}
    })
    $(".caja2").hide();
    $(".caja1").click(function(){
        var pos=$(".caja1").index(this);
        var asi=$(".caja2").eq(pos);
        asi.slideToggle(1000);
	});
});
