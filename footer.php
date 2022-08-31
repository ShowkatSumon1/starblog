    <footer>
      <div class="container">
        <div class="row">
          <?php if(get_theme_mod('footer_widget')=='Yes'){?>
          <div class="col-lg-12">
            <ul class="social-icons">
            <?php if(!empty(get_theme_mod('facebook'))){?>
              <li><a href="<?php echo get_theme_mod('facebook');?>">Facebook</a></li>
            <?php }?>

            <?php if(!empty(get_theme_mod('twitter'))){?>
              <li><a href="<?php echo get_theme_mod('facebook');?>">Twitter</a></li>
            <?php }?>

            <?php if(!empty(get_theme_mod('instagram'))){?>
              <li><a href="<?php echo get_theme_mod('instagram');?>">Instagram</a></li>
            <?php }?>

            <?php if(!empty(get_theme_mod('linkedin'))){?>
              <li><a href="<?php echo get_theme_mod('linkedin');?>">Linkedin</a></li>
            <?php }?>

            <?php if(!empty(get_theme_mod('dribbble'))){?>
              <li><a href="<?php echo get_theme_mod('dribbble');?>">Dribbble</a></li>
            <?php }?>
            </ul>
          </div>
          <?php }?>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p><?php 
              if(!empty(get_theme_mod('copyright'))){
                echo get_theme_mod('copyright');
              }else{
                echo 'Copyright 2021 Starblog Theme | Designer: <a href="https://showkatsumon.com" target="_blank">Showkat Sumon</a>';
              }
              ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

      <?php wp_footer();?>
  </body>
</html>