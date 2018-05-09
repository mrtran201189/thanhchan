
<footer class="footer inverse-wrapper">
  <div class="container inner">
  
    <div class="row light-wrapper">
      <div class="col-md-3 col-lg-3 row">
          <div class="section-title text-center" style="margin-left: 15px;margin-right: 15px"> <h2><label style="font-size:18px">Bản đồ</label></h2></div>
          <?php get_template_part('content', 'product-by-map') ?>
      </div>

      <!--
      FOOTER....
      --><div style="margin-left: 30px" class="col-md-4 col-lg-4">
        <div class="section-title text-center"> <h2><label style="font-size:18px">Thông tin tuyển dụng</label></h2></div>
        <?php get_template_part('content', 'product-by-tuyendung') ?>
      </div>
      <div style="margin-left: 30px" class="col-md-4">
        <div class="section-title text-center"> <h2><label style="font-size:18px">Đối tác uy tín</label></h2></div>
        <?php get_template_part('content', 'product-by-doitac') ?>
      </div>
        
        <!-- /.widget --> 
        
     

      <!-- /column --> 
    </div>
    <!-- /.row --> 
    <div class="divide20"></div>
    <div style="height:2px;background-color:rgb(179, 147, 93) " ></div>
    <div class="widget text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 row"> 
         <div class="divide20"></div>
          <h1 style="width: 90px;height: 80px;margin: 0 auto;">
            <a href="<?php echo get_site_url() . '/'; ?>" title="<?php bloginfo('name') ?>">
              <?php echo Helpers::getLogos(); ?>
            </a>
          </h1>
          <div class="divide20"></div>
          <p>Address: TẦNG 4, TTTM LOTTE MIPEC 229, TÂY SƠN, ĐỐNG ĐA, HN</p>
          <p>Hotline : +84.981316666</p>
          <p>Mail : dacor.vn@gmail.com</p>
          <ul class="social">
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
            <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
          </ul>
          <!--/.social -->
          <div class="divide50"></div>
          <p class="bm0">© <?php echo date("Y") ?> <?php bloginfo('name') ?>. All rights reserved.</p>
        </div>
  </div>
  <!-- .container --> 
  
</footer>
<!-- /footer --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style\js\jquery-validation\dist\jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/plugins.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/scripts.js"></script>
<script>
$(document).ready(function() {
    $("#sendmail").validate();
    $('#btn-sendmail').click(function (event) {
        var _data = $('#sendmail').serializeArray();
        var isValid = true;
        _data.filter(function (item) {
            if (item.value.length == 0) {
                isValid = false;
            }
        });
        if(isValid)  {
            var _url = $('#sendmail').attr('data-url').replace('admin-post', 'admin-ajax');
            $.ajax({
                url: _url,
                type: 'POST',
                dataType: 'JSON',
                data: _data,
            })
            .done(function(result) {
                showModal(result);
                window.location.reload(true);
            })
            .fail(function(result) {
                showModal(result);
            });
        }
    });

    $('#sendmail').submit(function (e) {
        e.preventDefault();
    });
});

function showModal(result) {
  $('.modal-title').text(result.status);
  $('.modal-body p').text(result.text);
  $("#myModal").modal('show');
  var _form = $('#sendmail');
  _form.find('input[name="name"]').val("");
  _form.find('input[name="email"]').val("");
  _form.find('input[name="phone"]').val("");
  _form.find('textarea').val("");
}
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#facebook_right").hover(function () {
      $(this)
      .stop(true, false)
      .animate({ right: 0 }, 500); }, function () {
        $("#facebook_right")
        .stop(true, false).animate({ right: -200 }, 500); });
      
      $("#hotline_right").hover(function () {
        $(this)
        .stop(true, false)
        .animate({ right: 0 }, 500); }, function () {
          $("#hotline_right")
          .stop(true, false).animate({ right: -200 }, 500); });
    });
</script>


</body>
</html>