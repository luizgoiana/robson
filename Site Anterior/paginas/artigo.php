<?php

function __autoload($class_name) {
    require_once '../adm/classes/' . $class_name . '.php';
}
$noticia = new Noticia();
$id = $_GET['pagina'];
$lista = $_GET['lista'];
if($lista==1){
   $noticia->listarArtigos($id);
}else{
    $noticia->listarUma($id);
}
?>

<script>
		$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark_rounded',slideshow:3000, autoplay_slideshow: false});
                               
                               $("#voltar").click(function(){
                                    window.location = "index.php";
                                });
			});
</script>