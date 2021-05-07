<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>> 
    
<header class="site-header">

    
    
  

<nav class="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="logo-container"><img src="<?php header_image();?>" height=100px width=100px alt=""></div>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'menu_class'        => 'navbar-nav'
            
        ) );
        ?>
        
    
</nav>

</header>
<div class="menu-container">
    <a class="c-site-menu" href="javascript:void(0)"><span class="c-site-menu-box"><span class="c-site-menu-inner"></span></span></a>
</div>




