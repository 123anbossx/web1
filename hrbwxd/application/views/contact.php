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

        <div id="map" class="col-md-9">
            <div class="col-xs-12" style="padding: 0;">
<!--                <div class="title text-center" ng-bind="'CONTACTUS' | translate"></div>-->
                <ul>
                    <li><a href="tel:963927">黑龙江省无线电干扰申诉台服务热线：963927</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="javascript:;">哈尔滨无线电管理处</a></li>
                    <li><a href="tel:0451-82532940">联系电话：0451-82532940</a></li>
                    <li><a href="javascript:;">地址：哈尔滨市南岗区大成街189号</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="javascript:;">哈尔滨无线电监测站</a></li>
                    <li><a href="tel:0451-82130218">联系电话：82130218</a></li>
                    <li><a href="javascript:;">地址：哈尔滨市香坊区文昌街237号龙鑫家园B座16楼</a></li>
                </ul>
            </div>
            <div class="col-md-offset-1 col-xs-12 img-responsive"id="dituContent"></div>
        </div>

    </div>

</div>
<?php include 'footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(126.665914,45.77105);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"哈尔滨无线电管理处",content:"我的备注",point:"126.664674|45.771201",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
    ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor:"#808080",
                color:"#333",
                cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
</body>

</html>