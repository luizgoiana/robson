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

$result = mysql_query("SELECT * FROM post WHERE id=$_GET[id]");
$row = mysql_fetch_array($result)

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
        <li class="active"><a href="index.php#intro">Home</a></li>
        <li><a href="index.php#about">A Empresa</a></li>
		<li><a href="index.php#service">Serviços</a></li>
		<li><a href="index.php#articles">Artigos</a></li>
		<li><a href="index.php#highlight">Destaques</a></li>
		<li><a href="index.php#contact">Contato</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: articles -->
    <section id="articles" class="home-section text-center bg-white">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2><?php echo $row{'title'}; ?></h2>
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

		<?php
			echo'<img src="'.$row{'imagepath'}.'" alt="" class="img-top-post" />';
			echo '<p id="post-content">'.$row{'content'}.'</p>';

            ?>		

        <div class="row">
        <h3 class="title-site" id="read-too">Leia Também...</h3>
            <?php
            $result = mysql_query("SELECT * FROM post WHERE id<>".$row{'id'}." ORDER BY RAND() LIMIT 4");
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


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#page-top" id="totop" class="btn btn-circle">
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
