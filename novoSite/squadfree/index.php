<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Robson Santiago de Freitas - Advogado - Juiz de Fora</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>
<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("santiago",$dbhandle) 
  or die("Could not select examples");

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><img id="imageLogo" src="img/santiago-logo.png"></h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">A Empresa</a></li>
		<li><a href="#service">Serviços</a></li>
		<li><a href="#articles">Artigos</a></li>
		<li><a href="#highlights">Destaques</a></li>
		<li><a href="#contact">Contato</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>SANTIAGO <span class="text_color">ADVOGADOS</span> </h2>
			<h4>Comprometimento, Iniciativa, Transparência e União</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Nossa Equipe</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Exemplo</h5>
                        <p class="subtitle">Exemplo</p>
                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Exemplo</h5>
                        <p class="subtitle">Exemplo</p>
                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Exemplo</h5>
                        <p class="subtitle">Exemplo</p>
                        <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
                        <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Nossos Serviços</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>
					<div class="">
						<h5>Previdenciário</h5>
						<p>
							<ul style="text-align:left;list-style-type:none;">
								<li>-Auxílio-doença</li>
								<li>-Aposentadoria Tempo Contribuição</li>
								<li>-Aposentadoria por Idade</li>
								<li>-Aposentadoria Rural</li>
								<li>-Aposentadoria por Invalidez</li>
								<li>-Loas</li>
								<li>-Benefício de Prestação Continuada</li>
								<li>-Revisões de Benefício</li>
								<li>-Desaposentação</li>
								<li>-Parecer jurídico em Direito Previdenciário</li>
							</ul>
						</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>
					<div class="service-box">
						<h5>Trabalho</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Contencioso Trabalhista junto à Justiça do Trabalho e Ministério do Trabalho</li>
								<li>-Assessoria preventiva, e judicial em dissídios individuais e coletivos</li>
								<li>-Parecer jurídico em Direito do Trabalho</li>
							</ul></p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>
					<div class="service-box">
						<h5>Civil</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Contencioso Administrativo e Judicial em Direito Civil</li>
								<li>-Pareceres Jurídicos em Direito Civil</li>
								<li>-Contratos e Obrigações</li>
								<li>-Responsabilidade Civil</li>
								<li>-Direito do Consumidor</li>
								<li>-Associações e Fundações</li>
								<li>-Terceiro Setor e Responsabilidade Social</li>
							</ul></p>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                 	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>
					<div class="">
						<h5>Administrativo</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Consultoria a sindicatos e entidades de classes</li>
								<li>-Atuação nas relações de conflito entre poder público e servidores públicos</li>
								<li>-Atuação em ações judiciais envolvendo direito público</li>
								<li>-Perecer jurídico em questões ligadas ao Direito Administrativo</li>
								
							</ul></p>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>                	
					<div class="">
						<h5>Direito das Sucessões</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Inventário e Partilha</li>
								<li>-Planejamento Sucessório</li>
							</ul></p>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>                	
					<div class="">
						<h5>Imobiliário</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Ações Possessórias</li>
								<li>-Locação</li>
								<li>-Contratos Imobiliários</li>
							</ul></p>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                	<div class="service-icon">
						<img src="img/icons/law.png" alt="" />
					</div>                	
					<div class="">
						<h5>Advocacia de Apoio</h5>
						<p><ul style="text-align:left;list-style-type:none;">
								<li>-Advogados correspondentes em Juiz de Fora, Rio Novo, Matias Barbosa, Lima Duarte, Santos Dumont, Rio Pomba e adjacências.</li>
							</ul></p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	
	<!-- Section: articles -->
    <section id="articles" class="home-section text-center bg-white">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Artigos</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <?php
            $result = mysql_query("SELECT * FROM post WHERE type=1 LIMIT 4");
            while ($row = mysql_fetch_array($result)) {
			echo '<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                    	<div class="avatar"><a href="articles.php?id='.$row{'id'}.'"><img src="'.$row{'imagepath'}.'" alt="" class="img-responsive" /></a></div>
						<h5>'.$row{'title'}.'</h5>
                        <p class="subtitle">'.limit_words($row{'content'},10).'</p>
                    </div>
                </div>
				</div>
            </div>';
            }

            
            ?>
        </div>		
		</div>
	</section>
	<!-- /Section: aticles -->

	<!-- Section: highlight -->
    <section id="highlights" class="home-section text-center bg-white">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Destaques</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <?php
            $result = mysql_query("SELECT * FROM post WHERE type=0 LIMIT 4");
            while ($row = mysql_fetch_array($result)) {
			echo '<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                    	<div class="avatar"><a href="articles.php?id='.$row{'id'}.'"><img src="'.$row{'imagepath'}.'" alt="" class="img-responsive" /></a></div>
						<h5>'.$row{'title'}.'</h5>
                        <p class="subtitle">'.limit_words($row{'content'},10).'</p>
                    </div>
                </div>
				</div>
            </div>';
            }

            
            ?>
        </div>		
		</div>
	</section>
	<!-- /Section: highlight -->

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Entre em contato...</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Digite sua mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar Mensagem</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Escritório</h5>
				
				<address>
				  <strong>Santiago Advogado.</strong><br>
				  Ediífcio Alber Ganimi, 1115 sala 1303<br>
				  Centro, Juiz de Fora<br>
				  <abbr title="Telefone">P:</abbr> 32.3084-3410
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">robson@santiagoadv.com.br</a>
				</address>	
				<address>
				  <strong>Nós estamos no Facebook</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;2015 - Santiago Advogado.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
