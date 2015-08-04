<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>  
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    

    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/menu.css">     
    <script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/menu_jquery.js"></script>        

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">     
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/web.css">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />

    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/ie.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/tinynav.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.1.custom.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/custom.js?ver=1.15'></script>



    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />     

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/nivo-slider.css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/themes/default/default.css" type="text/css" media="screen" />


    <script language="javascript" type="text/javascript" src="http://us3.listen2myradio.com:2199/system/streaminfo.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55982e1b882fd617" async="async"></script>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55982e1b882fd617" async="async"></script>


<?php wp_head(); ?>

</head>


<body>


<div  id="page-wrap" class="backgroundmsts">

<header id="header" class="header">  
          <!-- nav id="menu" -->    
         <!-- nav id="nav" class=" " -->

<!-- nav>
  <div class="menu-cssmenu-container">
    <ul>
      <li>
        <a href="Inicio">Inicio</a>
        <a href="Portafolio">Portafolio</a>
        <a href="Noticias">Noticias</a>        
        <a href="Contacto">Contacto</a>
      </li>
    </ul>
  </div>  
</nav -->  

         <nav>
              <?php  showMenu(); // wp_page_menu('register_nav_menus'); ?> 
         </nav>

<!-- h1>  <?php // bloginfo('name'); ?></h1>
<h2><?php // bloginfo('description') ?></h2 -->


</header>


<div class="todocontenido zerogrid">
            

        