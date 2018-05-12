<?php      
  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 4,   
            'category' => 84
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper">
    <div class="isotope items">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post col-md-12">
            
            <p class="post-title"><a href="<?php the_permalink(get_the_ID()); ?>">>> <?php echo Helpers::showTitle(get_the_title(), 10); ?></a></p>
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