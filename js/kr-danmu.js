define(['jquery'],function ($) {

    function Danmu() {

    }
    Danmu.prototype.move=function (options) {

        var top=(window.innerHeight-100)*Math.random();
        var ss = document.styleSheets;
       var con=$('<div class="text-box"></div>').css({
             position:'absolute',
             top:top,
             color:options.color,
             fontSize:options.fontsize+'px',
             backgroundColor:options.backgroundcolor,
             opacity: options.opacity,
             borderRadius:options.borderradius+'px'
           });
         con.text(options.text);
         $('body').append(con);
         var aend=document.getElementsByClassName('text-box');
            aend[0].addEventListener('webkitAnimationStart',function () {
                console.log('动画开始');
                ss[0].cssRules[1].deleteRule("keyframes move{from{}"+

                    "to{-webkit-transform: translate(-2000px)}}");
                // console.log( ss[0].cssRules[1].findRule('100%'));

                ss[0].insertRule("keyframes move{from{}"+

                    "to{-webkit-transform: translate(-1000px)}}");
            });
        aend[0].addEventListener("webkitAnimationEnd", function() {
                 console.log('动画结束');
                 // ss[0].deleteRule('100%');
                 $('.text-box').remove();
        })
        };

    return Danmu;
});

