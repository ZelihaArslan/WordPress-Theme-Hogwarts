<?php
/* Template Name: About Page */

get_header(); ?>

<!-- Inside Hero Section-->
     
<section class="page-image section-box"  style= "background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)), 
        url('<?php the_field('about_section_image') ?>');  background-repeat: no-repeat;  background-attachment: scroll; background-position: center center; background-size: cover;">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

    <!-- About Us Section-->
    
    <section id="aboutus" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('about_header') ?></h2>
                        <hr>
                        <p><?php the_field('about_text') ?></p>
                    </div>
                </div>
            </div>
              <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                  <div class="col-md-6">
                      <img class="img-fluid" src='<?php the_field('about_image_1') ?>.'>
                  </div>
                  <div class="col-md-6">
                      <div class="bg-orange text-center h-100 project">
                          <div class="d-flex h-100">
                              <div class="project-text w-100 my-auto text-center text-lg-left">
                                  <p class="mb-3 text-white"><?php the_field('about_text_1') ?> </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


        </div>
    </section>

    <!-- Team Section-->
    <section id="team" class="section-box">
        <div class.="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('team_header') ?></h2>
                        <hr>
                        <p><?php the_field('team_text') ?> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src='<?php the_field('team_image_1') ?>'>
                        <h4><?php the_field('team_name_1') ?></h4>
                        <p class="text-muted"><?php the_field('job_1') ?></p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_twitter_1') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_face_1') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_linkedn_1') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src='<?php the_field('team_image_2') ?>'>
                        <h4><?php the_field('team_name_2') ?></h4>
                        <p class="text-muted"><?php the_field('job_2') ?></p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_twitter_2') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_face_2') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_linkedn_2') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src='<?php the_field('team_image_3') ?>'>
                        <h4><?php the_field('team_name_3') ?></h4>
                        <p class="text-muted"><?php the_field('job_3') ?></p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_twitter_3') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_face_3') ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php the_field('icon_linkedn_3') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
