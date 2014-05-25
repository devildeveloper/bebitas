<header class="header">
	<div class="container">
		<div class="row">
			<div class="span4 logo">
                <a class="logo" href="<?php print $front_page ;?>" >
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
					<div class="buttons-container"></div>
                    <div class="nav-collapse">
                        <ul class="nav nav-pills">
                            <li class="active single"><a href="<?php print $front_page ;?>">HOME<i>bebitas.com.pe</i></a></li>
                            <li class="single"><a href="?q=content/anunciate-0">Anunciate<i>Aumenta tus Ingresos</i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-content">
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>  
        <?php echo (render($page['sliderTop'])) ;?>
		<!--Contenido-->
        <div class="container"><hr />
            <div class="main-block clients">
            	<div class="title-wrapper">
            		<h2>Recien llegadas</h2>
            	</div>
				<div class="row show-grid">
					<div class="span12">
                        <?php echo(render($page['recien_llegadas'])) ;?>
					</div>
				</div>
			</div>
			<div class="col-wrapper">
				<h1>Modelos</h1>                 
				<div class="portfolio-nav">
				<!-- Filtro-->                     
					<ul id="filters" data-option-key="filter" class="nav nav-pills nav-pills-portfolio">
                        <li class="active"><a href="#" data-toggle="pill" data-filter="*">Todas</a></li>
                        <li><a href="#" data-toggle="pill" data-filter=".mayor">+ 18</a></li>
                        <li><a href="#" data-toggle="pill" data-filter=".latinas">Latinas</a></li>
                        <li><a href="#" data-toggle="pill" data-filter=".internacionales">Internacionales</a></li>
					</ul>
				</div>
				<div class="portfolio-nav">
                    <ul id="filters" data-option-key="filter" class="nav nav-pills nav-pills-portfolio">
                        <li><a href="#" data-toggle="pill" data-filter=".con-depa">Con Depa</a></li>
                        <li><a href="#" data-toggle="pill" data-filter=".disponibles">Disponibles</a></li>
                        <li>
                        	<select data-toggle="pill" data-filter=".distrito" class="distrito" value="" name="distrito" type="text" id="distrito">
                                <option value="">Distrito</option>
                                <option value="1">Lima</option>
                                <option value="2">San Isidro</option>
                                <option value="3">La Molina</option>
                                <option value="4">Santiago de Surco</option>
                                <option value="5">San Miguel</option>
                                <option value="6">...</option>
                            </select>
                        </li>
                        <!--<li><a href="#" data-toggle="pill" data-filter=".distrito">Distrito</a></li>-->
					</ul>
				</div>
                <!--Portafolio-->              
				<div class="portfolio-grid-1 main-block">
                    <?php print render($page['perfiles_todas']) ;?>
                    <div class="bs-docs-example">
                        <div class="pagination">
                            <ul>
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</header>
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

