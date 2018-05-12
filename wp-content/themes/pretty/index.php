<?php get_header(); ?>
<?php $sliders = get_posts(array( 'post_type' => 'slider')); ?>
  <div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
      <ul>
        <?php foreach ($sliders as $key => $slider): ?>
          <li style="line-height: 2px" data-transition="fade"><img src="<?= get_image(get_the_post_thumbnail_url($slider->ID)); ?>" alt="">
            <div class="tp-caption large" data-x="480" data-hoffset="" data-y="center" data-voffset="-55" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;font-size: 80px;"><?php echo get_the_title($slider->ID); ?></div>
            
            <div class="tp-caption medium" data-x="480" data-hoffset="" data-y="center" data-voffset="0" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;"><?php echo $slider->post_content;  ?></div>
            <!-- <div class="tp-caption" data-x="482" data-hoffset="" data-y="center" data-voffset="['65','65','65','90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="#" class="btn btn-large">Purchase Now</a></div> -->
          </li>
        <?php endforeach ?>        
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.rev_slider --> 
  </div>
  <!-- /.light-wrapper -->
<!-- product-detail-->

<?php echo get_template_part('content', 'product-detail'); ?>
<?php  $post_recents = wp_get_recent_posts(array( 'numberposts' => 9)); ?>
<div class="light-wrapper">
    <div class="inner">
      <div class="container">
        <div class="section-title text-center">
          <h2>Đăng ký tham gia ưu đãi</h2>
        </div>
         <div style="height: 150px;">
         <?php get_template_part('contact-mail'); ?>
         </div>
      </div>
    </div>
</div>
<div class="light-wrapper">
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        
          
           <div class="section-title text-center"> <h2 style="text-align:center;font-weight:bold;font-size: 36px;">6 Miễn phí</h2></div>
           <h2 class="text-center" style="font-weight: bold;">6 Free</h2></div>

           <?php get_template_part('content', 'product-by-dichvu') ?>
          
    <!-- /.container --> 
  </div>
  </div>
  </div>
  <div class="light-wrapper" >
    <div class="inner">
      <div class="container">
        <div class="section-title">
          <h2>Bài viết mới</h2>
        </div>
        <!-- /.section-title --> 
      </div>
      <!-- /.container -->
      
      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts portfolio-carousel">
          <?php foreach ($post_recents as $key => $post_recent): ?>
            <div class="item post">
              <figure style="width: 422; height: 288px;"><img src="<?= get_image(get_the_post_thumbnail_url($post_recent['ID'])); ?>" alt="" style="width: 100%; height: 100%;" /></figure>
              <div class="post-content">
                <h3 class="post-title"><a href="<?php the_permalink($post_recent['ID']); ?>"><?= get_the_title($post_recent['ID']); ?></a></h3>
                <div class="meta"><span class="category"><?php the_category(', ', 0, $post_recent['ID']); ?></span></div>
                <!-- /.meta --> 
              </div>
              <!-- /.post-content --> 
            </div>
            <!-- /.post -->
          <?php endforeach ?>
        </div>
        <!-- /.portfolio-carousel --> 
      </div>
      <!-- /.carousel-wrapper --> 
    </div>
    <!-- /.inner --> 
  </div>
  <!-- /.light-wrapper -->    


  <div class="light-wrapper" >
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
          <ul>
            <li><a href="<?php echo get_category_link(1); ?>"  class="button is-checked" data-filter="*" style="font-size: 20px">Phong cách</a></li></ul>
        </div> 
        <div class="clearfix"></div>
        <?php get_template_part('content', 'product-by-phongcach') ?>

        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->


<div class="light-wrapper" >
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
          <ul>
            <li><a href="<?php echo get_category_link(72); ?>" class="button is-checked" data-filter="*" style="font-size: 20px">Không gian</a></li>
            
          </ul>
        </div> 
        <div class="clearfix"></div>
        <?php get_template_part('content', 'product-by-khonggian') ?>

        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->

<div class="light-wrapper" >
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
          <ul>
            <li><a href="<?php echo get_category_link(69); ?>" class="button is-checked" data-filter="*" style="font-size: 20px">Các công trình tiêu biểu</a></li>
              
          </ul>
        </div> 
        <div class="clearfix"></div>
        <?php get_template_part('content', 'product-by-cttieubieu') ?>

        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
          <ul>
            <li><a href="<?php echo get_category_link(79); ?>" class="button is-checked" data-filter="*" style="font-size: 20px">Tin tức - Hoạt động mới</a></li>
              
          </ul>
        </div> 
        <div class="clearfix"></div>
        <?php get_template_part('content', 'product-by-tintuc') ?>

        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
<div class="<?php echo is_single() ? "light" : 'inverse' ?>-wrapper">
    <div class="container inner">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="section-title" style="margin-left: 15px;margin-right: 15px;"><h2>Star team</h2></div>
           
        <div class="clearfix"></div>
        
        <div style="height: 200px;">
        <?php get_template_part('content', 'product-by-anhstarteam') ?>
       </div>
       
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->



  
  <!-- /.dark-wrapper --> 
  
</div>
<!-- /.content-wrapper -->
<?php get_footer(); ?>