<?php      
  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 15,   
            'category' => 85
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper w3-content w3-section" style="max-width:250px">
    <div class="owl-posts">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post mySlides w3-animate-fading" style="margin-left: 40px;">
            <figure style="border-radius:3px;width: 220px;height: 150px;margin-left:0px;">
              <a href="<?php the_permalink(get_the_ID()); ?>">
                <div class="overlay">
                  <div class="info"><span><?php echo Helpers::getCaption(get_the_ID()); ?></span></div>
                </div>
                <!-- /.overlay -->
                <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
              </a>
              
            </figure>
            
            <div class="divide20"></div>
            
            <!-- /.post-content --> 
          </div>
        <?php endforeach ?>
        <?php else: ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif ?>
    </div>
    <!--/.isotope --> 
  </div>
  <!--/.items-wrapper --> 