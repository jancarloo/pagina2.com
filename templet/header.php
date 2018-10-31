<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Xapo App - Multipurpose Responsive Landing Page</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/color.css" type="text/css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/responsive.css" type="text/css">
    
<<<<<<< HEAD

    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/demo.css" type="text/css">
    <?php 
      $vari= [];
          
        $vari = $this->pnt('video_disenadopor_href','_X',["return"=>true]); 
          
      ?>
    <script type="text/javascript"> 
        var jArray= <?php echo json_encode($vari); ?>;
    </script> 
         
  </head>
<body>

    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>

    <!-- Our Website Content Goes Here -->
    <main>
        <header class="stck">
            <div class="container">
                <div class="mnu-sc">
                    <div class="logo">

                        <div class="jmy_web_slider" data-page="header"  data-tabla="vistaweb" id="logo_topmarco" data-marco="logo_topmarco" <?php 
                                          $va[] = [ "type"=>"imagen",
                                            "id"=>"logo_top_img",
                                             "width"=>"209",
                                             "height"=>"48",
                                             "url"=>$this->url_templet(["return"=>true]).'images/logo.png' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
                                             
                                             <h1><a href="<?php $this->url_inicio(); ?>"><img itemprop="image" title="" id="logo_top_img" src="<?php $this->pnt('logo_top_img',$this->url_templet(['return'=>true]).'images/logo.png',
                                          ["secundario"=>"header"] ); ?>"/></a></h1>
                        </div>      
                    </div>
                    <nav class="one-page-func">
                        <div class="hdr-scl">
                            <a href="<?php 
                              $this->pnt( 'footer_disenadopor_href', '#', ["secundario"=>"header"] ); 
                            ?>" title="" class="brd-rd50 disenado jmy_web_div" id="footer_disenadopor" data-page="header" data-editor="no"><!--<i class="fa fa-facebook"></i>--><?php 
                              $this->pnt( 'footer_disenadopor',
                                          ' <i class="fa fa-facebook"></i>',
                                          ["secundario"=>"header"]);?>
                                            
                            </a>
                        </div>
                        <div class="hdr-scl">

                           

                             <a href="<?php 
                              $this->pnt( 'footer_disenadopor123_href', '#', ["secundario"=>"header"] ); 
                            ?>" title="" class="brd-rd50 disenado jmy_web_div" id="footer_disenadopor123" data-page="header" data-editor="no"><!--<i class="fa fa-facebook"></i>--><?php 
                              $this->pnt( 'footer_disenadopor123',
                                          '<i class="fa fa-twitter"></i>',
                                          ["secundario"=>"header"]
                                          
                                ); 
                            ?></a>  

                            <?php /*<a class="brd-rd50 jmy_web_div" data-page="header" id="enlace_inicio" data-editor="no" href="" title=""><i class="fa fa-twitter"></i></a>

                            <a class="brd-rd50 jmy_web_div" data-page="header" id="enlace_inicio" data-editor="no" href="" title=""><i class="fa fa-google-plus"></i></a>

                            <a class="brd-rd50 jmy_web_div" data-page="header" id="enlace_inicio" data-editor="no" href="" title=""><?php $this->pnt('enlace_inicio','Inicio ',["secundario"=>"header"]); </a> */?>

                           
                        </div>
                        <ul>
                            <li><a class="jmy_web_div" data-page="header" id="enlace_inicio" data-editor="no" href="#home" title=""><?php $this->pnt('enlace_inicio','Inicio ',["secundario"=>"header"]); ?></a></li>
                             
                            <li><a class="jmy_web_div" data-page="header" id="enlace_servicio" data-editor="no" href="#services" title=""><?php $this->pnt('enlace_servicio','Servicio ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_sobre" data-editor="no" href="#about" title=""><?php $this->pnt('enlace_sobre','Sobre nosotros ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_equipo" data-editor="no" href="#team" title=""><?php $this->pnt('enlace_equipo','Equipo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_trabajo" data-editor="no" href="#features" title=""><?php $this->pnt('enlace_trabajo','Trabajo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_nuevo" data-editor="no" href="#news" title=""><?php $this->pnt('enlace_nuevo','Nuevo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_contacto" data-editor="no" href="#contact" title=""><?php $this->pnt('enlace_contacto','Contacto ',["secundario"=>"header"]); ?></a> </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </header><!-- Header -->
=======
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- HEADER SCRIPTS
    
    ================================================== -->
	<script src="<?php $this->url_templet(); ?>js/modernizr.js">
	.different-services{ no-repeat center top; background-size:cover; height:642px; padding-top:260px; position:relative;}
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/bootstrap.css" >

	
</head>
    <body class="fixed-header">
	    	
			<!-- Preloader -->
    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>

			
			
			<!-- LOADER -->
			<div id="loader" class="loader">
				<div class="spinner">
				  <div class="double-bounce1"></div>
				  <div class="double-bounce2"></div>
				</div>
			</div>
			
			
			
			
            <!-- HERDER -->
            <header id="header">
            	
				<div class="container">
						
					<!-- TOP BAR -->
					<div class="top-bar clearfix">
						<p class="jmy_web_div"  id="slogan" data-editor="no" data-page="header"><?php 
						$this->pnt('slogan','We have over 15 years of experien +1 900',["secundario"=>"header"]);
						 ?></p>

						<ul>
							<li class="jmy_web_div" data-page="header" id="numero_contacto" data-editor="no" ><?php $this->pnt('numero_contacto','<i class="icon-telephone114" > </i>'.'+1 900 234 567',["secundario"=>"header"]); 
							?></li>
							<li class="jmy_web_div" data-page="header" id="direc_head" data-editor="no" ><?php $this->pnt('direc_head','<i class="icon-icons74"></i>'.'786 South Park Avenue',["secundario"=>"header"]);
							 ?></li>
							<li class="jmy_web_div" data-page="header" id="horari_head" data-editor="no" ><?php $this->pnt('horari_head','<i class="icon-icons20"></i>'.' Mon to Sat 08:00 - 16:30',["secundario"=>"header"]); 
							?></li>
							 <p class="text-lefth">
									<a href="<?php 
		                      $this->pnt( 'header_disenadopor_href', '#', ["secundario"=>"header"] ); 
							?>" title="" class="disenado jmy_web_div" id="header_disenadopor" data-page="header" data-editor="no"><?php 
		                      $this->pnt( 'header_disenadopor',
										  'Comsis',
										  ["secundario"=>"header"]
								); 
							?></a></p>
						</ul>

					</div>
					<!-- / TOP BAR -->
					
					<!-- HEADER INNER -->
					<div class="header clearfix">
						
						

						<div id="logo" class="logo">
						
							<div class="jmy_web_slider" data-page="header"  data-tabla="vistaweb" id="logo_topmarco" data-marco="logo_topmarco" <?php 
										  $va[] = [ "type"=>"imagen",
											"id"=>"logo_top_img",
											 "width"=>"209",
											 "height"=>"48",
											 "url"=>$this->url_templet(["return"=>true]).'images/logo.png' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
											 
											 <a href="<?php $this->url_inicio(); ?>"><img alt="" title="" id="logo_top_img" src="<?php $this->pnt('logo_top_img',$this->url_templet(['return'=>true]).'images/logo.png',
										  ["secundario"=>"header"] ); ?>"/></a>
											 
							</div>
								
							</div><!-- /#logo -->
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">Barra de navegación</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						
						
						<nav class="main-nav navbar-collapse collapse" id="primary-nav">
							<ul class="nav nav-pills">
								<li class="dropdown active"><a href="<?php $this->url_inicio(); ?>#.">Inicio <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="<?php $this->url_inicio(); ?>.html">Inicio uno</a></li>
										<li><a href="<?php $this->url_templet(); ?>index2.html">Inicio dos</a></li>
									</ul>
								</li>
								<li><a href="<?php $this->url_inicio(); ?>about-us.html">Sobre nosotros</a></li>
								<li class="dropdown"><a href="<?php $this->url_inicio(); ?>#.">Servicios <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?php $this->url_inicio(); ?>services.html">Financial Planning</a></li>
										<li><a href="<?php $this->url_inicio(); ?>services.html">Bonds</a></li>
										<li><a href="<?php $this->url_inicio(); ?>services.html">Commodities</a></li>
										<li><a href="<?php $this->url_inicio(); ?>services.html">Investment Trusts</a></li>
										<li class="dropdown-submenu"><a href="<?php $this->url_inicio(); ?>#.">Mutual Funds <i class="fa fa-caret-right"></i></a>
											<ul class="dropdown-menu">
												<li><a href="<?php $this->url_inicio(); ?>services.html">Financial Planning</a></li>
												<li><a href="<?php $this->url_inicio(); ?>services.html">Bonds</a></li>
												<li><a href="<?php $this->url_inicio(); ?>services.html">Commodities</a></li>
											</ul>
										</li>
										<li><a href="<?php $this->url_inicio(); ?>services.html">Retirement</a></li>
										<li><a href="<?php $this->url_inicio(); ?>services.html">Trades</a></li>
									</ul>
								</li>
							<?php /*	<li><a href="<?php $this->url_inicio(); ?>cases.html">Cases</a></li>
								<li class="dropdown"><a href="<?php $this->url_inicio(); ?>#.">News <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?php $this->url_inicio(); ?>news.html">News One</a></li>
										<li><a href="<?php $this->url_inicio(); ?>news2.html">News Two</a></li>
									</ul>
								</li>
								<li><a href="<?php $this->url_inicio(); ?>shop.html">Shop</a></li>  */?>
								<li class="dropdown"><a href="<?php $this->url_inicio(); ?>contacto">Contactanos <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?php $this->url_inicio(); ?>contact-us.html">Contactanos uno</a></li>
										<li><a href="<?php $this->url_inicio(); ?>contact-us2.html">Contactanos dos</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						
					</div><!-- / HEADER INNER -->
					
                </div><!-- / CONTAINER -->
				
            </header><!-- / HERDER -->
>>>>>>> 34ac2a497c693b5ce4946f64007e5d1130776163
