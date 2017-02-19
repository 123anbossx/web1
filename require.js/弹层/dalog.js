
define(['jquery'],function($){
    return {
open:function(options){
    var that=this;
    var set={
        height:400,
        width:400,
        title:'标题'
    }
    $.extend(set,options)
    this.$contiainer = $('<div class="demo-container"></div>');
    var $mask = $('<div class="demo-mask"></div>');
    var $content = $('<div class="demo-content"></div>')

    var $title = $('<div class="title"></div>').on('click',function(){
        that.close();
    });
    var $main=$('<div class="data-main"></div>').load(
              set.url
    )
    var $close = $('<span class="biaoti">这是个标题</span>');
    var $logo = $('<span class="X">[X]</span>').on('click',function(){
        that.close();
    });
    this.$contiainer.append($mask).append($content);
    $content.append($title).append($main);
    $title.append($close).append($logo);
    $(document.body).append(this.$contiainer)
},
 close:function(){
     this.$contiainer.remove();
 }
}
});