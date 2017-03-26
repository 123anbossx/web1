/**
 * Created by ���� on 2017/3/15.
 */
$(function(){
    var array=['Great minds have purpose, others have wishes','Being single is better than being in an unfaithful relationship.','If you find a path with no obstacles, it probably doesn’t lead anywhere.','Getting out of bed in winter is one of life��s hardest mission.'];
    var onav2=document.getElementById('nav2');

    var flag='false';
    $('#head_home').on('click',function(event){
        event.preventDefault()
    });
    $('#introduce_home').on('click',function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop:$('#introduce').offset().top
        },1000)
    });
    $('#IT_home').on('click',function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop:$('#IT').offset().top-100
        },1000)
    });
    $('#interest_home').on('click',function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop:$('#circle').offset().top
        },1000)
    });
    $('#top').on('click',function(){
        $('html,body').animate({
            scrollTop:0
        },1000)
    })
    $('#nav a').on('mouseover',function(){
        $(this).addClass('selected').siblings().removeClass('selected');
    });
    $('#font').on('click',function(){
        if(flag=='false'){
            $('#nav2').slideDown();
            $('#a').show(1000);
            flag='true';
        }else{
            $('#nav2').slideUp();
            $('#a').slideUp();
            flag='false';
        }

    });
    window.onresize=function(){
        var awidth=$(window).width();
        var width=awidth/2.5;
        $('#pic li').css('height',width);
        var $size=document.documentElement.clientWidth;
        if($size>=700){
            $('#nav2').css('display','none');

        }
    };
    var k=0;
    timer=setInterval(function(){
        k++;
        if(k==3){
            k=0;
        }
        $('#text4').text(array[k]);
        $('#text4').show(2000).delay(3000).hide(1000);
    },6000);

      var osmallcircle=document.getElementsByClassName('smallcircle');
      var ah3=document.getElementsByTagName('h3')
    //console.log(ah3.length);
      //console.log(osmallcircle.length)
    $('#circle2 .bigcircle').on('mouseover',function(){

        var index=$(this).index();
        $(this).addClass('selected').siblings().removeClass('selected');
        for(var i=0;i<osmallcircle.length;i++){
            if(i==index){
                $(ah3[index]).css('color',' #2FD828');
                $(osmallcircle[index]).addClass('selected');
            }else{
               $(osmallcircle[i]).removeClass('selected');
                $(ah3[i]).css('color','');
            }
        }

    });
    $('#introduce3 li').on('mouseover',function(){
        $(this).addClass('selected').siblings().removeClass('selected');
    });
    $('#introduce3 li').on('mouseout',function(){
        $(this).removeClass('selected');
    });
    $('#relation span').on('mouseover',function(){
        $(this).addClass('selected').siblings().removeClass('selected');
    });
    $('#relation span').on('mouseout',function(){
        $(this).removeClass('selected');
    })
    var ox=document.getElementById('X');
    var ali=ox.getElementsByTagName('li');

    var adiv=document.getElementsByClassName('select');

    for(var i=0;i<ali.length;i++){
        ali[i].style.WebkitTransform='rotateZ('+180+'deg)';
        ali[i].style.left=i*140+'px';
    }
    $(ali).on('mouseover',function(){
        var index=$(this).index();

        for(var j=0;j<adiv.length;j++){
            if(j==index){
                $(adiv[index]).addClass('selected');
            }//else{
            //    $(adiv[j]).removeClass('selected');
            //}
        }
    });
    setInterval(function(){
        $(ali).trigger('mouseover')
    },10000)

});
