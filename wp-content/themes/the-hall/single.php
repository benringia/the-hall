<?php get_header(); ?>

    <div class="container pt-5 pb-5">
            <h1><?php the_title() ?></h1>


            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('largest')?>" class="image-fluid" alt="">
                <?php endif ?>
                <?php the_content() ?>

            <?php endwhile; endif;?>
    </div>






<?php get_footer(); ?>