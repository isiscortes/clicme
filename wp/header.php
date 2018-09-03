<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Click me</title>
	<?php wp_head();?>
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Fonts -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Mi CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/style2.css">
</head>
<body class="g100">
	<header class="g100">
		<!-- Nav -->
		<nav>
			<div class="d25 left">
				<a href="<?php echo bloginfo('template_url');?>/index.html" class="d40">&nbsp</a>
			</div>
			<!-- Tabs -->
			<div class="d25 left">
				<a> SOMOS</a>
				<a> SERVICIOS</a>
				<a> BOOK </a>
				<a> CONTACTO</a>
			</div>
			<!-- Redes Sociales -->
			<div class="d25 redessociales left">
				<div class=" whats"></div>
				<div class=" facebook"></div>
				<div class=" youtube"></div>
				<div class=" mail"></div>
			</div>
		</nav>	
	</header>
	

=======================================================================================================================
	<body class="g100">
	<header>
		<div class="collapse navbar-collapse" id="navbarNav">
			<a class="navbar-brand d10 left" href="http://clicme.com.mx/ICA19/CMS/wp/"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-header.png" alt="" class=""></a>
		    <?php wp_nav_menu(array(
		                                'theme_location' => 'superior',
		                                'container'=> 'div',
		                                'container_class' => 'menu_gen forma',
		                                'container_id' => 'menu_gen',
		                                'items_wrap' => '
		                                  <a class="mov forma color_2"><span>Menú</span></a>
										  <ul class="navbar-nav navbar-nav2 d90 left ul_active">
		                                    %3$s
		                                  </ul>',
		                                'menu_class' => 'gen'
		    ) );?>
		                                  
		                                  
		                                 
		</div>
	</header>
	