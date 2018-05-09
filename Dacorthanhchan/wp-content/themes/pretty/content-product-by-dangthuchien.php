  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 9,   
            'category' => 69
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper">
    <div class="isotope items">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post">
            <figure style="width: 380px; height: 259px;">
              <a href="<?php the_permalink(get_the_ID()); ?>">
                <div class="overlay">
                  <div class="info"><span><?php echo Helpers::getCaption(get_the_ID()); ?></span></div>
                </div>
                <!-- /.overlay -->
                <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
              </a>
            </figure>
            <div class="post-content">
              <h3 class="post-title"><a title="<?php the_title(); ?>" href="<?php the_permalink(get_the_ID()); ?>"><?= Helpers::showTitle(get_the_title(), 7); ?></a></h3>
              <div class="meta"><span class="category"><?php the_category(', ', 0, get_the_ID()); ?></span></div>
              <!-- /.meta --> 
            </div>
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