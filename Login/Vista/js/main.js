
$(document).ready(function(){
    
    $("#caja2").hide();
    $("#caja1").click(function(){
	
    var pos=$("#caja1").index(this);
    var asig=$("#caja2").eq(pos);
    asig.slideToggle(1000);

});

	$("#caja2").hide();
    $("#caja1").click(function(){
	
	var pos=$("#caja1").index(this);
    var asig=$("#imagen").eq(pos);
    asig.slideToggle(1000);

});
});   