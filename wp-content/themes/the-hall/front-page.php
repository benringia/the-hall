<?php get_header(); ?>

<main>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg"/>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg"/>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg"/>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



    <div class="container">
        <div class="card-container">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            
                <div class="card-parent">
                    <div>
                        <?php if(has_post_thumbnail()):?>
                            <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url('largest');?>" alt="">
                        <?php endif; ?>
                       
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"> <?php the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            
        <?php endwhile; endif;?>
           
        </div> <!--Card end-->
        <?php if( is_active_sidebar('page-sidebar') ) : ?>
            <?php dynamic_sidebar('page-sidebar');?>
        <?php endif; ?>
            
    </div> <!--container end-->
</main>




<?php get_footer(); ?>