$(document).ready(function(){
    $(".caja2").hide();
    $(".caja1").click(function(){
        var pos=$(".caja1").index(this);
        var asi=$(".caja2").eq(pos);
        asi.slideToggle(1000);
});    
});