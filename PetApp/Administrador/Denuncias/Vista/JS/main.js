$(document).ready(function(){
    $(".caja2").hide();
    $(".opciones").hide();
    $(".iconos").hide();
    $(".caja1").click(function(){
        var pos=$(".caja1").index(this);
        var asi=$(".caja2").eq(pos);
        var opc=$(".opciones").eq(pos);
        asi.slideToggle(1000);
        opc.slideToggle(1000);
});
        $(".opciones").click(function(){
        var op=$(".opciones").index(this);
        var ico=$(".iconos").eq(op);
        ico.slideToggle(1000);

});    
});