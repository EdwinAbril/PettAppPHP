$(document).ready(function(){
$(".boton-menu span").click(function(){
	if($(".boton-menu span").attr('class') == 'icon-menu3'){
		$(".boton-menu span").removeClass('icon-menu3').addClass('icon-menu4');
		$(".boton-menu span").removeClass('slider');
		$(".navegacion nav").animate({left:'1'})
	}
	else{
		$(".boton-menu span").removeClass('icon-menu4').addClass('icon-menu3');
		$(".navegacion nav").animate({left:'-100%'})

	}
});
});