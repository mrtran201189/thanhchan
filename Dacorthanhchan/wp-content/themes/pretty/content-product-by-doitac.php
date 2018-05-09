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
  <div class="items-wrapper carousel-wrapper wow fadeIn " data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="owl-posts portfolio-carousel">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post" style="margin-left: 10px;">
            <figure style="border-radius:3px;width: 70px;height: 70px">
              <a href="<?php the_permalink(get_the_ID()); ?>">
                <div class="overlay">
                  <div class="info"><span><?php echo Helpers::getCaption(get_the_ID()); ?></span></div>
                </div>
                <!-- /.overlay -->
                <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
              </a>
              
            </figure>
            <div>
              <a href="<?php echo Helpers::getWebsite(get_the_ID()) ?>">
                <?php echo Helpers::showTitle(get_the_title(),5); ?>
              </a>
            </div>
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