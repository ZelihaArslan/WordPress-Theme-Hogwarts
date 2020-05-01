<?php get_header(); 

/* Template Name: Home Page */


?>
 
 <!--Hero Section-->
      
 <header id="hero" style= "background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)), 
        url('<?php the_field('hp15') ?>');  background-repeat: no-repeat;  background-attachment: scroll; background-position: center center; background-size: cover;">
        <div class="container">
          <div class="intro-text">
            <div class="intro-heading text-uppercase"><?php the_field('main_slogan') ?></div>
            <a class="btn btn-main" href="#whoweare"><?php the_field('main_button_text') ?></a>
          </div>
        </div>
      </header>
      
      
      
      <!-- Who We Are Section--->
      
      <section id="whoweare" class="section-box">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
              <div class="section-top">
                <h2><?php the_field('sub_header') ?></h2>
                <hr>
                <p><?php the_field('sub_text') ?></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4" >
              <div class="whoweare-item text-center" > 
              <a target="_blank" a href= '<?php the_field('url_text_1') ?>'><?php the_field('icon_1') ?></a>
               
                <h3 class="text-uppercase"> <?php the_field('section_header_1') ?> </h3>
                <hr>
                <p><?php the_field('section_text_1') ?></p>
                
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="whoweare-item text-center">
              <a target="_blank" a href= '<?php the_field('url_text_2') ?>'><?php the_field('icon_2') ?></a>
                <h3 class="text-uppercase"><?php the_field('section_header_2') ?></h3>
                <hr>
                <p><?php the_field('section_text_2') ?></p>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="whoweare-item text-center">
              <a target="_blank" a href= '<?php the_field('url_text_3') ?>'><?php the_field('icon_3') ?></a>
                <h3 class="text-uppercase"><?php the_field('section_header_3') ?></h3>
                <hr>
                <p><?php the_field('section_text_3') ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>

  <!-- Statement Section--->
  <section id="statement" class="section-box" style="background: linear-gradient(rgba(20, 20, 20, .8), rgba(20, 20, 20, .8)),
    url('<?php the_field('statement_image') ?>'); background-repeat: no-repeat; background-attachment: fixed; background-position: center center; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
        <?php the_field('statement_icon') ?>
          <?php the_field('statement_section') ?>
        </div>
      </div>
    </div>
  </section>

    <!-- Last Projects Section--->
    
    <section id="latestprojects" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
            <h2><?php the_field('project_header') ?> </h2>
              <hr>
              <p><?php the_field('project_text') ?></p>
            </div>
          </div>
        </div>
    
        <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
          <div class="col-md-6">
            <img class="img-fluid" src='<?php the_field('project_image_1') ?>'>
          </div>
          <div class="col-md-6 ">
            <div class="bg-orange text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100-auto text-center text-lg-left">
                  <h3 class="text-white text-uppercase"><?php the_field('project_header_1') ?></h3>
                  <hr class="d-none-d-lg-block mb-3 ml-0">
                  <p class="mb-3 text-white"><?php the_field('project_1') ?></p>
                    <a href="#" class="btn btn-white"><?php the_field('project_button_1') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
          <div class="col-md-6">
            <img class="img-fluid" src='<?php the_field('project_image_2') ?>'>
          </div>
          <div class="col-md-6 order-lg-first">
            <div class="bg-orange text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100-auto text-center text-lg-right">
                  <h3 class="text-white text-uppercase"><?php the_field('project_header_2') ?></h3>
                  <hr class="d-none-d-lg-block mb-3 mr-0">
                  <p class="mb-3 text-white"><?php the_field('project_2') ?></p>
                    <a href="#" class="btn btn-white"><?php the_field('project_button_2') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
