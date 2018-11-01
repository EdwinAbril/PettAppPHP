$(document).ready(function(){
    
    $(".datos").hide();
    $(".thead-dark").click(function(){
    
    var pos=$(".thead-dark").index(this);
    var asig=$(".datos").eq(pos);
    asig.slideToggle(1000);

    });
});