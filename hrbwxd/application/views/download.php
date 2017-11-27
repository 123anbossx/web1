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
    <link rel="stylesheet" href="css/download.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon"/>

</head>

<body>
<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content" style="height: 300px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">上传文件</h4>
            </div>
            <div class="modal-body">
                <iframe id="iframe" src="welcome/upload" frameborder="0" style="width: 100%;height: 100%;"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>

    </div>
</div>
<?php include 'header.php';?>
<div id="content" class="container">
    <div class="row">
        <?php include 'list-bar.php';?>
        <div id="list" class=" col-md-9 ">
            <div class="title"><a href="">下载中心</a></div>
            <div class="type"><a href="">行政许可</a></div>
            <hr>

            <ul >
                <?php
                foreach($downloads as $download) {
                if($download -> type == 1) {

                    ?>
                    <li>
                        <a class="list" href="<?php echo $download->file_src; ?>"><?php echo $download->file_title; ?></a>
                    <span class="more">
                        <a href="<?php echo $download->file_src; ?>" class="btn btn-primary">立即下载</a>
                        <button data-id="<?php echo $download->down_id; ?>" data-toggle="modal" data-target="#uploadModal" type="button" class="upload btn btn-success">回传文件</button>
                    </span>
                    </li>
                    <?php
                    }
                }
                ?>


            </ul>
            <div class="type"><a href="">业余电台</a></div>
            <hr>

            <ul >
                <?php
                foreach($downloads as $download) {
                    if($download -> type == 2) {

                        ?>
                        <li>
                            <a class="list" href="<?php echo $download->file_src; ?>"><?php echo $download->file_title; ?></a>
                    <span class="more">
                        <a type="button" class="btn btn-primary">立即下载</a>
                        <button data-id="<?php echo $download->down_id; ?> " data-toggle="modal" data-target="#uploadModal" type="button" class="upload btn btn-success">回传文件</button>
                    </span>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>

        </div>

    </div>
</div>
<?php include 'footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>
<script>
    //var $iframe = $('#iframe');
    var oIFrame = document.getElementById('iframe');
    $('.upload').on('click',function(){
        var downId = $(this).data('id');
        var oDownId =  oIFrame.contentWindow.document.getElementById('downId');

        oDownId.value = downId;

//        location.href = "welcome/upload/" + downId;
    })
</script>
</body>

</html>