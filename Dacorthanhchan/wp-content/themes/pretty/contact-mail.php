<div class="form-container">
  <?= Helpers::showMessageContact(); ?>
  <form data-url="<?php echo admin_url('admin-post.php?action=sendmail');?>" id='sendmail' method="post" class="vanilla vanilla-form" novalidate="novalidate">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 row">
        <div class="col-sm-12">
          <div class="form-field">
            <label>
              <input type="text" name="name" placeholder="Họ và tên" required="required">
            </label>
          </div>
          <!--/.form-field --> 
        </div>
        <!--/column -->
        <div class="col-sm-12">
          <div class="form-field">
            <label>
              <input type="email" name="email" placeholder="E-mail" required="required">
            </label>
          </div>
          <!--/.form-field --> 
        </div>
        <!--/column -->
        <div class="col-sm-12">
          <div class="form-field">
            <label>
              <input type="tel" name="phone" placeholder="Điện thoại" required>
            </label>
          </div>
          <!-- /.form-field  -->
        </div>
      </div>
      <!--/column -->
      <!-- <div class="col-sm-6">
        <div class="form-field">
          <label class="custom-select">
            <select name="department" required="required">
              <option value="">Select Department</option>
              <option value="Sales">Sales</option>
              <option value="Marketing">Marketing</option>
              <option value="Support">Customer Support</option>
              <option value="Other">Other</option>
            </select>
            <span>fake select handler</span> </label>
        </div>
        /.form-field 
      </div> -->
      
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <textarea name="message" placeholder="Giới thiệu sơ qua bản thân..." required="required" style="min-height: 160px;"></textarea>
      </div>
      <div class="col-sm-12 text-center col-xs-12" style="font-size: 18px;">
        <div class="form-field">
          <div class="coupon"><label style="color:rgb(228, 6, 6);font-size:24px;">Còn lại <?php echo Helpers::getNumberCoupon();?> ưu đãi</label></div>
        </div>
      </div>
      <div class="col-sm-12">
        <input type="submit" class="btn btn-large" id="btn-sendmail" value="Đăng ký" data-success="Thank you!">
        <!-- <footer class="notification-box"></footer> -->
      </div>
      <!--/column --> 
      <!--/column -->
      
    </div>
    <!--/.row -->
    
  </form>
  <!--/.vanilla-form --> 
</div>
<!--/.form-container --> 

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="close-modal" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>