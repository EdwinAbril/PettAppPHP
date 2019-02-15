
$(document).ready(function(){
    
    $("#caja2").hide();
    $("#info").click(function(){
    
    var pos=$("#info").index(this);
    var asig=$("#caja2").eq(pos);
    asig.slideToggle(1000);

});

    $("#caja2").hide();
    $("#info").click(function(){
    
    var pos=$("#caja1").index(this);
    var asig=$("#cajaimagen").eq(pos);
    asig.slideToggle(1000);

});
}); 


$(document).ready(function(){
    
    $("#caja4").hide();
    $("#info2").click(function(){
    
    var pos=$("#info2").index(this);
    var asig=$("#caja4").eq(pos);
    asig.slideToggle(1000);

});

    $("#caja4").hide();
    $("#info2").click(function(){
    
    var pos=$("#caja3").index(this);
    var asig=$("#cajaimagen2").eq(pos);
    asig.slideToggle(1000);

});
});   


$(document).ready(function(){
    
    $("#caja6").hide();
    $("#info3").click(function(){
    
    var pos=$("#info3").index(this);
    var asig=$("#caja6").eq(pos);
    asig.slideToggle(1000);

});

    $("#caja6").hide();
    $("#info3").click(function(){
    
    var pos=$("#caja5").index(this);
    var asig=$("#cajaimagen3").eq(pos);
    asig.slideToggle(1000);

});
}); 