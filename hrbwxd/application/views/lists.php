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
    <link rel="stylesheet" href="css/lists.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon"/>


</head>

<body>
<?php include 'header.php';?>
<div id="content" class="container">
    <div class="row">
        <?php include 'list-bar.php';?>
        <div id="list" class=" col-md-9 ">
            <div class="title"><a class="ellipsis" href=""><?php echo $types[$type_id]->type_name;?></a></div>
            <ul >
                <?php
                    foreach($articles as $article){
                ?>
                <li><a class="ellipsis" href="welcome/article/<?php echo $article -> article_id;?>"><?php echo $article->title;?></a><span class="more"><?php echo substr($article->add_time,0,10);?></span></li>
                <?php
                    }
                ?>
            </ul>


        </div>
        <div id="page" class="am-fr col-md-9 ">
            共 <?php echo count($articles);?> 条记录
            <div class="am-fr">
                <ul class="am-pagination">
                    <?php echo $this->pagination->create_links();?>
                </ul>

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