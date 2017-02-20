/**
 * Created by °²²¨ on 2017/2/20.
 */

define(['jquery'], function ($) {

    function Dialog() {

    }

    Dialog.prototype.circle = function () {
        var $oprov = $('<span class="prov">&lt;</span>')
        var $onext = $('<span class="next">&gt;</span>')
        var $ocontent = $('<div class="conten"></div>');
        var $opicture = $('<div class="picture"></div>').append($('<img src="img/1.jpg"alt="" class="selected">')).append($('<img src="img/2.jpg"alt="">')).append($('<img src="img/3.jpg"alt="">')).append($('<img src="img/4.jpg"alt="">'));
        var $oul = $('<ul class="table"></ul>').append($('<li class="selected">1</li>')).append($('<li>2</li>')).append($('<li>3</li>')).append($('<li>4</li>'));
        var $osymbol = $('<div class="symbol"></div>').append($oprov).append($onext);

        $ocontent.append($opicture).append($oul).append($osymbol);

        $(document.body).append($ocontent);
        var $ali = $oul.children();
        var $aimg = $opicture.children();
        //console.log(aimg.length)
        $ali.on('mouseover', function () {
            var index = $(this).index();
            $(this).addClass('selected').siblings().removeClass('selected');
            //$($aimg[index]).addClass('selected').siblings().removeClass('selected');
            //$($aimg[index]).show().siblings().hide();


        })
              var i=0;
        $($oprov).on('click', function () {

            $($opicture).animate({left: "-=680"}, 800);
        })
        $($onext).on('click', function () {

            $($opicture).animate({left: "+=680"}, 800);
        })
    }
    return Dialog;
})