$(document).ready(function(){
    
    $(".caja2").hide();
    $(".info").click(function(){
    
    var pos=$(".info").index(this);
    var asi=$(".caja2").eq(pos);
    asi.slideToggle(1000);

});

    $(".caja2").hide();
    $(".info").click(function(){
    
    var pos=$(".info").index(this);
    var asi=$(".img").eq(pos);
    asi.slideToggle(1000);

});
}); 