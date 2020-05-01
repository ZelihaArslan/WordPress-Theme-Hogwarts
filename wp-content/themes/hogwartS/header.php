<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
     <!--Google Fonts-->
     <link href="https://fonts.googleapis.com/css?family=Alegreya:500,700|Nunito:200,300,400&display=swap" rel="stylesheet">


    <title>HogwartS</title>

    <?php wp_head(); ?>

  </head>
  <body>
  
    <!--Navigation Menu-->
    
    <nav class="navbar navbar-container navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">Hogwart<span>S</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-
          target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle
            navigation">
          <i class="fas fa-bars"></i>
        </button>


        <?php

        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarResponsive',
            'menu_class'        => 'navbar-nav text-uppercase ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
            
        ));

        ?>


      </div>
    </nav>

    <!-- End of Header-->