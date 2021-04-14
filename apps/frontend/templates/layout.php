<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vn" lang="vn">
  <head>
    <?php include_http_metas() ?>
    <?php include_title() ?>

    <link rel="shortcut icon" href="<?php echo sfConfig::get("app_domain_web_root")?>/images/favicon.png" />
    <meta name="charset" content="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-language" content="vi" />
    <link rel="alternate" href="<?php echo url_for('homepage', array(), true)?>" hreflang="vi-vn" />

    <?php include_stylesheets() ?>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/frontend/hotline.css" media="all" type="text/css" rel="stylesheet"/>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/frontend/coder_update.css?v=1.7" media="all" type="text/css" rel="stylesheet"/>
  </head>
  <body class="<?php echo get_slot('body_class') ?>">
    <div id="page" class="hfeed site">
      <?php include_partial('Common/contactTop') ?>
      <?php include_component('Common','header')?>
      <?php echo $sf_content ?>
      <?php include_partial('Common/footer')?>
    </div>
    <?php include_javascripts() ?>
    <script type="text/javascript" src="<?php echo sfConfig::get("app_domain_web_root")?>/js/custom.js"></script>

    <a id="zalo" href="javascript:void(0)"><img src="<?php echo sfConfig::get("app_domain_web_root")?>/images/icon-zalo.png"></a>

    <a href="tel:<?php echo sfConfig::get("app_phone_number") ?>" class="fancybox">
      <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon"><div class="coccoc-alo-ph-circle"></div><div class="coccoc-alo-ph-circle-fill"></div><div class="coccoc-alo-ph-img-circle"></div></div>
    </a>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="398503900560847"
        logged_in_greeting="Chào bạn! Tôi có thể giúp gì cho bạn!"
        logged_out_greeting="Chào bạn! Tôi có thể giúp gì cho bạn!">
      </div>
  </body>
</html>
