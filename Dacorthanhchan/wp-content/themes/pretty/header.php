<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() .'/' ?>style/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/color/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/type/icons.css">
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900,300,200,100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/custom.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css" media="screen">
    * {
      font-family: arial !important;
      
    }
    html { 
      margin-top: 0px !important;
    }
    * html body { margin-top: 0px !important; }
    @media screen and ( max-width: 782px ) {
      html { margin-top: 0px !important; }
      * html body { margin-top: 0px !important; }
    }
    .modal-backdrop.in {
      opacity: 0 !important;
    }
    #on {
      visibility: visible;
    }
    #on1 {
      visibility: visible;
    }

    #facebook_right {
        z-index: 10005;
        border: 1px solid #3b5997;
        background-color: #fff;
        width: 196px;
        height: 230px;
        position: fixed;
        right: -200px;
        top: 45%;
    }
    #hotline_right {
        z-index: 10006;
        border: 1px solid #3b5997;
        background-color:transparent;
        width: 199px;
        height: 50px;
        position: fixed;
        right: -200px;
        top: 35%;
    }

    #facebook_div {
        width: 196px;
        height: 228px;
        overflow: hidden;
    }
#hotline_div {
        width: 196px;
        height: 200px;
        overflow: hidden;
    }
    #facebook_right img {
        position: absolute;
        top: -1px;
        left: -45px;
    }
    #hotline_right img {
        position: absolute;
        top: -1px;
        left: -45px;
        width: 22%;
        height: 100%;
    }
  </style>
</head>
<body class="full-layout" <?php body_class(); ?>>

<div class="content-wrapper">
  <div class="navbar navbar-default default classic" role="navigation">
  <div class="left">
    <img style="width: 15px;height: 15px;" alt="" src="<?php echo get_template_directory_uri() .'/' ?>images/phone.png"/>
      <span style="font-size:12px;"> Hotline : +84.981316666</span>

      &nbsp;&nbsp;&nbsp;&nbsp;
        <img style="width: 15px;height: 15px;" alt="" src="<?php echo get_template_directory_uri() .'/' ?>images/mail.png"/>  
      <span style="font-size:12px;"> Mail : dacor.vn@gmail.com</span>
    </div>
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">
          <h2 style="width: 90px; height: 80px;margin-top: 10px" >
            <a href="<?php echo get_site_url() . '/'; ?>" >
              <?php echo Helpers::getLogos(); ?>
            </a>
          </h2>
        </div>
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner --> 
        </div>
        <!-- /.nav-bars-wrapper --> 
      </div>
      <!-- /.nav-header -->
      <div class="navbar-collapse collapse">
          <?php echo Helpers::getMenuNav(); ?>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container --> 
  </div>
  <div id="on">
    <div id="facebook_right" style="right: -200px;">
      <div id="facebook_div">
        <img alt="" src="<?php echo get_template_directory_uri() .'/' ?>images/fb.png"/>
        <div class="fb-page" data-href="https://www.facebook.com/NoithatThanhChanDacor/" data-tabs="timeline" data-width="220" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NoithatThanhChanDacor/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NoithatThanhChanDacor/">Nội Thất Thanh Chân Dacor</a></blockquote></div>
      </div>
    </div>  
  </div>
  <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=306264946481179&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>