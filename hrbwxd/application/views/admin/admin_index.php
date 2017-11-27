<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>哈尔滨无线电后台管理</title>
  <base href="<?php echo site_url();?>">
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <style>
    #amz-hero {
      background: #10a0ea;
      padding: 40px 0 0;
    }
    .amz-hero-headings{
      color: #fff;
    }
  </style>

</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->





<?php include 'admin_header.php'; ?>


<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include 'admin_sidebar.php'; ?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> | <small><small><a class="am-badge am-badge-success am-square">Index</a></small></small></div>
      </div>

      <ul class="am-avg-sm-1 am-avg-md-4 am-margin  am-text-center admin-content-list ">
        <section id="amz-hero">
          <div class="amz-container am-cf">
            <div class="amz-mascot am-scrollspy-init" data-am-scrollspy="{animation: 'slide-left', delay: 100}">
              <img class="am-img-responsive" src="img/index.png" alt="">
            </div>
            <div class="amz-hero-intro">
              <div class="amz-hero-headings">
                <h1 data-am-scrollspy="{animation:'slide-left'}" class="am-scrollspy-init am-scrollspy-inview am-animation-slide-left">哈尔滨无线电管理处</h1>
                <h2 data-am-scrollspy="{animation:'slide-right', delay: 500}" class="am-scrollspy-init am-scrollspy-inview am-animation-slide-right">网站管理</h2>
              </div>
            </div>
          </div>
        </section>


      </ul>


    </div>


<!--    --><?php //include 'admin_footer.php' ;?>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>





<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
