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
    

    <link rel="stylesheet" href="<?php $this->url_templet(); ?>css/demo.css" type="text/css"> -->
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

                           <!--  <li><a class="jmy_web_div" data-page="header" id="enlace_trabajo" data-editor="no" href="#features" title=""><?php $this->pnt('enlace_trabajo','Trabajo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_nuevo" data-editor="no" href="#news" title=""><?php $this->pnt('enlace_nuevo','Nuevo ',["secundario"=>"header"]); ?></a> </li> -->

                            <li><a class="jmy_web_div" data-page="header" id="enlace_contacto" data-editor="no" href="#contact" title=""><?php $this->pnt('enlace_contacto','Contacto ',["secundario"=>"header"]); ?></a> </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </header><!-- Header -->
