  <div class="col-lg-4">
    <div class="blog-post">
      <div class="blog-thumb thumb-blog">
        <?php the_post_thumbnail();?>
      </div>
      <div class="down-content">
        <span><?php the_category();?></span>
        <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
        <ul class="post-info">
          <li><a href="<?php the_author();?>"><?php the_author();?></a></li>
          <li><a href=""><?php the_time('M d, Y');?></a></li>
        </ul>

        <p class="post-content">
          <?php
            $more = '<a href="'.get_the_permalink().'"> Read more</a>';
            echo wp_trim_words(get_the_content(), 20 , $more);
          ?>
        </p>

        <div class="post-options">
          <div class="row">
            <div class="col-lg-12">
              <ul class="post-tags">
                <li><span class="dashicons dashicons-tag"></span></li>
                <li><?php the_tags();?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>