<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>哈尔滨无线电管理处</title>
    <meta name="generator" content="PHPMyWind CMS" />
    <meta name="author" content="哈尔滨无线电管理处" />
    <meta name="keywords" content="哈尔滨无线电管理处" />
    <meta name="description" content="哈尔滨无线电管理处"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon"/>
</head>

<body>
<?php include 'header.php';?>
<div id="content" class="container">
    <div class="row">
        <?php include 'list-bar.php';?>

        <div id="article" class=" col-md-9 ">
            <div class="row">
                <h3 class="text-center"><?php echo $news -> img_title;?></h3>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                <h4 class=" text-center">发布日期：<?php echo $news -> add_time;?> 点击次数：<?php echo $news -> clicked;?></h4>
                <div class="content">

                    <?php echo $news -> img_content;?>

                </div>
            </div>

        </div>

    </div>
</div>
<?php include 'footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>
</body>

</html>