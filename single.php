<?php get_header();?>
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h2><?php the_title();?></h2>
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
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <?php the_post_thumbnail();?>
                    </div>
                    <div class="down-content">
                      <span><?php the_category();?></span>
                      <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                      <ul class="post-info">
                        <li><a href="<?php the_author();?>"><?php the_author();?></a></li>
                        <li><a href=""><?php the_time('F d, Y');?></a></li>
                      </ul>
                      <?php the_content();?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><span class="dashicons dashicons-tag"></span></li>
                              <li><?php the_tags();?>, </li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><span class="dashicons dashicons-share"></span></li>
                              <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">Facebook</a>,</li>
                              <li><a href="https://twitter.com/intent/tweet/?url=<?php the_permalink();?>"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php if(!post_password_required()) : ?>
                <div class="col-lg-12">
                  <?Php comments_template(); ?>
                </div>
              <?php endif;?>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            
            <?php get_sidebar();?>

          </div>
        </div>
      </div>
    </section>

  <?php get_footer();?>