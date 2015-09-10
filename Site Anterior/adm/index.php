<?php 
function __autoload($class_name) {
    require_once 'classes/'.$class_name . '.php';
}
$login = new Usuario();
$login->verifica();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin </title>

<link href="styles/layout.css" rel="stylesheet" type="text/css" />
<link href="styles/wysiwyg.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="themes/blue/styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->

</head>
<body id="homepage">
	<div id="header">
    	<a href="" title=""><img src="img/cp_logo.png" alt="Control Panel" class="logo" /></a>
    <!--	<div id="searcharea">
            <p class="left smltxt"><a href="#" title="">Advanced</a></p>
            <input type="text" class="searchbox" value="Search control panel..." onclick="if (this.value =='Search control panel...'){this.value=''}"/>
            <input type="submit" value="Search" class="searchbtn" />
        </div>
		-->
    </div>
        
    <!-- Top Breadcrumb Start -->
    <div id="breadcrumb">
    	<ul>	
        	<li><img src="img/icons/icon_breadcrumb.png" alt="Location" /></li>
        	<li><strong>Location:</strong></li>
            <li><a href="#" title="">Sub Section</a></li>
            <li>/</li>
            <li class="current">Control Panel</li>
        </ul>
    </div>
    <!-- Top Breadcrumb End -->
     
    <!-- Right Side/Main Content Start -->
    <div id="rightside">
       <div id="error" class="status error" style="display:none;">
        	<p class="closestatus"><a href="#"  onclick="fade1()" title="Close">x</a></p>
        	<p><img src="img/icons/icon_error.png" alt="Error" /><span>Erro!</span> ao inserir dados.</p>
        </div>
    
    <div id="true" class="status success" style="display:none;">
        	<p class="closestatus"><a href="#" onclick="fade2()" title="Close">x</a></p>
        	<p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> Dados inseridos com sucesso!</p>
        </div>
    <div id="loading" style="margin:40px auto; width:50px; height:20px;"></div>
    	
        <!-- Content Box End -->
        <div id="footer">
        	&copy; Copyright 2010 Isoup
        </div> 
          
    </div>
    <!-- Right Side/Main Content End -->
    
        <!-- Left Dark Bar Start -->
    <div id="leftside">
    	<div class="user">
        	<img src="img/avatar.png" width="44" height="44" class="hoverimg" alt="Avatar" />
            <p>Logged in as:</p>
            <p class="username"><?php echo $_SESSION['login']; ?></p>
            <p class="userbtn"><a href="#" title="">Profile</a></p>
            <p class="userbtn"><a href="#" onclick="logout()" title="">Deslogar</a></p>
        </div>
          
        <ul id="nav">

            <?php if($_SESSION['permissao']==2){ ?>

				  <li>
                <a class="collapsed heading">Fotos</a>
                 <ul class="navigation">
                    <li><a href="#" onclick="chamapagina('visualizar.php?id=<?php echo $_SESSION['idUsuario'] ?>')" title="">Visualizar</a></li>                           
                </ul>
            </li>
				
			<?php
			}else{ ?>
               <li>
                <a class="collapsed heading">Controle de Usuário</a>
                 <ul class="navigation">
                    <li><a href="#" onclick="chamapagina('usuarios.php')" title="">Adicionar</a></li>
                    <li><a onclick="chamapagina('editarUsuario.php')" title="">Editar/Excluir</a></li>
                   
                </ul>
            </li>
       

	     <li><a class="expanded heading">Artigos</a>
                <ul class="navigation">
                    <li><a  href="#" onclick="chamapagina('noticia.php')" title=""  class="likelogin">Adicionar</a></li>
                    <li><a  href="#" onclick="chamapagina('editarNoticia.php')"  title="">Editar/Excluir</a></li>
                </ul>
            </li> 
   
                <?php } ?>
        </ul>
    </div>
    <!-- Left Dark Bar End --> 
  
    <!-- Notifications Box/Pop-Up End --> 
    
    <script type="text/javascript" src="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>	
    <script type='text/javascript' src='http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js'></script>
    <script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script>
    <script type='text/javascript' src='../js/jquery-ui-1.8.23.custom.min.js'></script>
        <script type="text/javascript" src="../js/jquery.maskedinput-1.1.4.pack.js"></script>

    <script type='text/javascript' src='scripts/visualize.jQuery.js'></script>
    <script type="text/javascript" src='scripts/functions.js'></script>
    <script type="text/javascript" src="scripts/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-pack.js"></script>
	<script type="text/javascript" src="scripts/jquery.form.js"></script>


    <!--[if IE 6]>
    <script type='text/javascript' src='scripts/png_fix.js'></script>
    <script type='text/javascript'>
      DD_belatedPNG.fix('img, .notifycount, .selected');
    </script>
    <![endif]--> 
</body>
</html>
