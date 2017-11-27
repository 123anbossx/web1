/**Created by Administrator on 2016/4/27.*/
(function() {
	var _winWidth = document.body.clientWidth || document.documentElement.clientWidth,
			_style = document.getElementsByTagName("html")[0].style;
	_winWidth >= 640 ? _style.fontSize = "14px" : _style.fontSize = _winWidth / 45.7 + "px";
})();
//回到顶部
$(document).ready(function () {
    $.goup({
        trigger: 100,
        bottomOffset: 150,
        locationOffset: 100,
        title: '',
        titleAsText: true,
    });
});
//nav点击
$('#nav li').on('click',function(){
	$(this).addClass("selected").siblings().removeClass('selected');
});

//	var bFlag = true;
//$('#header button').on('click', function(){
//	if(bFlag){
//		$('#nav').css({
//			'display': 'block'
//		})
//		bFlag = false;
//	}else{
//		$('#nav').css({
//			'display': 'none'
//		})
//		bFlag = true;
//	}
//});