$(document).ready(function(){
    $(".caja1").hide();
    $(".info").click(function(){
        var pos=$(".info").index(this);
        var asi=$(".caja1").eq(pos);
        asi.slideToggle(1000);
});    
});
; 