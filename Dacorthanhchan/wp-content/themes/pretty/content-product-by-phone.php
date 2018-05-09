<?php      
  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 1,   
            'category' => 87
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper" >
    <div>
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="">
            <figure style="border-radius:2px;height: 50px;width: 45px;">
              <a href="<?php echo Helpers::getWebsite(get_the_ID()); ?>">
                <!-- /.overlay -->
                <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
              </a>
            </figure>
            
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