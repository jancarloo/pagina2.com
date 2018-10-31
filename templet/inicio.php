
<<<<<<< HEAD
        <div class="rpnsv-hdr">
            <div class="rspnsv-lg-br">
                <div class="logo">
                    <div class="jmy_web_slider" data-page="inicio"  data-tabla="vistaweb" id="logo_topmarco2" data-marco="logo_topmarco2" <?php 
                                          $va[] = [ "type"=>"imagen",
                                            "id"=>"logo_top_img2",
                                             "width"=>"208",
                                             "height"=>"48",
                                             "url"=>$this->url_templet(["return"=>true]).'images/logo.png' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
                                             
                                             <h1><a href="<?php $this->url_inicio(); ?>"><img itemprop="image" title="" id="logo_top_img2" src="<?php $this->pnt('logo_top_img2',$this->url_templet(['return'=>true]).'images/logo.png'); ?>"/></a></h1>
                        </div>


                </div>
                <span class="mnu-btn brd-rd5"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="rspnsv-mnu blue-bg">
                <span class="cls-btn"><i class="fa fa-close"></i></span>
                <ul>
                    <li><a class="jmy_web_div" data-page="header" id="enlace_inicio" data-editor="no" href="#home" title=""><?php $this->pnt('enlace_inicio','Inicio ',["secundario"=>"header"]); ?></a></li>
                             
                            <li><a class="jmy_web_div" data-page="header" id="enlace_servicio" data-editor="no" href="#services" title=""><?php $this->pnt('enlace_servicio','Servicio ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_sobre" data-editor="no" href="#about" title=""><?php $this->pnt('enlace_sobre','Sobre nosotros ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_equipo" data-editor="no" href="#team" title=""><?php $this->pnt('enlace_equipo','Equipo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_trabajo" data-editor="no" href="#features" title=""><?php $this->pnt('enlace_trabajo','Trabajo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_nuevo" data-editor="no" href="#new" title=""><?php $this->pnt('enlace_nuevo','Nuevo ',["secundario"=>"header"]); ?></a> </li>

                            <li><a class="jmy_web_div" data-page="header" id="enlace_contacto" data-editor="no" href="#contact" title=""><?php $this->pnt('enlace_contacto','Contacto ',["secundario"=>"header"]); ?></a> </li>
                </ul>
            </div>
        </div><!-- Responsive Header -->
        <section id="home">
            <div class="gp thm-lyr opc6 nobp jmy_web_slider" id="img_slider0" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider0" 
        
                <?php  $va=[];    $va[] = [ "type"=>"imagen",
                                            "id"=>"img_slider_0",
                                             "width"=>"998",
                                             "height"=>"1048",
                                             "url"=>$this->url_templet(["return"=>true]).'images/bg-shp1.png' ];
                                        
                                        $va[] =["type"=>"imagen",
                                           "id"=>"img_slider_2",
                                             "width"=>"1600",
                                             "height"=>"942",
                                             "url"=>$this->url_templet(["return"=>true]).'images/resource/sld1.jpg' ];?>  data-var='<?php echo json_encode($va); ?>'>

                <div id="img_slider_2" class="parlx" 
                style="background: url(<?php $this->pnt('img_slider_2',$this->url_templet(['return'=>true]).'images/resource/sld1.jpg'); ?>);"></div>
                                            
                <img class="bg-shp rgt"  id="img_slider_0" src="<?php $this->pnt('img_slider_0',$this->url_templet(['return'=>true]).'images/bg-shp1.png'); ?>">

                <div class="container">
                    <div class="feat-wrp">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="feat-cap">
                                    <h2 class="jmy_web_div" data-editor="no" data-page="inicio" id="inicio_titulo1"><span><?php $this->pnt('inicio_titulo1','WEBSROAD'); ?> </span></h2>
                                    <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="inicio_text"><?php $this->pnt('inicio_text',' Unique Landing Page & Great Mobile App'); ?></h3>
                                    <div class="fea-btns" data-page="inicio" id="inicio_text1">

                                        <a href="<?php 
                                          $this->pnt( 'inicio_disenadopor_href', '#'); ?>" class="brd-rd40 no-bg  jmy_web_div" id="inicio_disenadopor" data-page="inicio" data-editor="no">
                                            <?php $this->pnt( 'inicio_disenadopor',
                                                      'Comprar     <i class="fa fa-angle-right brd-rd50"></i> ');?>
                                                        
                                        </a>
                                        <a href="<?php 
                                          $this->pnt( 'inicio2_disenadopor_href', '#'); ?>" class="brd-rd40 no-bg  jmy_web_div" id="inicio2_disenadopor" data-page="inicio" data-editor="no">
                                            <?php $this->pnt( 'inicio2_disenadopor',
                                                      'Leer mas     <i class="fa fa-angle-right brd-rd50"></i> ');?>
                                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="feat-mckp jmy_web_slider" id="img_slider3" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider3" 
        
                <?php  $va=[];    $va[] = [ "type"=>"imagen",
                                            "id"=>"img_slider_3",
                                             "width"=>"686",
                                             "height"=>"587",
                                             "url"=>$this->url_templet(["return"=>true]).'images/bg-shp1.png' ]; ?>  data-var='<?php echo json_encode($va); ?>'>



                                     <img id="img_slider_3" src="<?php $this->pnt('img_slider_3',$this->url_templet(['return'=>true]).'images/icono_686x587alpha.png'); ?>">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="gp gry-bg">
                <div class="skw-shp-tp rgt"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="tlt-txt text-center">
                                <div class="tlt-txt-innr">
                                     <h2 class="jmy_web_div" data-editor="no" data-page="inicio" id="inicio_titulo2"><?php $this->pnt('inicio_titulo2','Let\'s turn your idea into <br> a           
                                     <i class="blue-clr">   
                                 scalable business!</i>'); ?></h2>
                                    
                                    <p class="jmy_web_div" data-editor="no" data-page="inicio" id="inicio_text2"><?php $this->pnt('inicio_text2','Lorem ipsum dolor sit amet, consectetur ili adipiscing Donec nec eros'); ?></p>                                    
                                </div>
                            </div>


                            <div class="rmv-ext">
                                <div class="jmy_web_contador" data-page="inicio" id="numero_carrusel_nuestros" data-value="<?php $this->pnt('numero_carrusel_nuestros','3'); 
                                                        ?>" data-titulo="Inica el número de páginas a mostrar">
                                                            
                                </div>

                                <div class="row">
                                                
                                    <?php 
                                            $paginas =$paginas+1;
                                             $paginas = $this->pnt('numero_carrusel_nuestros','3',["return"=>true]); 
                                            //echo $paginas;
                                            $resultado = $paginas%3;
                                                                                        
                                            echo "<br>";
                                            //echo $resultado;

                                            $paginas =$paginas+1;
                                            
                                            if ($resultado != 0){
                                                echo ' '; 
                                            }
                                             $contador = 0;
                                                for($i=1;$i<$paginas;$i++){ ?>
                                                

                                    <div class="col-md-4 col-sm-6 col-lg-4  jmy_web_slider" id="nuestros_asesores_img<?php echo $i; ?>" data-tabla="vistaweb" data-page="inicio" data-marco="works-container"  
                
                                    <?php  $var=[];/* $var[] = [ "type"=>"imagen",
                                                               "id"=>"nuestros_asesores_i".$i."_imagen",
                                                               "width"=>"460",
                                                                "height"=>"436",
                                                                "url"=>$this->url_templet(["return"=>true])."images/resource/fea-icn".$i.".png"];*/
                                                    $var[] = [ "type"=>"text",
                                                                "id"=>"nuestros_asesores_i".$i."_imagen2",
                                                                "placeholder"=>"Selecione del 1 al 7",
                                                                "value"=>$this->pnt("nuestros_asesores_i".$i."_imagen2","",["return"=>true])
                                                                ];            
                                                            
                                                    $var[] =["type"=>"text",
                                                               "id"=>"nuestros_asesores".$i."_titulo",
                                                               "value"=>$this->pnt("nuestros_asesores".$i."_titulo","",["return"=>true]),
                                                                "placeholder"=>"TituloH3"];

                                                    $var[] =    ["type"=>"text",
                                                               "id"=>"nuestros_asesores".$i."_text",
                                                               "value"=>$this->pnt("nuestros_asesores".$i."_text","",["return"=>true]),
                                                                "placeholder"=>"parrafo"];

                                                      ?>  data-var='<?php echo json_encode($var); ?>'>


                                        <div class="fea-bx brd-rd5 text-center">
                                            <i><img id="nuestros_asesores_i<?php echo $i; ?>_imagen2" src="<?php $this->pnt('nuestros_asesores_i<?php echo $i; ?>_imagen2',$this->url_templet(['return'=>true]).'images/resource/fea-icn'.$this->pnt('nuestros_asesores_i'.$i.'_imagen2',"",["return"=>true]).'.png' ); ?>" /></i>

                                                <h4 data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_titulo"><?php  $this->pnt('nuestros_asesores'.$i.'_titulo','Login First'); ?></h4>
                                                <p  data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text"><?php 
                                                    $this->pnt('nuestros_asesores'.$i.'_text','Lorem ipsum dolor uIL sit amet, consecte pellentesque et nonLIEM erat Maecenas cenasgue ut eget secte pellentesque…'); 
                                                ?></p>
                                        </div>
                                                            

                                    </div>                             

                                    <?php }  if ($resultado != 0){
                                                echo ' '; 
                                            } ?>
                                </div> 
                            </div>
                        </div>

                        <div class="vw-al text-center">
                            <a href="<?php 
                              $this->pnt( 'bcontacto_disenadopor_href', '#'); ?>" class="brd-rd40 clk-scrl  jmy_web_div" id="bcontacto_disenadopor" data-page="inicio" data-editor="no">
                                <?php $this->pnt( 'bcontacto_disenadopor',
                                          'Contactanos     <i class="fa fa-angle-right brd-rd50"></i> ');?>
                                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skw-shp-bp rgt"></div>
        </section>
        <section>
            <div class="gp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="chs-wrp">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="tlt-txt">
                                            <div class="tlt-txt-innr">
                                                <h2 class="jmy_web_div" data-editor="no" data-page="inicio" id="servicio_titulo2"><?php $this->pnt('servicio_titulo2','Lorem ipsum dolor sit amet'); ?></h2>
                                                <p class="jmy_web_div" data-editor="no" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text"><?php 
                                                    $this->pnt('nuestros_asesores'.$i.'_text','Lorem ipsum dolor sit amet, consectetur ili adipiscing Donec elit Donec nec eros eget adipiscing elit cenasgue ut ulricis ctetur ili adipiscing Do cenasgue ut ut eget…'); 
                                                ?></p>
                                            </div>
                                        </div>
                                        <div id="acordn" class="faq-wrp ">
                                            <div class=" jmy_web_contador" data-page="inicio" id="servicio_numero_de_carrusel" data-value="<?php $this->pnt('servicio_numero_de_carrusel','3');?>" data-titulo="Inica el número de páginas a mostrar"></div>


                                            <div id="accordion" role="tablist" aria-multiselectable="true">

                                            <?php 
                                                 $paginas = $this->pnt('servicio_numero_de_carrusel','3',["return"=>true]); 
                                                 $contador = 0;
                                            for($i=0;$i<$paginas;$i++){ ?>

                                                <div class="acordn-itm ">
                                                     <h4 class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_tituloaco"><?php 
                                                    $this->pnt('brok_'.$i.'_tituloaco','Titulo.    <i class="fa fa-arrow-down"></i>');?>
                                                    </h4>
                                                    <div class="acrdn-cnt">
                                                        <p class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_textoaco"><?php $this->pnt('brok_'.$i.'_textoaco','Texto');?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div><!-- Accordions  -->                                    
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="chr-mckp jmy_web_slider" id="bro_imagen_cont2" data-page="inicio" data-marco="bro_imagen_cont2"  data-button="down"
                                            <?php  $var=[];

                                                    $var[] = [ "type"=>"imagen",
                                                               "id"=>"bro_imagen2",
                                                                "width"=>"852",
                                                                "height"=>"713",
                                                                "url"=>$this->url_templet(["return"=>true])."images/behind2.jpg"];
                                                                
                                                                ?>  data-var='<?php echo json_encode($var); ?>'>

                                            <img id="bro_imagen2" src="<?php $this->pnt('bro_imagen2',$this->url_templet(['return'=>true]).'images/resource/why-chs-mckp.png'); ?>"/>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="gp nogp wht-lyr opc8 jmy_web_slider" id="img_slider_nosotros0" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider_nosotros0" 
        
                <?php  $va=[];    $va[] = [ "type"=>"imagen",
                                            "id"=>"img_slider_nosotros",
                                             "width"=>"1600",
                                             "height"=>"918",
                                             "url"=>$this->url_templet(["return"=>true]).'images/parlx-bg3.png' ];
                 ?>  

                                             data-var='<?php echo json_encode($va); ?>'>

                <div id="img_slider_nosotros" class="parlx img-btm"
                style="background: url(<?php $this->pnt('img_slider_nosotros',$this->url_templet(['return'=>true]).'images/parlx-bg3.png'); ?>);"></div>

                

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="tlt-txt text-center">
                                <div class="tlt-txt-innr jmy_web_slider" id="img_icono_nosotros0" data-tabla="vistaweb" data-page="inicio" data-marco="img_icono_nosotros0" 
        
                                    <?php  $va=[];    $va[] = [ "type"=>"imagen",
                                                                "id"=>"img_icono_nosotros",
                                                                 "width"=>"120",
                                                                 "height"=>"110",
                                                                 "url"=>$this->url_templet(["return"=>true]).'images/resource/icon1.png' ];
                                    ?>  

                                             data-var='<?php echo json_encode($va); ?>'></div>

                                            

                                    <img id="img_icono_nosotros" src="<?php $this->pnt('img_icono_nosotros',$this->url_templet(['return'=>true]).'images/resource/icon1.png'); ?>"/>


                                    <h2 class="jmy_web_div" data-editor="no" data-page="inicio" id="nosotros_titulo1"><?php $this->pnt('nosotros_titulo1','Lorem ipsum dolor sit amet'); ?></h2>
                                    <p class="jmy_web_div" data-editor="no" data-page="inicio" id="nosotros_txt1<?php echo $i; ?>_text"><?php 
                                        $this->pnt('nosotros_txt1','Lorem ipsum dolor sit amet, consectetur ili adipiscing Donec elit Donec nec eros eget adipiscing elit cenasgue ut ulricis ctetur ili adipiscing Do cenasgue ut ut eget…'); 
                                    ?></p>
                                </div>
                            </div>
                            <div class="strt-btns text-center">

                                <a href="<?php 
                              $this->pnt( 'google_disponible_href', '#' ); 
                            ?>" class="jmy_web_div blue-bg brd-rd30"  id="google_disponible" data-page="inicio" data-editor="no"><?php 
                              $this->pnt( 'google_disponible',
                                          '<i class="fa fa-android"></i> <span><i>   &nbsp;  &nbsp; Available on  &nbsp;  </i>  &nbsp;&nbsp;  Google Store  &nbsp;  </span>'
                                ); 
                            ?></a>
                               
                                
                                
                            
                                <a href="<?php 
                              $this->pnt( 'android_disponible_href', '#' ); 
                            ?>" class=" jmy_web_div brd-rd30"  id="android_disponible" data-page="inicio" data-editor="no"><?php 
                              $this->pnt( 'android_disponible',
                                          '<i class="fa fa-apple"></i><span><i>  &nbsp; Available on  &nbsp;  </i>  &nbsp;  Apple Store  &nbsp;  </span>'
                                ); 
                            ?></a>
                                
                            </div>
                            <div class="funfacts-wrp">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="fact-bx">
                                            <i class="ion-android-open blue-clr brd-rd50"></i>
                                            <div class="fact-bx-innr">

                                                <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="descargas"><?php $this->pnt('descargas','<span class="counter"> &nbsp; 39812  &nbsp;</span>'); ?></h3>
                                                <p class="jmy_web_div" data-editor="no" data-page="inicio" id="descargas_text"><?php 
                                                    $this->pnt('descargas_text','<span>Apps Download</span>'); 
                                                ?></p>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="fact-bx">
                                            <i class="ion-android-hand blue-clr brd-rd50"></i>
                                            <div class="fact-bx-innr">
                                                <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="clientes"><?php $this->pnt('clientes','<span class="counter"> &nbsp; 39812  &nbsp;</span>'); ?></h3>
                                                <p class="jmy_web_div" data-editor="no" data-page="inicio" id="clientes_text"><?php 
                                                    $this->pnt('clientes_text','<span>  &nbsp; Clientes  &nbsp;</span>'); 
                                                ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="fact-bx">
                                            <i class="fa fa-trophy blue-clr brd-rd50"></i>
                                            <div class="fact-bx-innr">
                                                <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="logros"><?php $this->pnt('logros','<span class="counter"> &nbsp; 39812  &nbsp;</span>'); ?></h3>
                                                <p class="jmy_web_div" data-editor="no" data-page="inicio" id="logros_text"><?php 
                                                    $this->pnt('logros_text','<span>  &nbsp; Clientes  &nbsp;</span>'); 
                                                ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="fact-bx">
                                            <i class="fa fa-send-o blue-clr brd-rd50"></i>
                                            <div class="fact-bx-innr">
                                                <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="proyectos"><?php $this->pnt('proyectos','<span class="counter"> &nbsp; 39812  &nbsp;</span>'); ?></h3>
                                                <p class="jmy_web_div" data-editor="no" data-page="inicio" id="proyectos_text"><?php 
                                                    $this->pnt('proyectos_text','<span>  &nbsp; Clientes  &nbsp;</span>'); 
                                                ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vdo-sec text-center jmy_web_slider "  id="video_imagen1" data-tabla="vistaweb"  data-page="inicio" data-marco="video_imagen1" 
                
                    <?php  $va=[]; $va[] = ["type"=>"imagen",
                                            "id"=>"video_imagen_1",
                                             "width"=>"1260",
                                             "height"=>"580",
                                             "url"=>$this->url_templet(["return"=>true]).'images/resource/vdo-bg.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
                                             

                                <img height="580" width="1260" alt="" title="" id="video_imagen_1" src="<?php $this->pnt('video_imagen_1',$this->url_templet(['return'=>true]).'images/resource/vdo-bg.jpg'); ?>">
                                

                                <div class="vdo-sec-innr">
                                    <i class="jmy_web_div" data-editor="no" data-page="inicio" id="video_text"><?php $this->pnt('video_text',' &nbsp;Landing Pages Made Easy '); ?>
                                        
                                    </i>                                    
                                    <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="video_titulo2"><?php $this->pnt('video_titulo2','A Powerful Platform for Landing <br> Pages that Convert'); ?>                                        
                                    </h3>
                                        <a  href ="<?php $this->pnt('video_disenadopor_href','_X'); ?>" class="brd-rd50 blue-clr jmy_web_div " id="video_disenadopor" data-page="inicio" data-editor="no" ><?php $this->pnt('video_disenadopor',
                                                        'Observa');
                                        ?></a>                                        
                                    <div id="player"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="gp tp320">
                

                <div class="skw-shp-tp rgt "></div>

                <img class="bg-shp cntr"  id="nosotros_slider_0" src="<?php $this->pnt('nosotros_slider_0',$this->url_templet(['return'=>true]).'images/bg-shp2.png'); ?>">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 col-sm-12 col-lg-12 "><br><br><br><br><br><br><br>
                            <div class="sec-tl-wrp text-center">
                                



<div class="sec-tl-innr jmy_web_slider" id="img_atras_nosotros" data-tabla="vistaweb" data-page="inicio" data-marco="img_atras_nosotros" 
        
                                <?php  $va=[];    $va[] = [ "type"=>"imagen",
                                                            "id"=>"nosotros_slider_0",
                                                             "width"=>"1281",
                                                             "height"=>"859",
                                                             "url"=>$this->url_templet(["return"=>true]).'images/bg-shp2.png' ];

                                ?> data-var='<?php echo json_encode($va); ?>'>

                                    <h2 class="jmy_web_div" data-editor="no" data-page="inicio" id="titulo2_nosostros"><?php $this->pnt('titulo2_nosostros','A Powet Convert'); ?>                                        
                                    </h2>
                                    <span class="jmy_web_div" data-editor="no" data-page="inicio" id="texto_nosostros"><?php $this->pnt('texto_nosostros','Best & Clean Landing Page with Unique Idea'); ?>
                                    </span>
                                    <i class="tl-shp"><i class="tl-shp-inr"></i></i>
                                </div>
                            </div>
                            <div class="app-scrn-wrp " style="background-image: url(<?php $this->pnt('nosotros_carrusel_1',$this->url_templet(['return'=>true]).'images/resource/iphoneXD.fw.png'); ?>); ">



<div style="
    z-index: 9999999999999999;
    position: absolute;
">
    <div class="jmy_web_contador" data-page="inicio" id="arrrusel_de_carrusel" data-value="<?php $this->pnt('arrrusel_de_carrusel','3');?>" data-titulo="Inica el número de páginas a mostrar"></div>
                                           

<div class="app-itm <?php $this->pnt('slider_cat_'.$i); ?> jmy_web_slider" id="carrusel<?php echo $i;?>_imagen_cont2" data-page="inicio" data-tabla="vistaweb" data-marco="works-container"
                                                <?php  $var=[];
                                                $paginas = $this->pnt('arrrusel_de_carrusel','3',["return"=>true]); 
                                                $contador = 0;
                                                  for($i=0;$i<$paginas;$i++){
                                                $var[] = [ "type"=>"imagen",
                                                           "id"=>"carrusel".$i."_imagen2",
                                                            "width"=>"271",
                                                            "height"=>"467",
                                                            "url"=>$this->url_templet(["return"=>true])."images/resource/scrn1.jpg"];
                                                            
                                                           } ?>  data-var='<?php echo json_encode($var); ?>'></div>

</div>
                           
   

                                            <div class="app-scrn-caro">

                                            <?php 
                                                 
                                            for($i=0;$i<$paginas;$i++){ ?>

                                                
                                                             
                                                    <img id="carrusel<?php echo $i; ?>_imagen2" src="<?php $this->pnt('carrusel'.$i.'_imagen2',$this->url_templet(['return'=>true]).'images/resource/scrn1.jpg'); ?>" alt="">
                                                
                                            <?php } ?>
                                   
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gp thm-lyr opc6">
                <div class="parlx" style="background-image: url(images/parlx-bg3.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="nws-ltr-wrp text-center">
                                <div class="nws-ltr-inr">
                                    <div class="nws-ltr-tl">
                                        <i><img src="<?php $this->url_templet(); ?>images/resource/nws-ltr-icn.png" alt=""></i>
                                        <div class="nws-ltr-tl-inr">
                                            <h3 class="jmy_web_div" data-editor="no" data-page="inicio" id="titulo_email"><?php $this->pnt('titulo_email','Subscribe Our Newsletter'); ?></h3>
                                            <span class="jmy_web_div" data-editor="no" data-page="inicio" id="text_email"><?php $this->pnt('text_email','Sign up Here get the latest news, updates'); ?></span>
                                        </div>
                                    </div>
                                    <form class="nws-ltr-frm brd-rd40">
                                        <input class="brd-rd40 jmy_web_contacto" type="email" data-formulario="contacto_inicio" data-campo="Email" placeholder="Ingresa Email">
                                        <button class="jmy_web_contacto_enviar" id="contacto_inicio" data-formulario="contacto_inicio" data-text="Enviar" type="submit"><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div><!-- Newsletter Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team">
            <div class="gp bp175">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-tl-wrp text-center">
                                <div class="sec-tl-innr">
                                    <h2>Meet Awesome Team</h2>
                                    <span>Best & Clean Landing Page with Unique Idea</span>
                                    <i class="tl-shp"><i class="tl-shp-inr"></i></i>
                                </div>
                            </div>
                            <div class="rmv-ext">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="membr-wrp text-center">
                                            <div class="membr-innr">
                                                <img src="<?php $this->url_templet(); ?>images/resource/member1.jpg" alt="" />
                                                <div class="membr-inf">
                                                    <h4><a href="<?php $this->url_templet(); ?>team-detail.html" title="">QLARK WILLIMES</a></h4>
                                                    <span class="blue-clr">Co-Founder</span>
                                                    <div class="scl-inf">
                                                        <a href="<?php $this->url_templet(); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Vimeo" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                    </div>
                                                    <p>Lorem ipsum dolor uIL sit am pellen erat Maecenas cenasgue ut eget secte pellentesque…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="membr-wrp text-center">
                                            <div class="membr-innr">
                                                <img src="<?php $this->url_templet(); ?>images/resource/member2.jpg" alt="" />
                                                <div class="membr-inf">
                                                    <h4><a href="<?php $this->url_templet(); ?>team-detail.html" title="">WILLIMES JOHN</a></h4>
                                                    <span class="blue-clr">Co-Founder</span>
                                                    <div class="scl-inf">
                                                        <a href="<?php $this->url_templet(); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Vimeo" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                    </div>
                                                    <p>Lorem ipsum dolor uIL sit am pellen erat Maecenas cenasgue ut eget secte pellentesque…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="membr-wrp text-center">
                                            <div class="membr-innr">
                                                <img src="<?php $this->url_templet(); ?>images/resource/member3.jpg" alt="" />
                                                <div class="membr-inf">
                                                    <h4><a href="<?php $this->url_templet(); ?>team-detail.html" title="">DOMINUS WATSON</a></h4>
                                                    <span class="blue-clr">Co-Founder</span>
                                                    <div class="scl-inf">
                                                        <a href="<?php $this->url_templet(); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                        <a href="<?php $this->url_templet(); ?>" title="Vimeo" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                    </div>
                                                    <p>Lorem ipsum dolor uIL sit am pellen erat Maecenas cenasgue ut eget secte pellentesque…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vw-al text-center"><a class="brd-rd40" href="<?php $this->url_templet(); ?>team.html" title="">VIEW ALL TEAM <i class="fa fa-angle-right brd-rd50"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features">
            <div class="gp gry-lyr hg-opc">
                <div class="skw-shp-tp lft"></div>
                <div class="parlx" style="background-image: url(images/parlx-bg1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="amz-fea">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 hidden-sm-down col-lg-5">
                                        <div class="amz-mckp"><img src="<?php $this->url_templet(); ?>images/resource/amz-mckp1.png" alt="" /></div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                        <div class="amz-tl">
                                            <h2>XAPO <i class="blue-clr">Amazing Features</i></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur ili adipiscing Donec nec eros eget elit Donec nec eros eget adipiscing Ulimes gue ut eget…</p>
                                        </div>
                                        <div class="fea-wrp">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-laptop blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5>HIGH RESOLUTION</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-settings blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5>ULTIMITED FEATURES</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-person-stalker blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5>FREE SUPPORT</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-ios-list-outline blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5>CLEAN CODES</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="gp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-tl-wrp text-center">
                                <div class="sec-tl-innr">
                                    <h2>Recent News</h2>
                                    <span>Best & Clean Landing Page with Unique Idea</span>
                                    <i class="tl-shp"><i class="tl-shp-inr"></i></i>
                                </div>
                            </div>
                            <div class="rmv-ext">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="rcnt-nws text-center">
                                            <div class="rcnt-thmb">
                                                <a href="<?php $this->url_templet(); ?>blog-detail.html" title=""><img src="<?php $this->url_templet(); ?>images/resource/rcnt-nws-img1.jpg" alt=""></a>
                                            </div>
                                            <div class="nws-inf">
                                                <div class="mta">
                                                    <span>8 Comments</span>
                                                    <span>245 Views</span>
                                                </div>
                                                <h4><a href="<?php $this->url_templet(); ?>blog-detail.html" title="">Explore These Stunning Small Business</a></h4>
                                                <span class="pst-athr blue-clr brd-rd30">Posted by Willimes Smith</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="rcnt-nws text-center">
                                            <div class="rcnt-thmb">
                                                <a href="<?php $this->url_templet(); ?>blog-detail.html" title=""><img src="<?php $this->url_templet(); ?>images/resource/rcnt-nws-img2.jpg" alt=""></a>
                                            </div>
                                            <div class="nws-inf">
                                                <div class="mta">
                                                    <span>8 Comments</span>
                                                    <span>245 Views</span>
                                                </div>
                                                <h4><a href="<?php $this->url_templet(); ?>blog-detail.html" title="">Boriosam sunt consectetur, assumenda provident</a></h4>
                                                <span class="pst-athr blue-clr brd-rd30">Posted by Willimes Smith</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="rcnt-nws text-center">
                                            <div class="rcnt-thmb">
                                                <a href="<?php $this->url_templet(); ?>blog-detail.html" title=""><img src="<?php $this->url_templet(); ?>images/resource/rcnt-nws-img3.jpg" alt=""></a>
                                            </div>
                                            <div class="nws-inf">
                                                <div class="mta">
                                                    <span>8 Comments</span>
                                                    <span>245 Views</span>
                                                </div>
                                                <h4><a href="<?php $this->url_templet(); ?>blog-detail.html" title="">Provident lorem amet, con sectetur Adipisicing</a></h4>
                                                <span class="pst-athr blue-clr brd-rd30">Posted by Willimes Smith</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vw-al text-center"><a class="brd-rd40" href="<?php $this->url_templet(); ?>blog.html" title="">VIEW ALL NEWS <i class="fa fa-angle-right brd-rd50"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gp notp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="testi-caro-wrp">
                                <div class="testi-caro-innr">
                                    <div class="testi-bx">
                                        <img class="brd-rd50" src="<?php $this->url_templet(); ?>images/resource/tasti1.jpg" alt="" />
                                        <div class="testi-bx-innr">
                                            <p>Excepteur sint occaecat cupidtat non proident, tempor incididunt Excepteur sint occaecat cup sed do eiusmo lorimes tempor labore..</p>
                                            <h4>THOMAS DOE</h4> <i class="blue-clr">Graphic Designer</i>
                                        </div>
                                    </div>
                                    <div class="testi-bx">
                                        <img class="brd-rd50" src="<?php $this->url_templet(); ?>images/resource/tasti2.jpg" alt="" />
                                        <div class="testi-bx-innr">
                                            <p>Excepteur sint occaecat cupidtat non proident, tempor incididunt Excepteur sint occaecat cup sed do eiusmo lorimes tempor labore..</p>
                                            <h4>THOMAS DOE</h4> <i class="blue-clr">Graphic Designer</i>
                                        </div>
                                    </div>
                                    <div class="testi-bx">
                                        <img class="brd-rd50" src="<?php $this->url_templet(); ?>images/resource/tasti3.jpg" alt="" />
                                        <div class="testi-bx-innr">
                                            <p>Excepteur sint occaecat cupidtat non proident, tempor incididunt Excepteur sint occaecat cup sed do eiusmo lorimes tempor labore..</p>
                                            <h4>THOMAS DOE</h4> <i class="blue-clr">Graphic Designer</i>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="gp nogp">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="gmp" id="gmp"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="cont-wrp ovrlp-200 ovrlp-bp-200">
                                <div class="row mrg">
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="cnt-inf">
                                            <div class="cnt-inf-tl">
                                                <h4>GET IN TOUCH</h4>
                                            </div>
                                            <div class="cnt-inf-lst">
                                                <p><span class="blue-clr">Email:</span> info@hotel.com</p>
                                                <p><span class="blue-clr">Phone Number:</span> +34 928 514200</p>
                                                <p><span class="blue-clr">Office Number:</span> 1 (800) 555-4453</p>
                                                <p><span class="blue-clr">Fax:</span> +34 928 513080</p>
                                                <p class="adr">25 Street no doky street 2440/x New Villa 14X USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <form class="cnt-frm text-center">
                                            <div class="row mrg10">
                                                <div class="col-md-4 col-sm-4 col-lg-4"><input class="brd-rd30" type="text" Placeholder="Complete Name *" /></div>
                                                <div class="col-md-4 col-sm-4 col-lg-4"><input class="brd-rd30" type="email" Placeholder="Email Address *" /></div>
                                                <div class="col-md-4 col-sm-4 col-lg-4"><input class="brd-rd30" type="text" Placeholder="Subject *" /></div>
                                                <div class="col-md-12 col-sm-12 col-lg-12"><textarea class="brd-rd30" Placeholder="Your Message *"></textarea> <button class="brd-rd30" type="submit">SEND MESSAGE</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
=======
		
<!-- MAIN BANNER -->
<section class="cd-hero XD1container" >
	<ul class="cd-hero-slider autoplay">
		<li class="selected jmy_web_slider" id="img_slider0" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider0" 
		
		 <?php  $va=[];					$va[] = [ "type"=>"imagen",
											"id"=>"img_slider_0",
											 "width"=>"1800",
											 "height"=>"600",
											 "url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul2.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
											
										<img height="600" width="1800" alt="" title="" id="img_slider_0" src="<?php $this->pnt('img_slider_0',$this->url_templet(['return'=>true]).'images/main-banner/1/fondoazul2.jpg'); ?>">
											 
							
		

			<div class="cd-full-width">
			<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_1" data-editor="no"><?php $this->pnt('slider_1','Money Doesn’t<br>Come <span class="color-default">Without Care</span>'); ?></h2>					
					<p class="jmy_web_div" data-page="inicio" id="slider_1_txt"><?php $this->pnt('slider_1_txt','Finding your next Financial Advisor is as easy as counting from one to five.'); ?></p>

					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="Leer mas"  >Leer mas</a>

					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos" >Contactanos</a>
				</div>	
			</div>
		</li>

		
		<li class="jmy_web_slider" id="img_slider1" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider1" 
		
		 <?php  $va=[];					$va[] = [ "type"=>"imagen",
											"id"=>"img_slider_1",
											 "width"=>"1800",
											 "height"=>"600",
											 "url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
											
										<img height="600" width="1800" alt="" title="" id="img_slider_1" src="<?php $this->pnt('img_slider_1',$this->url_templet(['return'=>true]).'images/main-banner/1/fondoazul.jpg'); ?>">

		

			<div class="cd-full-width" >
			<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_2" data-editor="no">
						<?php $this->pnt('slider_2','Friendly <span class="color-default">Assistance</span>'); 
						?></h2>

					<p class="jmy_web_div" data-page="inicio" id="slider_2_txt" data-editor="no"> 
						<?php $this->pnt('slider_2_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance. we’re with you every step of the way');
						?></p>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="póngase en contacto con nosotros hoy">póngase en contacto con nosotros hoy
					</a>
				</div>
			</div>
		</li>

		<li class="jmy_web_slider" id="img_slider2" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider2" 
		
		<?php  $va=[];					$va[] = [ "type"=>"imagen",
										   "id"=>"img_slider_2",
											"width"=>"1800",
											"height"=>"600",
											"url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
										   
									   <img height="600" width="1800" alt="" title="" id="img_slider_2" src="<?php $this->pnt('img_slider_2',$this->url_templet(['return'=>true]).'images/main-banner/1/fondoazul.jpg'); ?>">

		

			<div class="cd-full-width">
				<div class="container text-center">
					<h2 class="jmy_web_div color-white" data-page="inicio" id="slider_3" data-editor="no">
						<?php $this->pnt('slider_3','Experience is Everything'); ?>
					</h2>
					<p class="jmy_web_div color-white"  data-page="inicio" id="slider_3_txt" data-editor="no"><?php
					 $this->pnt('slider_3_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance we’re with you every step of the way'); 
					 ?></p>
					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="leer mas">leer mas</a>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos">Contactanos</a>
				</div>
			</div>
		</li>

		<li class="jmy_web_slider" id="img_slider3" data-tabla="vistaweb" data-page="inicio" data-marco="img_slider3" 
		
		<?php  $va=[];					$va[] = [ "type"=>"imagen",
										   "id"=>"img_slider_3",
											"width"=>"1800",
											"height"=>"600",
											"url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
										   
									   <img height="600" width="1800" alt="" title="" id="img_slider_3" src="<?php $this->pnt('img_slider_3',$this->url_templet(['return'=>true]).'images/main-banner/1/fondoazul.jpg'); ?>">

		
			<div class="cd-full-width">
				<div class="container text-right">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_4" data-editor="no">
						<?php $this->pnt('slider_4','Clients <span class="color-default">Investment<br></span>Guidance'); ?>
						
					</h2>
					<p class="jmy_web_div" data-page="inicio" id="slider_4_txt" data-editor="no">
						<?php $this->pnt('slider_4_txt','Doing the right thing for our clients, no matter what.'); ?>					
					</p>
					<a href="<?php $this->url_inicio(); ?>services.html" class="btn btn-primary" data-text="Ver todos nuestros servicios">
						Ver todos nuestros servicios
					</a>
				</div>
			</div>
		</li>

	</ul>

	<div class="cd-slider-nav">
		<nav class="container">
			<span class="cd-marker item-1"></span>
			
			<ul>

				<li class="jmy_web_div selected" data-page="inicio" id="slider_menu_1"><?php 
				$this->pnt('slider_menu_1','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">1</div>Money Care<span>Finding your Next Advisor</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_2"><?php
				$this->pnt('slider_menu_2','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">2</div>Friendly Assistance<span>Export Financial Advice</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_3"><?php
				$this->pnt('slider_menu_3','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">3</div> Our Experience<span>We have 15 Years Experience</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_4"><?php
				$this->pnt('slider_menu_4','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">4</div> Client Investment<span>Doing the right thing</span></a>'); ?></li>

			</ul>
		</nav> 
	</div>
	
</section> <!-- / MAIN BANNER -->




<!-- Editor listo WELCOME -->
<section class="bg-blue">
	<div class="container">
		<div class="row">

			<div class="col-md-6 animate fadeInLeft">
				<h2 class="jmy_web_div " data-page="inicio" id="welcom_adv" data-editor="no"><?php $this->pnt('welcom_adv','Welcome to Advisor'); ?></h2>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="welcom_adv_txt" data-editor="no"><?php $this->pnt('welcom_adv_txt','We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.'); ?></p>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="2welcom_adv" data-editor="no"><?php $this->pnt('2welcom_adv','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.'); ?></p>
				<div class="height-20"></div>
				<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-bordered-dark" data-text="leer mas">leer mas</a>
				<div class="height-40"></div>
			</div>



			<div class="col-md-6 animate fadeInRight">
				<div class="video-widget jmy_web_slider XDJ1"  id="video_imagen1" data-tabla="vistaweb"  data-page="inicio" data-marco="video_imagen1" 
				
				<?php  $va=[];					$va[] = [ "type"=>"imagen",
											"id"=>"video_imagen_1",
											 "width"=>"540",
											 "height"=>"368",
											 "url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul2.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
											
										
					
					<a href="<?php $this->pnt( 'video_disenadopor_href', 'http://vimeo.com/36031564'); 
					?>" title="" class="disenado jmy_web_div fancybox-media" id="video_disenadopor" data-page="inicio" data-editor="no"><?php 
						$this->pnt( 'video_disenadopor',
									'<i class="fa fa-play"></i> '
									
						);	
											
					?></a>  
		
		 
						
					<img height="368" width="540" alt="" title="" id="video_imagen_1" src="<?php $this->pnt('video_imagen_1',$this->url_templet(['return'=>true]).'images/video-thumb.jpg'); ?>">
					


				</div>
			</div>
		</div>
	</div>
</section><!-- / WELCOME -->


<!-- BENIFITS -->
 <section class="text-center">
	<div class="container">

<!--
<div class="jmy_web_categorias" data-page="inicio" id="categorias_nombres" data-value="<?php
            $categorias = ["anillos","collares","pulceras"];
            $categorias = $this->pnt('categorias_nombres',implode(',', $categorias),['return'=>true]); 
            echo $categorias;
            $categorias = explode(",",$categorias);
            ?>" data-titulo="Indica el nombre de categoría separado por comas"></div>

    -->


<div class="jmy_web_contador" data-page="inicio" id="numero_de_carrusel" data-value="<?php
        $this->pnt('numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>




		


           <?php 
				 $paginas = $this->pnt('numero_de_carrusel','3',["return"=>true]); 
				 
				 $flechas =$paginas;
							
					echo $flechas;
						if ($flechas >1){
							echo ' <div class="two-items-carousel owl-carousel"> '; 
						}else{
							echo ' <div class="two-items-carousel" > '; 
						}

                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>

                <!-- INICIA el Ejemplo 1 -->
                <div class="<?php $this->pnt('slider_cat_'.$i,''); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>" data-page="inicio" data-tabla="vistaweb" data-marco="works-container" 




				<?php  $va=[];	$va[] = [ "type"=>"imagen",
										   "id"=>"carr".$i."_imagen",
											"width"=>"356",
											"height"=>"480",
											"url"=>$this->url_templet(["return"=>true])."images/img1.jpg"];
										
								$va[] =["type"=>"text",
										   "id"=>"carr".$i."_titulo",
										   "value"=>$this->pnt("carr".$i."_titulo","",["return"=>true]),
											"placeholder"=>"TituloH3"];

								$va[] =	["type"=>"text",
										   "id"=>"carr".$i."_text",
										   "value"=>$this->pnt("carr".$i."_text","",["return"=>true]),
											"placeholder"=>"parrafo"];  ?>  data-var='<?php echo json_encode($va); ?>' >

					<div class="image-and-text-box animate fadeInLeft">					 
								  


<div class="bordered-thumb " data-page="inicio">

							 <img height="356" width="480" id="carr<?php echo $i; ?>_imagen" src="<?php $this->pnt('carr'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/img1.jpg'); ?>"></div>
						<h3 class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo"><?php 
						$this->pnt('carr'.$i.'_titulo','Why Our Consulting'); ?></h3>

						<p class="" data-page="inicio" id="carr<?php echo $i; ?>_text"><?php 
						$this->pnt('carr'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
					</div>	
				</div>
				<!-- FINALIZA el Ejemplo 1 -->

  <!-- INICIA el Ejemplo 1 -->
                <div class="<?php $this->pnt('slider_cat_'.$i,'_b'); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>_b" data-page="inicio" data-tabla="vistaweb" data-marco="works-container" 
				
				
				<?php  $var=[];	$var[] = [ "type"=>"imagen",
										   "id"=>"carr".$i."_imagen_b",
											"width"=>"356",
											"height"=>"480",
											"url"=>$this->url_templet(["return"=>true])."images/img1.jpg"];
										
								$var[] =["type"=>"text",
										   "id"=>"carr".$i."_titulo_b",
										   "value"=>$this->pnt("carr".$i."_titulo_b","",["return"=>true]),
											"placeholder"=>"TituloH3"];

								$var[] =	["type"=>"text",
										   "id"=>"carr".$i."_text_b",
										   "value"=>$this->pnt("carr".$i."_text_b","",["return"=>true]),
											"placeholder"=>"parrafo"];  ?>  data-var='<?php echo json_encode($var); ?>'>


					<div class="image-and-text-box animate fadeInLeft">
						
						<h3 class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo_b"><?php 
						$this->pnt('carr'.$i.'_titulo_b','Why Our Consulting'); ?></h3>

						<p class="" data-page="inicio" id="carr<?php echo $i; ?>_text_b"><?php 
						$this->pnt('carr'.$i.'_text_b','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
						<div class="bordered-thumb " data-page="inicio">

							<img height="356" width="480" id="carr<?php echo $i; ?>_imagen_b" src="<?php 
							$this->pnt(	'carr'.$i.'_imagen_b',
									$this->url_templet(["return"=>true]).'images/img1.jpg'
									); ?>" alt=""></div>
					</div>	
				</div>
				<!-- FINALIZA el Ejemplo 1 -->

			


   <?php /* 

			<div class="image-and-text-box animate fadeInRight">
				<div class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo2"  ><?php 
				$this->pnt('carr'.$i.'_titulo2','<h3>Investment Planning</h3>');?></div>
				<div class="bordered-thumb" data-page="inicio" id="carr<?php echo $i; ?>_text2"><?php 
				$this->pnt('carr'.$i.'_text2','<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. </p> '); 
				?></div>
				<div class="bordered-thumb " data-page="inicio" id="carr<?php echo $i; ?>_imagen2"><?php 
					$this->pnt(	'carr'.$i.'_imagen2','<img src="'. $this->url_templet(["return"=>true]).'images/img1.jpg" alt="">'); 
				?></div>
			</div> */ }
	 ?>




		</div>
	</div>
</section><!-- / BENIFITS -->


<!-- FUNFACTS -->
<div class="container">
	<div class="funfacts text-center jmy_web_slider" id="helping_back1" data-page="inicio" data-marco="helping_back1" 	
	style="background: url(<?php $this->pnt('helping_back', $this->url_templet(['return'=>true]).'images/funfact-bg.jpg'); ?>); background-repeat: no-repeat; background-size: cover; height:397px; position:relative; margin-bottom:-117px; z-index:100;"

	<?php  $var=[];				$var[] = [ "type"=>"imagen",
										   "id"=>"helping_back",
											"width"=>"1170",
											"height"=>"398",
											"url"=>$this->url_templet(["return"=>true])."images/img1.jpg"]; ?>  data-var='<?php echo json_encode($var); ?>'>

		<div class="advisor-overlay"></div>
		<div class="funfacts-inner">
			<h2 class="jmy_web_div" data-page="inicio" id="titulo_satisfaccion"  ><?php 
				$this->pnt('titulo_satisfaccion','Helping Small Businesses'); 
				?></h2>
			<p class="jmy_web_div " data-page="inicio" id="satisfaccion_text"><?php 
				$this->pnt('satisfaccion_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); ?></p>

			<div class="row text-center" id="">

				<div class="col-md-3 col-xs-6">
					<div class="counter">
						<span class="jmy_web_div quantity-counter1 highlight" data-page="inicio" id="satisfaccion_no1"><?php 
						$this->pnt('satisfaccion_no1','0'); ?></span>	

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto1"  ><?php 
						$this->pnt('satisfaccion_consepto1','Employees'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter2 highlight" data-page="inicio" id="satisfaccion_no2"><?php 
						$this->pnt('satisfaccion_no2','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto2"  ><?php 
						$this->pnt('satisfaccion_consepto2','Location'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counte3 highlight" data-page="inicio" id="satisfaccion_no3"><?php 
						$this->pnt('satisfaccion_no3','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto3"  ><?php 
						$this->pnt('satisfaccion_consepto3',' Satisfaction'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter4 highlight" data-page="inicio" id="satisfaccion_no4"><?php 
						$this->pnt('satisfaccion_no4','0'); ?></span>
					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto4"  ><?php 
						$this->pnt('satisfaccion_consepto4','Happy Customers'); 
						?></h6>
					 </div>
				</div>

			</div>
		</div>
	</div><!-- / CONTAINER -->
</div><!-- / FUNFACTS -->


<!-- DIFFERENT SERVICES -->
<section class=" text-center parallax jmy_web_slider different-service" id="back_love" data-page="inicio" data-marco="back_love" style="background-image: url(<?php $this->pnt('img_back_love', $this->url_templet(['return'=>true]).'images/parallax/1.jpg'); ?>); no-repeat center top; background-size:cover; height:642px; padding-top:260px; position:relative;"


<?php  $var=[];					$var[] = [ "type"=>"imagen",
										   "id"=>"img_back_love",
											"width"=>"1920",
											"height"=>"1250",
											"url"=>$this->url_templet(["return"=>true])."images/img1.jpg"]; ?>  data-var='<?php echo json_encode($var); ?>'
>

<?php /*
	<li class="jmy_web_slider" id="img_slider3" data-page="inicio" data-marco="img_slider3" data-var='[{"type":"imagen","id":"img_slider_3","url":"<?php $this->url_templet(); ?>images/main-banner/1/fondoazul4.jpg"}]' >

	<img height="100%" width="100%" src="<?php $this->pnt('img_slider_3', $this->url_templet(['return'=>true]).'images/main-banner/1/fondoazul4.jpg'); ?>"  alt=""   >
	
*/?>

	<div class="container">
		<div class="heading animate bounceIn">
			<h1 class="color-white jmy_web_div" data-page="inicio" id="amamos_titulo" data-editor="no"  ><?php 
				$this->pnt('amamos_titulo','We Love What We Do'); 
				?></h1>
			<p class="color-white jmy_web_div" data-page="inicio" id="amamos_texto" data-editor="no" ><?php 
				$this->pnt('amamos_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
		</div>
	</div>
		
</section><!-- / DIFFERENT SERVICES -->



<!-- WHO IS BEHIND -->
<section class="bg-blue">
	<div class="container">
		<div class="services text-center">

			<div class="jmy_web_contador" data-page="inicio" id="amamos_numero_de_carrusel" data-value="<?php
        $this->pnt('amamos_numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>



			<div class="three-items-carousel owl-carousel">

 			<?php 
                 $paginas = $this->pnt('amamos_numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>

				
				<div class="jmy_web_slider" data-page="inicio"  data-tabla="vistaweb" id="grupo_slider_2_<?php echo $i;?>" data-marco="grupo_slider_2_<?php echo $i;?>" <?php 
										  $campos=[];
				                          $campos[] = [ "type"=>"text",
													"id"=>"amamos_slide".$i."_icono",
													"placeholder"=>"Selecione del 1 al 10",
													"value"=>$this->pnt("amamos_slide".$i."_icono","",["return"=>true])
											]; 
				                          $campos[] = [ "type"=>"text",
													"id"=>"amamos_slide".$i."_titulo",
													"placeholder"=>"Título",
													"value"=>$this->pnt("amamos_slide".$i."_titulo","",["return"=>true])
											]; 
				                          $campos[] = [ "type"=>"text",
													"id"=>"amamos_slide".$i."_text",
													"placeholder"=>"Parrafo",
													"value"=>$this->pnt("amamos_slide".$i."_text","",["return"=>true])
											]; 


											?>  data-var='<?php echo json_encode($campos); ?>'>
				


					<div class="service-box">
						<i class="icon-img-<?php 
						$this->pnt('amamos_slide'.$i.'_icono',($i+1)); 
						?>"></i>
						<h4 data-page="inicio" id="amamos_slide<?php echo $i;?>_titulo"><?php 
						$this->pnt('amamos_slide'.$i.'_titulo','Advisor'); 
						?></h4>

						<p data-page="inicio" id="amamos_slide<?php echo $i;?>_text"><?php 
						$this->pnt('amamos_slide'.$i.'_text','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
						?></p>
					</div>


				</div>

				<?php } ?>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 animate fadeInLeft" >
				<ul class="image-list-classic ">
					<li>
					  <div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont" data-page="inicio" data-marco="bro_imagen_cont"  
					  
					  
					  <?php  $var=[];
					  			$var[] = [ "type"=>"imagen",
										   "id"=>"bro_imagen",
											"width"=>"360",
											"height"=>"386",
											"url"=>$this->url_templet(["return"=>true])."images/behind.jpg"];
											
											?>  data-var='<?php echo json_encode($var); ?>'>

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen" src="<?php $this->pnt('bro_imagen',$this->url_templet(['return'=>true]).'images/behind.jpg'); ?>"/>
					  </div>
					</li>
					<li>
						<div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont2" data-page="inicio" data-marco="bro_imagen_cont2"  data-button="down"
						<?php  $var=[];

								$var[] = [ "type"=>"imagen",
										   "id"=>"bro_imagen2",
											"width"=>"402",
											"height"=>"280",
											"url"=>$this->url_templet(["return"=>true])."images/behind2.jpg"];
											
											?>  data-var='<?php echo json_encode($var); ?>'>

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen2" src="<?php $this->pnt('bro_imagen2',$this->url_templet(['return'=>true]).'images/behind2.jpg'); ?>"/>
					  </div>
					</li>
				</ul>
			</div>
			<div class="col-md-6 animate fadeInRight">
				<h3 class="jmy_web_div" data-page="inicio" id="brok_titulo"><?php 
					$this->pnt('brok_titulo','Who is behind the best brok'); 
					?></h3>
				<p class="jmy_web_div" data-page="inicio" id="brok_texto"><?php 
					$this->pnt('brok_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
				
				

			<div class="jmy_web_contador" data-page="inicio" id="brok_numero_de_carrusel" data-value="<?php
			        $this->pnt('brok_numero_de_carrusel','3'); 
			        ?>" data-titulo="Inica el número de páginas a mostrar"></div>


				<div id="accordion" role="tablist" aria-multiselectable="true">

					<?php 
            	     $paginas = $this->pnt('brok_numero_de_carrusel','3',["return"=>true]); 
              		 $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>


					<div class="toggle">
						<div class="toggle-heading" role="tab">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php $this->url_templet(); ?>#collapseOne<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i;?>">
							  <i class="fa fa-plus"></i> <div class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_titulo"><?php 
							$this->pnt('brok_'.$i.'_titulo','What is do i have to tell you a few lorem?'); 
							?></div></a>
						</div>
						<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse <?php echo ($i==1)?'in':'';?>" role="tabpanel">
							<div class="toggle-body">
								<p class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_texto"><?php 
							$this->pnt('brok_'.$i.'_texto','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
							?></p>
							</div>
						</div>
					</div>

					<?php } ?>



				</div>
			</div>
		</div>
	</div>
</section><!-- / WHO IS BEHIND -->




<div class="contact-us-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h4 class="jmy_web_div animate fadeInLeft" data-page="inicio" id="deseo_duda_asesores_text"><?php 
					$this->pnt('deseo_duda_asesores_text','Si tiene algún deseo o alguna pregunta ... Estamos disponibles'); 
					?></h4>
			</div>
			<div class="col-md-3">
				<div class="text-right">
					<a href="<?php $this->url_inicio(); ?>" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Contactanos "><i class="icon-telephone114"></i>Contactanos</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MEET OUR ADVISORS -->
<section class="meet-our-advisors">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2 class="jmy_web_div" data-page="inicio" id="nuestros_asesores_titulo"><?php 
					$this->pnt('nuestros_asesores_titulo','Conoce a nuestros asesores'); 
					?></h2>
			 <p class="jmy_web_div" data-page="inicio" id="nuestros_asesores_txt"  ><?php 
				$this->pnt('nuestros_asesores_txt','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
		</div>

		<div class="jmy_web_contador" data-page="inicio" id="numero_carrusel_nuestros" data-value="<?php
			        $this->pnt('numero_carrusel_nuestros','3'); 
			        ?>" data-titulo="Inica el número de páginas a mostrar"></div>
		
		
			
			<?php 
					 $paginas = $this->pnt('numero_carrusel_nuestros','3',["return"=>true]); 
					 $flechas =$paginas;
							
						echo $flechas;
						if ($flechas >1){
							echo ' <div class="single-item-carousel owl-carousel classic-arrows"> '; 
						}else{
							echo ' <div> '; 
						}
              		 $contador = 0;
                		for($i=0;$i<$paginas;$i++){ ?>


			<div class="row">

				<div class="col-md-1" >
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div> 
				<div class="col-md-5 animate fadeInLeft <?php $this->pnt('slider_caasesor_'.$i,''); ?> jmy_web_slider" id="nuestros_asesores_img<?php echo $i; ?>" data-tabla="vistaweb" data-page="inicio" data-marco="works-container"  
				
				<?php  $var=[];	$var[] = [ "type"=>"imagen",
										   "id"=>"nuestros_asesores_i".$i."_imagen",
											"width"=>"460",
											"height"=>"436",
											"url"=>$this->url_templet(["return"=>true])."images/meet-our-advisors-img1.jpg"];
										
								$var[] =["type"=>"text",
										   "id"=>"nuestros_asesores".$i."_titulo",
										   "value"=>$this->pnt("nuestros_asesores".$i."_titulo","",["return"=>true]),
											"placeholder"=>"TituloH3"];

								$var[] =	["type"=>"text",
										   "id"=>"nuestros_asesores".$i."_text",
										   "value"=>$this->pnt("nuestros_asesores".$i."_text","",["return"=>true]),
											"placeholder"=>"parrafo"];

								$var[] =	["type"=>"text",
										   "id"=>"nuestros_asesores".$i."_text2",
										   "value"=>$this->pnt("nuestros_asesores".$i."_text2","",["return"=>true]),
											"placeholder"=>"parrafo2"];  ?>  data-var='<?php echo json_encode($var); ?>'>


					<img id="nuestros_asesores_i<?php echo $i; ?>_imagen" src="<?php $this->pnt('nuestros_asesores_i'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/meet-our-advisors-img1.jpg'); ?>"/></div>

				<div class="col-md-6 animate fadeInRight">
					<div class="meet-advisors-content">
						<h3 class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_titulo"><?php 
						$this->pnt('nuestros_asesores'.$i.'_titulo','David Fernando<span><br>Founder & CEO</span>'); ?></h3>

						<p class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text"><?php 
						$this->pnt('nuestros_asesores'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>

						<p class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text2"><?php 
						$this->pnt('nuestros_asesores'.$i.'_text2','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
					</div>
				</div>

				</div>


			

			<?php } ?>
		</div>
	</div>
</section><!-- / MEET OUR ADVISORS -->


<!-- TESTIMONIALS -->
<section class="bg-blue">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2 class="jmy_web_div" data-page="inicio" data-editor="no" id="happy_coustomer_titu"><?php 
							$this->pnt('happy_coustomer_titu','Happy Customers'); 
							?></h2>
			<p class="jmy_web_div" data-page="inicio" data-editor="no" id="happy_coustomer_tex"><?php 
							$this->pnt('happy_coustomer_tex','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.'); 
			?></p>
		</div>


		<div class="row">
			<div class=" jmy_web_contador" data-page="inicio" id="numero_carrusel_happy" data-value="<?php
		 		$this->pnt('numero_carrusel_happy','3'); 
       			 ?>" data-titulo="Inica el número de páginas a mostrar"></div>			
				
				
					<?php 
							 $paginas = $this->pnt('numero_carrusel_happy','3',["return"=>true]);
							 $flechas =$paginas;
							
						echo $flechas;
						if ($flechas >1){
							echo ' <div class="single-item-carousel owl-carousel classic-arrows"> '; 
						}else{
							echo ' <div> '; 
						}
				
							   $contador = 0;

							   

		                		for($i=0;$i<$paginas;$i++){ 
		             ?>
					 
					

					<div class="row">

						
						<div class="col-md-1"></div>
						<div class="col-md-5">
							
							<div class="testimonial animate fadeInUp <?php $this->pnt('slider_happy_'.$i,''); ?> jmy_web_slider" id="happy_img<?php echo $i; ?>" data-page="inicio" data-tabla="vistaweb" data-marco="works-container"  
							
								
								
		<?php  $vari=[];	$vari[] = [ "type"=>"imagen",
										   "id"=>"happy_i".$i."_imagen",
											"width"=>"63",
											"height"=>"63",
											"url"=>$this->url_templet(["return"=>true])."images/meet-our-advisors-img1.jpg"];
										
								$vari[] =["type"=>"text",
										   "id"=>"happy".$i."_titulo",
										   "value"=>$this->pnt("happy".$i."_titulo","",["return"=>true]),
											"placeholder"=>"Nombre"];

								$vari[] =	["type"=>"text",
										   "id"=>"happy".$i."_text",
										   "value"=>$this->pnt("happy".$i."_text","",["return"=>true]),
											"placeholder"=>"Comentario"];

								$vari[] =	["type"=>"text",
										   "id"=>"happy".$i."_cargo",
										   "value"=>$this->pnt("happy".$i."_cargo","",["return"=>true]),
											"placeholder"=>"_cargo"];

								  ?>  data-var='<?php echo json_encode($vari); ?>'>

								<div class="testimonial-content">
									<p class="" data-page="inicio" id="happy<?php echo $i; ?>_text"><?php 
								$this->pnt('happy'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.'); ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" id="happy_i<?php echo $i; ?>_imagen" src="<?php $this->pnt('happy_i'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/review-author-img.png'); ?>"/>

											<p class="" data-page="inicio" id="happy<?php echo $i; ?>_titulo"><?php $this->pnt('happy'.$i.'_titulo','Boris Hunt'); ?></p>

											<h6 data-page="inicio" id="happy<?php echo $i; ?>_cargo"><?php  $this->pnt('happy'.$i.'_cargo','<span>sales</span>'); ?></h6>
										</div>
									</div>
									<div class="col-md-6">
										<div class=" jmy_web_contador" data-page="inicio" id="stars_five<?php echo $i; ?>" data-value="<?php
												$this->pnt('stars_five<?php echo $i; ?>','2'); 
												?>" data-titulo="Inica el número de páginas a mostrar"></div>
										<div class="text-right">
											<ul class="rating">

														
														<?php 
																$numberstar = $this->pnt('stars_five'.$i,'2',["return"=>true]); 
																$contador = 0;
																	for($b=0;$b<$numberstar;$b++){ 
														?>

											

												<li><i class="fa fa-star"></i></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div data-delay="100" class="testimonial animate fadeInUp<?php $this->pnt('slider_happy_b'.$i,''); ?> jmy_web_slider" id="happy_img<?php echo $i; ?>_b" data-page="inicio" data-marco="works-container"  

							<div class="<?php $this->pnt('slider_cat_'.$i,'_bXD'); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>_bXD" data-page="inicio" data-tabla="vistaweb" data-marco="works-container" 
							
							
								<?php  $var=[];	$var[] = [ "type"=>"imagen",
										   "id"=>"happy_i".$i."_imagen_b",
											"width"=>"63",
											"height"=>"63",
											"url"=>$this->url_templet(["return"=>true])."images/meet-our-advisors-img1.jpg"];
										
								$var[] =["type"=>"text",
										   "id"=>"happy".$i."_titulo_b",
										   "value"=>$this->pnt("happy".$i."_titulo_b","",["return"=>true]),
											"placeholder"=>"Nombre"];

								$var[] =	["type"=>"text",
										   "id"=>"happy".$i."_text_b",
										   "value"=>$this->pnt("happy".$i."_text_b","",["return"=>true]),
											"placeholder"=>"Comentario"];

								$var[] =	["type"=>"text",
										   "id"=>"happy".$i."_cargo_b",
										   "value"=>$this->pnt("happy".$i."_cargo_b","",["return"=>true]),
											"placeholder"=>"cargo"];

								  ?>  data-var='<?php echo json_encode($var); ?>'>
								

								<div class="testimonial-content">
									<p class="" data-page="inicio" id="happy<?php echo $i; ?>_text_b"><?php 
								$this->pnt('happy'.$i.'_text_b','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.'); ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" id="happy_i<?php echo $i; ?>_imagen_b" src="<?php $this->pnt('happy_i'.$i.'_imagen_b',$this->url_templet(['return'=>true]).'images/review-author-img.png'); ?>"/>

											<p class="" data-page="inicio" id="happy<?php echo $i; ?>_titulo_b"><?php 
								$this->pnt('happy'.$i.'_titulo_b','Boris Hunt'); ?></p>

											<h6 data-page="inicio" id="happy<?php echo $i; ?>_cargo_b"><?php  $this->pnt('happy'.$i.'_cargo_b','<span>sales</span>'); ?></h6>
										</div>
									</div>
									<div class="col-md-6">
										<div class=" jmy_web_contador" data-page="inicio" id="stars_five_b<?php echo $i; ?>" data-value="<?php
													$this->pnt('stars_five_b<?php echo $i; ?>','2'); 
													?>" data-titulo="Inica el número de páginas a mostrar"></div>
											<div class="text-right">
												<ul class="rating">

															
															<?php 
																	$numberstarb = $this->pnt('stars_five_b'.$i,'2',["return"=>true]); 
																	$contador = 0;
																		for($c=0;$c<$numberstarb;$c++){ 
															?>

												

													<li><i class="fa fa-star"></i></li>
													<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

						
<?php } ?>

				</div>


					

				
			</div>
			
			
		<?php /*  <div class="text-center">
			<a class="btn btn-bordered-dark cd-see-all iconic animate fadeInUp" data-delay="200" href="javascript:void(0);" data-text="View All"><i class="icon-img-grid"></i>View All</a>
		</div> */ ?>
	</div>
	
	
	
</section><!-- / BENIFITS -->



<!-- REQUEST A CALLBACK -->
<section>
	<div class="container">
		<div class="request-a-callback clearfix animate fadeInUp">
			<div class="request-a-callback-content">
				<h3 class="jmy_web_div" data-page="inicio" id="request" data-editor="no" ><?php 
								$this->pnt('request','Request a Call Back'); ?></h3>

				<p class="jmy_web_div" data-page="inicio" id="requesttext" data-editor="no" ><?php 
								$this->pnt('requesttext','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.'); ?></p>
				<p class="jmy_web_div" data-page="inicio" id="requesttext2" data-editor="no" ><?php 
								$this->pnt('requesttext2','<strong>For Investment:</strong> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.'); ?></p>
			</div>
			<div class="request-a-callback-form">
			<form>
				<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Nombre" placeholder="Nombre" required>
				<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Email" placeholder="Email " required>
				<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Teléfono" placeholder="Teléfono" >
				<div class="styled-select">
					<select class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Opciones" >
						<option>Me interesa</option>
						<option>Finanza personal</option>
						<option>Comercio de acciones</option>
						<option>Jubilación</option>
						<option>Otros</option>
					</select>
				</div>
				<button class="btn btn-primary jmy_web_contacto_enviar" id="contacto_inicio" data-formulario="contacto_inicio" data-text="Enviar" >Enviar</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- / REQUEST A CALLBACK -->

>>>>>>> 34ac2a497c693b5ce4946f64007e5d1130776163
