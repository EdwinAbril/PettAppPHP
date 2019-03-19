$(document).ready(function(){
    
    $("#caja2").hide();
    $("#info").click(function(){
    
    var pos=$("#info").index(this);
    var asig=$("#caja2").eq(pos);
    asig.slideToggle(1000);

});

    $("#caja2").hide();
    $("#info").click(function(){
    
    var pos=$("#info").index(this);
    var asig=$("#imagen").eq(pos);
    asig.slideToggle(1000);

});
});


$(document).ready(function(){

$("#caja4").hide();
    $("#info2").click(function(){
    
    var pos2=$("#info2").index(this);
    var asig2=$("#caja4").eq(pos2);
    asig2.slideToggle(1000);

});

    $("#caja4").hide();
    $("#info2").click(function(){
    
    var pos2=$("#info2").index(this);
    var asig2=$("#imagen2").eq(pos2);
    asig2.slideToggle(1000);

});
}); 


$(document).ready(function(){

$("#caja6").hide();
    $("#info3").click(function(){
    
    var pos2=$("#info3").index(this);
    var asig2=$("#caja6").eq(pos2);
    asig2.slideToggle(1000);

});

    $("#caja6").hide();
    $("#info3").click(function(){
    
    var pos2=$("#info3").index(this);
    var asig2=$("#imagen3").eq(pos2);
    asig2.slideToggle(1000);

});
}); 


