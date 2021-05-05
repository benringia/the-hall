<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>> 
    
<header class="sticky-top">

    <div class="container">
    
    <?php wp_nav_menu(
        [
            'theme_location' => 'top_menu',
            'menu_class' => 'navigation'
        ]
    ) ?>
    </div>
    
</header>