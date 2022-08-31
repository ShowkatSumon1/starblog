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


    <section class="page-class">
      <div class="container">
        
        <?php the_content();?>
        
      </div>
    </section>

    
    <?php get_footer();?>