<?php
/* Template Name: Works Page */

get_header(); ?>

 <!-- Inside Hero Section-->
     
 <section class="page-image page-image-works section-box" style= "background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)), 
        url('<?php the_field('works_section_image') ?>');  background-repeat: no-repeat; background-position: center center; background-size: cover;"> >
        <h1 class="page-title"><?php the_field('works_image_text'); ?></h1>
    </section>

    <!-- Works Section-->
    
    <section id="works" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('works_header') ?></h2>
                        <hr>
                        <p> <?php the_field('works_text') ?> </p>
                    </div>
                </div>
             </div>
            <div class="row">

                  <?php $query = new WP_Query('post_type=gallery'); ?>
                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
                <div class="col-md-4 works-item">
                    <a href="<?php the_field('gallery_item_big_image'); ?>" class="works-link" 
                    data-lightbox="<?php the_field('gallery_item_category'); ?>" data-title="<?php the_field('gallery_item_description'); ?>">
                      <div class="works-hover">
                          <div class="works-hover-content">
                              <i class="fas fa-search fa-2x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="<?php the_field('gallery_item_image'); ?>">
                    </a>
                    <div class="works-caption">
                        <h4><?php the_field('gallery_item_heading'); ?></h4>
                        <p class="text-muted"><?php the_field('gallery_item_category'); ?></p>
                    </div>
                </div>

                   <?php endwhile; else : ?>
	                    <p><?php esc_html_e( 'Herhangi bir galeri elemanı bulunmamaktadır.' ); ?></p>
                   <?php endif; ?>

            </div>
     </div>
    </section>



<?php get_footer(); ?>
