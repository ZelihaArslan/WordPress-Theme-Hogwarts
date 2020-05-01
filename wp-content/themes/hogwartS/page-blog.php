<?php
/* Template Name: Blog Page */

get_header(); ?>

  <!-- Inside Hero Section-->
     
  <section class="page-image page-image-blog section-box" style= "background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)), 
        url('<?php the_field('select_blog_image') ?>');  background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <h1 class="page-title"><?php the_field('blog_image_text'); ?></h1>
    </section>

    <!-- Blog Section-->
    
    <section id="blog" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('blog_heading'); ?></h2>
                        <hr>
                        <p><?php the_field('blog_text'); ?></p>
                    </div>
                </div>
            </div>
             <div class="row">
                 <?php $query = new WP_Query('post_type=bloggallery'); ?>
                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> 

                 <div class="col-md-4 blog-item">
                   <a href="<?php the_field('gallery_item_big_image_blog'); ?>" class="works-link" 
                    data-lightbox="<?php the_field('gallery_item_category_blog'); ?>" data-title="<?php the_field('gallery_item_description_blog'); ?>">
                      <div class="blog-hover">
                          <div class="blog-hover-content">
                              <i class="fas fa-search fa-2x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="<?php the_field('gallery_item_image_blog'); ?>">
                    </a>
                    <div class="blog-caption">
                        <h4><?php the_field('gallery_item_heading_blog'); ?></h4>
                        <p class="text-muted"><?php the_field('gallery_item_category_blog'); ?> </p>
                    </div>
                </div>
                     <?php endwhile; else : ?>
	                  <p><?php esc_html_e( 'Herhangi bir galeri elemanı bulunmamaktadır.' ); ?></p>
                      <?php endif; ?>
            </div>
        </div>
    </section>



<?php get_footer(); ?>
