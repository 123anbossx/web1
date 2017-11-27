<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>上传文件</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon"/>
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin_header.php'; ?>

<div class="am-cf admin-main">
    <?php include 'admin_sidebar.php'; ?>


    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">表单</strong> /
                    <small>form</small>
                </div>
            </div>

            <hr>
            <form class="am-form" action="admin/post_file" method="post" name="userfile" enctype="multipart/form-data">

                <div class="am-tabs am-margin" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">详细描述</a></li>
                    </ul>

                    <div class="am-tabs-bd">

                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    文章标题
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="title">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6"> * 必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    类型
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="hidden" class="am-input-sm" name="type" value="<?php echo $this -> uri -> segment(3);?>">
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <div class="am-form-group">
                                        <?php echo $this -> uri -> segment(3) == 1?"行政许可":"行政执法" ; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    排序
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="order_no">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6"> 手动排序，数字1排在第1位，数字2排在第2位，依次类推</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    文件
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="file" class="am-input-sm" name="file">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6"></div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="am-margin">
                    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
                    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
                </div>
            </form>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
   data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

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
