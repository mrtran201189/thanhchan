<?php      
  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 9,   
            'category' => 80
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper col-md-12 col-xs-12 col-sm-12" >
    <div>
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post">
            <figure>
              <a>
                
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