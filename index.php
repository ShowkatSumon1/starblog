<?php get_header();?>
    
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                 <h2>
                <?php
                if(!empty(get_theme_mod('blog_text'))){
                  echo get_theme_mod('blog_text');
                 }else{
                   echo 'BLOG';
                 }?>
                 </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">

                <?php while(have_posts()) : the_post();
                  get_template_part('content' , get_post_format());
                endwhile; ?>

                <div class="col-lg-12">
                  <?php

                    if(function_exists('the_posts_pagination')){
                      the_posts_pagination(
                        array(
                          'screen_reader_text'  => ' ',
                          'prev_text'           => '<span class="dashicons dashicons-arrow-left-alt2"></span>',
                          'next_text'           => '<span class="dashicons dashicons-arrow-right-alt2"></span>',
                          'type'                => 'list',
                        )
                      );
                    }
                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<?php get_footer();?>