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
  
    <section id="slideshow col-md-12 col-xs-12 col-sm-12">
      <div class="entire-content">
        <div class="content-carrousel">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          
            <figure class="shadow">
              <a href="<?php the_permalink(get_the_ID()); ?>">
                <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
              </a>
            </figure>
            
            <!-- /.post-content --> 
          
        <?php endforeach ?>
        <?php else: ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif ?>
    </div>
    <!--/.isotope --> 
    </div>
  </div>
  <!--/.items-wrapper --> 