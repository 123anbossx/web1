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
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php include 'header.php';?>
<div id="content" class="container">
    <div class="row">
        <div class=" col-md-9 ">
            <div class="row">
                <div class="col-md-4 ">
                    <div id="publicity" >
                        <div class="title">
                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;
                            <span class="title-text"><?php echo $types[1]->type_name;?></span>
                            <a class="more" href="welcome/lists/<?php echo $types[1]->type_id;?>">更多&gt;&gt;</a>
                        </div>
                        <ul >
                            <?php
                            $i = 0;
                            foreach( $articles as $article){
                                if($article -> type_id == $types[1]->type_id){

                                    ;?>
                                    <li><a href="welcome/article/<?php echo $article -> article_id;?>"><?php echo $article -> title;?></a></li>
                                    <?php
                                    $i++;
                                    if($i>4){
                                        break;
                                    }
                                }
                            }
                            ;?>

                        </ul>
                    </div>
                    <div id="download"  >
                        <div class="title">
                            <span class="glyphicon glyphicon-cloud-download"></span>&nbsp;&nbsp;
                            <span class="title-text"><?php echo $types[6]->type_name;?></span>
                            <a class="more" href="welcome/download/<?php echo $types[6]->type_id;?>">更多&gt;&gt;</a>
                        </div>
                        <p style="background: #2c97de;"><span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp;<a href="welcome/download/1">行政许可</a></p>

                        <p style="background: #00bd9c;"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<a href="welcome/download/2">行政执法</a></p>

                    </div>

                </div>
                <div id="picture-news" class=" col-md-8 ">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <?php
                            $i=0;
                            foreach($newz as $news){
                                ?>
                                <li data-target="#myCarousel"; data-slide-to="<?php echo $i ;?>" <?php echo $i==0?'class="active"':"";?>></li>

                                <?php
                                $i++;
                            }
                            ?>

                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <?php
                            $i=0;
                            foreach($newz as $news) {
                                ?>
                                <div class="item <?php echo $i==0?'active':'';?>">
                                    <a href="welcome/img_news/<?php echo $news->img_id; ?>"><img style="width: 100%;height: 100%;"
                                                                                                 src="<?php echo $news->img_src; ?>"></a>
                                </div>
                                <?php
                                $i++;
                            }
                            ?>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="government" class=" col-md-4 ">
                  <div class="title">
                      <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;
                      <span class="title-text"><?php echo $types[4]->type_name;?></span>
                      <a class="more" href="welcome/lists/<?php echo $types[4]->type_id;?>">更多&gt;&gt;</a>
                  </div>
                  <ul >
                      <?php
                      $i = 0;
                      foreach( $articles as $article){
                          if($article -> type_id == $types[4]->type_id){

                              ;?>
                              <li><a href="welcome/article/<?php echo $article -> article_id;?>"><?php echo $article -> title;?></a></li>
                              <?php
                              $i++;
                              if($i>9){
                                  break;
                              }
                          }
                      }
                      ;?>

                  </ul>
              </div>
                <div class="col-md-8">
                    <div id="news">
                        <div class="title">
                            <span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;
                            <span class="title-text"><?php echo $types[2]->type_name;?></span>
                            <a class="more" href="welcome/lists/<?php echo $types[2]->type_id;?>">更多&gt;&gt;</a>
                        </div>
                        <ul >
                            <?php
                            $i = 0;
                            foreach( $articles as $article){
                                if($article -> type_id == $types[2]->type_id){

                                    ;?>
                                    <li><a href="welcome/article/<?php echo $article -> article_id;?>"><?php  echo $article -> title;?></a><span class="more"><?php echo substr($article->add_time,0,10);?></span></li>
                                    <?php
                                    $i++;
                                    if($i>5){
                                        break;
                                    }

                                }

                            }
                            ;?>
                        </ul>
                    </div>
                    <div id="center-img">
                </div>


          </div>
            <div class="row">

                </div>
            </div>

        </div>
        <div class=" col-md-3 ">
            <div id="policy" >
                <div class="title">
                    <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;
                    <span class="title-text"><?php echo $types[3]->type_name;?></span>
                    <a class="more" href="welcome/lists/<?php echo $types[3]->type_id;?>">更多&gt;&gt;</a>
                </div>
                <ul >
                    <?php
                    $i = 0;
                    foreach( $articles as $article){
                        if($article -> type_id == $types[3]->type_id){

                            ;?>
                            <li><a href="welcome/article/<?php echo $article -> article_id;?>"><?php  echo $article -> title;?></a></li>
                            <?php
                            $i++;
                            if($i>8){
                                break;
                            }
                        }
                    }
                    ;?>

                </ul>
            </div>
            <div id="activity" >
                <div class="title">
                    <span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;
                    <span class="title-text"><?php echo $types[5]->type_name;?></span>
                    <a class="more" href="welcome/lists/<?php echo $types[5]->type_id;?>">更多&gt;&gt;</a>
                </div>
                <ul >
                    <?php
                    $i = 0;
                    foreach( $articles as $article){
                        if($article -> type_id == $types[5]->type_id){

                            ;?>
                            <li><a href="welcome/article/<?php echo $article -> article_id;?>"><?php echo $article -> title;?></a></li>
                            <?php
                            $i++;
                            if($i>5){
                                break;
                            }
                        }
                    }
                    ;?>
                </ul>
            </div>


            <div id="link">
                <div class="title">
                    <span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;
                    <span class="title-text"><?php echo $types[7]->type_name;?></span>
                </div>
                <ul>
                    <?php
                    $i = 0;
                    foreach( $articles as $article){
                        if($article -> type_id == $types[7]->type_id){

                            ;?>
                            <li><a href="<?php echo $article -> content;?>"><span class="glyphicon glyphicon-link"></span><?php echo $article -> title;?></a></li>
                            <?php
                            $i++;
                            if($i>5){
                                break;
                            }
                        }
                    }
                    ;?>
                </ul>

            </div>
        </div>
    </div>
