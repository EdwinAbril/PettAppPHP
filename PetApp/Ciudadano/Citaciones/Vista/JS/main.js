$(document).ready(function(){
    $(".caja2").hide();
    $(".caja3").hide();
    $(".caja4").hide();
    $(".caja1").click(function(){
        var pos=$(".caja1").index(this);
        var asi=$(".caja2").eq(pos);
        var opc=$(".caja3").eq(pos);
        asi.slideToggle(1000);
        opc.slideToggle(1000);
});
        $(".caja3").click(function(){
        var op=$(".caja3").index(this);
        var ico=$(".caja4").eq(op);
        ico.slideToggle(1000);

});    
});