<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vn" lang="vn">
  <head>
    <?php include_http_metas() ?>
    <?php include_title() ?>

    <meta name="charset" content="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-language" content="vi" />

    <?php include_stylesheets() ?>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/roboto.css" media="all" type="text/css" rel="stylesheet"/>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/frontend/popup.css?v=1" media="all" type="text/css" rel="stylesheet"/>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/frontend/hotline.css?v=1" media="all" type="text/css" rel="stylesheet"/>
    <link href="<?php echo sfConfig::get("app_domain_web_root")?>/css/frontend/coder_update.css?v=1" media="all" type="text/css" rel="stylesheet"/>
  </head>
  <body>

    <?php echo $sf_content ?>

    <div class="popup-container">
        <input type="checkbox" id="login-popup">
        <div class="popup">
            <label for="login-popup" class="transparent-label"></label>
            <div class="popup-inner">
                <div class="popup-title">
                    <h6>Đăng nhập hệ thống</h6>
                </div>
                <div class="popup-content">
                    <div style="padding-left: 10px">
                        <span>rendering video...</span>
                        <span id="processing"></span>
                    </div>

                    <div class="meter">
                        <span id="progress-bar" style="width: 0"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_javascripts() ?>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lem1HcUAAAAAJhnk_fpkwiHnVVXYjnRw9_65bh7"></script>
    <script type="text/javascript" src="<?php echo sfConfig::get("app_domain_web_root")?>/js/custom.js"></script>
  </body>
</html>
