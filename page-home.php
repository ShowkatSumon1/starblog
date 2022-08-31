 <?php get_header();?>
 
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

        <?php
          $sliderpost = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page'  => '5',
          ));

          while($sliderpost-> have_posts()) : $sliderpost->the_post();
        ?>
          <div class="item">
            <?php the_post_thumbnail();?>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php the_category();?></span>
                </div>
                <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                <ul class="post-info">
                  <li><a href="<?php the_author();?>"><?php the_author();?></a></li>
                  <li><a href=""><?php the_time('M d, F');?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile;?>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

              <?php 
                $starpost = new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page'  => '5',
                ));

              while($starpost-> have_posts()) : $starpost->the_post(); ?>

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb home-thumb">
                      <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                    </div>
                    <div class="down-content">
                      <span><?php the_category();?></span>
                      <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                      <ul class="post-info">
                        <li><a href="<?php the_author();?>"><?php the_author();?></a></li>
                        <li><a href=""><?php the_time('M d, F')?></a></li>
                      </ul>
                      <p class="post-content">
                        <?php
                          $more = '<a href="'.get_the_permalink().'"> Read more</a>';
                          echo wp_trim_words(get_the_content(), 50 , $more);
                        ?>
                      </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><span class="dashicons dashicons-tag"></span></li>
                              <li><?php the_tags();?>,</li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><span class="dashicons dashicons-share"></span></li>
                              <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">Facebook</a>,</li>
                              <li><a href="https://twitter.com/intent/tweet/?url=<?php the_permalink();?>" target="_blank"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;?>

                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?php echo site_url('/blog');?>">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">

              <?php get_sidebar();?>

            </div>
          </div>
        </div>
      </div>
    </section>

    
 <?php get_footer();?>