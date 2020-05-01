<?php
/* Template Name: Contact Page */

get_header(); ?>

 <!-- Inside Hero Section-->
     
 <section class="page-image page-image-contact section-box" style= "background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)), 
        url('<?php the_field('contact_heading_image') ?>');  background-repeat: no-repeat;  background-attachment: scroll; background-position: center center; background-size: cover;"> >
        <h1 class="page-title"><?php the_field('contact_heading_text'); ?></h1>
 
        
    </section>
<!--Loop Start -->

<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

    <!-- Contact Section-->
    
    <section id="contact" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('contact_header'); ?></h2>
                        <hr>
                        <p> <?php the_field('contact_text'); ?> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                        
                </div>
            </div>
        </div>
    </section>

<?php endwhile; else : ?>
  <p><?php esc_html_e('Aradığınız kriterde içerik bulunmamaktadır'); ?> </p>
<?php endif; ?>


<?php get_footer(); ?>
                  
                    