<div class="top_line"></div>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="span4 logo">
                <a class="logo" href="<?php print $front_page ;?>">
                    <img alt="logo" title="Logo Bebitas.com" src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/logo.png' ;?>" />
                </a>
			</div>
            <ul class="socials unstyled">
                <li><a class="twitter" href="#"></a></li>
                <li><a class="facebook" href="#"></a></li>
                <li><a class="youtube" href="#"></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="navbar">
            <div class="navbar-inner">                        
                <div class="container">
                    <div class="buttons-container">
                    </div>
                    <div class="nav-collapse">
                        <ul class="nav nav-pills">
                            <li class="active single"><a href="<?php print $front_page ;?>">HOME<i>bebitas.com.pe</i></a></li>
                            <li class="single"><a href="anunciate.html">Anunciate<i>Aumenta tus Ingresos</i></a></li>                                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-content bannercontainer">
	<div class="container" style="padding:10px; background:#000;">
		<div class="clear_both"></div>
		<div class="row show-frid col-wrapper">
        	<div class="span12">
                <div id="breadcrumb">
                    <ul>
                        <li class="home"><a href="<?php print $front_page ;?>">Home</a></li>
                        <li><a href="#">+18</a></li>
                        <li><?php print $node->field_bebita_nombres['und'][0]['value'] ;?></li>
                    </ul>
                </div>      
            </div>
			<div class="span8">
				<h1><?php print $node->field_bebita_nombres['und'][0]['value'] ;?> 
                        <h2><?php print $node->field_bebita_ubicacion['und'][0]['value'] ;?></h2></h1>
                
				<p><?php print $node->field_bebita_descripcion['und'][0]['value'] ;?></p>
			</div>
            <div class="span3 sidebar" id="left-sidebar">
            	<blockquote class="quote-right"><p class="btn "><i class="icon-cell"></i><img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/cel.png' ;?>" alt="" />  <?php print $node->field_bebitas_telefono['und'][0]['value'] ;?></p></blockquote>                             
            </div>
			<div class="span1"></div>                  
		</div>
        <div class="portfolio-slider">
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php $slider_count=count($node->field_bebita_galeria['und']) ;
                        for ($i=0;$i< $slider_count;$i++){?>
                           <li>
                                <img src="<?php print  $imagen = image_style_url('sin_preview', $node ->field_bebita_galeria['und'][$i]['uri']); ?>" class="img-rounded" />
                            </li>
                    <?php } ;?>
                </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                    <?php
                        for ($i=0;$i< $slider_count;$i++){?>
                           <li>
                                <img src="<?php print  $imagen = image_style_url('sin_preview', $node ->field_bebita_galeria['und'][$i]['uri']); ?>" class="img-rounded" />
                            </li>
                    <?php } ;?>                
                </ul>
            </div>                    
        </div>
		<hr />
		<div class="span3 portfolio-details">
            <div class="container">
				<div class="row show-grid">
					<div class="span12">
						<div class="row show-grid">
							<div class="span4">
                            	<h4 class="center-title">Descripción</h4>
		                        <ul class="footer-navigate">
                                    <li><b>Estatura:</b> <?php print $node->field_bebita_estatura['und'][0]['value'] ;?></li>
                                    <li><b>Edad:</b> <?php print $node->field_bebita_edad['und'][0]['value'] ;?> añitos</li>
                                    <li><b>Medidas:</b> <?php print $node->field_bebita_medida['und'][0]['value'] ;?></li>
                                    <li><b>Contextura:</b> <?php print $node->field_bebita_delgada['und'][0]['value'] ;?></li>
                                    <li><b>Color de Ojos:</b> <?php print $node->field_bebitas_ojos['und'][0]['value'] ;?></li>
                                </ul>
                                <h4 class="center-title">Horario de Atención</h4>
                                Lunes a Domingo <a class="fancy" href="#horario">Ver</a>
                                <div style="display: none;">
                                    <div id="horario" style="width:220px;height:280px;overflow:auto;">
                                        <table class="table" style="text-align:center">
                                            <tbody>
                                                <tr><td class="small">Lunes:</td><td class="bold">8am a 6pm</td></tr>
                                                <tr><td class="small">Martes:</td><td class="bold">8am a 6pm</td></tr>
                                                <tr><td class="small">Miercoles:</td><td class="bold">8am a 6pm</td></tr>
                                                <tr><td class="small">Jueves:</td><td class="bold">8am a 6pm</td></tr>
                                                <tr><td class="small">Viernes:</td><td class="bold">8am a 6pm</td></tr>
                                                <tr><td class="small">Sabado:</td><td>Sin atención</td></tr>
                                                <tr><td class="small">Domingo:</td><td>Sin atención</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
							</div>
                            <div class="span4 footer-center">
                                <h4 class="center-title">Servicios</h4>
                                <ul class="footer-navigate">
                                    <?php $servicios_count= count($node->field_bebita_servicios['und']) ;?>
                                    <?php for( $i=0;$i< $servicios_count;$i++){?>
                                    <li><?php print $node->field_bebita_servicios['und'][$i]['taxonomy_term']->name ;?> </li>
                                   <?php } ?>                                 

                                </ul> 
                            </div>
                            <div class="span4 footer-right">
                              	<h4 class="center-title">Estadisticas</h4>
                                <ul class="footer-navigate">
                                    <li></li>
                                    <li><b>Vista:</b> 1 234 veces</li>
                                    <li><b>Like:</b> 1123 Like</li>
                                    <li><b>Varoracion:</b> <img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/estrella.png' ;?>" alt="" />&nbsp;<img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/estrella.png' ;?>" alt="" />&nbsp;<img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/estrella.png' ;?>" alt="" />&nbsp;<img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/estrella.png' ;?>" alt="" />&nbsp;<img src="<?php print base_path() . drupal_get_path('theme', 'bebitas_theme') .'/img/galeria/estrella.png' ;?>" alt="" />&nbsp;</li>
                                    <li><b>Votos:</b> 300 Votos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-block clients">
            <div class="row show-grid">
                <div class="span12">
					<hr>                
                    <div id="clients" class="row show-grid">
                        <div class="span2 clear-both hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                        <div class="span2 hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                        <div class="span2 hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                        <div class="span2 hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                        <div class="span2 hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                        <div class="span2 hp-wrapper"><a href="#"><img alt="" src="img/client1.jpg" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row show-grid">
                <div class="span12">
                    <p>By <a href="<?php print $front_page ;?>">www.bebitas.com.pe</a>. Copyright 2013.</p>
                </div>
            </div>
        </div>
    </div>
</footer>