</div>
<div id="content-m" class="container">
    <div class="row" id="mobile" >
        <div class="col-xs-8 padding-right">
            <a href="welcome/lists/<?php echo $types[1]->type_id;?>">
                <div id="publicity-m">
                    <div class="icon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <div class="height"></div>
                    <p>公示公告</p>
                </div>
            </a>
            <a href="welcome/download">
                <div id="download-m">
                    <div class="icon"><span class="glyphicon glyphicon-save"></span></div>
                    <p>下载中心</p>
                </div>
            </a>
        </div>
        <div class="col-xs-4 padding-left">
            <a href="welcome/lists/<?php echo $types[3]->type_id;?>">
                <div id="policy-m">
                    <div class="icon"><span class="glyphicon glyphicon-book"></span></div>
                    <p>政策法规</p>
                </div>
            </a>
            <a href="welcome/lists/<?php echo $types[4]->type_id;?>">
                <div id="government-m">
                    <div class="icon"><span class="glyphicon glyphicon-list-alt"></span></div>
                    <p>政务公开</p>
                </div>
            </a>
            <a href="welcome/lists/<?php echo $types[5]->type_id;?>">
                <div id="activity-m">
                    <div class="icon"><span class="glyphicon glyphicon-picture"></span></div>
                    <p>专题活动</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row" id="news-m">
        <div class="title-m">
            <p>最新动态</p>
            <a href="welcome/lists/<?php echo $types[2]->type_id;?>"> …</a>
        </div>
        <ul>
            <?php
            $i = 0;
            foreach( $articles as $article){
                if($article -> type_id == $types[2]->type_id){

                    ;?>
                    <li><span class="icon">·</span><a href="welcome/article/<?php echo $article -> article_id;?>"><?php  echo $article -> title;?></a><span class="more">&gt;</span></li>
                    <?php
                    $i++;
                    if($i>4){
                        break;
                    }

                }

            }
            ;?>
<!--            <li><span class="icon">·</span><a href="">参加全省保护民航铁路专用频率打击</a><span class="more">&gt;</span></li>-->
<!--            <li><span class="icon">·</span><a href="">齐齐哈尔无线电管理机构人员</a><span class="more">&gt;</span></li>-->
<!--            <li><span class="icon">·</span><a href="">分成三个测试组，各组人</a><span class="more">&gt;</span></li>-->
<!--            <li><span class="icon">·</span><a href="">市的无线电同事们会</a><span class="more">&gt;</span></li>-->
<!--            <li><span class="icon">·</span><a href="">齐齐哈尔无线电管理机构</a><span class="more">&gt;</span></li>-->
        </ul>
    </div>

</div>
<div id="link-m">
    <div>友情链接</div>
    <ul>
        <li><a href="http://www.srrc.org.cn"></span>中国无线电管理</a></li>
        <li><a href="http://www.hljrm.cn"></span>黑龙江省无线电管理</a></li>
        <li><a href="http://www.rachina.org.cn"></span>中国无线电运动协会</a></li>
        <li><a href="http://www.harbin.gov.cn"></span>哈尔滨市人民政府网</a></li>
    </ul>
</div>
<?php include 'footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>
</body>

</html>