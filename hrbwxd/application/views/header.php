<?php
$type_id = $this -> uri -> segment(3);
if(!$type_id){
    $type_id = 0;
}
$page = $this -> uri -> segment(2);
if(!$page){
    $page = 'index';
}

?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div id="header" class="col-md-12">
                <img id="logo" class="img-responsive"  src="img/logo.png" alt="">

            </div>

        </div>
    </div>
</header>
<nav class="navbar navbar-default" role="navigation">
    <div id="nav" class="container-fluid ">
        <div class="row">
            <div class=" col-md-10 col-md-offset-1">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">哈尔滨无线电</a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php echo $page=="index"?'class="selected"':'';?>><a href="welcome/index"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
                        <li <?php echo $type_id==62?'class="selected"':'';?>><a href="welcome/article/62"><span class="glyphicon glyphicon-star"></span> 机构简介</a></li>
                        <li <?php echo $type_id==4?'class="selected"':'';?>><a href="welcome/lists/<?php echo $types[4]->type_id;?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;政务公开</a></li>
                        <li <?php echo $type_id==3?'class="selected"':'';?>><a href="welcome/lists/<?php echo $types[3]->type_id;?>"><span class="glyphicon glyphicon-book"></span>&nbsp;政策法规</a></li>
                        <li <?php echo $type_id==2?'class="selected"':'';?>><a href="welcome/lists/<?php echo $types[2]->type_id;?>"><span class="glyphicon glyphicon-bell"></span>&nbsp;最新动态</a></li>
                        <li <?php echo $type_id==5?'class="selected"':'';?>><a href="welcome/lists/<?php echo $types[5]->type_id;?>"><span class="glyphicon glyphicon-picture"></span>&nbsp;专题活动</a></li>
                        <li <?php echo $page=="download"?'class="selected"':'';?>><a href="welcome/download"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;下载中心</a></li>
                        <li <?php echo $page=="contact"?'class="selected"':'';?>><a href="welcome/contact"><span class="glyphicon glyphicon-phone"></span>&nbsp;联系我们</a></li>
                    </ul>
                </div>
            </div>



        </div>

    </div>


</nav>