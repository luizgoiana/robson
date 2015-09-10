// Simple JavaScript Rotating Banner Using jQuery
// www.mclelun.com
var jqb_vCurrent = 0;
var jqb_vTotal = 0;
var jqb_vDuration = 5000;
var jqb_intInterval = 0;
var jqb_vGo = 1;
var jqb_vIsPause = false;
var jqb_tmp = 20;
var jqb_title;

jQuery(document).ready(function() {
     $("area[rel^='prettyPhoto']").prettyPhoto();
	jqb_vTotal = $(".jqb_slides").children().size() -1;
	$(".jqb_info").text($(".jqb_slide").attr("title"));	
	jqb_intInterval = setInterval(jqb_fnLoop, jqb_vDuration);
			
	$("#jqb_object").find(".jqb_slide").each(function(i) { 
		jqb_tmp = ((i - 1)*960) - ((jqb_vCurrent -1)*960);
		$(this).animate({"left": jqb_tmp+"px"}, 760);
	});
	
	$("#btn_pauseplay").click(function() {
		if(jqb_vIsPause){
			jqb_fnChange();
			jqb_vIsPause = false;
			$("#btn_pauseplay").removeClass("jqb_btn_play");
			$("#btn_pauseplay").addClass("jqb_btn_pause");
		} else {
			clearInterval(jqb_intInterval);
			jqb_vIsPause = true;
			$("#btn_pauseplay").removeClass("jqb_btn_pause");
			$("#btn_pauseplay").addClass("jqb_btn_play");
		}
	});
	$("#btn_prev").click(function() {
		jqb_vGo = -1;
		jqb_fnChange();
	});
		
	$("#btn_next").click(function() {
		jqb_vGo = 1;
		jqb_fnChange();
	});
        
        $("#m01").click(function(){window.location="index.php";});
        $("#m02").click(function(){carregaConteudo('servicos.html');});
        $("#m03").click(function(){carregaConteudo('artigo.php?lista=1');});
        $("#m06").click(function(){carregaConteudo('minasapoiojuridico.html');});
        $("#m04").click(function(){carregaConteudo('empresa.html');});
        $("#m05").click(function(){carregaConteudo('contato.html');});
        
    
        $("#bt01").click(function(){carregaConteudo('atuacao.html');});
        $("#bt02").click(function(){carregaConteudo('artigo.php?lista=1');});
        $("#bt03").click(function(){carregaConteudo('servicos.html');});
        $("#bt04").click(function(){carregaConteudo('missao.html');});
        
        $("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark_rounded',slideshow:3000, autoplay_slideshow: false});
		
     

});
  function pagina(p){
           window.location="index.php?pagina="+p;
       }
  function loadArtigo(p){
          $("#left").load("paginas/artigo.php?pagina="+p, function(response, status, xhr) {
  if (status == "error") {
    var msg = "Sorry but there was an error: ";
    $("#error").html(msg + xhr.status + " " + xhr.statusText);
  }
});

       }

function carregaConteudo(p){
    $("#left").html('<div id="loading"></div>');

    
    $("#left").load("paginas/"+p, function(response, status, xhr) {
  if (status == "error") {
    var msg = "Sorry but there was an error: ";
    $("#error").html(msg + xhr.status + " " + xhr.statusText);
  }
});

}

function jqb_fnChange(){
	clearInterval(jqb_intInterval);
	jqb_intInterval = setInterval(jqb_fnLoop, jqb_vDuration);
	jqb_fnLoop();
}

function jqb_fnLoop(){
	if(jqb_vGo == 1){
		jqb_vCurrent == jqb_vTotal ? jqb_vCurrent = 0 : jqb_vCurrent++;
	} else {
		jqb_vCurrent == 0 ? jqb_vCurrent = jqb_vTotal : jqb_vCurrent--;
	}
	
	$("#jqb_object").find(".jqb_slide").each(function(i) { 
		
		if(i == jqb_vCurrent){
			jqb_title = $(this).attr("title");
			$(".jqb_info").animate({opacity: 'hide', "left": "-50px"}, 300,function(){
				$(".jqb_info").text(jqb_title).animate({opacity: 'show', "left": "0px"}, 500);
			});
		} 
		

		//Horizontal Scrolling
		jqb_tmp = ((i - 1)*960) - ((jqb_vCurrent -1)*960);
		$(this).animate({"left": jqb_tmp+"px"}, 760);
		
		/*
		//Fade In & Fade Out
		if(i == jqb_vCurrent){
			$(".jqb_info").text($(this).attr("title"));
			$(this).animate({ opacity: 'show', height: 'show' }, 500);
		} else {
			$(this).animate({ opacity: 'hide', height: 'hide' }, 500);
		}
		*/
		
	});
        
        
        
        
        


}






