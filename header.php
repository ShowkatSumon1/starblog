<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

  <head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">

    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo home_url();?>">
            
          <?php 
            if(empty(get_theme_mod('site_logo'))){?>
                <h2><?php bloginfo('title');?></h2>
            <?php }else{?>
              <img src="<?php echo get_theme_mod('site_logo');?>" alt="<?php bloginfo('title');?>">
            <?php }
          
          ?>
        
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dashicons dashicons-menu-alt3"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php wp_nav_menu(array(
              'theme_location'  => 'main-menu',
              'menu_class'     => 'navbar-nav ml-auto',
              'container'       => '',
            ));?>
          </div>
        </div>
      </nav>
    </header>