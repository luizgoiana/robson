<?php

function __autoload($class_name) {
    require_once 'adm/classes/' . $class_name . '.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="description" CONTENT=""> 
        <META NAME="language" CONTENT="Portugues"> 
        <META NAME="keywords" CONTENT="Advogados Correspondentes, Minas apoio jurídico, Juiz de Fora , Ubá,  Visconde do Rio Branco,  Rio Pomba,  Matias Barbosa, Astolfo Dutra,  Santos Dumont,  Barbacena,  São João Nepobuceno,  Rio Novo,  Monte Verde, Advogado,Advogado Juiz de Fora "> 
        <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jqbanner.js" type="text/javascript"></script>      
            <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>

        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/jqbanner.css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

        <title>Santiago Advogado</title>
    </head>
    <body>
        <div id="principal"> 
            <div style="height: 20px; width: 200px; position: absolute; margin-left: 830px; margin-top: 60px; ">
                <span class="titulo" style="font-size: 13px;"> Telefone: </span><span class="tituloCinza" style="color: #fff; font-size: 13px;">  (32)3084.3410</span>  
            </div>
            <div id="menu">
                <div id="m01"></div>
                <div id="m02"></div>
                <div id="m03"></div>
                <div id="m04"></div>
                <div id="m05"></div>
                <div id="m06"></div>
            </div>
            <div id="shadow" class="shadow">            
                <div id="banner"> 


                    <div id="jqb_object">

                        <div class="jqb_slides">

                            <div class="jqb_slide" title="Avançar com pespectiva" ><a href="#"><img src="images/banner01.jpg" title="" alt=""/></a></div>
                            <div class="jqb_slide" title="Minas Apoio Juridico" ><a href="#"><img src="images/banner02.jpg" title="" alt=""/></a></div>
                            

                        </div>

                        <div class="jqb_bar"> 
                            <div class="jqb_info"></div>	
                            <div id="btn_next" class="jqb_btn jqb_btn_next"></div>
                            <div id="btn_pauseplay" class="jqb_btn jqb_btn_pause"></div>
                            <div id="btn_prev" class="jqb_btn jqb_btn_prev"></div>

                        </div>
                    </div>

                </div>
                <div id="content" >
                    <div id="left">
                        <div id="novidades"  class="gallery clearfix">
                            <span class="titulo">FAZENDO COM CONHECIMENTO,</span><span class="tituloCinza"> FAZENDO MELHOR.</span> 
                            <hr>
                            <ul>
                                <li>Com nossa parceria, o seu escritório não se preocupará  mais com acompanhamento de processos em outras comarcas</li>
                                <li>Não precisará mais perder tempo procurando correspondentes  disponíveis em outra comarca, pois com apenas 48 horas de  antecedência, podemos atendê-lo em qualquer comarca da zona  da mata mineira.</li>
                                <li>Temos atendimento emergencial.</li>
                                <li>Redução de custos.</li>
                                <li>Proporcionamos-lhes a sensação de estar lidando com uma equipe própria.</li>
                            </ul>

                            <span class="titulo">NOVIDADES</span> 

                            <hr>

                            <?php
                            $noticia = new Noticia();
                            $id = $_GET['pagina'];
                            $noticia->listarDicas($id);
                            ?>


                        </div>  
                    </div>
                    <div id="right">
                        <span class="titulo" style="margin-left: 15px;">DESTAQUE</span> 

                        <div id="rightP">
                            <div id="bt01">  </div>
                            <div id="bt02">  </div>
                            <div id="bt03">  </div>
                            <div id="bt04">  </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="footer">
                <ul  >
                    <li class="li"><a href="index.php">Home</a></li>
                    <li class="li"> | </li>
                    <li class="li"><a href="index.php">Serviços</a></li>
                    <li class="li"> | </li>
                    <li class="li"><a href="index.php">Artigos</a></li>
                    <li class="li"> | </li>
                    <li class="li"><a href="index.php">Atuação</a></li>
                    <li class="li"> | </li>
                    <li class="li"><a href="index.php">Empresa</a></li>
                    <li class="li"> | </li>
                    <li class="li"><a href="index.php">Contato</a></li>
                </ul>
                <span style="color: #fff;">

                    (32)3084.3410<br />
                    Rua Espírito Santo, 1115<br /> 
                    Centro, Juiz de Fora - MG, CEP:36016-905
                </span>
            </div>
        </div>

    </body>
</html>
