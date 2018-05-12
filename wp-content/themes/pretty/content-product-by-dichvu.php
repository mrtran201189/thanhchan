<?php      
  $posts = [];
?>
<?php if (!is_page()): ?>
    <?php 
        $args = [
            'post_status' => 'publish',
            'ping_status' => 'open',
            'post_type' => 'post',
            'numberposts' => 6,   
            'category' => 83
        ];
        $posts = get_posts($args);
    ?>
<?php endif ?>
  <div class="items-wrapper">
    <div class="isotope items">
      <?php if ($posts): ?>
        <?php foreach ($posts as $key => $post): ?>
          <div class="item post col-md-4">
            <div class="col-md-3" style="height: 60px;width: 90px;">
            <img src="<?= get_image(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="" style="width: 100%;height: 100%;" />
            </div>
            <h3 class="post-title"><a href="<?php the_permalink(get_the_ID()); ?>"><?php echo Helpers::showTitle(get_the_title(), 15); ?> <label style="font-weight: bold;color: rgba(122, 69, 4, 0.90);">MIẾN PHÍ</label></a></h3>
                <h3 class="post-title" style="font-size: 16px;"><a href="<?php the_permalink(get_the_ID()); ?>"><label style="font-weight: bold;color: rgba(122, 69, 4, 0.90);">FREE</label> <?php echo Helpers::getService(get_the_ID()); ?></a></h3>
                 <div style="height:2px;width: 180px;background-color:rgba(0,0,0,0.09); margin-left: 15px;" ></div>
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