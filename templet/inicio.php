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
                                    <h2 class="jmy_web_div" data-page="inicio" id="meet_awesome" data-editor="no">
                                    <?php $this->pnt('meet_awesome','Meet Awesome Team '); ?></h2>

                                    <span class="jmy_web_div" data-page="inicio" id="best_clean" data-editor="no">
                                    <?php $this->pnt('best_clean','Best & Clean Landing Page with Unique Idea'); ?></span>

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
                                        <div class="amz-mckp jmy_web_slider" id="amazing_img" data-tabla="vistaweb" data-page="inicio" data-marco="amazing_img" 
		
		                                    <?php  $va=[];	$va[] = [ "type"=>"imagen",
				                                                        "id"=>"amazing_img_0",
				                                                     "width"=>"690",
			                                                        "height"=>"807",											              "url"=>$this->url_templet(["return"=>true]).'images/main-banner/1/fondoazul.jpg' ];  ?>  

                                                data-var='<?php echo json_encode($va); ?>'>

                                            <img height="807" width="690" alt="" title="" id="amazing_img_0" src="<?php                           $this->pnt('amazing_img_0',$this->url_templet(['return'=>true]).'images/resource/amz-mckp1.png'); ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                        <div class="amz-tl">
                                            <h2 class="jmy_web_div" data-page="inicio" id="Xapo" data-editor="no">
                                               <?php $this->pnt('Xapo',' XAPO <i class="blue-clr">Amazing Features</i>'); ?>
                                              </h2>
                                            <p class="jmy_web_div" data-page="inicio" id="Lorem" data-editor="no">
                                            <?php $this->pnt('Lorem','Lorem ipsum dolor sit amet, consectetur ili adipiscing Donec nec eros eget elit Donec nec eros eget adipiscing Ulimes gue ut eget… '); ?>
                                                </p>
                                        </div>
                                        <div class="fea-wrp">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-laptop blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5 class="jmy_web_div" data-page="inicio" id="HIGH" data-editor="no">
                                                            <?php $this->pnt('HIGH','HIGH RESOLUTION'); ?>
                                                        </h5>
                                                            <p class="jmy_web_div" data-page="inicio" id="ipsum" data-editor="no">
                                                              <?php $this->pnt('ipsum','Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore. '); ?>
                                                         </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-settings blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5 class="jmy_web_div" data-page="inicio" id="ULTIMITED" data-editor="no">
                                                             <?php $this->pnt('ULTIMITED','ULTIMITED FEATURES '); ?>
                                                        </h5>
                                                            <p class="jmy_web_div" data-page="inicio" id="dolor" data-editor="no">
                                                              <?php $this->pnt('dolor','Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.'); ?>
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-person-stalker blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5 class="jmy_web_div" data-page="inicio" id="FREE" data-editor="no">
                                                            <?php $this->pnt('FREE','FREE SUPPORT'); ?>
                                                             </h5>
                                                            <p class="jmy_web_div" data-page="inicio" id="sit" data-editor="no">
                                                             <?php $this->pnt('sit',' Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore. '); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="fea-bx2">
                                                        <i class="ion-ios-list-outline blue-clr"></i>
                                                        <div class="fea-innr">
                                                            <h5 class="jmy_web_div" data-page="inicio" id="CLEAN" data-editor="no">
                                                               <?php $this->pnt('CLEAN','CLEAN CODES'); ?>
                                                             </h5>
                                                            <p class="jmy_web_div" data-page="inicio" id="amet" data-editor="no">
                                                              <?php $this->pnt('amet','Lorem ipsum dolor sit amet, consectet adop adipisicing elit, sed do eiusmod temporara incidid labore.'); ?>
                                                                </p>
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